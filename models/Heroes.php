<?php
// require_once('./config/connection.php');
class Heroes /*extends Connection*/ {
    public function __construct(){
        /*for this demo our data will be coming from a JSON file*/
        $this->heroesList = file_get_contents('./config/heroes.json');
        /*
        if you want to SELECT data from a database, uncomment the connection.php file from config folder & the extends statement after the Heroes class name at the top so we can have access to its properties and connect to the database
        */
    }
    public function fetchAllHeroes(){
        $list = json_decode($this->heroesList,true);
        return $list;
    }

    public function fetchSingleHero($id){
        $hero = '';
        $list = json_decode($this->heroesList,true);
        for ($i=0; $i < count($list); $i++) { 
            if($id == $list[$i]['id']){
                $hero = $list[$i];
            }
        }
        return $hero;
    }
}