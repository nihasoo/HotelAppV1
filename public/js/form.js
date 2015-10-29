 $(function (){ 
  
    $("#city_id").change(function () {
        SlideChanges();
        
        var city_id  = $(this).val();
        $('#cityIdsort').val(city_id);
        $('#sort').val('');
        var sort  = 'Desc';

        var url = 'search/'+city_id+'/'+sort;

        AjaxQuery(url);

    }); 
    
 }); 
 
 function SlideChanges(){
     $('#loader').slideDown('slow');
     $('#hoteldataBlock').slideUp('slow');
     $('#hoteldataBlock').html('');   
 }

 function AjaxQuery(url){

   $.ajax({
        type: "GET",
        url: url,
        success: function(data) {

            
            $('#loader').slideUp('slow');
             $('#hoteldataBlock').slideDown('slow');
         $('#hoteldataBlock').html(data);   
        }
    });    
 }

function searchBox(){
    $('#cityIdsort').val('0');
    $('#sort').val('');
    $('#searchBlock').slideDown('slow');
}

function sortList(){
    
     SlideChanges();
     
        var sort  = $('#sort').val(); 
        var city_id  = $('#cityIdsort').val();
        if(city_id == ''){
            city_id = 0;
        }

            if(sort == ''){
                $('#sort').val('Asc');
                sort  = 'Asc'
            }else if(sort == 'Asc'){
               $('#sort').val('Desc');
                sort  = 'Desc' 
            }else if(sort == 'Desc'){
               $('#sort').val('Asc');
               sort   = 'Asc'
            }

            var url = 'search/'+city_id+'/'+sort;
            AjaxQuery(url);

        return false; 
}


