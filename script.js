$("#submit").on('click', function(){
  $.ajax({
    url: "http://localhost/student_info/student.php",
    type: 'post',
    data: $('#studentForm').serialize(), 
    success: function(response) {
      $("#message").html(response);
    },
    error: function() {
      alert("error");
    }
  });
});