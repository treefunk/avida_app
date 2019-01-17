<?php

/**
* returns the api url
* @param  object $class    the `$this` object
* @return string           example: http://localhost/restigniter-crud/api/crud/27
*
* @author: @jjjjcccjjf
*/
function api_url($class)
{
  return base_url() . "api/" . strtolower(get_class($class)) . "/";
}

function useWPFunctions()

{

// $path = $_SERVER['DOCUMENT_ROOT'];
$path = "../";




  include_once $path . '/wp-config.php';

  include_once $path . '/wp-load.php';

  include_once $path . '/wp-includes/wp-db.php';

  include_once $path . '/wp-includes/pluggable.php';

}


useWPFunctions();

// must be inside the wordpress loop
function get_values_in_repeater($repeater_name,$sub_field = null){
  $result = [];
  if(is_array(get_field($repeater_name))){
    foreach(get_field($repeater_name) as $obj){
      $result[] = $obj[$sub_field];
    }
  }
  return $result;
}
