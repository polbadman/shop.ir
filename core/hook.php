<?php

class hook_handler
{

    public  $hooks=[];
    public  $actions=[];

    public function do_action($hook_name)
    {
      $hook=['hook_name'=>$hook_name];
      array_push($this->hooks,$hook);
      // print_r($hook);
    }

    public function add_action($hook_name,$callback,$priority=10)
    {
      
      $action=['hook_name'=>$hook_name,'action_name'=>$callback,'priority'=>$priority];
      array_push($this->actions,$action);
    }

    public function execute_hooks($action_name)
    {
      // print_r($this->actions);die;
        return $action_name();
    }


    public function execute_actions(){
      foreach($this->actions as  $action )
      {
        $this->execute_hooks($action['action_name']);
      }
    }
}
?>