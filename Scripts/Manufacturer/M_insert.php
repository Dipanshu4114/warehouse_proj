<?php
    $servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "dip_data";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) 
    {   die("Connection failed: " . mysqli_connect_error());   }

    $sql = "INSERT INTO manufacturer (MFR_ID, M_NAME, M_TYPE) VALUES ('$_POST[IM_id]','$_POST[IM_name]','$_POST[IM_type]')";

    if (mysqli_query($conn, $sql))
    {	echo "New record created successfully.";	  }
    else
    {   echo "Error: " . $sql . "<br>" . $conn->error;   }

    mysqli_close($conn);
?>
