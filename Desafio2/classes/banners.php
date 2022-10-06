<?php

namespace Clases;

use PDO;

require_once(dirname(__DIR__, 1) . "/config/database.php");
require_once("images.php");

class Banners
{
    private $con;
    public function __construct()
    {
        $this->con = new DB();
        $this->images = new Images();
    }

    public function create($banners)
    {
        try {
            $query = $this->con->connect()->prepare('INSERT INTO banners(cod,titulo,contenido) VALUES(:cod,:titulo,:contenido)');
            $query->execute($banners);
            return true;
        } catch (\PDOException $e) {
            //echo "Ya existe esa matricula";
            return false;
        }
    }

    public function delete($id)
    {
        $content = $this->view($id);
        $query = $this->con->connect()->prepare("DELETE FROM banners WHERE id = :id");
        try {
            $query->execute([
                'id' => $id
            ]);
            $this->images->deleteAll($content['cod'], $content['images']);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function update($id, $update)
    {
        $query = $this->con->connect()->prepare("UPDATE banners SET titulo =:titulo, contenido =:contenido WHERE id = $id");
        try {
            $query->execute([
                'titulo' => $update['titulo'],
                'contenido' => $update['contenido'],
            ]);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function list()
    {
        $query = $this->con->connect()->prepare('SELECT * FROM banners');
        $query->execute();
        $res = array();
        if ($query->rowCount()) {
            $rows = $query->fetchAll(\PDO::FETCH_ASSOC);
            foreach ($rows as $row) {
                $row['images'] = $this->images->list($row['cod']);
                $res[] = $row;
            }
        } else {
        }
        return $res;
    }

    // public function listPrincipal()
    // {
    //     $query = $this->con->connect()->prepare('SELECT * FROM contents WHERE destacado = 1');
    //     $query->execute();
    //     $res = array();
    //     if ($query->rowCount()) {
    //         $rows = $query->fetchAll(\PDO::FETCH_ASSOC);
    //         foreach ($rows as $row) {
    //             $row['images'] = $this->images->list($row['cod']);
    //             $res[] = $row;
    //         }
    //     } else {
    //     }
    //     return $res;
    // }

    public function view($id)
    {
        $query = $this->con->connect()->prepare('SELECT * FROM banners WHERE id = :id');
        $query->execute(['id' => $id]);
        if ($query->rowCount()) {
            $rows = $query->fetch(\PDO::FETCH_ASSOC);
            $rows['images'] = $this->images->list($rows['cod']);
        } else {
            echo "No existe el elemento";
        }
        return $rows;
    }


}
