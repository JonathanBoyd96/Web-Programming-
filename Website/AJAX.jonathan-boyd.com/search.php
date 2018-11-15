<?
 $connect = mysqli_connect("50.62.209.148:3306", "JonathanBoyd", "12345", "JonathanBoyd");  
 if(isset($_POST["query"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM ajax WHERE First LIKE '%".$_POST["query"]."%'";  
      $result = mysqli_query($connect, $query);  
      $output = '<ul class="list-unstyled">';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '<li>'.$row["First"].'</li>';  
           }  
      }  
      else  
      {  
           $output .= '<li>Name Not Found</li>';  
      }  
      $output .= '</ul>';  
      echo $output;
 }  
 ?> 