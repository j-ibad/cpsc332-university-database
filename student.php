<html>
<head>
<title> CPSC332-01: "CSUF - University Database: Student"</title>
<meta name="viewport" content="width=device-width, initial-scale=0.6">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="tabs.js"></script>
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
				echo $_GET["course_num"];
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
				echo $_GET["cwid"];
			}
		?>
	</div>
	
</div>

<!-- Open the first tab by default (Professor - Course Lookup) -->
<script> document.getElementById(<?php if(empty($_GET)){echo '"openSCourse"';}else{echo '"' . $_GET["sect"] . '"';} ?>).click(); </script>
	
</body>
</html>