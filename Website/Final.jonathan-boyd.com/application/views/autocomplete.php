<!DOCTYPE html>  
 <html>  
 <head>  
 <div class="hd">
 <ul>
  <li><a href="http://final.jonathan-boyd.com/index.php/pages">Home</a></li>
  <li><a href="http://final.jonathan-boyd.com/index.php/pages/forms">Forms</a></li>
  <li><a class="active" href="http://final.jonathan-boyd.com/index.php/pages/autocomplete">Autocomplete</a></li>
  <li><a href="http://final.jonathan-boyd.com/index.php/pages/API1">API 1</a></li>
  <li><a href="http://final.jonathan-boyd.com/index.php/pages/API2">API 2</a></li>
</ul> 
</div>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 <style> 

.hd {list-style-type: none; margin: 0; padding: 0;overflow: hidden; background-color: #333;}

li {float: left;}

li a, .dropbtn {display: inline-block; color: white; text-align: center; padding: 14px 16px; text-decoration: none;}

li a:hover, .dropdown:hover .dropbtn {background-color: red;}

li.dropdown {display: inline-block;}

.dropdown-content {display: none; position: absolute; background-color: #f9f9f9; min-width: 160px; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);}

.dropdown-content a {color: black; padding: 12px 16px; text-decoration: none; display: block; text-align: left;}

.dropdown-content a:hover {background-color: #f1f1f1}

.show {display:block;}

.active {background-color: #4CAF50; color: white;}

.mySlides {display:none;}

.content{max-width:980px;margin:auto}

.section{margin-top:16px!important;margin-bottom:16px!important}

img {float: right; margin: 0 0 10px 10px;}

body {background-color: white}

body {color: black;}

h1 {text-align: center; background-color: gray; color: black;}

h2 {text-align: center; background-color: gray; color: ;}

h3 {text-align: center; color: ;}

table, th, td {border: 2px solid orange; border-spacing: 1px;}

.class {text-align: center; background-color: yellow;}

#id {text-align: center; background-color: red;}

a:link{background-color: none;}

.header {text-align: center; background-color: green;}
		   
ul {cursor:pointer;}  

li {padding:12px;}  
</style>  
<div class="row">
  <div class="col-md-12 text-center">
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">Autocomplete using AJAX</h3><br/> <br/><br/>
                <label>Search the database for information you input with the forms page</label>  
                <input type="text" name="country" id="country" class="form-control" placeholder="Search for a first name" />  
                <div id="countryList"></div>  
           </div>  
      </body>  
 </html> 
 <script>  
 $(document).ready(function(){  
      $('#country').keyup(function(){  
           var query = $(this).val();  
           if(query != '')  
           {  
                $.ajax({  
                     url:"http://final.jonathan-boyd.com/index.php/pages/search",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#countryList').fadeIn();  
                          $('#countryList').html(data);  
                     }  
                });  
           }  
      });  
      $(document).on('click', 'li', function(){  
           $('#country').val($(this).text());  
           $('#countryList').fadeOut();  
      });  
 });  
 </script>  
 </div>
 </div>