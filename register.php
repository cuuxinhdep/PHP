<?php 
 session_start();
 require_once("./function/user.php");
 if(currentUser() != null){
     header("Location: /test.php");
     die();
 }
?>

<!DOCTYPE html>
<html lang="en">
<?php require_once("head.php"); ?>
<body>
    <div class="container">
        <div class="row">
            <h1>Register</h1>
            <form action="/post_register.php" method="post">
                        <div class="mb-3">
                            <label class="form-label">Full name</label>
                            <input type="text" class="form-control" name="full_name"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password"/>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </form>
        </div>
    </div>
</body>
</html>