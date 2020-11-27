$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();

  // Get Submission Values
  var manid = 101;

  // Add Submission
  $("#SubmitBtn").click(function() {
    $("#ManuscriptList").prepend();
  });

  // Display Submissions
  // var submissionCount = 3;
  // $("#loadManuscripts").click(function(){
  //   submissionNewCount = submissionCount + 3;
  //   $("#ManuscriptList").load("load-submissions.php", {
  //     submissionNewCount: submissionCount
  //   });
  // });
});
