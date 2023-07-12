<?php
// nettoinles donnée en POST:htmlspetialchars

$mail=(isset($_POST['mail'])&& !empty($_POST['mail'])) ? htmlspecialchars($_POST['mail'])  : null;
$pass=(isset($_POST['pass'])&& !empty($_POST['pass'])) ? htmlspecialchars($_POST['pass'])  : null;
//si email et le mot de passe exploitable
if($mail&&$pass){
    //cryptage d'email et la pass
    $mail=md5(md5($mail).strlen($mail));
    $pass=sha1(md5($pass).md5($pass));
    //connexion a la base do données
    try{
    //connexion
    include_once("inc/constants.inc.php");
    $conn=new PDO('mysql:host=' . HOST . ';dbname=' . DATA . ';port=' . PORT . ';charset=utf8', USER, PASS);
    //gestion d'attributs de connecxion:exceptionet retour du select
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    //preparation de la requête
    $qry = $conn->prepare('SELECT * FROM connexion WHERE mail=? AND pass=? AND active=?');
    $qry->execute(array($mail,$pass,1));
    //si la ligne est trouvee
    if($qry->rowCount()===1){
        $row = $qry->fetch();
        //redirection à une page
        header('location:catalogue.php');

    }else{
        echo'user inconue';
    }
    }catch(PDOExeption$err){
        echo $err->getMessage();
    }
}else{
    echo'email ou mot de passe inexploitable';
}

?>