<?php
include("./scripts/connect_db.php");
include("./scripts/functions.php");

    $reservation_date = sanitize($_POST["reservation-date"]);
    $time_slot = sanitize($_POST["time-slot"]);
    $persons = sanitize($_POST["persons"]);
    
  

    $sql = "INSERT INTO `reservations` (`reservationid`, `timeid`, `reservationdate`, `customerid`, `persons`) VALUES (NULL, '$time_slot', '$reservation_date', NULL, '$persons');";
    
    if (mysqli_query($conn, $sql))
    {
        $id = mysqli_insert_id($conn);

        header("Location: http://george-hollywood.nl/index.php?content=klantgegevens&reservationid= . $id . ");
    }
?>