<?php
    namespace Clases;

use PDO;

    require_once(dirname(__DIR__,1) . "/config/database.php");
    class Contents {
        private $con;
        public function __construct(){
            $this->con= new DB();
        }
        public function create($contents){
            
            try{
                $query = $this->con->connect()->prepare('INSERT INTO contents(title,content,keywords,description,category) VALUES(:titulo,:contenido,:palabraClave,:descripcion,:categoria)');
                $query->execute($contents);
                return true;
            }catch(\PDOException $e){
                //echo "Ya existe esa matricula";
                return false;
            }
        }

        public function delete($id){
            $query = $this->con->connect()->prepare("DELETE FROM contents WHERE id = :id");
            try{
                $query->execute([
                    'id' => $id
                ]);
                return true;
            }catch(\PDOException $e){
                return false;
            }
        }
        // title = " . $update['title'] . ", content = ".  $update['content'] . ", keywords = " . $update['keywords'] . ", description = " . $update['description'] . ", category = " . $update['category'] . " WHERE id = $id"
        public function update($id,$update){
            $query = $this->con->connect()->prepare("UPDATE contents SET title =:title, content =:content, keywords =:keywords, description =:description, category =:category WHERE id = $id");
            try{
                $query->execute([
                    'title' => $update['title'],
                    'content' => $update['content'],
                    'keywords' => $update['keywords'],
                    'description' => $update['description'],
                    'category' => $update['category'],
                ]);
                return true;
            }catch(\PDOException $e){
                return false;
            }
        }

        public function list(){
            $query = $this->con->connect()->prepare('SELECT * FROM contents');
            $query->execute();
            $res=array();
            if($query->rowCount()){
                $rows = $query->fetchAll(\PDO::FETCH_ASSOC);
                foreach ($rows as $row) {
                    $res[] = $row;

                }
                       

            }else{
                echo "No hay elementos en la tabla";
            }
            return $res;
        }

        public function view($id){
            $query = $this->con->connect()->prepare('SELECT * FROM contents WHERE id=:id');
            $query->execute(['id'=>$id]);
            if($query->rowCount()){
                $rows = $query->fetch(\PDO::FETCH_ASSOC);
            }else{
                echo "No existe el elemento";
            }
            return $rows;
        }

    }
?>