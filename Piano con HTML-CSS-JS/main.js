function playNoteByKey(e) {

    const octaveOne = document.querySelector('.octave-one');
    const octaveTwo = document.querySelector('.octave-two');
    const octaveThree = document.querySelector('.octave-three');
    const audio = document.querySelector(`audio[data-key="${e.keyCode}"]`)
    const key = document.querySelector(`button[data-key="${e.keyCode}"]`);

    if (!audio) return;

    else if ((screen.width > 850 && screen.width < 1230) && key.classList.contains('oct-three')) {
        return;
    }
    else if (screen.width < 850 && (key.classList.contains('oct-two') || key.classList.contains('oct-three'))) {
        return;
    }
    else {
        audio.currentTime = 1;
        audio.play();

        if (key.classList.contains('white-key')) {
            key.classList.add('playing-w');
        }
        else if (key.classList.contains('black-key')) {
            key.classList.add('playing-b');
        }
    }
}

function removeTransition(e) {

    if (this.classList.contains('white-key')) {
        this.classList.remove('playing-w');
    }
    else if (this.classList.contains('black-key')) {
        this.classList.remove('playing-b');
    }
}

const keys = document.querySelectorAll('.key');
keys.forEach(key => key.addEventListener('transitionend', removeTransition));
window.addEventListener('keydown', playNoteByKey); 
