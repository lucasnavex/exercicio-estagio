<?php 

include_once("User.php");

class UserDAO implements UserDAOInterface {

    private $conn;

    public function buildUser($data){
        $user = new User();

        $user->nome = $data["name"];
        $user->genero = $data["genero"];
        $user->cidade = $data["cidade"];

        return $user;
    }

    public function update(User $user){
        $stmt = $this->conn->prepare("UPDATE users SET 
        nome = :nome,
        genero = :genero,
        cidade = :cidade,
      ");
    }
}

