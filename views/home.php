

<?php include __DIR__ . '/pars/header.php'; ?>
    <h1><?=$name?></h1>
    <h1><?=$num?></h1>
    <?php if($num > 10): ?>
        <h1>suurem</h1>
    <?php elseif($num == 10): ?>
        <h1>sama</h1>
    <?php else: ?>
        <h1>väiksem</h1>
    <?php endif ?>
<?php include __DIR__ . '/pars/footer.php'; ?>
