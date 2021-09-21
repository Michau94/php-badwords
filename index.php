<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP BadWord</title>
</head>
<body>
    <form action="index.php" method="GET">
        <input type="text" name="word" placeholder="Insert word here..." value="dolor">
        <button type="submit">Censor</button>
    </form>

   <?php
   $text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius veniam, veritatis nobis similique suscipit hic, recusandae, adipisci deserunt tenetur dolor voluptas quisquam alias soluta eos dolores voluptatum obcaecati perspiciatis facilis.';
   $length = strlen($text);
   $censored = $_GET['word'];
   $replaced = str_replace(' ' . $censored . ' ', ' *** ', $text);
   $lengthReplaced= strlen($replaced);
   
    ?>

    <h1>Paragrafo Originale</h1>
    <p>
        <?php echo $text; 
        echo " Questo paragrafo è lungo: $length";
        ?>
    </p>

    <h1>Paragrafo Censurato</h1>
     <p>
        <?php        
        echo $replaced;
        echo " Questo paragrafo è lungo: $lengthReplaced"; 
        ?>
     </p>
</body>
</html>