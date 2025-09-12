<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
      .container {
            background: linear-gradient(to right, #80d4ff , #d9b3ff);
        }
        .consant{
            margin: auto;
            margin-top: 12%;
            display: flex;
            width: 800px;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }
        /* Left Section */
        .left {
        width: 50%;
        background: url("../img/car3.jpg") no-repeat center center/cover;
        color: #fff;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding: 30px;
        }

        .left h2 {
        font-size: 24px;
        margin-bottom: 10px;
        }

        .left p {
        margin: 0 0 20px;
        font-size: 16px;
        }

        .price {
        font-size: 22px;
        font-weight: bold;
        }

        /* Right Section */
        .right {
        width: 50%;
        padding: 40px;
        }

        .right h2 {
        margin-bottom: 20px;
        font-size: 22px;
        font-weight: bold;
        }

        .form-group {
        margin-bottom: 15px;
        }

        .form-group input {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 14px;
        }

        .form-group input:focus {
        border-color: #4a90e2;
        outline: none;
        }

        .checkbox {
        margin: 15px 0;
        font-size: 14px;
        }

        .checkbox a {
        color: #4a90e2;
        text-decoration: none;
        }

        .checkbox a:hover {
        text-decoration: underline;
        }

        .btn {
        display: block;
        width: 100%;
        padding: 12px;
        background: #4a90e2;
        color: white;
        border: none;
        border-radius: 6px;
        font-size: 16px;
        cursor: pointer;
        transition: background 0.3s ease;
        }

        .btn:hover {
        background: #357ab7;
        }
</style>
<body class="container">
    <div class="consant">
        <!-- Left Side -->
        <div class="left">
        <h2><b><i>GET YOUR CAR SHINNY</i></b></h2>    
        </div>

        <!-- Right Side -->
        <div class="right">
        <h2>Registration Form</h2>
        <form action="../page/customer.php?function=register" method="post">
            <div class="form-group">
            <input type="text" name="fname" placeholder="Full Name">
            </div>
            <div class="form-group">
            <input type="email" name="email" placeholder="Example@email.com">
            </div>
            <div class="form-group">
            <input type="integer" name="contact" placeholder="Contact No.">
            </div>
            <div class="form-group">
            <input type="password" name="pass" placeholder="Password">
            </div>
            <div class="form-group">
            <input type="password" name="cpass" placeholder="Confirm Password">
            </div>
            <div class="checkbox">
            <input type="checkbox"> By signing up, you agree to the 
            <a href="#">Play Term of Service</a>
            </div>
            <button type="submit" class="btn">Register</button>
        </form>
        </div>
    </div>
    
</body>
</html>