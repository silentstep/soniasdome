<?php

/**
 *
 */
class router{

  private $routes;

  function __construct()
  {
    $this->routes = $GLOBALS["config"]["routes"];
    $route = $this->findRoute();
    if ( class_exists($route["controller"]) ){
      $controller = new $route["controller"]();
      if ( method_exists($controller, $route["method"]) ){
        $controller -> {$route["method"]}();
      } else {
        error::show("404; method");
      }
    } else {
      error::show("404; controller");
    }
  }

  private function routePart($route){
    if (is_array($route)){
      $route = $route["url"];
    }
    $parts = explode("/", $route);
    return $parts;
  }

  static function uri($part){
    $parts = explode("/", $_SERVER["REQUEST_URI"]);
    if ($parts[1] == $GLOBALS["config"]["path"]["index"]) {
      $part++;
    }
    return (isset($parts[$part])) ? $parts[$part] : "";
  }

  private function findRoute(){
    foreach ($this->routes as $route){
      $parts = $this->routePart($route);
      $allMatch = true;
      foreach ($parts as $key => $value) {
        if ($value != "*"){
          if (router::uri($key) != $value){
            $allMatch = false;
          }
        }
      } // end of inner for loop
      if ($allMatch){
        return $route;
      }
    } // end of outter for loop
    $uri_1 = router::uri(1);
    $uri_2 = router::uri(2);
    if ($uri_1 == ""){
      $uri_1 = $GLOBALS["config"]["defaults"]["controller"];
    }
    if ($uri_2 == ""){
      $uri_2 = $GLOBALS["config"]["defaults"]["method"];
    }
    $route = array (
      "controller" => $uri_1,
      "method"  => $uri_2
    );
    return $route;
  } //end of findRoute

} //end of class

?>
