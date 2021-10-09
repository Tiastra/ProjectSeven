<?php

class ConectionPS{

    public function dbConectionPS(){
        try{
            $con = new PDO("mysql:host=localhost;dbname=projectseven","root","");
            return $con;
        }
        catch (PDOException $erro){
            return $erro->getMessage();
        }
    }
}