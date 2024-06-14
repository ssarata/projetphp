<?php
namespace  Src\Controller;

use Src\Models\ModelClient;
use Src\Models\Model;
//use  Src\Controller\Controller;

class ClientController extends Controller{
    public function affiherClients(){
        $clients = ModelClient::recupererClients();
        //echo 'bonjour';
        //var_dump($clients);
       $this->render("client/index.php",["clients" => $clients]);
    }

   public function create()
    {

        $message = "";
        $request_method = strtoupper($_SERVER['REQUEST_METHOD']);
        if ($request_method === 'GET') {
            $this->render('client/createclient.php', []);
            return;
        } elseif ($request_method === 'POST') {
            if (isset($_POST['button'])) {
                //extraction des informations envoyé dans des variables par la methode POST
                extract($_POST);
                //verifier que tous les champs ont été remplis
                if (isset($nom) && isset($prenom) && $tel) {
                    $e = new ModelClient($nom, $prenom, $tel);
                    $e->enregister_client();
                    $message = "clients Ajouter";
                } else {
                    $message = "Veuillez remplir tous les champs !";
                }
            }
        }
        $clients = ModelClient::recupererClients();
        $this->render("client/index.php", ["clients" => $clients, "message" => $message]);
        return;
    }
}


