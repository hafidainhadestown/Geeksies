<?php
session_start();
if($_SESSION['acces']!="oui")
{
    header("Location:pageindex.php");
}
else
{
    echo "<h4>Bonjour ". $_SESSION['nom']."</h4>";
    if( !isset($_SESSION['html']))  $_SESSION['html']=0;
    $_SESSION['html'] ++;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>La page du (X)HTML.</title>
</head>
<body>
<h4> Accès réservé aux personnes autorisées</h4>
<p> Visiter les autres pages du site :
    <?php echo "Page XHTML vue ". $_SESSION['html']. " fois"; ?>
<ul>
    <li><a href="index2.html">Page d'accueil </a> </li>
    <li><a href="pagephp.php">Page PHP 5</a>
        <? if(isset($_SESSION['php']))echo " vue ". $_SESSION['php']. " fois"; ?>
    </li>
</ul>
<h3>Contenu de la page XHTML</h3>
<p align="center"><a href="authen.php">Authentification</a> </p>
<p align="center"><a href="commande.php">Panier</a> </p>
<div class="photos">
    <table border=0 width="60%"  height="600" cellspacing="10" align="center">
        <caption><strong>Nos nouvautés</strong> </caption>
        <tr>
            <th>
                <a href="produit1.php" >
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ9jRlvEXQg6tgkvMRfQGJRvzGI76hjK-FoIgA89_kDdOY_G9cv"  > </th>

            </a>
            <th>
                <a href="produit2.php">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRRDg1233OBRof9toTxbX48iDrkPYEr-hPt7BDHn-h_u3ScPZTX">
                </a>
        </tr>
        <tr>
            <th>
                <a href="produit3.php">
                    <img src="data:image/jpeg;base64,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">          </a>
            <th>
                <a href="produit4.php">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQmjGOTiMHW-f5j-3kbkHC9L1u8B25Z_wpJufyNGw6_OZlN4gYQ">
                </a>
        </tr>
    </table>
</div>

</body>