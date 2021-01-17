const testWrapper = document.querySelector(".test-wrapper");
const testArea = document.querySelector("#test-area");
const originText = document.querySelector("#origin-text p").innerHTML;
const resetButton = document.querySelector("#reset");
const theTimer = document.querySelector(".timer");

var timer = [0,0,0,0];
var interval;
var timerRunning = false;
var err = 0;
var cor = 0;
var tot = 0;
var t = 0;
var cpm;
var wpm;
var wc; 
var er;


// Add leading zero to numbers 9 or below (purely for asthetics):

function leadingZero(time){
    if (time <= 9)
    {
        time = "0" + time;
    }
    return(time); 
}

/*function InsertRecord()  
        {    
            var connection = new ActiveXObject("ADODB.Connection");  
            var connectionstring = "Data Source=.;Initial Catalog=EmpDetail;Persist Security Info=True;User ID=sa;Password=****;Provider=SQLOLEDB";  
            connection.Open(connectionstring);  
            var rs = new ActiveXObject("ADODB.Recordset");  
            rs.Open("insert into Emp_Info values('" + txtid + "','" + txtname + "','" + txtsalary + "','" + txtcity + "')", connection);  
            alert("Insert Record Successfuly");  
            txtid.value = " ";  
            connection.close();    
        }  */

         

// Run a standard minute/second/hundredths timer:

function runTimer(){
    let currentTime = leadingZero(timer[0]) + ":" + leadingZero(timer[1]) + ":" + leadingZero(timer[2]);
    theTimer.innerHTML = currentTime;
    timer[3]++;

    timer[0] = Math.floor((timer[3]/100)/60);
    timer[1] = Math.floor((timer[3]/100) - (timer[0] * 60));
    timer[2] = Math.floor(timer[3] - (timer[1] * 100) - (timer[0] * 6000));
}   
// Match the text entered with the provided text on the page:
function spellCheck(){
    let textEntered = testArea.value;
    let originTextMatch = originText.substring(0,textEntered.length);
    
    if(textEntered == originText ){
        clearInterval(interval);
        testWrapper.style.borderColor = "rgb(87, 226, 87)";
        //Calculate CPM,WPM,ER
        t = parseFloat(timer[0] + (parseFloat(timer[1]) / parseFloat('60.0')));
        tot = err + cor;
        cpm = tot / t;
        wpm = cpm / 5;
        wc = cor / 5;
        console.log(tot);
        console.log(t);
        console.log(cpm);
        console.log(wpm);
        //update database

    /*    var mysql = require('mysql');

        var con = mysql.createConnection({
          
          host: "localhost",
          user: "root",
          password: "",
        
            database: "kse"
        
          });
        
        con.connect(function(err) {
          if (err) throw err;
          console.log("Connected!");
        
            var sql = "";
          
          con.query(sql, function (err, result) {
            if (err) throw err;
            console.log("1 record inserted");
          });
        });

UPDATE `user_stats` SET `WC`= WC+1 WHERE 'Username'= ''*/

    }
    else{
        if(textEntered == originTextMatch){
            testWrapper.style.borderColor = "#65CCf3";
            //count of correct charecter
            cor++;
            
        }
        else{chrome
            testWrapper.style.borderColor = "red";
            // count of errors
            err++;
            
        }
    }
    console.log(textEntered);
}

// Start the timer:
function start(){
    let textEnteredLength = testArea.value.length;
    if(textEnteredLength === 0 && !timerRunning){
        timerRunning = true;
        interval = setInterval(runTimer, 10);
    }
    console.log(textEnteredLength);
}

// Reset everything:
function reset(){
    clearInterval(interval);
    interval = null;
    timer = [0,0,0,0];
    timerRunning = false;

    testArea.value = "";
    theTimer.innerHTML = "00:00:00";
    testWrapper.style.borderColor = "grey";
}

// Event Listeners for keyboard input and the reset button:
testArea.addEventListener("keypress", start, false);
testArea.addEventListener("keyup", spellCheck, false);
resetButton.addEventListener("click", reset, false);