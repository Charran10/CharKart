<?php
// track_order.php
$conn = new mysqli('localhost', 'root', '', 'charkart_orders');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $order_id = $_GET['order_id'];

    $sql = "SELECT * FROM orders WHERE order_id='$order_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "Order Status: " . $row['status'];
    } else {
        echo "Order not found!";
    }
}
?>
