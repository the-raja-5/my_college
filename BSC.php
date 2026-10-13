<?php require_once __DIR__ . "/include/db.php"; session_start(); ?>
<!doctype html>
<html>
<head>
<title>Mewar Institute of Management</title>
</head>
<style>
body {
    margin: 10PX;
    font-family: Arial;
}
center {
    font-family:algerian;
}


.navbar {
    background-color: BLUE;
    display:flex;
    justify-content: center;
    font-size: 20px;
}

.navbar a {
    color: rgb(255, 255, 255);
    text-decoration: none;
    padding: 20px 20px;
}

.navbar a:hover {
    background: linear-gradient(45deg, #ff00f7 0%, #d4ff00 100%);
    color: rgb(60, 255, 0);
}



/* 3 dott css */

/* 3 Dot Menu */
.menu-container {
    position: absolute;
    right: 20px;
    top: 10px;
}

.menu-button {
    background: transparent;
    border: none;
    color: white;
    font-size: 28px;
    cursor: pointer;
    padding: 5px 10px;
}

.dropdown-menu {
    display: none;
    position: absolute;
    right: 0;
    top: 45px;
    background-color: white;
    min-width: 160px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.3);
    z-index: 1000;
}

.dropdown-menu a {
    display: block;
    color: black;
    padding: 12px 15px;
    text-decoration: none;
}

.dropdown-menu a:hover {
    background-color: #eeeeee;
    color: blue;
}
</style>
<body>
    <div class="navbar">
    <a href="index.php"><strong>Home</strong></a>
    <a href="BSC.php"><strong>B.Sc</strong></a>
    <a href="BCA.php"><strong>B.C.A</strong></a>
    <a href="BCOM.php"><strong>B.Cmom</strong></a>
	<a href="BBA.php"><strong>BBA</strong></a>
    <a href="login.php"><strong>student login</strong></a>
</div>
<marquee scrollamount="20" behavior="alternate"><h1 style=color:red>B.Sc (Bachelor of Science) </h1></marquee>
<marquee scrollamount="20" behavior="alternate"><img src="bsc1.jpg" alt=" "height="200" width="500"><img src="bsc2.jpg" alt=" "height="200" width="500"></marquee>
<br>
<img src="bsc.jpg" alt=" "height="400" width="100%">
<br>
<h2 style=color:black><strong><ul type="black"><li>About this Course</li></ul></strong></h2>
<p>
Mewar Institute of Management in Ghaziabad offers <strong>a 3-year B.Sc in Mathematics, focusing on analytical skills with a total tuition fee of approximately ₹1.05 Lakhs.</strong> Admission requires 45% marks in Class 12 (PCM). The program includes modern, well-equipped labs, smart classrooms, and placement support, with a fee of ₹35,000 per annum</p>


<h2 style=color:red align=center><strong>Key Details for B.Sc at Mewar Institute, Ghaziabad:</strong></h2>
<ul style=black>
<li>
<strong>Course:</strong> B.Sc (Mathematics).
</li>
<li>
<strong>Duration:</strong> 3 years (Full-time).
</li>
<li>
<strong>Eligibility:</strong> 12th standard with at least 45% marks in Physics, Chemistry, and Mathematics (PCM).
</li>
<li>
<strong>Fees:</strong> Approximately ₹35,000 per annum, totaling around ₹1.05 Lakhs for the full course.
</li>
<li>
<strong>Key Features:</strong> Focuses on logical reasoning, analytical thinking, and problem-solving.
</li>
<li>
<strong>Facilities:</strong> Smart classrooms, well-equipped libraries, and advanced labs.
</li>
<li>
<strong>Application Process:</strong> Online through the official website by filling out the inquiry/admission form. 
</li>
</ul>
 <h2 style=color:brown><strong>Admission Process:</strong></h2>
<ul style="sqare">
<li>
Admission is based on merit.
</li>
<li>
Candidates must meet the 12th-grade percentage requirements (45% in PCM).
</li>
<li>
The process involves document verification and counselling. 
</li>
</ul>
</body>