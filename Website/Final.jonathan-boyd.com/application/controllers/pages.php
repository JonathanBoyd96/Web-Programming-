<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class pages extends CI_Controller {

	function index()
	{
		$this->load->view('home');
	}
	
	function forms()
	{
		$this->load->view('forms');
	}
	
	function insert()
	{
		$this->load->model('forms_model');
		$this->forms_model->insert();
		$this->load->view('success');
	}
	
	function insert2()
	{
		$this->load->model('forms_model');
		$this->forms_model->insert2();
		$this->load->view('success');
	}
	
	function autocomplete()
	{
		$this->load->view('autocomplete');
	}
	
	function API1()
	{
		$this->load->view('API1');
	}
	
	function API2()
	{
		$this->load->view('API2');
	}
	
	function search()
	{
		 $connect = mysqli_connect("50.62.209.148:3306", "JonathanBoyd", "12345", "JonathanBoyd");  
 if(isset($_POST["query"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM Final WHERE first LIKE '%".$_POST["query"]."%'";  
      $result = mysqli_query($connect, $query);  
      $output = '<ul class="list-unstyled">';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '<li>'.$row["first"].'</li>';  
           }  
      }  
      else  
      {  
           $output .= '<li>Name Not Found</li>';  
      }  
      $output .= '</ul>';  
      echo $output;
 }
	}
	
	public function __construct()
{
parent::__construct();
}

}
?>