<?php
require_once('./library/Helper.php');
class HeroesController extends Library\Helper {
    public function __construct($route,$action,$item,$query){
        /* 
            in this case we will be using $route to get the controller model, $action to get the view & $item to read individual row
        */
        $this->heroesModel = $this->model($route);
        $this->action = $action;
        $this->id = $item;
    }

    public function index(){
        /*
            in this case action can be 'list' to display a list of heroes or 'read' to read information about a specific superhero using the superhero id passed from $this->id, so instead of passing a predefined view we check if the view is set & pass it on as an argument else pass 'list' as default.
            also, in this case we know that action files are list & read, we will use an array to check if $this->action is one of the 2, else make 'list' as default for users who will intentionally try to mess with the routing
        */
        if(!in_array($this->action,['list','read'])){
            $this->action = 'list';
        }
        //if $action == read, we use the hero id to fetch data from our model about that specific superhero
        if($this->action == 'read'){
            $data = $this->heroesModel->fetchSingleHero($this->id);
        }else{
            //else, means we are try to view the entire list of superheroes
            $data = $this->heroesModel->fetchAllHeroes();
        }
        //$this->action == name of our view in the heroes directory & $data is the data fetched from our model
        return $this->view('heroes/' . $this->action,$data);
    }
}