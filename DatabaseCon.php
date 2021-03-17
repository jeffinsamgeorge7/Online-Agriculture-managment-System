<?php
class DatabaseCon {
private $dbhost = 'localhost:3306';
private $dbuser = 'root';
private $dbpass = '';
private $conn;
   function __construct()
   		 {
			// echo "inside constructor";
      		$this->conn = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass);
				if(!$this->conn )
					{
  						die('Could not connect: ' . mysqli_error());
					}
					//echo 'Connected successfully';
					mysqli_select_db( 'agriculture' );
					
        }
   function insertQuery($qry) {
    		echo $qry;
	   $retval = mysqli_query( $qry, $this->conn );
			if(!$retval )
			{
 				 die('Could not enter data: ' . mysqli_error());
			}
				//echo "Entered data successfully\n";
   }
    function selectQuery($str) {
	//	echo $str;
		$f=0;
		$retval=mysqli_query($str,$this->conn);
	$num_rows= mysqli_num_rows(mysqli_query($str));
//echo $num_rows;
		//if(!$retval)
		if($num_rows>0)
		   {
			 $f=1;  
		   }
		   
		   return $f;
		  
   }
   function selectData($str)
   {
   $retval=mysqli_query($str,$this->conn);
   return $retval;
   }
   function updateQuery($str)
   {
   $retval=mysqli_query($str,$this->conn);
   if(!$retval)
   {
     die('Could not update data!'.mysqli_error());
   }
   
   }
   function closeDatabase()
   {
	  mysqli_close($this->conn); 
   }
}


?>