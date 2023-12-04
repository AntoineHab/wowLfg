<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="png" href="./Public/asset/content/icon.png">
    <?php foreach ($css as $value):?>
    <link rel="stylesheet" href="./Public/asset/style/<?=$value?>">
    <?php endforeach ?>
    <?php foreach ($js as $value):?>
    <script src="./Public/asset/script/<?=$value?>" async></script>
    <?php endforeach ?>
    <title><?=$title?></title>
</head>
<body>
    <?=$content?>
    <!-- <?=$footer?> -->
</body>
</html>