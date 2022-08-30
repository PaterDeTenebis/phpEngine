$('.sidebarDrop').click(function() {
    $('.sidebarDrop').toggleClass('sidebarDrop_active');
});

$('.navToggler').click(function() {
    $('.sidebar').toggleClass('sidebarClosed');
    $('.main').toggleClass('mainClosed');
});

$('.sbCloser').click(function() {
    $('.sidebar').removeClass('sidebarClosed');
});

$('.tableMore').click(function() {
    $('.tableCard').toggleClass('tableOpen');

    if($('.tableCard').hasClass('tableOpen')) {
        $('.tableMore').html('свернуть')
    } else {
        $('.tableMore').html('смотреть всю историю')
    }
});

// // Set the date we're counting down to
// var countDownDate = new Date("Jan 5, 2024 15:37:25").getTime();

// // Update the count down every 1 second
// var x = setInterval(function() {

//   // Get today's date and time
//   var now = new Date().getTime();

//   // Find the distance between now and the count down date
//   var distance = countDownDate - now;

//   // Time calculations for days, hours, minutes and seconds
//   var days = Math.floor(distance / (1000 * 60 * 60 * 24));
//   var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
//   var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
//   var seconds = Math.floor((distance % (1000 * 60)) / 1000);

//   // Display the result in the element with id="demo"
//   document.getElementById("timerNumH").innerHTML = hours;
//   document.getElementById("timerNumM").innerHTML = minutes;
//   document.getElementById("timerNumS").innerHTML = seconds;


  

//   // If the count down is finished, write some text
//   if (distance < 0) {
//     clearInterval(x);
//     document.getElementById("demo").innerHTML = "EXPIRED";
//   }
<<<<<<< HEAD
// }, 1000);

=======
// }, 1000);
>>>>>>> e3d9d1a (history in process)
