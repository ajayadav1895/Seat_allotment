<?php

 $rollno = $_POST['rollno'];
     $firstchoice = $_POST['firstchoice'];
     $secondchoice = $_POST['secondchoice'];
     $thirdchoice = $_POST['thirdchoice'];
     $fourthchoice = $_POST['fourthchoice'];
     $fifthchoice = $_POST['fifthchoice']; 

  class choice
   {
      public $servername;
      public $username;
      public $password;
      public $db;
      public $startDate;
      public $endDate; 
       
    public function __construct ()
    {
      $servername='localhost';
      $username='root';
      $password='';
      $db='phpoops';
       
        $this->connect = mysqli_connect($servername,$username,$password,$db);
        if($this->connect)
            echo "connection successfull";
        else
            echo "not connected";
    }

    public function printChoiceFilling($rollno)
       {
         $sql = "select * from choicefilling where rollno = '$rollno'";
         $result = mysqli_query($this->connect,$sql);
         
         while($row = mysqli_fetch_assoc($result))
          {
             echo "Firstchoice : ".$row['firstchoice']."<br/>"."Secondchoice : ".$row['secondchoice']."<br/>"."Thirdchoice : ".$row['thirdchoice']."<br/>"."Fourthchoice : ".$row['fourthchoice']."<br/>"."Fifthchoice : ".$row['fifthchoice']."<br/>";
          }
       }
       
       

    public function fillchoice($rollno,$firstchoice,$secondchoice,$thirdchoice,$fourthchoice,$fifthchoice)
           {
                
               $sql = "INSERT INTO choicefilling (rollno,firstchoice,secondchoice,thirdchoice,fourthchoice,fifthchoice) VALUES ('$rollno','$firstchoice','$secondchoice','$thirdchoice','$fourthchoice','$fifthchoice')"; 
                       
              if(mysqli_query($this->connect,$sql))
	           echo "inserted";
              else
                   echo "not inserted"; 
           
           }

 public function update($rollno,$firstchoice,$secondchoice,$thirdchoice,$fourthchoice,$fifthchoice)
          {
             
              $sql = "UPDATE choicefilling SET firstchoice = '$firstchoice', secondchoice = '$secondchoice' , thirdchoice = '$thirdchoice' , fourthchoice = '$fourthchoice' , fifthchoice = '$fifthchoice' where rollno = '$rollno' ";
              if(mysqli_query($this->connect,$sql))
	           echo "updated";
              else
                   echo "not updated";
         } 

    } 


$obj = new choice();
$obj->fillchoice($rollno,$firstchoice,$secondchoice,$thirdchoice,$fourthchoice,$fifthchoice);
$obj->printChoiceFilling('m150059ca');

?>

