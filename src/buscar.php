<?php
$text=$_POST["buscador"];
$buscar=$_POST["buscar"];
include_once("baseDatos.php");

$sql="SELECT nombre FROM producto WHERE nombre LIKE '$text%'";
$res=$bd->query($sql);
echo $sql;

if ($res->num_rows > 0) {
	while($rowData = mysqli_fetch_array($res)){
        //$rowData["id"].'<br>';
  		  $rowData["nombre"].'<br>';
        echo $prod;

        //el filtro de busqueda no funciona porque no se redireccionaba a la pagina del producto, se intento:(

        //if ($rowData=="all mix"){header("location:../productos/allMix.php");}
        //else if ($rowData==["bigone"]){header("location:../productos/bigOne.php");} 
        
        // $strProd= print_r($prod);
        /*
        switch($prod){
            case'all mix':header("Location:../productos/allMix.php");break;
            case'bigone':header("Location:../productos/bigOne.php");break;
            case'coco mix':header("Location:../productos/cocoMix.php");break;
            case'cookies gelato':header("Location:../productos/cookiesGelato.php");break;
            case'deeper undergound':header("Location:../productos/deeperUnder.php");break;
            case'euphoria':header("Location:../productos/euphoria.php");break;
            case'ligthmix':header("Location:../productos/ligthMix.php");break;
            case'medicalmass':header("Location:../productos/medicalMass.php");break;
            case'painkiller':header("Location:../productos/painKiller.php");break;
            case'purplequeen':header("Location:../productos/purpleQueen.php");break;
            case'royalAK':header("Location:../productos/royalAK.php");break;
            case'royalmedic':header("Location:../productos/royalMedic.php");break;
            case'sweetzz':header("Location:../productos/sweetZZ.php");break;
            case'topcandy':header("Location:../productos/topCandy.php");break;
            case'topveg':header("Location:../productos/topVeg.php");break;
            case'wormhumus':header("Location:../productos/wormHumus.php");break;
        }*/
	}       

}

?>