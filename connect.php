 <?php

   $server = "localhost";
   $username ="root";
   $password ="";
   $dbname="trip";

   $conn = mysqli_connect($server, $username, $password,$dbname);

   if(!$conn){
       die("connection to this database failed due to" . mysqli_connect_error());    
   }
   ?>