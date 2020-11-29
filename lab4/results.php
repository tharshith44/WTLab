
<?php
include_once 'dbh.php';
 ?>

 <html>
 <head>
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="header">
  <h1>VIT-AP University</h1>
</div><center>
  <big>
    <?php
  $RegNo = $_POST['RegNo'];
  $sql = "SELECT * FROM Student_info WHERE RegNo = '$RegNo';";
  $result = mysqli_query($con, $sql);
  $chck = mysqli_num_rows($result);
  if($chck>0){
    while($row = mysqli_fetch_assoc($result)){
            echo "Welcome ".$row['Name'];
    }
  }
  ?></big>
    <h1>Enter The Details To check your marks</h1>
    <form action = "final.php" method = "POST">
    <input type="text" name="RegNo" placeholder= "RegNO">
    <input type="number" name="Sem" placeholder= "Sem">
    <input type="number" name="CAT" placeholder= "CAT">
    <input type="text" name="Code" placeholder= "Code"></br>
    <input type="submit" value="Submit">
  </form>
</center>
  <div class="footer">
    <p>LAB-4 For CSS</p>
  </div>
  </body>
  </html>
