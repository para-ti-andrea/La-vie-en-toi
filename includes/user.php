<?php

include 'db.php';

class User extends DB{
    private $nombre;
    private $email_c;


    public function userExists($user, $pass){
        $md5pass = ($pass);
        $query = $this->connect()->prepare('SELECT * FROM cliente WHERE email_c = :user AND contrasena_c = :pass');
        $query->execute(['user' => $user, 'pass' => $md5pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM cliente WHERE email_c = :user');
        $query->execute(['user' => $user]);
        
        foreach ($query as $currentUser) {
            $this->id_c = $currentUser['id_c'];
            $this->nombre = $currentUser['nombre'];
            $this->p_apellido = $currentUser['p_apellido'];
            $this->s_apellido = $currentUser['s_apellido'];
            $this->telefono = $currentUser['telefono'];
            $this->usename = $currentUser['email_c'];
            $this->contrasena_c = $currentUser['contrasena_c'];
        }
    }

    public function getid_c(){
        return $this->id_c;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getp_apellido(){
        return $this->p_apellido;
    }
    public function gets_apellido(){
        return $this->s_apellido;
    }
    public function gettelefono(){
        return $this->telefono;
    }
    public function getemail_c(){
        return $this->usename;
    }
    public function getcontrasena_c(){
        return $this->contrasena_c;
    }
}