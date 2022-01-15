
<?php
// connexion a la base de donnee
$pdo = new PDO('mysql:host=localhost;dbname=immobilier','root','', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING,PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'));
/*var_dump($pdo);*/

$_countent ="";

define("URL","http://" . $_SERVER["HTTP_HOST"] . "/annonce/");
define("RACINE_SITE", $_SERVER["DOCUMENT_ROOT"] . "/annonce/");

?>