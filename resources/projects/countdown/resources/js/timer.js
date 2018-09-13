$(document).ready(function() {

  $("#countdown").countdown({
      date: "1 january 2019 0:00:0", // add the countdowns end date (i.e. 3 november 2012 12:00:00)
      format: "on" // on (03:07:52) | off (3:7:52) - two_digits set to ON maintains layout consistency
    },

    function() {

      // the code here will run when the countdown ends
      alert("Happy New Year!")

    });
});
