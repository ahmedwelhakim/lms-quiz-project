function startTimer() {
    let presentTime = document.getElementById('timer').innerHTML;
    let timeArray = presentTime.split(/[:]+/);
    let h = timeArray[0]
    let m = timeArray[1];
    let s = checkSecond((timeArray[2] - 1));
    if(s==59){m=m-1}
    if(m<0){
        m=59;
        h--;
    }

    if(h==0 && m==0 && s==0){ // submit quiz when timers runs out
        alert("timer up!"); // to be commented
        document.getElementById("quizform").submit(); // ID of the form used in student's quiz.php
    }

    document.getElementById('timer').innerHTML =
        (h == 0 ? '00': h) + ":" + (m == 0 ? '00': m)  + ":" + s;
    setTimeout(startTimer, 1000);
}

function checkSecond(sec) {
    if (sec < 10 && sec >= 0) {sec = "0" + sec};
    if (sec < 0) {sec = "59"};
    return sec;
    if(sec == 0 && m == 0 && h == 0){alert('stop it')};
}