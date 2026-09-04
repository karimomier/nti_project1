<?php
include_once "navbar.php"
?>
<head>
    <style>

            .body {
                background-color: rgb(248, 247, 247);
                margin: 0;
            }


            .login-container {
                background-color: white;
                width: 80%;
                max-width: 1000px;
                min-height: 500px;
                margin: auto;
                display: flex;
                box-shadow: 0 2px 15px rgba(0, 0, 0, 0.08);
                border-radius: 8px;
                overflow: hidden;
            }


            .login-image {
                width: 50%;
            }

            .login-image img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                display: block;
            }


            .login-content {
                width: 50%;
                padding: 40px;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }


            .login-content h1 {
                font-size: 28px;
                margin-bottom: 5px;
                font-weight: bold;
                text-align: center;
            }


            .login-content p {
                color: #777;
                margin-bottom: 30px;
                text-align: center;
            }


            .form-group {
                margin-bottom: 15px;
            }

            .form-group input {
                width: 100%;
                padding: 12px;
                border: 1px solid #ddd;
                border-radius: 5px;
                box-sizing: border-box;
            }


            .form-options {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin: 15px 0;
            }

            .forgot-link {
                color: #333;
                text-decoration: none;
                font-size: 14px;
            }


            .login-btn {
                width: 100%;
                padding: 12px;
                background-color: #3c2415;
                color: white;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }

            .login-btn:hover {
                background-color: #3c2415;
            }


            .register {
                text-align: center;
                margin-top: 30px;
                font-size: 14px;
            }

            .register a {
                color: #3c2415;
                font-weight: bold;
                text-decoration: none;
            }
        </style>

    </head>

    <body class="body">

   
        <div class="mt-3"></div>
        <div class="login-container">

            <div class="login-image">
                <img src="login_image.webp" alt="">
            </div>

            <form id="login-form" class="login-content">

                <div class="form-group">
                    <h1>Welcome Back</h1>
                    <p>Login to your account</p>

                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Enter Your Email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" placeholder="Enter Your Password" required>
                </div>

                <div class="form-options">
                    <label class="checkbox-label">
                        <input type="checkbox" id="remember">
                        <span>Remember me</span>
                    </label>

                    <a href="#" class="forgot-link">Forgot password?</a>
                </div>

                <button type="submit" class="login-btn" id="submitBtn">
                    Login
                </button>

                <div class="register">
                    Don't have an account?
                    <a href="#">Register</a>
                </div>

            </form>

        </div>

     <?php
include_once "footer.php"
?>