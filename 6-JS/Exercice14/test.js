/*Retrieve data from doc by Id and declare variables with it*/
    let chrono = document.getElementById("tim");
    let resetBtn = document.getElementById("reset");
    let stopBtn = document.getElementById("stop");
    let startBtn = document.getElementById("start");

/*Set time variables to 0*/    
    let heures = 0;
    let minutes = 0;
    let secondes = 0;
    let milliSecondes =0;

/*Declare timeout variable*/
    let timeout;

/*Set boolean timer isStop to true*/    
    let isStop = true;

/*Start function*/    
    const start = () => {
        /*If isStop is false (Timer not running)*/
        if (isStop) {
            isStop = false;
            timeRun(); /*Start the timer*/
            }
        };

/*Stop function*/
    const stop = () => {
        /*If isStop is true (Timer running)*/
        if (!isStop) {
            isStop = true;
            clearTimeout(timeout); /*Clear time*/
            }
        };

/*Time run function*/    
    const timeRun = () => {
        if (isStop) return
            /*Convert string to int*/
            milliSecondes = parseInt(milliSecondes);
            secondes = parseInt(secondes);
            minutes = parseInt(minutes);
            heures = parseInt(heures);

            secondes++;

            /*When 1000 millisec, +1 sec and set millisec to 0*/
            if (milliSecondes == 1000) {
                secondes++;
                milliSecondes=0;
                }
            /*When 60 sec, +1 min and set seconds to 0*/
            if (secondes == 60) {
                minutes++;
                secondes =0;
                }        
            /*When 60 min, +1 hrs and set minutes to 0*/
            if (minutes ==60) {
                heures++;
                minutes=0;
                }

            /*Display 0 before number if <10*/
            if (secondes < 10) {
                secondes = "0" + secondes; 
                }
            if (minutes < 10) {
                minutes = "0" + minutes;
                }
            if (heures < 10) {
                heures = "0" + heures;
                }

            /*Display in the timer div all the time variables*/
            chrono.textContent = `${heures}:${minutes}:${secondes}:${milliSecondes}`;

            /*Save timeout in a variable in case of stop and start*/
            timeout = setTimeout(timeRun, 1000);
        };

/*Reset function*/
    const reset = () => {
        chrono.textContent = "00:00:00:0000"; /*Set timer text content to 0*/
        isStop= true; /*Set isStop to true*/
        heures=0; /*Set time variables to 0*/
        minutes=0;
        secondes=0;
        milliSecondes=0;
        clearTimeout(timeout); /*Clear the timeout*/
        };

/*Buttons events listener*/        
    startBtn.addEventListener("click", start); /*Call start function on click*/
    stopBtn.addEventListener("click", stop); /*Call stop function on click*/
    resetBtn.addEventListener("click", reset); /*Call reset function on click*/