<?
include_once("../../class/usuarios.class.php");
$usr=new Usuarios();
$lusr=$usr->lUsrActivos();
if(count($lusr)>0){
    foreach($lusr as $key => $value){
        echo "            
        <div style='display:grid;grid-template-columns:30% auto'>
        <img src='../../img/logo-".$value["rute"].".jpg' class='img-fluid'>
        <span>".strtoupper(substr($value["rsoc"],0,18))."</span>
        </div>  
        ";
    }
}
?>