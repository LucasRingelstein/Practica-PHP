<?php
    class images extends DB{
        public function __construct(){
            parent::__construct();
        }
        
        public function create($images){
            try{
                $query = $this->db->connect()->prepare('INSERT INTO images(url,content) VALUES(:url,:content)');
                ($query->execute(['url'=> $images['url'],'content'=>$images['content']]));
                return true;
            }catch(PDOException $e){
                //echo "Ya existe esa matricula";
                return false;
            }
        }

        public function delete($id){
            $query = $this->db->connect()->prepare("DELETE FROM images WHERE id = :id");
            try{
                $query->execute([
                    'id' => $id
                ]);
                return true;
            }catch(PDOException $e){
                return false;
            }
        }

        public function update($nuevaImagen){
            $query = $this->db->connect()->prepare("UPDATE images SET url = :url WHERE id = :id");
            try{
                $query->execute([
                    'id' => $nuevaImagen['id'],
                    'url' => $nuevaImagen['url']
                ]);
                return true;
            }catch(PDOException $e){
                return false;
            }
        }

        public function list(){
            $query = $this->db->connect()('SELECT * FROM images');
            return $query;
        }

        public function view($imagenSeleccionada,$id){
            $query = $this->db->connect()->prepare("SELECT * FROM images WHERE id = :id");
        try{
            $query->execute(['id' => $id]);

            while($row = $query->fetch()){
                $imagenSeleccionada->id = $row['id'];
                $imagenSeleccionada->url = $row['url'];
                $imagenSeleccionada->content = $row['content'];
            }

            return $imagenSeleccionada;
        }catch(PDOException $e){
            return null;
        }
        }

    }
?>