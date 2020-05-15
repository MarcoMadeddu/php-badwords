<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>First exercise with PHP</h1>
    <?php
        $par = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro eius harum numquam ad obcaecati reprehenderit aliquid dicta distinctio totam facilis ab quas, placeat laborum rerum aperiam enim adipisci blanditiis rem. ";
    ?>
    <h4>Testo iniziale: </h4>
    <h4><?php echo $par; ?></h4>
    <span>La lunghezza del paragrafo è di <?php echo strlen($par); ?> caratteri</span>
    <h2>Badword: <?php echo $_GET["name"] ?></h2>
    <?php
        $newpar =str_replace($_GET["name"], "***", $par);
    ?>
    <h4>Testo modificato:</h4>
    <h4><?php echo $newpar ?></h4>
</body>
</html>