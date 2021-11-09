<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Récapitulatif des produits</title>
</head>
<header>
    <nav id="nav">
        <a href="index.php"><i class="fas fa-arrow-circle-left"></i>  RETOUR</a>
    </nav>
</header>
<body>
    <?php
        if(!isset($_SESSION['products']) || empty($_SESSION['products'])){
            echo "<p>Aucun produit en session...</p>";
        }
        else{
            echo "<table>",
            "<thead>",
               "<tr>",
                    "<th>#</th>",
                   " <th>Nom</th>",
                    "<th>Prix</th>",
                   " <th>Quantité</th>",
                    "<th>Total</th>",
               "</tr>",
            "</thead>",
            "<tbody>";
            $totalGeneral = 0; 
        foreach($_SESSION['products'] as $index => $product){
            echo "<tr>",
                        "<td>".$index."</td>",
                        "<td>".$product['name']."</td>",
                        "<td>".number_format($product['price'], 2, ",", "&nbsp;")."&nbsp:€</td>",
                        "<td>".$product['qtt']."</td>",
                        "<td>".number_format($product['total'], 2, ",", "&nbsp;")."&nbsp:€</td>",
                 "</tr>";
       $totalGeneral+= $product['total'];
        }
        echo  "<tr>",
                    "<td colspan=4>Total général : </td>",
                    "<td><strong>".number_format($totalGeneral, 2, ",", "&nbsp;")."&nbsp;€</strong></td>",
              "</tr>",
            "</tbody>",
            "</table>";
        }
    ?>
</body>

</html>
