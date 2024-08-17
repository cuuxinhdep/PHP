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
    <div class="row ">
        <div class="col-md-8">
            <div class="mt-5">
            <h2>Shopping Cart</h2>
            <table class="table align-middle ">
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
                        <?php echo $item['NAME']; ?>
                            <div class="card" style="width: 7rem;">
                                <img src="<?php echo $item['thumbnail']; ?>" class="object-fit-fill border rounded" alt="<?php echo $item['NAME'] ?>" class="card-img-top">
                            </div>
                        
                        </td>
                        <td>$ <?php echo $item['price']; ?></td>
                        <td><?php echo $item['id']; ?></td>
                        <td>$<?php echo number_format($item['price'] * $item['id']); ?></td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
            </table>
            </div>
        </div>
        <div class="col-md-4 position-relative">
            <div class="position-sticky align-middle" style="top: 100px;">
            <h2>Cart Totals</h2>
            <table class="table ">
                <tbody>
                    <tr>
                        <td>Subtotal</td>
                        <td>$<?php
                             $sub = 0;
                             foreach($cartItems as $item) {
                                $sub += $item['price'] * $item['id'];
                             }
                             echo number_format($sub,2);
                             ?></td>
                    </tr>
                    <tr>
                        <td>Shipping</td>
                        <td>Free shipping</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>$<?php
                             $sub = 0;
                             foreach($cartItems as $item) {
                                $sub += $item['price'] * $item['id'];
                             }
                             echo number_format($sub,2);
                             ?></td>
                    </tr>
                </tbody>
            </table>
            <a class="btn btn-primary" href="checkout.php">Proceed To Checkout</a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</main>
</body>
</html>