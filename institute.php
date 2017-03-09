<?php

class institute
{
   
          public $servername;	
	      public $username;
	      public $password;
	      public $db;
          public $connect;
          public $name;
	      public $totalseat;
	      public $vacantseat;
    
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
    
    public function getInstituteDetail($institutename)
    {
        $sql = "select * from institute where name = '$institutename'";
        $result = mysqli_query($this->connect,$sql);
            
           /* while($row = mysqli_fetch_assoc($result) )
            {
                echo "Institute name : ".$row['name']."  total seats : ".$row['totalseat']."<br/>";
            } */
        return $result;
    }
    
    
    public function getAllInstitute()
    {
        $sql = "select * from institute";
       // $result =  $connect -> query($sql);
          $result = mysqli_query($this->connect,$sql);   
           /* while($row = mysqli_fetch_assoc($result) )
            {
                echo "Institute name : ".$row['name']."  total seats : ".$row['totalseat']."<br/>";
            } */
        
        return $result;
    }

   
}

?>
