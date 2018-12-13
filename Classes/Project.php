<?php
class Project{
	public function __construct(){
	}

	public function add_project($project_name, $project_desc, $project_year, $student_name, $download_link, $course_name, $project_pic, $type, $study){

		$db = Database::getInstance();
		$conn = $db->getConnection();
		$sql = 'INSERT INTO project (project_name, project_description, project_year, student_name, download_link, course_name, project_thumbnail, type, study)
			VALUES (
			"'.$conn->real_escape_string($project_name).'",
			"'.$conn->real_escape_string($project_desc).'",
			"'.$conn->real_escape_string($project_year).'",
			"'.$conn->real_escape_string($student_name).'",
			"'.$conn->real_escape_string($download_link).'",
			"'.$conn->real_escape_string($course_name).'",
			"'.$conn->real_escape_string($project_pic).'",
			"'.$conn->real_escape_string($type).'",
			"'.$conn->real_escape_string($study).'"
			)';

		//ini_set('display_errors', 1);
		//error_reporting(E_ALL);

		//echo $sql;

		if ($conn->query ($sql)){
			$last_id = $conn->insert_id;
			$sql_details = 'INSERT INTO project_details (project_id) 
			VALUES(
				"'.$conn->real_escape_string($last_id).'"
			)';

			//echo $sql_details;

			if ($conn->query ($sql_details)){
				return $conn->insert_id;
			} else {
				return false;
			}
		} else {
			return false;
		}

	}

	public function modify_project($project_id,$project_name, $project_desc, $project_year, $student_name, $download_link, $course_name, $project_pic, $type, $study, $slideshow_image){

		$db = Database::getInstance();
		$conn = $db->getConnection();
		$sql = 'UPDATE project, project_details SET 
				project.project_name = "'.$conn->real_escape_string($project_name).'",
				project.project_description = "'.$conn->real_escape_string($project_desc).'",
				project.project_year = "'.$conn->real_escape_string($project_year).'",
				project.student_name = "'.$conn->real_escape_string($student_name).'",
				project.download_link = "'.$conn->real_escape_string($download_link).'",
				project.course_name = "'.$conn->real_escape_string($course_name).'",
				project.project_thumbnail = "'.$conn->real_escape_string($project_pic).'",
				project.type = "'.$conn->real_escape_string($type).'",
				project.study = "'.$conn->real_escape_string($study).'"
				WHERE project.project_id = "'.$conn->real_escape_string($project_id).'"
				AND project_details.project_id = "'.$conn->real_escape_string($project_id).'"
				';
				// Project slideshow naar een insert zetten ipv in deze
				// update statement houden

		//echo $sql;

			if ($conn->query ($sql)){
				$last_id = $conn->insert_id;
				$sql_image = 'INSERT INTO project_details (project_id, image) 
				VALUES(
				"'.$conn->real_escape_string($project_id).'",
				"'.$conn->real_escape_string($slideshow_image).'"
				)';

			//echo $sql_image;

				if ($conn->query ($sql_image)){
					return $conn->insert_id;
				} else {
					return false;
				}
			} else {
				return false;
			}
		}

	public function get_course(){
		
		$db = Database::getInstance();
		$conn = $db->getConnection();

		$sql = 'SELECT * FROM course';

		$result = $conn->query($sql);
        return $result;
	}

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

	public function get_project(){

		$db = Database::getInstance();
		$conn = $db->getConnection();

		$sql = 'SELECT * FROM project';

		$result = $conn->query($sql);
		return $result;
	}
}