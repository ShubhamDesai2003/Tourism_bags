<?php
include("./connection.php");
$book_id = isset($_GET['book_id']) ? $_GET['book_id'] : 0;

$query = "SELECT * FROM books WHERE book_id = $book_id";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);

$qrCodeImage = "../image/QR_code.jpg";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            display: flex;
            flex-direction: column;
        }

        .receipt-container {
            display: flex;
            justify-content: space-evenly;
            max-width: 800px;
            margin: auto;
            text-align: center;
        }

        .receipt,
        .qr-code {
            border: 1px solid #ddd;
            padding: 20px;
            width: 48%;
            /* Adjusted width to allow for spacing */
            background-color: #f9f9f9;
            border-radius: 8px;
        }

        .qr-code {
            margin-left: 20px;
        }

        .item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            /* Vertically center items */
            margin-bottom: 10px;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .total {
            font-weight: bold;
        }

        hr {
            border: none;
            border-top: 1px solid #ddd;
            margin: 10px 0;
        }

        h2 {
            margin-bottom: 10px;

        }

        .btn {
            margin: 25px auto;
            text-align: center;
        }

        .btn a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            /* Green color */
            color: white;
            text-decoration: none;
            border-radius: 5px;
            border: 1px solid #4CAF50;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .btn a:hover {
            background-color: white;
            color: #4CAF50;
        }
    </style>
</head>

<body>
    <div class="receipt-container">
        <div class="receipt">
            <h2>Receipt</h2>
            <div class="item">
                <img src="../image/<?= basename($row['image']); ?>" alt="Book Image">
            </div>
            <div class="item">
                <span><?= $row['title'] ?></span>
            </div>
            <div class="item">
                <span>₹<?= $row['price'] ?></span>
            </div>
            <hr>
            <div class="total">
                <span>Total:</span>
                <span>₹<?= $row['price'] ?></span>
            </div>
        </div>
        <div class="qr-code">
            <h2>Payment QR Code</h2>
            <img src="<?= $qrCodeImage ?>" alt="Payment QR Code">
        </div>

    </div>
    <div class="btn">
        <a href="../index.php">Return for shopping</a>
    </div>
</body>

</html>

<?php
// Step 4: Close the database connection
mysqli_close($con);
?>