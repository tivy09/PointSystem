// var end = document.getElementById('end').value;
var date1, date2;
date1 = new Date();
date2 = new Date();

date1.toLocaleDateString('en-CA');
date2.toLocaleDateString('en-CA');

var time_difference = date2.getTime() - date1.getTime();

var days_difference = time_difference / (1000 * 60 * 60 * 24);
document.getElementById("days").innerHTML = days_difference;