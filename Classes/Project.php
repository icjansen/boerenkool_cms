<?php
class Project{
	public function __construct(){
	}

	public function add_project($project_name, $project_desc, $project_year, $student_name, $download_link, $course_name, $project_pic){

		$db = Database::getInstance();
		$conn = $db->getConnection();
		$sql = 'INSERT INTO project (project_name, project_description, project_year, student_name, download_link, course_name, project_thumbnail)
			VALUES (
			"'.$conn->real_escape_string($project_name).'",
			"'.$conn->real_escape_string($project_desc).'",
			"'.$conn->real_escape_string($project_year).'",
			"'.$conn->real_escape_string($student_name).'",
			"'.$conn->real_escape_string($download_link).'",
			"'.$conn->real_escape_string($course_name).'",
			"'.$conn->real_escape_string($project_pic).'"
			)';

		//echo $sql;

		if ($conn->query ($sql)){
			return $conn->insert_id;
		}
		return false;
	}

	public function modify_project($project_id,$project_name, $project_desc, $project_year, $student_name, $download_link, $course_name, $project_pic){

		$db = Database::getInstance();
		$conn = $db->getConnection();
		$sql = 'UPDATE project SET 
				project_name = "'.$conn->real_escape_string($project_name).'",
				project_description = "'.$conn->real_escape_string($project_desc).'",
				project_year = "'.$conn->real_escape_string($project_year).'",
				student_name = "'.$conn->real_escape_string($student_name).'",
				download_link = "'.$conn->real_escape_string($download_link).'",
				course_name = "'.$conn->real_escape_string($course_name).'",
				project_thumbnail = "'.$conn->real_escape_string($project_pic).'"
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

	public function get_project(){

		$db = Database::getInstance();
		$conn = $db->getConnection();

		$sql = 'SELECT * FROM project';

		$result = $conn->query($sql);
		return $result;
	}
}