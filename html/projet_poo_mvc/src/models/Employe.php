<?php
namespace Src\Models;



class Employe extends Model
{

    const TABLE_NAME = 'employes';
    //ATTRIBUTE
    private $id;
    private $nom;
    private $prenom;
    private $age;

    public function __construct($nom, $prenom, $age)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }

    // GETTERS
    public function getId()
    {
        return $this->id;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getAge()
    {
        return $this->age;
    }
    //SETTERS
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }
    //

    public function save()
    {
        $data = [
            "nom" => $this->getNom(),
            "prenom" => $this->getPrenom(),
            "age" => $this->getAge()
        ];
        if ($this->id > 0)
            return $this->update();
        $nouvelId = Model::dbCreate(self::TABLE_NAME, $data);
        $this->setId($nouvelId);
        return $this;
    }

    public function update()
    {
        if ($this->id > 0) {
            $data = [
                "id" => $this->getId(),
                "nom" => $this->getNom(),
                "prenom" => $this->getPrenom(),
                "age" => $this->getAge()
            ];
            Model::dbUpdate(self::TABLE_NAME, $data, 'id');
            return $this;
        }
        return;
    }

    public static function delete($id)
    {
        $data = [
            'id' => $id,
        ];

        Model::dbDelete(self::TABLE_NAME, $data);
        return;
    }

    public static function findAll()
    {
        $data = Model::dbFind(self::TABLE_NAME);
        return $data;
    }

    public static function find(array $request)
    {
        $data = Model::dbFind(self::TABLE_NAME, $request);
        return $data;
    }

    public static function findOne(int $id)
    {
        $request = [
            ['id', '=', $id]
        ];
        $element = Model::dbFind(self::TABLE_NAME, $request);
        if (count($element) > 0)
            $element = $element[0];
        else
            return;

        //var_dump($element . 'ppppppppppppppppppppppppppppppppppppppppppp');
        return $element;
    }
}
