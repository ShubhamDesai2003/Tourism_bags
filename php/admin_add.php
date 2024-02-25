<?php
session_start();
$title = "Add new book";

include("./connection.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $title = $_POST["title"];
    $price = $_POST["price"];
    $quantity = $_POST["quantity"];
    $image = "./image";  // Assuming there is an input field for the image in your form

    $query = "INSERT INTO bags (title, image, price, quantity) VALUES (?, ?, ?, ?)";
    $stmt = $con->prepare($query);
    $stmt->bind_param("ssdi", $title, $image, $price, $quantity);

    if ($stmt->execute()) {
        // Query executed successfully
        header("Location: admin.php");
    } else {
        // Display an error message if the query fails
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Your Form Title</title>

	<style>
		/* Style the form container */
		form {
			width: 50%;
			margin: 50px auto;
			background-color: #f8f9fa;
			padding: 20px;
			border-radius: 8px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}

		/* Style the table */
		.table {
			width: 100%;
			border-collapse: collapse;
			margin-bottom: 20px;
		}

		/* Style table headers */
		th {
			background-color: #007bff;
			color: #fff;
			padding: 10px;
			text-align: left;
		}

		/* Style table cells */
		td {
			padding: 10px;
		}

		/* Style form inputs */
		input[type="text"] {
			width: calc(100% - 20px);
			padding: 10px;
			box-sizing: border-box;
			margin-bottom: 15px;
			border: 1px solid #ccc;
			border-radius: 4px;
			font-size: 16px;
		}

		/* Style buttons */
		.btn {
			padding: 10px;
			background-color: #007bff;
			color: #fff;
			cursor: pointer;
			border: none;
			border-radius: 4px;
			font-size: 16px;
		}

		.btn-default {
			background-color: #ccc;
			color: #333;
		}

		/* Add some spacing between form and buttons */
		br {
			margin-bottom: 20px;
		}
	</style>
</head>

<body>

	<form method="post" action="" enctype="multipart/form-data">
		<table class="table">
			<tr>
				<th>Title</th>
				<td><input type="text" name="title" required></td>
			</tr>
			<tr>
				<th>Price</th>
				<td><input type="text" name="price" required></td>
			</tr>
			<tr>
				<th>Quantity</th>
				<td><input type="number" name="quantity" required></td>
			</tr>
		</table>
		<input type="submit" name="add" value="Add new book" class="btn btn-primary">
		<!-- <input type="reset" value="Cancel" class="btn btn-default"> -->
		<a href="./admin.php" class="btn-primary btn">Cancel</a>
	</form>

</body>

</html>