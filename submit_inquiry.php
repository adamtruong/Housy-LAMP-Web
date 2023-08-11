<?php
include('databaseconnect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $property_id = $_POST['property_id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (property_id, name, address, phone, email) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("issss", $property_id, $name, $address, $phone, $email);

    if ($stmt->execute()) {
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Inquiry submitted successfully!")';  
        echo '</script>';  
        header("refresh:0; url=index.php");
        exit();
    } else {
        echo "Error submitting inquiry: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
