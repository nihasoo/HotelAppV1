<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <title>Search Hotels</title>
    <script src="{{ asset('js/jquery-1.9.1.min.js') }}" language="javascript"></script>
    <script src="{{ asset('js/form.js') }}" language="javascript"></script>
</head>

<body>

    <style type="text/css">
        
        
        .container {
            margin:0 auto;
            width:500px;
        }
        
    </style>
<div class="container">   
<h3 style="text-align: center">Search Hotels</h3>
<button class='' onclick='searchBox()' id='searchBox'>Search</button>
<a href="{{ URL::to('create') }}"class='' id='Add'>Add a Hotel</a>
<br/>
<br/>
<div id="searchBlock" style="display: none">
    <h4>{{Form::label('city_id', 'City Name') }} : 
   {{Form::select('city_id',array($Cities)) }}</h4>
</div>
<br/>
<br/>
<br/>
<table border="1" cellpadding="5" cellspacing="0">
    <tr>
    <thead>
        <th>
            Hotel ID 
        </th>
        <th>
            Hotel Name 
        </th>
        <th>
            Hotel Location
        </th>
        <th>
            Address
        </th>

    </tr>
</thead>

    
            <tbody id='hoteldataBlock'>
        @foreach($Hotels as $key => $value)
    <tr>
        <td>
            {{$key }}
        </td>
        <td>
            {{$value['hotel_name'] }}
        </td>
        <td>
            {{$value['city_name'] }}
        </td>
        <td>
            {{$value['address'] }}
        </td>
       
    
    </tr>
    @endforeach
            </tbody>    
        </table>
<div id="loader" style="display: none">   
<img src="{{ asset('images/loader.gif')}}"/>
</div>
</div>
</body>
</html>
