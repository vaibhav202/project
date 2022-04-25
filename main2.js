function fill(Value) {
    $('#destination').val(Value);
    $('#display2').hide();
 }
 
 $(document).ready(function() {
    $("#destination").keyup(function() {
        var destination = $('#destination').val();
       if (destination == "") {
           $("#display2").html("");
       }
       else {
           $.ajax({
               type: "POST",
               url: "phpSearch2.php",
               data: {
                destination: destination
               },
               success: function(html) {
                   $("#display2").html(html).show();
               }
           });
       }
   });
});
