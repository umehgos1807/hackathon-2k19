<?php  

/**
 * Student Model
 */	
class Studentmodel extends CI_Model
{
	
	public function get_notes($subject_name)
	{
		$query = $this->db->query("select DISTINCT notes.* from notes, student, subject, class where student.usn = '$usn' and student.class_id = class.class_id and class.semester = subject.semester and class.branch = subject.branch");
		return $query->result();
	}

	public function get_subjects($usn)
	{
		$query = $this->db->query("select subject.* from subject, student, class where student.usn='$usn' and student.class_id=class.class_id and class.branch=subject.branch and class.semester=subject.semester");
		return $query->result();
	}
}

?>