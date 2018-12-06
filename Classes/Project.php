<?php
class Project{
	public function __construct(){
	}

<<<<<<< Updated upstream
	public function add_project($project_name, $project_desc, $project_year, $student_name, $download_link, $course_name, $project_pic, $type, $study){

		$db = Database::getInstance();
		$conn = $db->getConnection();
		$sql = 'INSERT INTO project (project_name, project_description, project_year, student_name, download_link, course_name, project_thumbnail, type)
=======
	public function add_project($project_name, $project_desc, $project_year, $student_name, $download_link, $course_name, $project_pic){

		$db = Database::getInstance();
		$conn = $db->getConnection();
		$sql = 'INSERT INTO project (project_name, project_description, project_year, student_name, download_link, course_name, project_thumbnail)
>>>>>>> Stashed changes
			VALUES (
			"'.$conn->real_escape_string($project_name).'",
			"'.$conn->real_escape_string($project_desc).'",
			"'.$conn->real_escape_string($project_year).'",
			"'.$conn->real_escape_string($student_name).'",
			"'.$conn->real_escape_string($download_link).'",
			"'.$conn->real_escape_string($course_name).'",
<<<<<<< Updated upstream
			"'.$conn->real_escape_string($project_pic).'",
			"'.$conn->real_escape_string($type).'",
			"'.$conn->real_escape_string($study).'"
=======
			"'.$conn->real_escape_string($project_pic).'"
>>>>>>> Stashed changes
			)';

		//echo $sql;

		if ($conn->query ($sql)){
			return $conn->insert_id;
		}
		return false;
	}

<<<<<<< Updated upstream
	public function modify_project($project_id,$project_name, $project_desc, $project_year, $student_name, $download_link, $course_name, $project_pic, $type, $study){
=======
	public function modify_project($project_id,$project_name, $project_desc, $project_year, $student_name, $download_link, $course_name, $project_pic){
>>>>>>> Stashed changes

		$db = Database::getInstance();
		$conn = $db->getConnection();
		$sql = 'UPDATE project SET 
				project_name = "'.$conn->real_escape_string($project_name).'",
				project_description = "'.$conn->real_escape_string($project_desc).'",
				project_year = "'.$conn->real_escape_string($project_year).'",
				student_name = "'.$conn->real_escape_string($student_name).'",
				download_link = "'.$conn->real_escape_string($download_link).'",
				course_name = "'.$conn->real_escape_string($course_name).'",
<<<<<<< Updated upstream
				project_thumbnail = "'.$conn->real_escape_string($project_pic).'",
				type = "'.$conn->real_escape_string($type).'",
				study = "'.$conn->real_escape_string($study).'"
=======
				project_thumbnail = "'.$conn->real_escape_string($project_pic).'"
>>>>>>> Stashed changes
				WHERE project_id = "'.$conn->real_escape_string($project_id).'"
				';

		//echo $sql;

		if ($conn->query ($sql)){
			return $conn->insert_id;
		}
		return false;
	}

	public function get_course(){
		
		$db = Database::getInstance();
		$conn = $db->getConnection();

		$sql = 'SELECT * FROM course';

		$result = $conn->query($sql);
        return $result;
	}

<<<<<<< Updated upstream
	public function get_type(){
		
		$db = Database::getInstance();
		$conn = $db->getConnection();

		$sql = 'SELECT * FROM type';

		$result = $conn->query($sql);
        return $result;
	}

	public function get_study(){
		
		$db = Database::getInstance();
		$conn = $db->getConnection();

		$sql = 'SELECT * FROM study';

		$result = $conn->query($sql);
        return $result;
	}

=======
>>>>>>> Stashed changes
	public function get_project(){

		$db = Database::getInstance();
		$conn = $db->getConnection();

		$sql = 'SELECT * FROM project';

		$result = $conn->query($sql);
		return $result;
	}
}