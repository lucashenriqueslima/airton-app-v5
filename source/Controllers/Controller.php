<?php 

    abstract class Controller
    {   
        protected $router;
        protected $view;
        

        public function __construct($router)
        {
            $this -> router = $router;
            $this -> view = (dirname(__DIR__, 2) . "/views/". $this->view .".php");
        }

    }