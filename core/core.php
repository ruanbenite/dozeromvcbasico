<?php
class Core {
    
    private $currentController;
    private $currentAction;
    public function run() {
        $url = substr($_SERVER['PHP_SELF'], 26);
        
        if(!empty($url)){
           $url = explode('/',$url);
           //print_r($url);
          
           array_shift($url);
          

           $this->currentController = $url[0].'Controller';
           if(isset($url[1]) && !empty($url[1])){
               $this->currentAction = $url['1'];
           }else{
               $this->currentAction = 'index';
           }
        }else{
            $this->currentController = 'homeController';
            $this->currentAction ='index';
        }
        echo "CONTROLLER ". $this->currentController ."<br/>";
        echo "ACTION ". $this->currentAction;
        
        }
}
?>
