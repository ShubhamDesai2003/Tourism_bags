<?php
	session_start();
	$title = "List book";

    include('./connection.php');

    $query = "select * from books";

    $result = mysqli_query($con, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Books</title>
    <style>
        /* Style the container */
        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        /* Style the header */
        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        /* Style the button and link */
        .btn {
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }

        /* Style the table */
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
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
            border-bottom: 1px solid #ddd;
        }

        /* Style table actions links */
        td a {
            text-decoration: none;
            color: #007bff;
            margin-right: 10px;
        }

        /* Style table actions links on hover */
        td a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="container">
	<a href="admin_signout.php" class="btn btn-primary">Sign out!</a>
        <table class="table">
            <tr>
                <th>Book Id</th>
                <th>Name</th>
                <th>Image</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['book_id']; ?></td>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['image']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td><?php echo $row['quantity']; ?></td>
                    <td><a href="admin_edit.php?book_id=<?php echo $row['book_id']; ?>">Edit</a></td>
                    <td><a href="admin_delete.php?book_id=<?php echo $row['book_id']; ?>">Delete</a></td>
                </tr>
            <?php } ?>
            </table>
            <p class="header"><a href="admin_add.php" class="btn">Add new book</a></p>
    </div>

</body>

</html>