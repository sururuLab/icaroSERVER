<?php 

namespace icaro;
use icaro\modules\services\proccessController;
/**
* Icaro Server Object
*/
class icaroRouter
{
  
  private $module;
  private $controller;
  private $method;
  private $config;

  public function __construct()
  {
    // config
    $icaroConfig = file_get_contents("icaro.config");
    $this->config = json_decode($icaroConfig, false);
  }

  public function run($command)
  {
    try {
      
      if ($command == ''){
        $command = $this->config->actDefault;
      } 

      $act = explode('.', $command);

      $this->module     = $act[0];
      $this->controller = $act[1];
      $this->method     = $act[2];

      $controller = 'icaro\\modules\\'.$this->module . '\\' . $this->controller . 'Controller';
      $method = $this->method;
      
      $moduleController = new $controller;

      $moduleController->template = 'main';
      $moduleController->viewPath = 'icaro\modules\\'.$this->module . '\\views\\'.$this->controller;

     
      $moduleController->$method();


    } catch (Exception $e) {
      throw($e);
      
    }
  }



}
?>