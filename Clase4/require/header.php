<head>
    <title><?= $titulo; ?></title>
    <?php foreach($meta as $index): ?>
        <meta <?=$index['item']?>="<?=$index['valueItem']?>" content="<?=$index['content']?>"/>
    <?php endforeach; ?>
</head>
