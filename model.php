
<?php
// Nouvelle fonction qui nous permet d'éviter de répéter du code
function dbConnect()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8', 'root', '');
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}

function getProductByCath($cathegory)
{
    $db = dbConnect();
    $req = $db->prepare("SELECT * from produit where categorie=?");
    $req->execute([$cathegory]);
    return $req;


    
    
}
function topSelling(){
    $db = dbConnect();
    $req = $db->prepare("SELECT * from produit order by vendu desc limit 4");
    $req->execute();
    return $req;
}
function getProduct($product)
{
    $db = dbConnect();
    $req = $db->prepare("SELECT * from produit where nom_produit=?");
    $req->execute([$product]);
    return $req;
}
function getPost($postId)
{
    $db = dbConnect();
    $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
    $req->execute(array($postId));
    $post = $req->fetch();

    return $post;
}

function getComments($postId)
{
    $db = dbConnect();
    $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
    $comments->execute(array($postId));

    return $comments;
}


