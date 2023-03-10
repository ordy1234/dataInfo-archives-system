<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook-Login or Sign up</title>
    <!-- <link rel="stylesheet" href="style2.css"> -->
</head>
<body>
<main>
    <style> * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f2f5;
            color: #1c1e21;
        }

        main {
            height: 90vh;
            width: 100vw;
            position: relative;
            margin: 0 auto;
        }

        footer {
            height: 10vh;
            background-color: #ffffff;
        }

        .row {
            display: flex;
            justify-content: space-around;
            align-items: center;
            width: 100%;
            max-width: 1000px;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        .colm-logo {
            flex: 0 0 50%;
            text-align: left;
        }

        .colm-form {
            flex: 0 0 40%;
            text-align: center;
        }

        .colm-logo img {
            max-width: 400px;
        }

        .colm-logo h2 {
            font: 26px;
            font-weight: 400;
            padding: 0 30px;
            line-height: 32px;
        }

        .colm-form .form-container {
            background-color: #ffffff;
            border: none;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1), 0 8px 16px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            padding: 20px;
            max-width: 400px;
        }

        .colm-form .form-container input, .colm-form .form-container .btn-login {
            width: 100%;
            margin: 5px 0;
            height: 45px;
            vertical-align: middle;
            font-size: 16px;
        }

        .colm-form .form-container input {
            border: 1px solid #dddfe2;
            color: #1d2129;
            padding: 0 8px;
            outline: none;
        }

        .colm-form .form-container input:focus {
            border-color: #1877f2;
            box-shadow: 0 0 0 2px #e7f3ff;
        }

        .colm-form .form-container .btn-login {
            background-color: #1877f2;
            border: none;
            border-radius: 6px;
            font-size: 20px;
            padding: 0 16px;
            color: #ffffff;
            font-weight: 700;
        }

        .colm-form .form-container a {
            display: block;
            color: #1877f2;
            font-size: 14px;
            text-decoration: none;
            padding: 10px 0 20px;
            border-bottom: 1px solid #dadde1;
        }

        .colm-form .form-container a:hover {
            text-decoration: underline;
        }

        .colm-form .form-container .btn-new {
            background-color: #42b72a;
            border: none;
            border-radius: 6px;
            font-size: 17px;
            line-height: 48px;
            padding: 0 16px;
            color: #ffffff;
            font-weight: 700;
            margin-top: 20px;
        }

        .colm-form p {
            font-size: 14px;
        }

        .colm-form p a {
            text-decoration: none;
            color: #1c1e21;
            font-weight: 600;
        }

        .colm-form p a:hover {
            text-decoration: underline;
        }

        .footer-contents {
            position: relative;
            max-width: 1000px;
            margin: 0 auto;
        }

        footer ol {
            display: flex;
            flex-wrap: wrap;
            list-style-type: none;
            padding: 10px 0;
        }

        footer ol:first-child {
            border-bottom: 1px solid #dddfe2;
        }

        footer ol:first-child li:last-child button {
            background-color: #f5f6f7;
            border: 1px solid #ccd0d5;
            outline: none;
            color: #4b4f56;
            padding: 0 8px;
            font-weight: 700;
            font-size: 16px;
        }

        footer ol li {
            padding-right: 15px;
            font-size: 12px;
            color: #385898;
        }

        footer ol li a {
            text-decoration: none;
            color: #385898;
        }

        footer ol li a:hover {
            text-decoration: underline;
        }

        footer small {
            font-size: 40px;
        }</style>
    <div class="row">
        <div class="colm-logo">
            <img src="data:image/png;base64,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" alt="Logo">
            <h2>???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ??????????????????????????????????????????????????????????????????????????????????????????????????? </h2>
        </div>
        <div class="colm-form">
            <form action="index.html" method="post">
                <label for="username">Username:</label>
                <input type="text" name="username"><br>
                <label for="password">Password:</label>
                <input type="password" name="password"><br>
                <input type="submit" id="login_btn" value="Login">
            </form>
        </div>
    </div>
    </div>
</main>
<footer>
    <div class="footer-contents">
        <ol>
            <li>English (UK)</li>
            <li><button>+</button></li>





        </ol>
        <small>??????????????????????????????????????????????????????????????????????????????????????????????????? ?? 2022</small>
    </div>
</footer>
</body>
</html>



