<?php
namespace Src\Controller;

use Src\Models\Employe;
use Src\Models\Model;

class EmployeController extends Controller
{

    public function index()
    {
        $employes = Employe::findAll();
        $this->render("index.php", ["employes" => $employes]);
    }

    public function create()
    {

        $message = "";
        $request_method = strtoupper($_SERVER['REQUEST_METHOD']);
        if ($request_method === 'GET') {
            $this->render('ajouter.php', []);
            return;
        } elseif ($request_method === 'POST') {
            if (isset($_POST['button'])) {
                //extraction des informations envoyé dans des variables par la methode POST
                extract($_POST);
                //verifier que tous les champs ont été remplis
                if (isset($nom) && isset($prenom) && $age) {
                    $e = new Employe($nom, $prenom, $age);
                    $e->save();
                    $message = "Employé Ajouter";
                } else {
                    $message = "Veuillez remplir tous les champs !";
                }
            }
        }
        $employes = Employe::findAll();
        $this->render("index.php", ["employes" => $employes, "message" => $message]);
        return;
    }


    public function update()
    {
        $message = "";
        $request_method = strtoupper($_SERVER['REQUEST_METHOD']);
        if ($request_method === 'GET') {
            $id = (int) $_GET['id'];
            $e = Employe::findOne($id);
            return $this->render('modifier.php', ['e' => $e]);
        } elseif ($request_method === 'POST') {
            try {
                if (isset($_POST['button'])) {
                    extract($_POST);
                    if (isset($nom) && isset($prenom) && $age) {
                        $e = new Employe($nom, $prenom, $age);
                        $e->setId($id);
                        $r = $e->update();
                        $message = "Employé modifié";
                        $employes = Employe::findAll();
                        return $this->render("index.php", ["employes" => $employes, "message" => $message]);
                    } else {
                        $message = "Veuillez remplir tous les champs !";
                        return $this->render('modifier.php', ['e' => $e, "message" => $message]);
                    }
                }
            } catch (\Throwable $th) {
                die($th->getMessage());
            }
        }
    }


    public function delete()
    {
        try {
            $id = (int) $_GET['id'];
            Employe::delete($id);
            $employes = Employe::findAll();
            return $this->render("index.php", ["employes" => $employes]);
        } catch (\Throwable $th) {
            $message = "Erreur lors de la supression de l'utilisateur";
            $employes = Employe::findAll();
            return $this->render("index.php", ["employes" => $employes, "message" => $message]);
        }
    }
}
