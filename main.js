window.addEventListener('contextmenu', function (e) {
    e.preventDefault();
}, false);

function fill(Value) {
    $('#search').val(Value);
    $('#display').hide();
 }
 
 $(document).ready(function() {
    $("#search").keyup(function() {
        var search = $('#search').val();
       if (search == "") {
           $("#display").html("");
       }
       else {
           $.ajax({
               type: "POST",
               url: "phpSearch.php",
               data: {
                   search: search
               },
               success: function(html) {
                   $("#display").html(html).show();
               }
           });
       }
   });
});
