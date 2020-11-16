<?php
	$sql_pwd = "oDohnae5";
	$sql_usr = "cs332f15";
	$sql_db = "cs332f15";
	
	function formatSSN($temp_input_ssn){
		return preg_replace("/[^0-9]/", "", trim($temp_input_ssn));
	}
	
	function ssnToStr($temp_input_ssn){
		$temp_input_snn = preg_replace("/[^0-9]/", "", trim($temp_input_ssn));
		$temp_len = strlen($temp_input_ssn);
		$retval = "";
		if($temp_len > 3){
			$retval .= substr($temp_input_ssn, 0, 3) . "-";
			if($temp_len > 5){
				$retval .= substr($temp_input_ssn, 3, 2) . "-" . substr($temp_input_ssn, 5);
			}else{
				$retval .= substr($temp_input_ssn, 3);
			}
		}else{
			$retval .= $temp_input_ssn;
		}
		return  $retval;
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
	
	function numToDays($temp_input_day_nos){
		$retval = "";
		$temp_arr = explode(',', $temp_input_day_nos);
		foreach($temp_arr as &$temp_day_no){
			switch(trim($temp_day_no)){
				case 0:
					$retval .= "SUN";
					break;
				case 1:
					$retval .= "MON";
					break;
				case 2:
					$retval .= "TUE";
					break;
				case 3:
					$retval .= "WED";
					break;
				case 4:
					$retval .= "THU";
					break;
				case 5:
					$retval .= "FRI";
					break;
				case 6:
					$retval .= "SAT";
					break;
			}
			$retval .= ", ";
		}
		if(strlen($retval) > 0){
			return substr($retval, 0, -2);
		}else{
			return "NA";
		}
	}
?>