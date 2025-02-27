<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $design_type = htmlspecialchars($_POST['design_type']);
    $details = htmlspecialchars($_POST['details']);

    // Simulating order processing (you can add mail functionality here)
    $message = "Order received from $name ($email) for a $design_type.\nDetails: $details";

    // Optional: Save order to a file
    file_put_contents("orders.txt", $message . "\n\n", FILE_APPEND);

    // Redirect back with a success message
    echo "<script>alert('Your order has been submitted! You will receive an email or phone notification.'); window.location.href='index.html';</script>";
}
?>