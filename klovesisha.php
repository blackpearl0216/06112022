<!DOCTYPE HTML>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>KlovesIsha</title>
<style>
h1 {
  text-align: center;
  font-size: 60px;
  margin-top: 0px;
}
h3,p {
  text-align: center;
  font-size: 40px;
  margin-top: 0px;
  color: orangered;
}

</style>
</head>
<body>

<h1 style="color: #003399;">#K<span>&#128158</span>Isha<h1>
<h3 style="color:darkred;">We have decided to step in to a world of <br>commitments, care and eternal love.</h3>

<h3 style="color:darkviolet;">Ketchup, be ready <span>&#128521</span><br> We are getting engaged in ...</h3>
<p id="demo"></p>
<h1>&#128141</h1>

<h1>&#127880;&#127880;&#127880;&#127880;&#127880;&#127880;&#127880;</h1>
<script>
// Set the date we're counting down to
var countDownDate = new Date("Nov 6, 2022 10:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "days " + hours + "hrs "
  + minutes + "min " + seconds + "sec ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

</body>
</html>

