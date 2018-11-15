<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/styles.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<ul>
  <li><a href="http://jonathan-boyd.com">Home</a></li>
  <li><a href="http://MySQL.jonathan-boyd.com">MySQL</a></li>
  <li><a href="http://php.jonathan-boyd.com">PHP</a></li>
  <li><a class = "active" href="http://ajax.jonathan-boyd.com">AJAX</a></li>
    <li><a href="http://csharp.jonathan-boyd.com">C Sharp</a></li>
    <li><a href="http://api.jonathan-boyd.com">Map!</a></li>
    <li><a href="http://webapi.jonathan-boyd.com">Web API Chart</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn" onclick="myFunction()">Projects</a>
    <div class="dropdown-content" id="myDropdown">
      <a href="http://Project1.jonathan-boyd.com">Project 1</a>
      <a href="http://Project2.jonathan-boyd.com">Project 2</a>
    </div>
  </li>
</ul>
<script>
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    for (var d = 0; d < dropdowns.length; d++) {
      var openDropdown = dropdowns[d];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

</script>

</html>
<h1>AJAX</h1>
<br> 
 <body>
 <p>Search for a name in the database!<p>
 <br/>
HTML:<input name="q1" type="text" id = "country"><br><br>
JSON:<input name="q2" type="text" id = "country2"><br>
<div id="output"></div>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />   
      </head>  
      <body>  
         
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
                     url:"search.php",  
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
 
 <script>  
 $(document).ready(function(){  
      $('#country2').keyup(function(){  
           var query = $(this).val();  
           if(query != '')  
           {  
                $.ajax({  
                     url:"search.php",  
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
           $('#country2').val($(this).text());  
           $('#countryList').fadeOut();  
      });  
 });  
 
 </script>
 
 <script>
$(document).ready(function(e) {
    $("input[name='q1']").keyup(function(e){
		$("#output").html("Loading!");
		$.ajax({
			url: "search2.php?type=html&q="+$("input[name='q1']").val()
			}).done(function(data) {
			$("#output").html(data);
		});
	});
    $("input[name='q2']").keyup(function(e){
		$("#output").html("Loading!");
		$.getJSON("search2.php?q="+$("input[name='q2']").val(), 
			function( data ){
				var items = [];
				$.each( data, function( key, val ) {//for each row
					items.push( "<ul id='" + key + "'><ul>");
					$.each(val, function(key2, val2){//for each column in a row
						items.push( "<ul id='" + key2 + "'>" + key2 + " : " + val2 + "</li>" );
					});
					items.push( "</ul></li>");
				});
				$("#output").html($( "<ul/>", {
				"class": "my-new-list",
				html: items.join( "" )
				}));
		});
	});
});
  </script>
  <p>Autocomplete options are listed above this when typing, click one to autocomplete in the textbox^^<p>
  
<footer>Copyright © Jonathan-Boyd.com</footer>

</body>
</html>