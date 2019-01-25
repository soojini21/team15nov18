var countDownDate = new Date("Feb 9, 2019 08:30:00").getTime();
var countDownDate2 = new Date("Feb 11, 2019 16:30:00").getTime();


var countdownfunction = setInterval(function() {

  
  var now = new Date().getTime();
  
  
  var distance = countDownDate - now;
  
  
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  
  
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
  
  
  if (distance < 0) {
    clearInterval(countdownfunction);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);

var countdownfunction2 = setInterval(function() {

  
  var now = new Date().getTime();
  
  
  var distance = countDownDate2 - now;
  
  
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  
  
  document.getElementById("demo2").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
  
   
  if (distance < 0) {
    clearInterval(countdownfunction);
    document.getElementById("demo2").innerHTML = "EXPIRED";
  }
}, 1000);
