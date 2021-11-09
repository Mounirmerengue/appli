<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Ajout produits</title>
</head>
<header>
    <nav id="nav">
        <a href="recap.php"><i class="fas fa-cart-arrow-down"></i>  PANIER</a>
    </nav>
</header>
<body>
    <h1>Ajouter un produit</h1>
    <form action="traitement.php" method="post">
        <p>
            Nom du produit :
            <label class="nomP">
                <input type="text" name="name">
            </label>
        </p>
        <p>
             Prix du produit  : 
            <label class="prix">
                <input type="number" step="any" name="price">
            </label>
        </p>
        <p>
            Quantité désirée :
            <label class="quantite">
                <input type="number" name="qtt" value="1">
            </label>
        </p>
        <p>
            <input class="submitbut" type="submit" name="submit" value="Ajouter le produit">
        </p>
    </form>
</body>
</html>