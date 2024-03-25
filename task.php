<!DOCTYPE html>
<html>

<head>
    <title>Sample</title>
    <link rel="stylesheet" href="./views/components/style.css">
</head>

<body>
    <?php
    require './handlers/page.php';
    Page::part('header');
    Page::part('comments');
    Page::part('footer');
    ?>
</body>

</html>