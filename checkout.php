<?php
require_once("./function/connect.php");
require_once("./function/cart.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once("head.php"); ?>
<body>
<?php include_once("nav.php"); ?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Billing details</h2>
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">First & last name</label>
                    <input type="text" class="form-control" id="name">
                </div>
                </form>
        </div>
        <div class="col-md-6">
            <h2>Cart summary</h2>
            </div>
    </div>
    </div>
</body>
</html>