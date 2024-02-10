<?php 
    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $review = $_POST['review']; 
 
    $conn = new mysqli('host', 'username', 'password', 'database'); 
    if ($conn->connect_error) { 
        die("Connection failed: " . $conn->connect_error); 
    } 
 
    $stmt = $conn->prepare("INSERT INTO reviews (name, email, review) VALUES (?, ?, ?)"); 
    $stmt->bind 
    ?>