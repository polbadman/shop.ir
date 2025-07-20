<?php

class shopir{
    function __construct()
    {
        $this->zakhireh_dataha();
        $this->namayeshe_akharin_sabtehnam();

    }
    function zakhireh_dataha(){
        $username=$_POST['username'];
        $email   =$_POST['email'];
        $password=$_POST['password'];
        $mobile  =$_POST['mobile'];
        // $data = "این یک خط داده است که در فایل ذخیره می‌شود.\n";
        $data='----------------------------------------------------------------------------------'.PHP_EOL;
        $data.= $username."--".$password."--".$email."--".$mobile.PHP_EOL;
        $file = "data.txt";
    
        // ذخیره داده در فایل. اگر فایل وجود نداشته باشد، ایجاد می‌شود.
        // اگر فایل وجود داشته باشد، محتوای قبلی پاک شده و با داده جدید جایگزین می‌شود.
        if (file_put_contents($file, $data, FILE_APPEND) !== false) {
            echo "داده‌ها با موفقیت در فایل ذخیره شدند.";
        } else {
            echo "خطا در ذخیره داده‌ها در فایل.";
        }
    
        // برای اضافه کردن داده به انتهای فایل به جای بازنویسی، از این روش استفاده کنید:
        // file_put_contents($file, $data, FILE_APPEND);
    
    }
    function namayeshe_akharin_sabtehnam(){
        $lines = file("data.txt");
        // return end($lines).PHP_EOL;

        $lu=explode("--",end($lines));
        $lus= 'اطلاعات شما:'.PHP_EOL;
        $lus .='شماره موبایل :'.$lu[0].PHP_EOL;
        $lus .='نام کاربری :'.$lu[1].PHP_EOL;
        $lus .='رایانامه  :'.$lu[2].PHP_EOL;
        $lus .=' رمز عبور:'.$lu[3].PHP_EOL;
        echo $lus;
    }
    function namayeshe_kol__sabtehnamha(){
        $lines = file("data.txt");
        if ($lines !== false) {
            foreach ($lines as $line) {
                echo $line; // چاپ هر خط
            }
        }
    }
}
new shopir();
?>