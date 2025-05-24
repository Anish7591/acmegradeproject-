
<?php
$conn = new mysqli("localhost", "root", "", "ecommerce_db");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$name = $_POST['name'];
$price = $_POST['price'];
$details = $_POST['details'];
$owner = $_POST['owner'];

$target_dir = "../../uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$img_path = "uploads/" . basename($_FILES["image"]["name"]);

if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    $sql = "INSERT INTO product (name, price, details, impath, owner) VALUES ('$name', '$price', '$details', '$img_path', '$owner')";
    if ($conn->query($sql) === TRUE) {
        echo "Product added successfully.";
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "Failed to upload image.";
}
$conn->close();
?>
