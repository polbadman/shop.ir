<?php
// function apply_operation($number, $operation) {
//   return $operation($number);
// }

// function square($num) {
//   return $num * $num;
// }

// $result = apply_operation(5, "square");
// echo $result; // خروجی: 25

// $result = apply_operation(5, function($num) { return $num + 5; });
// echo $result; // خروجی: 10


/**?
 * 
در این مثال:

    apply_operation یک تابع است که یک عدد و یک تابع دیگر به عنوان پارامتر می‌گیرد.
    square یک تابع ساده است که مربع یک عدد را محاسبه می‌کند.
    در فراخوانی apply_operation(5, "square")، نام تابع square (بدون پرانتز) به عنوان پارامتر به apply_operation پاس داده می‌شود.
    در داخل apply_operation، تابع square با استفاده از $operation($number) فراخوانی می‌شود و نتیجه به عنوان خروجی apply_operation برگردانده می‌شود.
    همچنین، می‌توانید یک تابع ناشناس (anonymous function) را نیز به عنوان پارامتر به apply_operation پاس دهید، مانند apply_operation(5, function($num) { return $num + 5; })
 */
class hook_handler
{

    private  $hooks;
    private  $actions=[];

    public function do_action($hook_name)
    {
      // $this->execute_hooks($hook_name);
      // $this->hooks.=array('hook_name'=>$hook_name);
      // print_r($this->hooks);
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