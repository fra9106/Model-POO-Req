<?php

namespace App\Models;

use App\Db\DAO;

class Model extends DAO
{
    protected $table;

    private $connexBdd;

    /**
     * requête préparée
     *
     * @param string $sql
     * @param array|null $attributs
     * @return PDOStatement|false
     */
    public function requete(string $sql, array $attributs = null)
    {
        $this->connexBdd = DAO::getPdo();

        if($attributs !== null){
            $query = $this->connexBdd->prepare($sql);
            $query->execute($attributs);
            return $query;
        }else{
            return $this->connexBdd->query($sql);
        }
    }

    public function findAll()
    {
        $query = $this->requete('SELECT * FROM '.$this->table);
        return $query->fetchAll();
    }


}