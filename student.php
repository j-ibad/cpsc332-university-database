<html>
<head>
<title> CPSC332-01: "CSUF - University Database: Student"</title>
<meta name="viewport" content="width=device-width, initial-scale=0.6">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="tabs.js"></script>
<!--style>
	<!--
	#panel *{
		margin: 0;
		position: absolute;
		width: 100%;
		text-align: center;
		left: 50%;
		transform: translate(-50%, -50%);
	}
	
	#panel a{
		background-color: #CC6E17;
		border-radius: 10px;
		width: 55%;
		height: 3em;
		font: bold 3em Roboto, sans-serif;
		color: #F3E2E2;
		letter-spacing: 0.05em;
		text-align: center;
		line-height: 3;
	}
</style-->
</head>

<!-- Start of Body -->
<body>

<!-- Header with Title and Author Names-->
<header>
	<a href="index.html">CSUF - University Database: Students</a>
	<h6>CPSC 332 - 02, Dr. Wang, Fall 2020</h6>
	<p>By: Sara Rutherfurd, Jacob Coyle, & Josh Ibad<p>
</header>
<!-- Body: Welcome message and buttons -->
<div id="panel" style="position: relative; margin:auto; width: calc(100% - 2 * 3%); background-color: black; margin: 3%;">
	<div class="tab">
		<button class="tablinks" onClick="selectTab(event, 'sCourse')" id="defaultOpen">Sections</button>
		<button class="tablinks" onClick="selectTab(event, 'sTranscripts')">Transcripts</button>
	</div>

	<div id="sCourse" class="tabcontent">
		<p>Option contents</p>
	</div>
	
	<div id="sTranscripts" class="tabcontent">
		<p>Option contents</p>
	</div>

	
	<!--
	<p style="font: bold 2em Roboto, sans-serif; top: calc(25% - 1.5em);">Welcome to the California State University, Fullerton</p>
	<p style="font: bold 3em Roboto, sans-serif; top: calc(25%);">University Database</p>
	<a style="top: calc(50%);" href="professor.html">Professor</p>
	<a style="top: calc(70%);" href="student.html">Student</p>
	-->
</div>

<!-- Open the first tab by default (Professor - Course Lookup) -->
<script> document.getElementById("defaultOpen").click(); </script>
	
</body>
</html>