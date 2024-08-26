<?php
require_once("./function/connect.php");
 ?>

<!DOCTYPE html>
<html lang="en">
<?php require_once("head.php"); ?>
<body>
<div class="container text-center mt-5">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Payment Failed</h1>
                <p class="card-text">Unfortunately, your payment was not successful. Please try again or choose a different payment method.</p>
                <a href="/checkout.php" class="btn btn-warning">Retry Payment</a>
                <a href="test.php" class="btn btn-primary">Return to Home</a>
            </div>
        </div>
    </div>
</body>
</html>