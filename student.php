<html>
<head>
<title> CPSC332-01: "CSUF - University Database: Student"</title>
<meta name="viewport" content="width=device-width, initial-scale=0.6">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="tabs.js"></script>
<?php include 'slav.php'; ?>
</head>

<!-- Start of Body -->
<body>

<!-- Header with Title and Author Names-->
<header>
	<a href="index.html">CSUF - University Database</a>
	<h6>CPSC 332 - 02, Dr. Wang, Fall 2020</h6>
	<p>By: Sara Rutherfurd, Jacob Coyle, & Josh Ibad<p>
</header>

<!-- Body: Welcome message and buttons -->
<div id="panel" style="position: relative; margin:auto; width: calc(100% - 2 * 3%); background-color: black; margin: 3%;">
	<div class="tab">
		<p>Students:</p>
		<button class="tablinks" onClick="selectTab(event, 'sCourse')" id="openSCourse">Sections</button>
		<button class="tablinks" onClick="selectTab(event, 'sTranscripts')" id="openSTranscripts">Transcripts</button>
		<button class="exit" onClick="window.location = 'index.html'">X</button>
	</div>

	<div id="sCourse" class="tabcontent">
		<form action="student.php" method="get">
			<h5>Course Section Lookup</h5>
			<div>
				<p>Course Number:</p>
				<input type="text" name="course_num"> <br>
			</div>
			<input type="hidden" name="sect" value="openSCourse">
			<input type="submit" name="Search" value="Search" class="searchButton">
			<input type="submit" name="Clear" value="Clear" class="clearButton">
		</form>
		<?php 
			if(!empty($_GET) and $_GET["sect"] == "openSCourse" and isset($_GET["Search"])){
				$db = mysql_connect('ecsmysql', $sql_usr, $sql_pwd);
				if(!$db){echo "<h1>"; die("Failed to connect to MySQL Database Server:</h1>\n<h2>" . mysql_error()); echo "</h2>";}
				mysql_select_db($sql_db, $db);
				$query = "SELECT SC.Section_number, SC.Classroom, GROUP_CONCAT(DISTINCT M.Day_no) AS DAYS, SC.Begin_time, SC.End_time, Count(S.CWID)
					FROM Student AS S, Enrollment AS E, Section AS SC, Meeting AS M, Course AS C
					WHERE C.Course_ID = \"". $_GET["course_num"] .
					"\" AND C.Course_ID = M.Course_ID AND M.Section_Number = SC.Section_number 
					AND S.CWID = E.CWID AND E.Section_Number = SC.Section_number
					GROUP BY SC.Section_Number;";
				$res = mysql_query($query, $db);
				
				//Print results in format
				
				echo "<div class='results'>\n";
				if(mysql_num_rows($res)){
					echo "<h5>" . $_GET["course_num"] . "</h5>";
					while($row = mysql_fetch_assoc($res)){
							echo "<p>" . $row['Section_number'] . "</p>";
					}
				}else{
					echo "<h5> No results found for Course Number: " . $_GET["course_num"] . "</h5>"; 
				}
				echo "</div>";
				mysql_free_result($res);
				mysql_close($db);
			}
		?>
	</div>
	
	<div id="sTranscripts" class="tabcontent">
		<form action="student.php" method="get">
			<h5>Student Record Lookup</h5>
			<div>
				<p>Student CWID:</p>
				<input type="text" name="cwid"> <br>
			</div>
			<input type="hidden" name="sect" value="openSTranscripts">
			<input type="submit" name="Search" value="Search" class="searchButton">
			<input type="submit" name="Clear" value="Clear" class="clearButton">
		</form>
		<?php 
			if(!empty($_GET) and $_GET["sect"] == "openSTranscripts" and isset($_GET["Search"])){
				$db = mysql_connect('ecsmysql', $sql_usr, $sql_pwd);
				if(!$db){echo "<h1>"; die("Failed to connect to MySQL Database Server:</h1>\n<h2>" . mysql_error()); echo "</h2>";}
				mysql_select_db($sql_db, $db);
				$query = "SELECT C.Course_ID, E.Grade
					FROM Student AS S, Enrollment AS E, Section AS SC, Course AS C
					WHERE S.CWID = " . $_GET["cwid"] .
					" AND S.CWID = E.CWID AND C.Course_ID = SC.Course_ID 
					AND E.Section_Number = SC.Section_number;";
				$res = mysql_query($query, $db);
				
				//Print results in format
				echo "<div class='results'>\n";
				if(mysql_num_rows($res)){
					echo "<h5>" . $_GET["cwid"] . "</h5>"; 
					echo "<p>Course_ID\t\tGrade</p>";
					while($row = mysql_fetch_assoc($res)){
							echo "<p>" . $row['Course_ID'] . "\t:\t" . $row['Grade'] . "</p>";
					}
				}else{
					echo "<h5> No results found for Student with CWID: " . $_GET["cwid"] . "</h5>"; 
				}
				echo "</div>";
				mysql_free_result($res);
				mysql_close($db);
			}
		?>
	</div>
</div>

<!-- Open the first tab by default (Professor - Course Lookup) -->
<script> document.getElementById(<?php if(empty($_GET)){echo '"openSCourse"';}else{echo '"' . $_GET["sect"] . '"';} ?>).click(); </script>
	
</body>
</html>