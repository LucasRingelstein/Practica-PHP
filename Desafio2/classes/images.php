<?php
    namespace Clases;

use PDO;

    require_once(dirname(__DIR__,1) . "/config/database.php");
    class Images {
        private $con;
        public function __construct(){
            $this->con= new DB();
        }
        public function create($ruta,$cod){
            try{
                $query = $this->con->connect()->prepare('INSERT INTO images(url,content) VALUES(:ruta,:cod)');
                $query->execute(['ruta' => $ruta,
                                 'cod' => $cod]);
                return true;
            }catch(\PDOException $e){
                echo "Algo no funciono";
                return false;
            }
        }

        public function delete($id,$filename){
            $query = $this->con->connect()->prepare("DELETE FROM images WHERE id = :id");
            try{
                $query->execute([
                    'id' => $id
                ]);
                
                unlink('../admin/assets'.$filename);
                return true;
            }catch(\PDOException $e){
                return false;
            }
        }

        public function deleteAll($cod,$images){
            $query = $this->con->connect()->prepare("DELETE FROM images WHERE content = :id");
            try{
                $query->execute([
                    'id' => $cod
                ]);
                
                foreach($images as $image){
                    unlink('../admin/assets'.$image['url']);
                }
                return true;
            }catch(\PDOException $e){
                return false;
            }
        }

        // public function update($id,$update){
        //     $query = $this->con->connect()->prepare("UPDATE contents SET title =:title, content =:content, keywords =:keywords, description =:description, category =:category WHERE id = $id");
        //     try{
        //         $query->execute([
        //             'title' => $update['title'],
        //             'content' => $update['content'],
        //             'keywords' => $update['keywords'],
        //             'description' => $update['description'],
        //             'category' => $update['category'],
        //         ]);
        //         return true;
        //     }catch(\PDOException $e){
        //         return false;
        //     }
        // }

        public function list($filter = ''){
        $filter2 = ($filter!='') ? "WHERE content = '" .$filter. "'" : '';
            
            $query = $this->con->connect()->prepare('SELECT * FROM images ' . $filter2);
            $query->execute();
            $res=array();
            if($query->rowCount()){
                $rows = $query->fetchAll(\PDO::FETCH_ASSOC);
                foreach ($rows as $row) {
                    $res[] = $row;
                }
                       

            }
            return $res;
        }

        public function view($cod){
            $query = $this->con->connect()->prepare('SELECT * FROM images WHERE content=:cod');
            $query->execute(['cod'=>$cod]);
            if($query->rowCount()){
                    $row = $query->fetch(\PDO::FETCH_ASSOC);
            }else{
                echo "No existe el elemento";
            }
            return $row;
        }

    }
?>