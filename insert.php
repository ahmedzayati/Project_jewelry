<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="ins.php" method="post" enctype="multipart/form-data">
            nom<input type="text" name="nom_produit" />
            description<input type="text" name="description"/>
            prix<input type="text"  name="prix"/>
            prix pro<input type="number" name="prix_promotion"/>
            image<input type="file" name="image"/>
            <input type="submit" value="inserer" />

    </form>
</body>
</html>