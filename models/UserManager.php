<?php

class UserManager extends Manager{

    function __construct(){
        $this->className="User";
    }



    public function create($objet){
       $sql="insert into `user`(`id`, `fullName`, `login`, `pwd`, `profil`, `avatar`, `score`) values (null,'".$objet->getFullName()."','".$objet->getLogin()."','".$objet->getPwd()."','".$objet->getProfil()."','".$objet->getAvatar()."', ".$objet->getScore().");";
       return $this->ExecuteUpdate($sql)!=0;
    }
    public function update($objet){

    }
    public  function delete($id){
      
    }
    public function findAll(){
        $sql = "select * from user;";
        $rows = $this->ExecuteSelect($sql);
        return $rows;
      
    }
    public function findById($id){

    }  

    public function getUserByLoginAndPwd($login,$pwd){
       $sql="select * from user where login='".$login."' and pwd='".$pwd."';";
       $users = $this-> ExecuteSelect($sql);
       if(empty($users) === false){
            return $users[0];
       }
    } 

    public function getUserByLogin($login){
        $sql="select * from user where login='".$login."';";
        return $this-> ExecuteSelect($sql);
    }

}