<?php //if(isset($_POST['submit'])){
//    $username = $_POST['username'];
//    $password = $_POST['password'];
//    if($username == 'admin' && $password == '1234') {
//        echo 'Login success';
//    } else {
//        echo 'Incorrect username or password';
//    }
//}
//?>
<!---->
<!--<form action="" method="post">-->
<!--    <label>Username</label><br/>-->
<!--    <input type="-->
<html>
<head>
    <title>Login Form</title>
    <script type="text/javascript">
        function validateForm() {
            var username = document.forms["loginform"]["username"].value;
            var password = document.forms["loginform"]["password"].value;

            if (username == "admin" && password == "1234") {
                alert("Login Successful");
            } else {
                alert("Incorrect username or password!");
            }
        }
    </script>
</head