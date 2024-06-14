<?php
namespace Src\Models;
//use Src\Models\Model;
include 'model.php';
class ModelClient extends Model{
    const TABLE_NAME ="client";
    private int $id;
    private string $nom;
    private string $prenom;
    private string $tel;
    public function __construct($nom,$prenom,$tel){
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->tel=$tel;

    }
    public function getId()
    {
        return $this->id;
    }
    public function getNom(){
        return $this->nom;
    }
    public function getPrenom(){
        return $this->prenom;
    } public function getTel(){
        return $this->tel;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setNom($name){
        $this->nom=$name;
    }
    public function setPrenom($name){
        $this->prenom=$name;
    }
    public function setTel($num){
        $this->tel=$num;
    }


    public static function enregister_client(){
        $data=[
            "nom"=>$this->getNom(),
            "prenom"=>$this->getPrenom(),
            "tel"=>$this->getTel()
            
        ];
        $nouvelId = Model::insertion(self::TABLE_NAME, $data);
        $this->setId($nouvelId);
        return $this;
    }

    public static function recupererClients(){
        $data=Model::selection(self::TABLE_NAME);
        return $data;
        if ($this->id > 0)
        return $this->update();
       

        
    }



}
