<?php
$user='root';
$password='';
$db='just_connect';
$connect=new mysqli('localhost',$user,$password,$db)or die("unable to connect");
$query="SELECT * FROM `signers`";
$result=mysqli_query($connect,$query);
//echo "<b>AdhaarNumer</b>. <b>Acc</b>. <b>Fname</b>. <b>Lname</b><br>";
$mails=array();
$passwords=array();
$i=0;
while($row=mysqli_fetch_array($result))
{
   $mails[$i]= $row[3];
   $passwords[$i]=$row[4];
   $i++;
}
//echo $mails[3]."<br>".$passwords[3];
$mailid=$_POST['uname'];
$password=$_POST['pw'];
foreach ($mails as $key => $value) {
   if ($mailid==$value) {
      $j=$key;
      break;
   }
}

if($passwords[$j]!=$password)
{
   echo "<script>if(!alert('Invalid Username or Password')) document.location = 'index.html#signin';</script>";
}
mysqli_free_result($result);
mysqli_close($connect);
?>
<!DOCTYPE html>
<html>
<head>
   <title>Login Page</title>
   <style type="text/css">
      .dem{
         background-color: #C0D3DA;
      }
      body{
         background-color: #1A90ED ;
      }
      a{
         padding-right: 3px;
         
      }
   </style>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
   <div class="dem">
      <marquee style="color:green;font-family: cursive;font-size: 35px; font-weight: bold;">Welcome to Just Connect</marquee>
      
   </div>
   <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
    <img src="img/logo.jpeg" alt="logo" style="width:60px; ">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Question Papers</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Syllabus</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Developmental Activities</a>
    </li>
  </ul>
</nav>


</body>
</html>
