<?php
// require_once('./config/connection.php');
class Heroes /*extends Connection*/ {
    public function __construct(){
        /*for this demo our data will be coming from a JSON file*/
        $this->heroesList = file_get_contents('./config/heroes.json');
        /*
        if you want to SELECT data from a database, uncomment the require_once line at the top after the php beginning script tags & the extends statement after the Heroes class name at the top so we can have access to its properties and connect to the database
        */
    }
    public function fetchAllHeroes(){
        //we are getting the list from our json file fetched in the construct method
        $list = json_decode($this->heroesList,true);
        return $list;
    }

    public function fetchSingleHero($id){
        $hero = null;//default hero value is null
        $list = json_decode($this->heroesList,true);//then we fetch superheroes from the json file
        //after we iterate through the list to look for a superhero that has the same id as the one we passed
        for ($i=0; $i < count($list); $i++) { 
            if($id == $list[$i]['id']){
                $hero = $list[$i];
            }
        }
        //if the superhero was found, data will be passed, else the original null value will be returned
        return $hero;
    }
}