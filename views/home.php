<?php include __DIR__ . '/pars/header.php'; ?>
    <h1><?=$name?></h1>
    <h1><?=$num?></h1>
    <?php if($num > 10): ?>
        <h1>Suurem</h1>
    <?php elseif($num == 10): ?>
        <h1>Pool</h1>
    <?php else: ?>
        <h1>Väiksem</h1>
    <?php endif ?>
<?php include __DIR__ . '/pars/footer.php'; ?>
