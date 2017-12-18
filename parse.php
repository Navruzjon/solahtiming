<!DOCTYPE html>
<html>
<body>
<?php
//You need to change your own zone here
date_default_timezone_set('America/Chicago');

//This variable to use in sql statement to find current date
$now = date("Y-m-d");

//To connect to database this will run conn.php file
include 'conn.php';

//select statement for database and defines a variable
$sql = "SELECT DATE_FORMAT(date,'%b %d %Y') date, TIME_FORMAT(fajr, '%h:%i:%p') fajr, TIME_FORMAT(fajr_iq, '%h:%i:%p') fajr_iq, TIME_FORMAT(sunrise, '%h:%i:%p') sunrise, TIME_FORMAT(dhuhr, '%h:%i:%p') dhuhr, TIME_FORMAT(dhuhr_iq, '%h:%i:%p') dhuhr_iq, TIME_FORMAT(asr, '%h:%i:%p') asr, TIME_FORMAT(asr_iq, '%h:%i:%p') asr_iq, TIME_FORMAT(maghrib, '%h:%i:%p') maghrib, TIME_FORMAT(maghrib_iq, '%h:%i:%p') maghrib_iq, TIME_FORMAT(isha, '%h:%i:%p') isha, TIME_FORMAT(isha_iq, '%h:%i:%p') isha_iq, TIME_FORMAT(jumuah, '%h:%i:%p') jumuah FROM Solah WHERE DATE = '$now'"; //CURRENT_DATE";

//runs a query
$result = $conn->query($sql);

//logic and assigning variables
if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
        // echo "<br> id: ". $row["fajr"]. " - Name: ". $row["fajr_iq"]. " " . $row["sunrise"] . "id: ". $row["dhuhr"]. " - Name: ". $row["dhuhr_iq"]. " " . $row["asr"]. " " . $row["maghrib"]. " - Name: ". $row["maghrib_iq"]. " " . $row["isha"] . "id: ". $row["isha_iq"]. " - Name: ". $row["jumuah"]. "<br>";
		 $tdate=$row["date"];
		 $fajr=$row["fajr"];
		 $fajr_iq=$row["fajr_iq"];
		 $dhuhr=$row["dhuhr"];
		 $dhuhr_iq=$row["dhuhr_iq"];
		 $asr=$row["asr"];
		 $asr_iq=$row["asr_iq"];
		 $maghrib=$row["maghrib"];
		 $maghrib_iq=$row["maghrib_iq"];
		 $isha=$row["isha"];
		 $isha_iq=$row["isha_iq"];
		 $jumuah=$row["jumuah"];
		 $sunrise=$row["sunrise"];
     }
} else {
     echo "0 results";
}
//Close database connection
$conn->close();
//bool mysqli_close ( mysqli $link )

?>  
</body>
</html>