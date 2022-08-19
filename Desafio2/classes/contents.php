<?php
    class contents extends DB{
        public function __construct(){
            parent::__construct();
        }
        public function create($contents){
            try{
                $query = $this->db->connect()->prepare('INSERT INTO contents(url,content) VALUES(:url,:content)');
                ($query->execute(['url'=> $contents['url'],'content'=>$contents['content']]));
                return true;
            }catch(PDOException $e){
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
            }catch(PDOException $e){
                return false;
            }
        }

        public function update($nuevaImagen){
            $query = $this->db->connect()->prepare("UPDATE contents SET url = :url WHERE id = :id");
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
            $query = $this->db->connect()('SELECT * FROM contents');
            return $query;
        }

        public function view($imagenSeleccionada,$id){
            $query = $this->db->connect()->prepare("SELECT * FROM contents WHERE id = :id");
        try{
            $query->execute(['id' => $id]);

            while($row = $query->fetch()){
                $imagenSeleccionada->matricula = $row['id'];
                $imagenSeleccionada->nombre = $row['nombre'];
                $imagenSeleccionada->apellido = $row['apellido'];
            }

            return $imagenSeleccionada;
        }catch(PDOException $e){
            return null;
        }
        }

    }
?>