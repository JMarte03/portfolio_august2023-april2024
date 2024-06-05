const secondHand = document.querySelector('.second-hand');
const minuteHand = document.querySelector('.min-hand');
const hourHand = document.querySelector('.hour-hand');
const title = document.querySelector('h1');
function setDate() {

    // SECONDS
    const now = new Date();
    const seconds = now.getSeconds();
    const secondsDegrees = ((seconds / 60) * 360) + 90;
    secondHand.style.transform = `rotate(${secondsDegrees}deg)`;
    // console.log(seconds);

    // MINUTES
    const mins = now.getMinutes();
    const minutesDegrees = ((mins / 60) * 360) + 90;
    minuteHand.style.transform = `rotate(${minutesDegrees}deg)`;
    // console.log(mins);

    // HOURS
    const hours = now.getHours();
    const hoursDegrees = ((hours / 12) * 360) + 90;
    hourHand.style.transform = `rotate(${hoursDegrees}deg)`;
    // console.log(hours);

    //TITLE
    if (mins < 10 && hours < 10) {
        title.innerText = `0${hours}:0${mins}`;
    }
    else if (mins < 10){
        title.innerText = `${hours}:0${mins}`;
    }
    else if (hours < 10) {
        title.innerText = `0${hours}:${mins}`;
    }
    else {
        title.innerText = `${hours}:${mins}`;
    }
    
}

setInterval(setDate, 1000);
