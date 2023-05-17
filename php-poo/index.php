<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once"classe/Produit/Produit.php";
    //on fabrique un objet de la classe Produit 
    $produit=new Produit ();
    echo '<br>';
    //ont déclenche la méthode sayHello() de l'objet $produit 
    echo $produit ->sayHello('John');
    echo$produit;
    //on affecte une valeur au prix du produit 
    $produit->setPrix(10);
    $produit ->setNombre(5);
    echo '<br>' .$produit->calculTotal().'£';


    ?>
</body>
</html>