<?php

class student
 {
   public $name;
   public $rollno;
   public $rank;
   public $address;
   public $choicestatus;
   public $admissionstatus;
   public $allotmentStatus;

  public function __construct()
    {
          $servername='localhost';	
	      $username='root';
	      $password='';
	      $db='phpoops';
        
        $this->connect = new mysqli($servername,$username,$password,$db);
        if($this->connect)
            echo "connection successfull";
        else
            echo "not connected";
    }

   public function getStudentDetails($rollno)
    {
         $sql = "select * from student where rollno ='$rollno'";
         $result = mysqli_query($this->connect,$sql);
         return result;
    }
     
     
public function getchoicestatus($rollno)
{
    $sql = "select choice_status from student where rollno = '$rollno'";
    $result = mysqli_query($this->connect,$sql);
    return $result;
}

     
public function updatechoicestatus($rollno,$status)
{
    $sql = "update student set choice_status = '$status' where rollno ='$rollno'";
    $result = mysqli_query($this->connect,$sql);
    
    if($result)
        echo "choice status change ";
    else
        echo "not change ";
        
}


}

?>