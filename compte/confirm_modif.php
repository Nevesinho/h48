
  <?php

$db = new PDO('mysql:host=localhost;dbname=h48', 'root','');

$req = $db->prepare('UPDATE articles SET titre=:titre WHERE id=:num LIMIT 1');

$req->bindValue(':num',$_POST['IDtable'],PDO::PARAM_INT);
$req->bindValue(':titre', $_POST['titre'],PDO::PARAM_STR);

$executeIsOk = $req->execute();

if($executeIsOk){
  header("Location: ../index2.php#experience");
}

else{
    $message = 'L annonce n a pas  été mis a jour';
}

?>
