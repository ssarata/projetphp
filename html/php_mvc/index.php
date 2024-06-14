<?php
//use Src\Controller\EmployeController;
use Src\Controller\ClientController;
use Src\Controller\ProduitController;
use Src\Controller\VendeurController;

require_once 'vendor/autoload.php';
$lien='';
if(isset($_GET["page"])){
    $lien=$_GET["page"];
}
$mesRoutes=[
    'index'=>'',
    'createclient'=>'create',
    'createPro'=>'enregistrerProduit',
    'createVend'=>'enregistrerVendeur'
];
switch($lien){
    case $mesRoutes['index']:
      //  echo "sarata";
         $controlerCli=new ClientController();
         $controlerCli->affiherClients();

       /* $controlerVend=new VendeurController();
       ;
        $controlerPro->indexPro();
        $controlerVend->indexVen();*/
        break;
    case $mesRoutes['createclient']:
        $controlerCli=new ClientController();
        $controlerCli->create();
        break;
}