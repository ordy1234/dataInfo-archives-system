<html>
<body>
<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Create the email and send the message
    $to = "example@example.com";
    $email_subject = "Website Contact Form: $name";} ?>
<div class="contact-form">
    <h2>Contact Us</h2>

    <form action="contactUs.php" method="POST">
        <label>Name:</label>
        <input type="text" name="name">
        <label>Email:</label>
        <input type="email" name="email">
        <label>Message:</label>
        <textarea name="message"></textarea>
</body>
</html>