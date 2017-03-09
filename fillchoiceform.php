<html>
<head>
<title>choice filling form </title>
</head>
<body>
<?php
    
//include('.\databaseclass.php');
//$database = new database();

include('.\institute.php');
include('.\student.php');
$servername="localhost";
$username="root";
$password="";
$db="phpoops";
$conn = mysqli_connect($servername,$username,$password,$db);
if(!$conn)
{
	die("connection failed" . mysqli_connect_error());
}
	echo "connection is successfull";

  $insobj = new institute();
  $result = $insobj-> getAllInstitute(); 
//  $stu = new student();
?>
<form method="post" action ="choicefunction.php">
<input type="text" name="rollno" id="rolno" value="rollno">
<select name="firstchoice">
<?php 
//$result = $stu->getStudentDetails($rollno);
while($row = mysqli_fetch_assoc($result))
   {
       ?> <option> <?php
          echo $row['name']; ?> </option> <?php
   }
?>
</select>
<select name="secondchoice">

<?php 

$result = $insobj-> getAllInstitute(); 

while($row = mysqli_fetch_assoc($result))
   {
       ?> <option> <?php
          echo $row['name']; ?> </option> <?php
   }
?>
</select>
    
<select name="thirdchoice">

<?php 
$result = $insobj-> getAllInstitute(); 
    
while($row = mysqli_fetch_assoc($result))
   {
       ?> <option> <?php
          echo $row['name']; ?> </option> <?php
   }
?>
</select>
    
<select name="fourthchoice">

<?php 
$result = $insobj-> getAllInstitute(); 
    
while($row = mysqli_fetch_assoc($result))
   {
       ?> <option> <?php
          echo $row['name']; ?> </option> <?php
   }
?>
</select>
    
<select name="fifthchoice">

<?php 
$result = $insobj-> getAllInstitute(); 
    
while($row = mysqli_fetch_assoc($result))
   {
       ?> <option> <?php
          echo $row['name']; ?> </option> <?php
   }
?>
</select>
    
<input type="submit" value="submit" name="submit">
<input type="submit" value="edit" name="submit"> 
<input type="submit" value="lock" name="submit">
    
</form>
    
</body>
</html>
