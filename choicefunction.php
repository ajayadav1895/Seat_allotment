<?php


include ('./choicefilling_class.php');
include ('./student_class.php');
$submit='submit';
$edit='edit';
$lock="lock";
$method = $_POST['submit'];

     $rollno = $_POST['rollno'];
     $firstchoice = $_POST['firstchoice'];
     $secondchoice = $_POST['secondchoice'];
     $thirdchoice = $_POST['thirdchoice'];
     $fourthchoice = $_POST['fourthchoice'];
     $fifthchoice = $_POST['fifthchoice']; 
     $obj = new choice();
     $stu = new student();
if(!strcmp($method,$submit))
   {
     echo"submit function";
      $obj->fillchoice($rollno,$firstchoice,$secondchoice,$thirdchoice,$fourthchoice,$fifthchoice);
      $obj->printChoiceFilling($rollno);
      $stu->updatechoicestatus($rollno,$method);
   }
else if(!strcmp($method,$edit))
  {
      echo"edit function";
    $obj->update($rollno,$firstchoice,$secondchoice,$thirdchoice,$fourthchoice,$fifthchoice);
    $obj->printChoiceFilling($rollno);
    $stu->updatechoicestatus($rollno,$method);
  }
else if(!strcmp($method,$lock))
  {
    echo"edit function";
    $obj->update($rollno,$firstchoice,$secondchoice,$thirdchoice,$fourthchoice,$fifthchoice);
    $obj->printChoiceFilling($rollno);
    $stu->updatechoicestatus($rollno,$method);
  }
?>