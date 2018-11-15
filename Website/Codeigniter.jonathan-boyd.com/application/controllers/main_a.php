 <?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Main_a extends CI_Controller {  
      //functions  
      function image_upload()  
      {  
           $data['title'] = "Upload Image using Ajax JQuery in CodeIgniter";  
           $this->load->view('image_upload', $data);  
      }  
      function ajax_upload()  
      {  
		  $output = '';  
 if(is_array($_FILES))  
 {  
      foreach($_FILES['images']['name'] as $name => $value)  
      {  
           $file_name = explode(".", $_FILES['images']['name'][$name]);  
           $allowed_extension = array("jpg", "jpeg", "png", "gif");  
           if(in_array($file_name[1], $allowed_extension))  
           {  
                $new_name = rand() . '.'. $file_name[1];  
                $sourcePath = $_FILES["images"]["tmp_name"][$name];  
			   $targetPath = "G:\PleskVhosts\solycsci.xyz\codeigniter.solycsci.xyz\uploads".$new_name;  
                move_uploaded_file($sourcePath, $targetPath);  
           }  
      }  
      $images = glob("G:\PleskVhosts\solycsci.xyz\codeigniter.solycsci.xyz\uploads\*.*");  
      foreach($images as $image)  
      {  
           $output .= '<div class="col-md-1" align="center" ><img src="' . $image .'" width="100px" height="100px" style="margin-top:15px; padding:8px; border:1px solid #ccc;" /></div>';  
      }  
      echo $output;  
 }  
      }  
 }