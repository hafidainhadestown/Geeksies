<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Produit 1</title>

</head>
<body>
<div class="main">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ9jRlvEXQg6tgkvMRfQGJRvzGI76hjK-FoIgA89_kDdOY_G9cv">

    <br>
    <h2> Figurine Star Wars The Mandalorian </h2>
    <p> Prix: 119.90 MAD </p>
    <p>Code: 01</p>

    <label for="q">Quantité: </label>
    <select id="qt" name="q">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
    </select>
    <form method="post" action="commande.php" >
        <button type="submit" class="add-to-cart"  >Ajouter au panier</button>


    </form>
</div>
</body>
</html>