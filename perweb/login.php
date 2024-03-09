<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="login.css">
    

    </head>
<body>
<div class="container">
    <h2 style="color: #fff;">Login</h2>
    <form action="index.php" method="post">
        <div class="form-group">
            <div class="input-group">
                <input type="email" id="email" name="email" class="form-control" placeholder="&#9993; Email">
                <div class="input-group-append">
                    <span class="input-group-text">
                        <i class="bi bi-envelope"></i>
                    </span>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="input-group">
                <input type="password" id="password" name="password" class="form-control" placeholder="&#128274; Password">
                <div class="input-group-append">
                    <span class="input-group-text">
                        <i class="bi bi-lock-fill"></i>
                    </span>
                </div>
            </div>
        </div>

        <button type="submit" class="btn">Login</button>
        <p>Don't have a password? <a href="signup.php" style="color: #ff004f;">Sign up</a></p>
    </form>
</div>
</body>
</html>
