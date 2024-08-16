<?php

$list = [
    [
        "id" => "1",
        "product" => "Hotwheel basic",
        "price" => 3.00,
        "thumbnail" => "https://www.toysrus.com.my/dw/image/v2/BDGJ_PRD/on/demandware.static/-/Sites-master-catalog-toysrus/default/dwf3d0c573/9/4/f/8/94f85513bdcdaaff4f5f4dc9df4f3ea6bc33c3da_108289_i4.jpg?sw=500&sh=500&q=75",
        "des" => "xxx"
    ],
    [
        "id" => "2",
        "product" => "Hotwheel neon speeder",
        "price" => 10.00,
        "thumbnail" => "https://down-vn.img.susercontent.com/file/3d2f1610ec086de93c455ede962db0ac",
        "des" => "xxx"
    ],
    [
        "id" => "3",
        "product" => "Hotwheel neon speeder",
        "price" => 10.00,
        "thumbnail" => "https://down-th.img.susercontent.com/file/d2365c5f9cdf51945493f34f3c5ce3c2",
        "des" => "xxx"
    ],
    [
        "id" => "4",
        "product" => "Hotwheel neon speeder",
        "price" => 10.00,
        "thumbnail" => "https://media.entertainmentearth.com/assets/images/27608df5b70e49c3a10e1b74f0bd3aa2xl.jpg",
        "des" => "xxx"
    ],
    [
        "id" => "5",
        "product" => "Hotwheel neon speeder",
        "price" => 10.00,
        "thumbnail" => "https://down-vn.img.susercontent.com/file/3d2f1610ec086de93c455ede962db0ac",
        "des" => "xxx"
    ],
    [
        "id" => "6",
        "product" => "Hotwheel neon speeder",
        "price" => 10.00,
        "thumbnail" => "https://down-th.img.susercontent.com/file/d502f9e8007601161c74e4b91bf5919d",
        "des" => "xxx"
    ],
    [
        "id" => "6",
        "product" => "Hotwheel neon speeder",
        "price" => 10.00,
        "thumbnail" => "https://down-th.img.susercontent.com/file/d502f9e8007601161c74e4b91bf5919d",
        "des" => "xxx"
    ],
    [
        "id" => "6",
        "product" => "Hotwheel neon speeder",
        "price" => 10.00,
        "thumbnail" => "https://down-th.img.susercontent.com/file/d502f9e8007601161c74e4b91bf5919d",
        "des" => "xxx"
    ],
    
];
?>

<!DOCTYPE html>
<html lang="en">
<?php include_once("head.php"); ?>
<body>
<?php include_once("nav.php"); ?>

<div class="container mt-3">
    <div class="row row-cols-1 row-cols-md-3 g-3">
        <?php foreach ($list as $s) : ?>
            <div class="col">
                <div class="card">
                    <img src="<?php echo $s['thumbnail']; ?>" class="card-img-top" alt="<?php echo $s['product']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $s['product']; ?></h5>
                        <p class="card-text">Price: $<?php echo $s['price']; ?></p>
                        <p class="card-text"><?php echo $s['des']; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
