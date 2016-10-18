<?php
session_start(); 
$_POST["ok"]="1"; 
 
if (isset($_POST["ok"]))
{
	$username=$_POST["username"];
	$password=$_POST["password"];


include ("content/include/dbconnexion.php");


/* $link1 = @mysql_connect($host,$user,$pass)
   or die("Connection impossible");
@mysql_select_db($bdd, $link1)
   or die("Connection impossible � la base de donn�es");
*/ 

$link1 = $conn ;

//$sql = "SELECT  `user`.*,`fonction`.`Design_fonction` FROM user ,`fonction` where Email_user='".$username."' and password='".$password."' ";
$sql = " SELECT * FROM user WHERE Email_user = '". $username ."' AND password = '". $password ."'; " ;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	$row = $result->fetch_assoc();

	$_SESSION['Nom_user']=$row['Nom_user'];
	$_SESSION['Prenom_user']=$row['Prenom_user'];
	$_SESSION['pseudo']=$row['pseudo'];
	$_SESSION['id_fonction']=$row['id_fonction'];
	$_SESSION['Design_fonction']=$row['Design_fonction'];

/*
$requete = mysql_query("SELECT  `user`.*,`fonction`.`Design_fonction` FROM user ,`fonction` where pseudo='".$ident."' and password='".$password."' and `user`.`id_fonction` =  `fonction`.`id_fonction`")
 or die ("Erreur ".mysql_errno()." : " . mysql_error());
$row=mysql_fetch_array($requete);
$rows=mysql_affected_rows();

if ($rows > 0)
{
	@$_SESSION['Nom_user']=$row['Nom_user'];
	@$_SESSION['Prenom_user']=$row['Prenom_user'];
	@$_SESSION['pseudo']=$row['pseudo'];
	@$_SESSION['id_fonction']=$row['id_fonction'];
	@$_SESSION['Design_fonction']=$row['Design_fonction'];
	
*/
	
  header('Location: /home.php');
  exit();
}
else{
  header('Location: /login.php?');
  exit();
}


}
else{
	echo "Imbécile!!!!";
	}

?> 
