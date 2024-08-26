<?php
require_once("./function/connect.php");
$sql = "Select * from products";
$products = select($sql);
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once("./html/head.php"); ?>
<body>
<?php include_once("./html/nav.php"); ?>
<main>
    <div class="container">
        <div class="row">
          <?php foreach($products as $item):?>
            <div class="col-3 mb-3 mt-3">
              <div class="card">
                <img src="<?php echo $item["thumbnail"] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $item["NAME"] ?></h5>
                  <p>$<?php echo $item["price"] ?></p>
                  <p class="card-text"><?php echo $item["description"] ?></p>
                  <a href="product.php?id=<?php echo $item["id"]; ?>" class="btn btn-primary">Detail</a>
                </div>
              </div>
            </div>
          <?php endforeach;?>  
        </div>
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>