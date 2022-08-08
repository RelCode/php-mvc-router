<?php
require_once('./library/Helper.php');
class HeroesController extends Library\Helper {
    public function __construct($route,$action,$item){
        $this->heroesModel = $this->model($route);
        $this->action = $action;
        $this->id = $item;
    }

    public function index(){
        /*
            in this case action can be 'view' to display a list of heroes or 'read' to read information about a specific hero using the hero id pass from $this->id, so instead of passing a predefined view will check if the view is set & pass it on as an argument else pass 'view' as default
            also, we know that action files are view & read, we will use an array to check if $this->action is one of the 2, else make home as default for users who will intentionally try to mess with the routing
        */
        if(!in_array($this->action,['list','read'])){
            $this->action = 'list';
        }
        if($this->action == 'read'){
            $data = $this->heroesModel->fetchSingleHero($this->id);
        }else{
            $data = $this->heroesModel->fetchAllHeroes();
        }
        return $this->view('heroes/' . $this->action,$data);
    }
}