<?

$id = isset($_GET['id']) ? $_GET['id'] : 0;

$query = "SELECT * FROM bags WHERE book_id = $id";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);

$name = $row['title'];


$query = "INSERT INTO orders (order_id, name) VALUES ('$id', '$name')";
$result = mysqli_query($con, $query);

header("Location: ./purchase.php");
exit();



?>