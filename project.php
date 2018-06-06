<html>
    <body>
   

<?php
    $ servername = "Apache";
    $ username = "root";
    $ password = "";
    $dbname = "BloodDonation";
//create connection 
&conn = new mysqli($servername,$username,$password ,$dbname);

//check connection 
if( &conn ->connect_error){
    die("connection failed : " , $conn ->connect_error);
}
    echo "connected successfully";
?>
         </body>
    </html>