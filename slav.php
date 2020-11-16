<?php
	$sql_pwd = "oDohnae5";
	$sql_usr = "cs332f15";
	$sql_db = "cs332f15";
	
	function formatSSN($temp_input_ssn){
		return preg_replace("/[^0-9]/", "", trim($temp_input_ssn));
	}
	
	function formatCourseNo($temp_input_courseno){
		return trim(strtoupper($temp_input_courseno));
	}
	
	function formatSectNo($temp_input_sectno){
		return trim($temp_input_sectno);
	}
	
	function formatCWID($temp_input_cwid){
		return trim($temp_input_cwid);
	}
?>