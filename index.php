<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>WEB</h1>
    <ol>
        <li><a href="index.php?id=HTML">HTML</a></li>
        <li><a href="index.php?id=CSS">CSS</a></li>
        <li><a href="index.php?id=JavaScript">JavaScript</a></li>
    </ol>
    <h2>
        <?php
            echo $_GET['id'];
        ?>
    </h2>
    <?php
        // echo read data/id file
        
    ?>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis ex, sit id eos consectetur tenetur laboriosam amet quibusdam asperiores repellendus provident eaque ratione mollitia facere commodi earum nobis blanditiis magni?
</body>
</html>