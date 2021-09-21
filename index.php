<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

   <?php
   $text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius veniam, veritatis nobis similique suscipit hic, recusandae, adipisci deserunt tenetur dolor voluptas quisquam alias soluta eos dolores voluptatum obcaecati perspiciatis facilis.';
   $length = strlen($text);
    ?>

    <p><?php echo $text; 
     echo "Questo paragrafo è lungo: $length" ?></p>
</body>
</html>