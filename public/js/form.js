 $(function (){ 
  
 $("#city_id").change(function () {
     $('#loader').slideDown('slow');
     $('#hoteldataBlock').slideUp('slow');

     
$('#hoteldataBlock').html('');
var city_id  = $(this).val();

var url = 'search/'+city_id;
    $.ajax({
        type: "GET",
        url: url,
        success: function(data) {

            
            $('#loader').slideUp('slow');
             $('#hoteldataBlock').slideDown('slow');
         $('#hoteldataBlock').html(data);   
        }
    });
});   
     
 }); 

function searchBox(){
    $('#searchBlock').slideDown('slow');
}


