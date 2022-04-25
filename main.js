//Disables context menu
window.addEventListener('contextmenu', function (e) {
    e.preventDefault();
}, false);

//display search results
function fill(Value) {
    $('#pickup').val(Value);
    $('#display').hide();
 }
 
 $(document).ready(function() {
    $("#pickup").keyup(function() {
        var pickup = $('#pickup').val();
       if (pickup == "") {
           $("#display").html("");
       }
       else {
           $.ajax({
               type: "POST",
               url: "phpSearch.php",
               data: {
                    pickup: pickup
               },
               success: function(html) {
                   $("#display").html(html).show();
               }
           });
       }
   });
});