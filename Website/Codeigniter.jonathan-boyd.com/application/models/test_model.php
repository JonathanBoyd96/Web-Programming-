<?
class test_Model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function insert($first, $last, $email)
	{
		//echo $first."<br>".$last."<br>".$email."<br>".$birthday."<br>";
		$this->db->set("first", $first);
		$this->db->set("last", $last);
		$this->db->set("email", $email);
		$this->db->insert("code");
		return $this->db->insert_id();
		//echo "insert command called";
	}
	public function select($limit = 10)
	{
		$this->db->select("first, last, email");
		return $this->db->get("code", $limit)->result();
	}
	public function selectByID($id)
	{
		$this->db->select("first, last, email");
		$this->db->where("ID", $id);
		return $this->db->get("code")->result();
	}
	public function selectByLastName($last)
	{
		$this->db->select("first, last, email");
		$this->db->like("last", $last);
		return $this->db->get("code")->result();
	}
}
?>