<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>swapnil college website - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/jgi.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  
</head>

<body>
<header id="header" class="sticky-top">
<div class="d-flex align-items-center">
  <img src="https://images.static-collegedunia.com/public/college_data/images/logos/1603793235Logo.jpg" 
     width="100" height="80px">
   <h1 class="logo me-auto"><a href="#">Jain<br> College of <br>Engineering</a></h1>  
   <nav id="navbar" class="navbar order-last order-lg-0">
    <ul>
      <li><a class="active" href="index.html">Home</a></li>
      <li><a href="admission.html">Admission</a></li>
      <li class="dropdown"><a href="#"><span>Department</span><i class="bi bi-chevron-down"></i></a>
      <ul><a href="deptcs.html">Computer Science</a>
      <a href="deptcivil.html">Civil Engineering</a>
      <a href="deptee.html">Electronics and Electronics</a>
      <a href="deptmech.html">Mechanical Engineering</a>
      <a href="deptec.html">Electronics and Communication</a>
        </ul>
      </li>
      
      
      <li><a href="placement.html">Placement</a></li>
     

      <li class="dropdown"><a href="#"><span>About US</span> <i class="bi bi-chevron-down"></i></a>
        <ul>
          <li><a href="JGI Group.html">The JGI Group</a></li>
          <li><a href="principal.html">The Principal</a></li>
           <li><a href="chairman.html">JGI Chairman</a></li>
           <li class="dropdown"><a href="#"><span>Head of Departments</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a href="#">CSE: Dr.Uttam Patil</a></li>
              <li><a href="#">CE: Prof:Rajashekhar Malagihal</a></li>
              <li><a href="#">EEE: Dr. G. H. Kulkarni</a></li>
              <li><a href="#">ME: Dr. Anil Shirahatti</a></li>
              <li><a href="#">ECE: Dr.Krupa.R.Rasane</a></li>
            </ul>
          </li>
            <li><a href="contact_us.html">Contact Us</a></li>
        </ul>
      </li>
      <li class="dropdown"><a href="#"><span>Student</span> <i class="bi bi-chevron-down"></i></a>
        <ul>
      <li><a href="login.html">Log In</a></li>
      <li><a href="studentsignup.html">Sign Up</a></li>
      </ul>
      </li>
      <li><a href="admin.html">Admin</a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
  </nav><!-- .navbar -->

  <a href="adminsigninpage.html" class="get-started-btn">log out</a>

</div>
</header><!-- End Header -->

<h2 style="margin-left:500px;">Student Details</h2>
<?php 

$username = "root"; 
$password = ""; 
$database = "college"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM studentsignup";

echo '<table border="20" cellspacing="4" cellpadding="4" align="center"> 
      <tr> 
          <td> <font face="Arial">First Name</font> </td> 
          <td> <font face="Arial">Last Name</font> </td> 
          <td> <font face="Arial">USN</font> </td> 
          <td> <font face="Arial">Email</font> </td>
          <td> <font face="Arial">DOB</font> </td>  
      
      </tr>';
 
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $UserName = $row["UserName"];
        $FirstName = $row["FirstName"];
        $LastName = $row["LastName"];
        $usn = $row["usn"];
        $DOB = $row["Dob"];
    
 
        echo '<tr> 
                  <td>'.$FirstName.'</td> 
                  <td>'.$LastName.'</td> 
                  <td>'.$usn.'</td> 
                  <td>'.$UserName.'</td> 
                  <td>'.$DOB.'</td> 
              </tr>';
    }
    $result->free();
} 
?>





</body>
</html>