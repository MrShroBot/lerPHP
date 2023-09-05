<?php
    $name = "Kapar";
    $num = rand(0,20);
?>

<?php include 'views/pars/header.php' ?>
    <h1><?=$name?></h1>
    <h1><?=$num?></h1>
    <?php if($num > 10): ?>
        <h1>suurem</h1>
    <?php elseif($num == 10): ?>
        <h1>sama</h1>
    <?php else: ?>
        <h1>väiksem</h1>
    <?php endif ?>
<?php include 'views/pars/footer.php' ?>