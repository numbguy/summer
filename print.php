<?php
require('mysqli_conn.php');
		echo"everything is fine";
		 

$sql = "INSERT INTO newaddition (image_name, image_price)
VALUES ('John',500)";

if (mysqli_query($dbcon, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$sql = "SELECT image_name, image_price FROM newaddition";
$result = $dbcon->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "name: " . $row["image_name"]. " - image_price: " . $row["image_price"]."<br>";
    }
} else {
    echo "0 results";
}
$dbcon->close();
?>

