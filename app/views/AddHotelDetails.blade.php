<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <title>Add Hotels</title>
</head>

<body>
    
    <div class="container" style="width:700px; margin: auto ; border: solid 3px #606">   
        <h3 style="text-align: center">Create a New Hotel</h3>  
    {{Form::open(array('url'=>'save')) }}
    <table>
            <tr>
                <th>{{Form::label('hotel_name', 'Hotel Name') }}</th>
                <td>&nbsp;</td>
                <td>{{Form::text('hotel_name') }}</td>
            </tr>
   
            <tr>
                <th>{{Form::label('city_id', 'Hotel Location') }}</th>
                <td>&nbsp;</td>
                <td>{{Form::select('city_id',array($Cities)) }}</td>
            </tr>
    
            <tr>
                <th>{{Form::label('address', 'Address') }}</th>
                <td>&nbsp;</td>
                <td>{{Form::textarea('address') }}</td>
            </tr>
   
            <tr>
                <th>{{Form::submit('Submit') }}</th>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
    </table>
     {{Form::close() }}
 </div>
    
    
    
</body>
</html>
