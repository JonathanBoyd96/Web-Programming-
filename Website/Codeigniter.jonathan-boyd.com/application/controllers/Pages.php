<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
	private $data = array();
	public function __construct()
	{
		 parent::__construct();
		 $this->data['title'] = "Pages - ";
	}

	public function index()
	{
		$this->data['title'] .= "Home";
		$this->data['content'] = "page1";
		$this->load->view('template/header', $this->data);
	}
	public function form()
	{
		$this->form_validation->set_rules("first", "First Name", "required");
		$this->form_validation->set_rules("last", "Last Name", "required");
		$this->form_validation->set_rules("email", "Email", "required|valid_email");
		$validate = $this->form_validation->run();
		if($validate)
		{
			$this->load->model("test_model");
			$first = $this->input->post("first");
			$last = $this->input->post("last");
			$email = $this->input->post("email");
			$id = $this->test_model->insert($first, $last,$email);
			echo "New Record ID:".$id;
		}
		
		$this->data['title'] .= "Form";
		$this->load ->view('template/header');
		$this->load->view('pages/form', $this->data);
	}
	public function data()
	{
		$this->data['title'] .= "Data";
		$this->load->model("test_model");
		$this->data['results'] = $this->test_model->select(50);
		$this->load->view('template/header');
		$this->load->view('pages/data', $this->data);
	}
	public function do_upload()
        {
                $config['upload_path']          = 'G:\PleskVhosts\solycsci.xyz\codeigniter.solycsci.xyz\uploads';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
						$this->load->view('template/header');
					$this->load->view('pages/upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
						$this->load->view('template/header');
					$this->load->view('pages/upload_success', $data);
                }
        }
	public function image()
	{
			$this->load->view('template/header');
		$this->load->view('pages/upload_form', array('error' => ' ' ));
	}
	public function showImage()
	{
		$this->load->helper('file');
		$image = "G:\PleskVhosts\solycsci.xyz\codeigniter.solycsci.xyz\uploads\get_plot_(3).png";
		if(is_numeric($this->uri->segment(3)))
		{
			switch($this->uri->segment(3))
			{
				case 1:
					$image = "G:\PleskVhosts\solycsci.xyz\codeigniter.solycsci.xyz\uploads\\1.jpg";
			}
		}
		$this->output->set_content_type(get_mime_by_extension($image));
		$this->output->set_output(file_get_contents($image));
	}
	public function imageResize()
	{
		//$config['image_library'] = 'gd2';
		$config['source_image'] = 'G:\PleskVhosts\solycsci.xyz\codeigniter.solycsci.xyz\uploads\get_plot_(3).png';
		$config['new_image'] = '1.jpg';
		//$config['create_thumb'] = TRUE;
		//$config['maintain_ratio'] = TRUE;
		$config['width']         = 75;
		//$config['height']       = 50;
		
		$this->load->library('image_lib', $config);
		
		if($this->image_lib->resize())
			echo "Resized";
		else
		{
			echo $this->image_lib->display_errors();
			echo "did not resize";
		}
	}
	public function testing()
	{
$currentDirectory = 'G:\PleskVhosts\solycsci.xyz\codeigniter.solycsci.xyz\uploads';
echo $currentDirectory."<br>";
echo "<pre>";
print_r(scandir($currentDirectory));
echo "</pre>";

$doNotShow = array(".", "..");
folder($currentDirectory, "G:\PleskVhosts\solycsci.xyz\codeigniter.solycsci.xyz\uploads");
function folder($dir, $path)
{
	global $doNotShow;
	$root = @scandir($dir);
	echo "<ul>";
	foreach($root as $item)
	{
		if(!in_array($item, $doNotShow))
		{
			echo "<li>";
			if(is_dir($dir."/".$item))
			{
				echo $item;
				folder($dir."/".$item, $path.$item."/");
			}
			else
			{
				echo "<a href='".$path.$item."'>".$item."</a>";
			}
			echo "</li>";
		}
	}
	echo "</ul>";
}
	}
}
?>