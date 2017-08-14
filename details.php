<?php


if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();

}
?>
<?php
$name=$_SESSION['receiver_name'];

require 'connection.php';
$sql = "SELECT Name,Email,Password,Gender,Contact,Mode,Dob FROM receiver where Name='$name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table align=center><tr><th>Name</th><th>Email</th><th>Password</th><th>Gender</th><th>Contact</th><th>Mode</th><th>Dob</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["Name"]."</td><td>".$row["Email"]."</td><td>".$row["Password"]."</td><td>".$row["Gender"]."</td><td>".$row["Contact"]."</td><td>".$row["Mode"]."</td><td>".$row["Dob"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "SORRY ! NO ONE IS THERE RIGHT NOW ";
}
$conn->close();
?>