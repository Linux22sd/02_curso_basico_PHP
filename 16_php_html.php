
<?php
$imagenes = ["https://www.tecnologia-informatica.com/wp-content/uploads/2018/07/tipos-de-computadoras-1.jpeg",
"https://soportecnia.com/wp-content/uploads/2020/03/tipos-de-computadoras-420x280_c.jpg",
"https://www.rentadvisor.com.co/wp-content/uploads/images-2-500x281.jpg"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Html desde php</h1>
    <?php foreach($imagenes as $imagen){ ?>
        <img src="<?php echo $imagen; ?>">
    <?php } ?>
   
</body>
</html>