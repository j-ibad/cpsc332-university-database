<html>
<head>
<title> CPSC332-01: "CSUF - University Database: Professor"</title>
<meta name="viewport" content="width=device-width, initial-scale=0.6">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="tabs.js"></script>
<?php include 'slav.php';?>
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
<div id="panel" style="position: relative; margin:auto; width: calc(100% - 6%); background-color: black; margin: 3%;">
	<div class="tab">
		<p>Professor:</p>
		<button class="tablinks" onClick="selectTab(event, 'pCourse')" id="openPCourse">Professor's Courses</button>
		<button class="tablinks" onClick="selectTab(event, 'pGrade')" id="openPGrade">Grade Count</button>
		<button class="exit" onClick="window.location = 'index.html'">X</button>
	</div>

	<div id="pCourse" class="tabcontent">
		<form action="professor.php" method="get">
			<h5>Course Lookup</h5>
			<div>
				<p>Professor SSN:</p>
				<input type="text" name="ssn"> <br>
			</div>
			<input type="hidden" name="sect" value="openPCourse">
			<input type="submit" name="Search" value="Search" class="searchButton">
			<input type="submit" name="Clear" value="Clear" class="clearButton">
		</form>
		<?php 
			if(!empty($_GET) and $_GET["sect"] == "openPCourse" and isset($_GET["Search"])){
				$db = mysql_connect('ecsmysql', $sql_usr, $sql_pwd);
				if(!$db){echo "<h1>"; die("Failed to connect to MySQL Database Server:</h1>\n<h2>" . mysql_error()); echo "</h2>";}
				$query = "";
				$res = mysql_query($query, $db);
				
				echo "<div class='results'>\n";
				
				echo "<h5>" . $_GET["ssn"] . "</h5>"; 
				
				echo "</div>";
				mysql_close($db);
			}
		?>
	</div>
	
	<div id="pGrade" class="tabcontent">
		<form action="professor.php" method="get">
			<h5>Section Grade Statistics</h5>
			<div>
				<p>Course Number:</p>
				<input type="text" name="courseno"> <br> 
			</div>
			<div>
				<p>Section Number:</p>
				<input type="text" name="sectno"> <br>
			</div>
			<input type="hidden" name="sect" value="openPGrade">
			<input type="submit" name="Search" value="Search" class="searchButton">
			<input type="submit" name="Clear" value="Clear" class="clearButton">
		</form>
		<?php 
			if(!empty($_GET) and $_GET["sect"] == "openPGrade" and isset($_GET["Search"])){
				$db = mysql_connect('ecsmysql', $sql_usr, $sql_pwd);
				if(!$db){echo "<h1>"; die("Failed to connect to MySQL Database Server:</h1>\n<h2>" . mysql_error()); echo "</h2>";}
				$query = "";
				$res = mysql_query($query, $db);
				
				
				echo "<div class='results'>\n";
				
				echo "<h5>" . $_GET["courseno"] . "</h5>"; 
				echo "<h5>" . $_GET["sectno"] . "</h5>";
				
				echo "</div>";
				mysql_close($db);
			}
		?>
	</div>
</div>

<!-- Open the first tab by default (Professor - Course Lookup) -->
<script> document.getElementById(<?php if(empty($_GET)){echo '"openPCourse"';}else{echo '"' . $_GET["sect"] . '"';} ?>).click(); </script>
	
</body>
</html>