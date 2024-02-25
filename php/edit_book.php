<?php

include("./connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $title = $_POST['title'];
    $book_id = $_POST['book_id'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    // SQL query to insert data into the 'personal_info' table
    // $query = "INSERT INTO personal_info (name, email, phone, address) VALUES ('$name', '$email', '$phone', '$address')";

    $query = "UPDATE bags SET title = ?, price = ?, quantity = ? WHERE book_id = ?";
    $stmt = mysqli_prepare($con, $query);
    
    // Bind parameters
    mysqli_stmt_bind_param($stmt, 'sidi', $title, $price, $quantity, $book_id);
    
    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        // Redirect to purchase.php after successful update
        header("Location: admin.php?book_id=$book_id");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
    
    // Close the statement
    mysqli_stmt_close($stmt);
    
}
