<?php 
   $db_host = "localhost"; 
   $db_server = "root"; 
   $db_password = ""; 
   $db_name = "acadamate";  
    $conn; 
      try{
            $conn = mysqli_connect("$db_host","$db_server","$db_password","$db_name");
      }catch(mysqli_sql_exception){
             echo "Failed to connect"; 
      };
?>