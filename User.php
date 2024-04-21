<?php  


class User {
    public $nome;

    public $genero;

    public $cidade;
  
}


interface UserDAOInterface {

    public function buildUser($data);

    public function update(User $user);
}

