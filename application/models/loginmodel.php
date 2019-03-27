<?php  

/**
 * Login model class
 */
class Loginmodel extends CI_Model
{
	public function validate_student($usn, $password)
	{
		$password = md5($password);
		$query = $this->db->query("select * from student where usn='$usn' and password='$password'");

		if($query->num_rows()>0)
			return true;

		return false;
	}

	public function validate_teacher($teacher_id, $password)
	{
		$password = md5($password);
		$query = $this->db->query("select * from teacher where teacher_id='$teacher_id' and password='$password'");

		if($query->num_rows()>0)
			return true;

		return false;
	}
}

?>