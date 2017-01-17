<?php

namespace Candidat\Model;

 class Users
 {
     public $id;
     public $nom;
     public $prenom;

     public function exchangeArray($data)
     {
         $this->id      = (!empty($data['id'])) ? $data['id'] : null;
         $this->nom     = (!empty($data['nom'])) ? $data['nom'] : null;
         $this->prenom  = (!empty($data['prenom'])) ? $data['prenom'] : null;
     }
 }