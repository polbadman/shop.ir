<?php
/* https://virgool.io/@farhad.ashtari/how-to-implement-hookable-system-like-wordpress-m2ci53wgfnpk*/
class hook_handler
{

    public static  $events=[];
   
    public function add_action($tag_name,$value=null,$callback=null){
      if($callback ==! null){
        if($callback){
          self::$events[$tag_name][] = $callback;
        }else{
          unset(self::$events[$tag_name]);
        }
        
      }
    }
    public function do_actions($tag_name,$value=null){
        if(isset(self::$events[$tag_name])){
          foreach(self::$events[$tag_name] as $function){
            $value = call_user_func($function,$value);
          }
          return $value;
        }
    }
}
?>