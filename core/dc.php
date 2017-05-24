<?php
class DC
{
	public $path = '/admin';
	public $db = null;
	public function __construct()
	{
		$this->db = new mysqli("localhost", "root", "", "arteastru_dozor45");
		if ($this->db->connect_errno)
			printf("<div>Не удалось подключиться: %s</div>", $this->db->connect_error);
	}
	public function __destruct()
	{
		$this->db->close();
	}
	public function AddSetting($name, $value)
	{
		$db = $this->db;
		$value = $db->real_escape_string($value);
		if(!$db->query('SELECT * FROM settings WHERE name="' . $name . '"')->fetch_row())
			return $db->query('INSERT INTO settings (name, value) VALUES ("' . $name . '", "' . $value . '")');
		return $db->query('UPDATE settings SET value="' . $value . '" WHERE name="' . $name . '"');
	}
	public function GetSetting($name)
	{
		$obj = $this->db->query('SELECT * FROM settings WHERE name="' . $name . '"')->fetch_object();
//		var_dump($obj);
		if($obj)
			return $obj->value;
		return null;
	}
//	public function AddReview($name, $date, $post, $sort, $active)
//	{
//		$db = $this->db;
//		$name = $db->real_escape_string($name);
//		$post = $db->real_escape_string($post);
//		return $db->query('INSERT INTO review (name, date, post, sort, status) VALUES ("' . $name . '", "' . $date . '", "' . $post . '", ' . $sort . ', ' . $active . ')');
//	}
	public function AddReview($name, $post, $active)
	{
		$db = $this->db;
		$name = $db->real_escape_string($name);
		$post = $db->real_escape_string($post);
		return $db->query('INSERT INTO review (name, post, status) VALUES ("' . $name . '", "' . $post . '", ' . $active . ')');
	}
	public function GetMaxReviewSort()
	{
		$row = $this->db->query('SELECT MAX(sort) FROM `review`')->fetch_row();
		if($row)
			return (int)$row[0];
		return 0;
	}
	public function DeleteReview($id)
	{
		return $this->db->query('DELETE FROM review WHERE ID=' . $id);
	}
	public function UpdateReview($id, $status)
	{
		return $this->db->query('UPDATE review SET status=' . $status . ' WHERE ID=' . $id);
	}
	public function AddImage($name, $sort)
	{
		$db = $this->db;
		$name = $db->real_escape_string($name);
		return $db->query('INSERT INTO gallery (name, sort) VALUES ("' . $name . '", ' . $sort . ')');
	}
	public function GetMaxImageSort()
	{
		$row = $this->db->query('SELECT MAX(sort) FROM `gallery`')->fetch_row();
		if($row)
			return (int)$row[0];
		return 0;
	}
	public function DeleteImage($id)
	{
		return $this->db->query('DELETE FROM gallery WHERE id=' . $id);
	}
	public function GetReviews($onlyActive = 0)
	{
		$ar = [];
		if($onlyActive)
//			$q = $this->db->query('SELECT * FROM `review` WHERE status=1 ORDER BY sort, id');
			$q = $this->db->query('SELECT * FROM `review` WHERE status=1 ORDER BY ID');
		else
//			$q = $this->db->query('SELECT * FROM `review` ORDER BY sort, id');
			$q = $this->db->query('SELECT * FROM `review` ORDER BY ID');
		while($ob = $q->fetch_object())
			$ar[] = $ob;
		return $ar;
	}
	public function GetImages()
	{
//		$ar = [];
//		$q = $this->db->query('SELECT * FROM `gallery` ORDER BY sort, id');
//		while($ob = $q->fetch_object())
//			$ar[] = $ob;
//		return $ar;
	}
	public function Login($login, $password)
	{
		if($this->GetSetting('login') == $login && $this->GetSetting('password') == $password)
		{
			$_SESSION['login'] = 1;
			return 1;
		}
		return 0;
	}
	public function Logout()
	{
		$_SESSION['login'] = 0;
	}
	public function IsUrl($path)
	{
		if($path == '' && $_SERVER['REQUEST_URI'] == $this->path)
			return 1;
		if($_SERVER['REQUEST_URI'] == $this->path . '/' . $path)
			return 1;
		return 0;
	}
}
$dc = new DC;