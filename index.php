<?php
$text = 'Lorem ipsum dolor, badword sit amet consectetur adipisicing elit. Molestias voluptate badword ipsam qui, neque iusto nulla ducimus deserunt cupiditate badword ullam nisi tenetur quam perspiciatis saepe deleniti. Porro sapiente nobis dolor aperiam.';
$censored = $_GET['censoredWord'];
$modifiedText = str_replace( $censored , '***' , $text); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad word</title>
</head>

<body>

    <p><?php echo $text; ?></p>
    <p> la lunghezza del paragrafo:<?php echo strlen($text); ?></p>

    <form method="get">
        <input type="text" name="censoredWord" placeholder="inserisci la parola da censurare">
        <button type="submit"></button>
    </form>
    <p>
        <p><?php echo $modifiedText ?></p>
        <p> la lunghezza del paragrafo:<?php echo strlen($modifiedText); ?></p>
    </p>

</body>

</html>