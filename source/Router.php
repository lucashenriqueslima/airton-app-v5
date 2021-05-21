<?php 

    namespace Source;

    class Router
    {

      
            
            private $controller;
            
            
            private function setRoute()
            {
    
                $loadClass = 'Source\Controllers\\';
                $url = @explode('/',$_SERVER["REQUEST_URI"]);
    
                switch ($url[2]):
                
                    case "";
                    case "index.php";
                        $loadClass .= "Web";
                        $loadFunction = "login";
                    break;
                    


                    default:
                        $loadClass .= "Error";
                        $loadFunction = "error";
                    break;

                    
                    
                endswitch;


               

                $this-> controller = new $loadClass;
                $this-> controller -> $loadFunction();

                
            }
    
    
            
    
    
            public function run()
            {
                $this -> setRoute();
            }
        
        }
    ?>

   