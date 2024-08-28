<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php require_once("head.php"); ?>
<body>
    <div class="container">
        <div class="row">
            <h1>Login</h1>
            <form action="/post_login.php" method="post">
                        
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password"/>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
        </div>
    </div>
</body>
</html>