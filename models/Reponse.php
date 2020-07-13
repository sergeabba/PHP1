<?php
class Reponse extends Questions{
    private $idReponse;
    private $libelleReponse;
    private $statut;
    private $libelleQuestion;
    private $idQuestions;
    

    public function __construct($row = null)
    {
        if($row != null){
            $this->hydrate($row);
        }
    }

    public function hydrate($row)
    {
        $this->idReponse = $row['idReponse'];
        $this->libelleReponse = $row['libelleReponse'];
        $this->statut = $row['statut'];
        $this->libelleQuestion = $row['libelleQuestion'];
        $this->idQuestions = $row['idQuestions'];
    }

    public function getIdReponse(){
        return $this->idReponse;
    }
    public function getLibelleReponse(){
        return $this->libelleReponse;
    }
    public function getLibelleQuestion(){
        return $this->libelleQuestion;
    }
    public function getStatut(){
        return $this->statut;
    }
    public function getIdQuestions(){
        return $this->idQuestions;
    }

    public function setIdReponse($idReponse){
        $this->idReponse=$idReponse;
    }
    public function setLibelleReponse($libelleReponse){
        $this->libelleReponse=$libelleReponse;
    }
    public function setLibelleQuestion($libelleQuestion){
        return $this->libelleQuestion = $libelleQuestion;
    }
    public function setStatut($statut){
        $this->statut=$statut;
    }
    public function setIdQuestions($idQuestions){
        $this->idQuestions=$idQuestions;
    }
}