<?php
$menu =[
    "pho ga",
    "pho bo",
    "tra da"
];

$sv = [
    "name" => "Nguyen Van A",
    "age" => 14,
    "tel" => "0987654321"

];

$list_sv =[
    [
        "name" => "Do Viet Anh",
        "age" => 18,
        "tel" => "091812281" 
    ],
    [
        "name" => "Do Van B",
        "age" => 24,
        "tel" => "09866574"
    ]
];

$ban_be =[
    [
        "name" => "Nguyen Quy Duc Anh",
        "age" => 22,
        "tel" => "09875431",
        "relationship" => "fr"
    ],
    [
        "name" => "Dang Hoang Anh",
        "age" => 22,
        "tel" => "09872123",
        "relationship" => "fr"
    ]
];

$debt = [
    "Name" => "Dang Hoang Anh",
    "Age" => 22,
    "Debt" => "698.000 vnd",
    "Payment date" => "UNKNOWN🙅‍♂️🙅‍♂️🙅‍♀️" 
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>THuc don ngay hom nay</h1>
    <ul>
        <?php
        foreach($menu as $item){ ?>
            <li><?php echo $item; ?></li>    
        <?php } ?>
    </ul>

        <h2>Thong tin sinh vien</h2>
        <h3><?php echo $sv ['name']; ?></h3>
        <h3><?php echo $sv ['age']; ?></h3>
        <h3><?php echo $sv ['tel']; ?></h3>

        <h2>List Sinh Vien</h2>
        <?php foreach($list_sv as $s) : ?>
            <div>
                <h3><?php echo $s['name']; ?></h3>
                <h3><?php echo $s['age']; ?></h3>
                <h3><?php echo $s['tel']; ?></h3>
            </div>
        <?php endforeach; ?>

        <h1>Cunt Friend</h1>
        <?php
        foreach($ban_be as $s) : ?>
        <div>
            <h3><?php echo $s['name']; ?></h3>
            <h3><?php echo $s['age']; ?></h3>
            <h3><?php echo $s['tel']; ?></h3>
            <h3><?php echo $s['relationship']; ?></h3>
        </div>
        <?php endforeach; ?>

    <h1>DEBT</h1>
        <ol>
            <?php 
            foreach($debt as $item){ ?>
                <li><?php echo $item; ?></li>
            <?php } ?>
        </ol> 
</body>
</html>