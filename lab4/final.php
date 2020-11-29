
<!DOCTYPE html>
<html>
<head>
<title>VIT University</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
  <h1>VIT-AP University</h1>
</div>
<br>
<center>
<?php
include_once 'dbh.php';
 ?>
<?php
$RegNo = $_POST['RegNo'];
$Sem = $_POST['Sem'];
$CAT = $_POST['CAT'];
$Code = $_POST['Code'];
$sql = "SELECT * FROM marks WHERE RegNo = '$RegNo' AND CAT = '$CAT' AND Sem = '$Sem' AND Code = '$Code' ;";
$result = mysqli_query($con, $sql);
$chck = mysqli_num_rows($result);
if($chck>0){
  while($row = mysqli_fetch_assoc($result)){
          echo "Your Scored ".$row['Mark']." Marks";
  }
}
?><br>
<a href="results.php">Go Back</a>
</center>
<div class="footer">
  <p>LAB-4 For CSS</p>
</div>
</body>
</html>
