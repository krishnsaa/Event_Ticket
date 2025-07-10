// <?php
// if ($_SERVER["REQUEST_METHOD"] === "POST") {
//     $Event = $_POST['Event'] ?? '';
//     $Seat = $_POST['Seat'] ?? '';
//     $Name = $_POST['Name'] ?? '';
//     $Reg = $_POST['Reg'] ?? '';
//     $Price = $_POST['Price'] ?? '';
//     $Method = $_POST['Method'] ?? '';

//     $conn = new mysqli("localhost", "root", "", "Ticket");

//     if ($conn->connect_error) {
//         die("Connection failed: " . $conn->connect_error);
//     }

//     $stmt = $conn->prepare("INSERT INTO book (Event, Seat, Name, Reg, Price, Method) VALUES (?, ?, ?, ?, ?, ?)");
//     $stmt->bind_param("ssssss", $Event, $Seat, $Name, $Reg, $Price, $Method);

//     if ($stmt->execute()) {
//         echo "Seat booked successfully";
//     } else {
//         echo "Error: " . $stmt->error;
//     }

//     $stmt->close();
//     $conn->close();
// } else {
//     echo "Please submit the form first.";
// }
// ?>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $Event = $_POST['Event'] ?? '';
    $Seat = $_POST['Seat'] ?? '';
    $Name = $_POST['Name'] ?? '';
    $Reg = $_POST['Reg'] ?? '';
    $Price = $_POST['Price'] ?? '';
    $Method = $_POST['Method'] ?? '';

    // 🔁 Replace with your actual values
    $host = "0.tcp.ngrok.io";
    $port = 8080; // replace with your actual ngrok port
    $user = "your_mysql_user";
    $pass = "your_mysql_password";
    $db = "Ticket";

    $conn = new mysqli($host, $user, $pass, $db, $port);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO book (Event, Seat, Name, Reg, Price, Method) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $Event, $Seat, $Name, $Reg, $Price, $Method);

    if ($stmt->execute()) {
        echo "Seat booked successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Please submit the form first.";
}
?>

