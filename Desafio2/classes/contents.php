<?php
    namespace Clases;
    require_once(dirname(__DIR__,1) . "/config/database.php");
    class Contents {
        private $con;
        public function __construct(){
            $this->con= new DB();
        }
        public function create($contents){
            try{
                $query = $this->db->connect()->prepare('INSERT INTO contents(title,content,keywords,description,category) VALUES(:title,:content,:keyword,:description,:category)');
                ($query->execute(['title'=> $contents['title'],'content'=>$contents['content'],'keywords'=>$contents['keywords'],'description'=>$contents['description'],'category'=>$contents['category']]));
                return true;
            }catch(\PDOException $e){
                //echo "Ya existe esa matricula";
                return false;
            }
        }

        public function delete($id){
            $query = $this->db->connect()->prepare("DELETE FROM contents WHERE id = :id");
            try{
                $query->execute([
                    'id' => $id
                ]);
                return true;
            }catch(\PDOException $e){
                return false;
            }
        }

        public function update($nuevaImagen){
            $query = $this->db->connect()->prepare("UPDATE contents SET title = :title, content = :content, keywords = :keywords, description = :description, category = :category  WHERE id = :id");
            try{
                $query->execute([
                    'id' => $nuevaImagen['id'],
                    'title' => $nuevaImagen['title'],
                    'content' => $nuevaImagen['content'],
                    'keywords' => $nuevaImagen['keywords'],
                    'description' => $nuevaImagen['description'],
                    'category' => $nuevaImagen['category']
                ]);
                return true;
            }catch(\PDOException $e){
                return false;
            }
        }

        public function list(){
            $query = mysql_query('SELECT * FROM contents');
            $query->execute();
            return $query;
        }

        public function view($imagenSeleccionada,$id){
            $query = $this->db->connect()->prepare("SELECT * FROM contents WHERE id = :id");
        try{
            $query->execute(['id' => $id]);

            while($row = $query->fetch()){
                $imagenSeleccionada->id = $row['id'];
                $imagenSeleccionada->title = $row['title'];
                $imagenSeleccionada->content = $row['content'];
                $imagenSeleccionada->keywords = $row['keywords'];
                $imagenSeleccionada->description = $row['description'];
                $imagenSeleccionada->category = $row['category'];
            }

            return $imagenSeleccionada;
        }catch(\PDOException $e){
            return null;
        }
        }

    }
?>