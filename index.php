<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Estrutura de Dados - Login</title>
    
</head>
<body>
    <div class="container">
       
        <div class="left-container">
            <h2>Join and be part of us<br>Login Now!</h2>
            <img src="./assets/social.svg" class="left-container-image" alt="imagem">
        </div>
        <div class="right-container">
            <?php 

                session_start();

                if(isset($_SESSION['error'])) {
                    echo '<div class="alert">
                            '. $_SESSION['error'] .'
                            <span class="closebtn" onclick="this.parentElement.style.display="'.'none'.'";">&times;</span>
                        </div>';
                        unset($_SESSION['error']);
                }
            ?>
            
            <div class="login-container">
                <form action="auth.php">
                    <h1>log in</h1>

                    <div class="textfield">
                        <label for="username">Username</label>
                        <input type="text" name="username" placeholder="Enter an username" required>
                    </div>

                    <div class="textfield">
                        <label for="password">Password</label>
                        <input type="password" name="password" placeholder="Enter a password" required>
                    </div>

                    <button type="submit" class="bt-login">Log In</button>
                    <div class="login-footer">
                        <a href="#">Forgot password?</a>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</body>
</html>
