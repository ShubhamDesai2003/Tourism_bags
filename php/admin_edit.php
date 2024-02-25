<?php

    include("./connection.php");

	if(isset($_GET['book_id'])){
		$id= $_GET['book_id'];
	} else {
		echo "Empty query!";
		exit;
	}

	if(!isset($id)){
		echo "Empty isbn! check again!";
		exit;
	}

	// get book data
	$query = "SELECT * FROM bags WHERE book_id = '$id'";
	$result = mysqli_query($con, $query);
	if(!$result){
		echo "Can't retrieve data " . mysqli_error($conn);
		exit;
	}
	$row = mysqli_fetch_assoc($result);
?>
	<form method="post" action="edit_book.php" enctype="multipart/form-data">
		<table class="table">
			<tr>
				<th>Bag Id</th>
				<td><input type="text" name="book_id" value="<?php echo $row['book_id'];?>" readOnly="true"></td>
			</tr>
			<tr>
				<th>Name</th>
				<td><input type="text" name="title" value="<?php echo $row['title'];?>" required></td>
			</tr>
			<tr>
                <th>Image</th>
				<td><input type="file" name="image"></td>
			</tr>
            
			<tr>
                <th>Price</th>
				<td><input type="text" name="price" value="<?php echo $row['price'];?>" required></td>
			</tr>
            <tr>
                <th>Quantity</th>
                <td><input type="text" name="quantity" value="<?php echo $row['quantity'];?>" required></td>
            </tr>

		</table>
        <button>Submit</button>
		<input type="reset" value="cancel" class="btn btn-default">
	</form>
	<br/>
