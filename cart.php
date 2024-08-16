<?php
session_start();
$cart = isset($_SESSION["cart"])?$_SESSION["cart"] : [];
require_once("./function/connect.php");
require_once("./function/cart.php");
$cartItems = getCartItem();
?>

<!DOCTYPE html>
<html lang="en">
<?php include_once("head.php"); ?>
<body>
<?php include_once("nav.php"); ?>
<main>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h2>Shopping cart</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($cartItems as $item) :?>
                    <tr>
                        <td>
                            <div class="card">
                                <img src="<?php echo $item['thumbnail']; ?>" alt="<?php echo $item['NAME'] ?>" class="card-img-top">
                            </div>
                        <?php echo $item['NAME']; ?>
                        </td>
                        <td>$</td>
                        <td><?php echo $item['id']; ?></td>
                        <td>$</td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
            </table>
        </div>
        <div class="col-md-4">
            <h2>Cart Totals</h2>
            <table class="table">
                <tbody>
                    <tr>
                        <td>Subtotal</td>
                        <td>$</td>
                    </tr>
                    <tr>
                        <td>Shipping</td>
                        <td>Free shipping</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>$</td>
                    </tr>
                </tbody>
            </table>
            <button class="btn btn-primary">Proceed to checkout</button>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</main>
</body>
</html>