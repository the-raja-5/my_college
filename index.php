<?php require_once __DIR__ . "/include/db.php"; session_start(); ?>

<!doctype html>
<html>

<head>

<title>Mewar Institute of Management</title>

<style>

*{
    box-sizing:border-box;
}

body{
    margin:10px;
    font-family:Arial;
    background:#f4f7ff;
    color:#222;
}


/* ================= NAVBAR ================= */

.navbar{
    background-color:BLUE;
    display:flex;
    justify-content:center;
    font-size:20px;
    position:relative;
    box-shadow:0 3px 10px rgba(0,0,0,0.25);
}

.navbar a{
    color:white;
    text-decoration:none;
    padding:20px 20px;
}

.navbar a:hover{
    background:linear-gradient(45deg,#ff00f7 0%,#d4ff00 100%);
    color:rgb(60,255,0);
}


/* ================= 3 DOT MENU ================= */

.menu-container{
    position:absolute;
    right:20px;
    top:10px;
}

.menu-button{
    background:transparent;
    border:none;
    color:rgb(0,247,255);
    font-size:28px;
    cursor:pointer;
    padding:5px 10px;
}

.dropdown-menu{
    display:none;
    position:absolute;
    right:0;
    top:45px;
    background:white;
    min-width:180px;
    box-shadow:0 4px 10px rgba(0,0,0,0.3);
    z-index:1000;
}

.dropdown-menu a{
    display:block;
    color:black;
    padding:12px 15px;
    text-decoration:none;
}

.dropdown-menu a:hover{
    background:#eeeeee;
    color:blue;
}


/* ================= HERO ================= */

.hero{
    margin-top:15px;
    background:linear-gradient(135deg,#0000cc,#0066ff);
    color:white;
    text-align:center;
    padding:55px 20px;
    border-radius:5px;
}

.hero h1{
    color:#ffff00;
    font-size:42px;
    margin:10px;
}

.hero h2{
    color:white;
    font-size:24px;
}

.hero p{
    font-size:17px;
    line-height:1.7;
}


/* ================= SECTION ================= */

.section{
    background:white;
    margin-top:20px;
    padding:25px;
    border:1px solid #ddd;
    box-shadow:0 3px 10px rgba(0,0,0,0.12);
}

.section-title{
    color:blue;
    text-align:center;
    font-size:30px;
    margin-bottom:20px;
}


/* ================= ABOUT ================= */

.about-content{
    line-height:1.8;
    text-align:justify;
    font-size:16px;
}

.about-content:first-letter{
    color:red;
    font-size:35px;
    font-weight:bold;
}


/* ================= COLLEGE INFO ================= */

.info-grid{
    display:flex;
    justify-content:center;
    flex-wrap:wrap;
    gap:20px;
}

.info-card{
    width:200px;
    background:#eef7ff;
    border:2px solid skyblue;
    padding:20px;
    text-align:center;
    transition:0.3s;
}

.info-card:hover{
    transform:translateY(-5px);
    box-shadow:0 5px 15px rgba(0,0,0,0.2);
}

.info-card h3{
    color:red;
}

.info-card p{
    color:green;
    font-weight:bold;
}


/* ================= MANAGEMENT ================= */

.management{
    display:flex;
    justify-content:center;
    gap:25px;
    flex-wrap:wrap;
}

.person{
    width:280px;
    background:white;
    border:2px solid blue;
    text-align:center;
    box-shadow:0 4px 12px rgba(0,0,0,0.2);
    overflow:hidden;
    transition:0.3s;
}

.person:hover{
    transform:translateY(-6px);
}

.person img{
    width:100%;
    height:270px;
    object-fit:cover;
}

.person h3{
    color:red;
    margin:12px 5px 5px;
}

.person p{
    color:green;
    font-weight:bold;
}


/* ================= FACULTY ================= */

.faculty{
    display:flex;
    justify-content:center;
    gap:20px;
    flex-wrap:wrap;
}

.faculty-card{
    width:220px;
    background:white;
    border:2px solid green;
    text-align:center;
    overflow:hidden;
    box-shadow:0 3px 10px rgba(0,0,0,0.18);
    transition:0.3s;
}

.faculty-card:hover{
    transform:translateY(-5px);
}

.faculty-card img{
    width:100%;
    height:220px;
    object-fit:cover;
}

.faculty-card h3{
    color:blue;
    margin:10px;
}

.faculty-card p{
    color:red;
    font-weight:bold;
}
/* ================= HOD'S OF VARIOUS DEPARTMENT  ================= */

.hod{
    display:flex;
    justify-content:center;
    gap:20px;
    flex-wrap:wrap;
}

.hod-card{
    width:180px;
    background:rgb(255, 255, 255);
    border:2px solid rgb(255, 0, 0);
    text-align:center;
    overflow:hidden;
    box-shadow:0 3px 10px rgba(255, 0, 0, 0.648);
    transition:0.3s;
}

.hod-card:hover{
    transform:translateY(-20px);
}

.hod-card img{
    width:100%;
    height:220px;
    object-fit:cover;
}

.hod-card h3{
    color:rgb(255, 0, 247);
    margin:10px;
}

.hod-card p{
    color:red;
    font-weight:bold;
}


/* ================= COURSES ================= */

.courses{
    display:flex;
    justify-content:center;
    flex-wrap:wrap;
    gap:20px;
}

.course{
    width:240px;
    min-height:140px;
    padding:20px;
    background:#fff;
    border:2px solid red;
    text-align:center;
    box-shadow:0 3px 8px rgba(0,0,0,0.15);
    transition:0.3s;
}

.course:hover{
    transform:translateY(-5px);
    background:#f5fbff;
}

.course h3{
    color:blue;
}

.course p{
    color:#555;
}


/* ================= STUDENT TABLE ================= */

.student-table{
    width:100%;
    border-collapse:collapse;
    margin-top:20px;
}

.student-table th{
    background:blue;
    color:white;
    padding:13px;
}

.student-table td{
    border:1px solid #999;
    padding:12px;
    text-align:center;
}

.student-table tr:nth-child(even){
    background:#eef7ff;
}


/* ================= FACILITIES ================= */

/*.facilities{
    display:flex;
    justify-content:center;
    flex-wrap:wrap;
    gap:15px;
}

.facility{
    width:180px;
    padding:20px;
    text-align:center;
    background:#c4dee4;
    border:4px solid skyblue;
    transition:0.3s;
} */


.facilities {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 15px;
}

.facility {
    width: 180px;
    padding: 20px;
    text-align: center;

    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;

    border: 4px solid skyblue;
    transition: 0.3s;
}


.facility:hover{
    transform:scale(1.5);
}

.facility h3{
    color:green;
}


/* ================= PLACEMENT ================= */

.placement{
    background:#efffff;
    border:2px solid skyblue;
}

.placement h2{
    color:green;
}

.placement li{
    margin:12px;
}


/* ================= CONTACT ================= */

.contact{
    display:flex;
    justify-content:center;
    flex-wrap:wrap;
    gap:20px;
}

.contact-card{
    width:330px;
    padding:22px;
    background:#eef7ff;
    border:2px solid blue;
}

.contact-card h3{
    color:red;
}

.contact-card p{
    line-height:1.7;
}


/* ================= FOOTER ================= */

footer{
    margin-top:25px;
    background:blue;
    color:white;
    text-align:center;
    padding:25px;
}

footer h2{
    color:yellow;
}

footer p{
    color:white;
}


/* ================= MOBILE ================= */

@media(max-width:700px){

    .navbar{
        font-size:14px;
        flex-wrap:wrap;
    }

    .navbar a{
        padding:15px 7px;
    }

    .menu-container{
        right:2px;
    }

    .hero h1{
        font-size:28px;
    }

    .hero h2{
        font-size:19px;
    }

    .hero p{
        font-size:14px;
    }

    .section{
        padding:18px;
    }

    .person,
    .faculty-card,
    .course{
        width:90%;
    }

    .student-table{
        font-size:12px;
    }

    .student-table th,
    .student-table td{
        padding:7px;
    }

}

</style>

</head>


<body>


<!-- ================= NAVBAR ================= -->

<div class="navbar">

    <a href="index.php">
        <strong>Home</strong>
    </a>

    <a href="BSC.php">
        <strong>B.Sc</strong>
    </a>

    <a href="BCA.php">
        <strong>B.C.A</strong>
    </a>

    <a href="BCOM.php">
        <strong>B.Com</strong>
    </a>

    <a href="BBA.php">
        <strong>BBA</strong>
    </a>

    <a href="login.php">
        <strong>Student Login</strong>
    </a>


    <!-- 3 DOT MENU -->

    <div class="menu-container">

        <button
        class="menu-button"
        onclick="toggleMenu()">

        ⋮

        </button>


        <div
        class="dropdown-menu"
        id="dropdownMenu">

            <a href="index.php">
                About Us
            </a>

            <a href="contact.php">
                Contact
            </a>

            <a href="index.php">
                Courses
            </a>

            <a href="login.php">
                Student Login
            </a>

        </div>

    </div>

</div>



<!-- ================= HERO ================= -->

<div class="hero">

    <h1>
        MEWAR INSTITUTE OF MANAGEMENT
    </h1>

    <h2>
        Vasundhara, Ghaziabad
    </h2>

    <p>
        Quality Education • Practical Learning •
        Student Development
    </p>

</div>



<!-- ================= ABOUT COLLEGE ================= -->

<div class="section">

    <h2 class="section-title">
        About Mewar Institute of Management
    </h2>


    <div class="about-content">

        <p>
            Mewar Institute of Management (MIM) is an educational
            institution located in Vasundhara, Ghaziabad,
            Uttar Pradesh.
        </p>

        <p>
            The institute provides education in different
            academic areas including Computer Applications,
            Business Administration, Commerce, Science and
            Education.
        </p>

        <p>
            The institute focuses on academic learning,
            practical knowledge, professional development
            and the overall development of students.
        </p>

        <p>
            Students can participate in seminars, workshops,
            industrial visits, cultural programmes, sports
            activities and other educational activities.
        </p>

    </div>

</div>

 <!-- ====================Download Section=====================-->


 <div class="hero">
    <h2> To know more about college</h2>
    <h1>

        <a href="Graphic.pdf" target="_blank" style="color: #d4ff00;">
        Open PDF
    </a>
</h1>


    <br>
    <h2 style="color: #13aa20;">
    <a href="Graphic.pdf" download>
        Download PDF 
    </a>

    </h2>
</div>

<!-- ================= COLLEGE INFORMATION ================= -->

<div class="section">

    <h2 class="section-title">
        College At A Glance
    </h2>


    <div class="info-grid">


        <div class="info-card">

            <h3>
                Established
            </h3>

            <p>
                1997
            </p>

        </div>


        <div class="info-card">

            <h3>
                Location
            </h3>

            <p>
                Vasundhara
            </p>

        </div>


        <div class="info-card">

            <h3>
                District
            </h3>

            <p>
                Ghaziabad
            </p>

        </div>


        <div class="info-card">

            <h3>
                State
            </h3>

            <p>
                Uttar Pradesh
            </p>

        </div>


        <div class="info-card">

            <h3>
                Education
            </h3>

            <p>
                UG & PG
            </p>

        </div>


    </div>

</div>



<!-- ================= MANAGEMENT ================= -->

<div class="section">

    <h2 class="section-title">
        Management & Leadership
    </h2>


    <div class="management">


        <div class="person">

            <img
            src="https://www.mimcs.com/public/frontend/assets/img/guide-3.jpg"
            alt="Dr. Alka Agarwal" border="9">

            <h3>
                Dr. Alka Agarwal
            </h3>

            <p>
                Director
            </p>

        </div>


        <div class="person">

            <img
            src="https://www.mimcs.com/public/frontend/assets/img/guide-1.jpg"
            alt="College Management" border="9">

            <h3>
                Dr. Ashok Kumar Gadiya
            </h3>

            <p>
                Chairman
            </p>

        </div>
         <div class="person">

            <img
            src="https://www.mimcs.com/public/frontend/assets/img/guide-2.jpg"
            alt="CA Ashok Kumar Singhal" border="9">

            <h3>
                CA Ashok Kumar Singhal
            </h3>

            <p>
                Secretary
            </p>

        </div>


    </div>

</div>



<!-- ================= FACULTY ================= -->

<div class="section">

    <h2 class="section-title">
        Faculty & Departments
    </h2>


    <div class="faculty">


        <div class="faculty-card">

            <img
            src="https://www.abesit.in/wp-content/uploads/2024/07/ai-bnr.webp"
            alt="BCA Faculty" border="6">

            <h3>
                BCA Department
            </h3>

            <p>
                Computer Applications
            </p>

        </div>


        <div class="faculty-card">

            <img
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4Z7_2WDH17BQVNRjDN62UrcyapJpXBDEb05q1D1vbQmYqhAQK-skEzxqQ&s=10"
            alt="BBA Faculty" border="6">

            <h3>
                BBA Department
            </h3>

            <p>
                Business Administration
            </p>

        </div>


        <div class="faculty-card">

            <img
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3PlQITROSukOuAxcyczCOMZp_AFxur0lVnhjzaIDnBag_6f3uOAp87LY&s=10"
            alt="B.Com Faculty" border="6">

            <h3>
                B.Com Department
            </h3>

            <p>
                Commerce
            </p>

        </div>


        <div class="faculty-card">

            <img
            src="https://www.dbuu.ac.in/allied-sciences/images/soas-scaled.webp"
            alt="B.Sc Faculty" border="6">

            <h3>
                B.Sc Department
            </h3>

            <p>
                Science
            </p>

        </div>


    </div>

</div>



<!-- ================= COURSES ================= -->

<!-- <div class="section">

    <h2 class="section-title">
        Academic Programmes
    </h2>


    <div class="courses">


        <div class="course">

            <h3>
                BCA
            </h3>

            <p>
                Bachelor of Computer Applications
            </p>

        </div>


        <div class="course">

            <h3>
                BBA
            </h3>

            <p>
                Bachelor of Business Administration
            </p>

        </div>


        <div class="course">

            <h3>
                B.Com
            </h3>

            <p>
                Bachelor of Commerce
            </p>

        </div>


        <div class="course">

            <h3>
                B.Sc
            </h3>

            <p>
                Bachelor of Science
            </p>

        </div>


        <div class="course">

            <h3>
                B.Ed
            </h3>

            <p>
                Bachelor of Education
            </p>

        </div>


        <div class="course">

            <h3>
                M.Sc
            </h3>

            <p>
                Master of Science
            </p>

        </div>


        <div class="course">

            <h3>
                M.Com
            </h3>

            <p>
                Master of Commerce
            </p>

        </div>


        <div class="course">

            <h3>
                D.El.Ed
            </h3>

            <p>
                Diploma in Elementary Education
            </p>

        </div>


    </div>

</div> -->










<div class="section">

    <h2 class="section-title">
        HOD's of Various Departments
    </h2>


    <div class="hod">


        <div class="hod-card">

            <img
            src="https://www.abesit.in/wp-content/uploads/2024/07/ai-bnr.webp"
            alt="BCA Faculty" border="6">

            <h3>
                BCA Department
            </h3>

            <p>
                Samshad Ali
            </p>

        </div>


        <div class="hod-card">

            <img
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4Z7_2WDH17BQVNRjDN62UrcyapJpXBDEb05q1D1vbQmYqhAQK-skEzxqQ&s=10"
            alt="BBA Faculty" border="6">

            <h3>
                BBA Department
            </h3>

            <p>
                Mr. Pankaj Kumar Singh
            </p>

        </div>


        <div class="hod-card">

            <img
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3PlQITROSukOuAxcyczCOMZp_AFxur0lVnhjzaIDnBag_6f3uOAp87LY&s=10"
            alt="B.Com Faculty" border="6">

            <h3>
                B.Com Department
            </h3>

            <p>
                Dr. Nidhi Bansal
            </p>

        </div>


        <div class="hod-card">

            <img
            src="https://www.dbuu.ac.in/allied-sciences/images/soas-scaled.webp"
            alt="B.Sc Faculty" border="6">

            <h3>
                B.Sc Department
            </h3>

            <p>
                Science
            </p>

        </div>

        <div class="hod-card">

            <img
            src="https://www.dbuu.ac.in/allied-sciences/images/soas-scaled.webp"
            alt="B.Sc Faculty" border="6">

            <h3>
                B.Ed Department
            </h3>

            <p>
                Science
            </p>

        </div>

        <div class="hod-card">

            <img
            src="https://www.dbuu.ac.in/allied-sciences/images/soas-scaled.webp"
            alt="B.Sc Faculty" border="6">

            <h3>
                M.Sc Department
            </h3>

            <p>
                Science
            </p>

        </div>

        <div class="hod-card">

            <img
            src="https://www.dbuu.ac.in/allied-sciences/images/soas-scaled.webp"
            alt="B.Sc Faculty" border="6">

            <h3>
                M.Com Department
            </h3>

            <p>
                Science
            </p>

        </div>


        <div class="hod-card">

            <img
            src="https://www.dbuu.ac.in/allied-sciences/images/soas-scaled.webp"
            alt="B.Sc Faculty" border="6">

            <h3>
                D.El.Ed Department
            </h3>

            <p>
                Science
            </p>

        </div>


    </div>

</div>


































<!-- ================= STUDENTS ================= -->

<div class="section">

    <h2 class="section-title">
        Course Wise Student Details
    </h2>


    <table class="student-table">

        <tr>

            <th>
                S.No.
            </th>

            <th>
                Course
            </th>

            <th>
                No. of Students
            </th>

        </tr>


        <tr>

            <td>1</td>

            <td>
                BBA
            </td>

            <td>
                255
            </td>

        </tr>


        <tr>

            <td>2</td>

            <td>
                BCA
            </td>

            <td>
                155
            </td>

        </tr>


        <tr>

            <td>3</td>

            <td>
                B.Com
            </td>

            <td>
                196
            </td>

        </tr>


        <tr>

            <td>4</td>

            <td>
                B.Sc
            </td>

            <td>
                355
            </td>

        </tr>


        <tr>

            <td>5</td>

            <td>
                B.Ed
            </td>

            <td>
                389
            </td>

        </tr>


        <tr>

            <td>6</td>

            <td>
                BA.LLB
            </td>

            <td>
                255
            </td>

        </tr>


    </table>

</div>



<!-- ================= FACILITIES ================= -->

<div class="section">

    <h2 class="section-title">
        Campus Facilities
    </h2>


    <div class="facilities">




        <div class="facilities">

    <div class="facility" style="background-image: url('https://mewarinstituteofmanagement.com/public/frontend/assets/img/library2.JPG');">
        <h3>Library</h3>
        <p>Books and study materials</p>
    </div>

    <div class="facility" style="background-image: url('images/lab.jpg');">
        <h3>Classroom</h3>
        <p>Proper Study Environment</p>
    </div>

    <div class="facility" style="background-image: url('images/playground.jpg');">
        <h3>Playground</h3>
        <p>Sports and outdoor activities</p>
    </div>

    <div class="facility" style="background-image: url('images/computer.jpg');">
        <h3>Computer Lab</h3>
        <p>Computer and technology facilities</p>
    </div>

    <div class="facility" style="background-image: url('images/computer.jpg');">
        <h3>Seminar Hall</h3>
        <p>Guest Lecture & College Function </p>
    </div>

    <div class="facility" style="background-image: url('images/computer.jpg');">
        <h3>Cafeteria</h3>
        <p>Suitable For Lunch & Small Party</p>
    </div>

    <div class="facility" style="background-image: url('images/computer.jpg');">
        <h3>Placement Cell</h3>
        <p>For New Company & Career Suport</p>
    </div>

</div>



        <!-- <div class="facility">
            <h3>📚 Library</h3>
        </div>


        <div class="facility">
            <h3>💻 Computer Lab</h3>
        </div>


        <div class="facility">
            <h3>🏫 Classrooms</h3>
        </div>


        <div class="facility">
            <h3>🎤 Seminar Hall</h3>
        </div>


        <div class="facility">
            <h3>🏃 Sports</h3>
        </div>


        <div class="facility">
            <h3>🍴 Cafeteria</h3>
        </div>


        <div class="facility">
            <h3>🚌 Transport</h3>
        </div>


        <div class="facility">
            <h3>💼 Placement Cell</h3>
        </div>


    </div> -->

</div>



<!-- ================= PLACEMENT ================= -->

<div class="section placement">

    <h2>
        Placements
    </h2>


    <p>
        The institute has a placement cell intended to
        support students with career guidance, internships
        and recruitment opportunities.
    </p>


    <ul>

        <li>
            Internship assistance
        </li>

        <li>
            Placement assistance
        </li>

        <li>
            Career guidance
        </li>

        <li>
            Interview preparation
        </li>

        <li>
            Industry interaction
        </li>

        <li>
            Recruitment drives
        </li>

    </ul>

</div>



<!-- ================= CONTACT ================= -->

<div class="section">

    <h2 class="section-title">
        Contact Information
    </h2>


    <div class="contact">


        <div class="contact-card">

            <h3>
                📍 College Address
            </h3>

            <p>

                Mewar Institute of Management

                <br><br>

                Sector-4C, Vasundhara,

                <br>

                Delhi-Ghaziabad Link Road,

                <br>

                Ghaziabad, Uttar Pradesh - 201012

            </p>

        </div>


        <div class="contact-card">

            <h3>
                📞 Contact
            </h3>

            <p>

                Phone:
                8826196274 

                <br><br>

                Email:
                vikkimewar@gmail.com

            </p>

        </div>


    </div>

</div>



<!-- ================= FOOTER ================= -->

<footer>

    <h2>
        MEWAR INSTITUTE OF MANAGEMENT
    </h2>

    <p>
        Vasundhara, Ghaziabad, Uttar Pradesh
    </p>

    <p>
        Quality Education • Student Development •
        Professional Growth
    </p>

    <br>

    <p>
        © 2026 Mewar Institute of Management
    </p>

</footer>



<!-- ================= JAVASCRIPT ================= -->

<script>

function toggleMenu(){

    var menu =
    document.getElementById("dropdownMenu");

    if(menu.style.display === "block"){

        menu.style.display = "none";

    }

    else{

        menu.style.display = "block";

    }

}

</script>


</body>

</html>
```
