<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class main extends CI_Controller {
	
	public function __construct()
	{
        parent::__construct();
		$this->load->model('main_m');
    }

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('image_upload');
	}
	 function image_upload()  
      {  
           $data['title'] = "Upload Image";  
           $this->load->model('main_m');  
           $data["image_data"] = $this->main_m->fetch_image();  
		 	$this->load->view('template/header');
           $this->load->view('image_upload', $data);  
      }  
      function ajax_upload()  
      {  
           if(isset($_FILES["image_file"]["name"]))  
           {  
                $config['upload_path'] = './upload/';  
                $config['allowed_types'] = 'jpg|jpeg|png|gif';  
                $this->load->library('upload', $config);  
                if(!$this->upload->do_upload('image_file'))  
                {  
                     echo $this->upload->display_errors();  
                }  
                else  
                {  
                     $data = $this->upload->data();  
                     $config['image_library'] = 'gd2';  
                     $config['source_image'] = './upload/'.$data["file_name"];  
                     $config['create_thumb'] = FALSE;  
                     $config['maintain_ratio'] = FALSE;  
                     $config['quality'] = '60%';  
                     $config['width'] = 50;  
                     $config['height'] = 50;  
                     $config['new_image'] = './upload/'.$data["file_name"];  
                     $this->load->library('image_lib', $config);  
                     $this->image_lib->resize();  
                     $this->load->model('main_m');  
                     $image_data = array(  
                          'name'          =>     $data["file_name"]  
                          );  
                     $this->main_m->insert_image($image_data);  
                     echo $this->main_m->fetch_image();  
                     //echo '<img src="'.base_url().'upload/'.$data["file_name"].'" width="300" height="225" class="img-thumbnail" />';  
                }  
           }  
      } 
}