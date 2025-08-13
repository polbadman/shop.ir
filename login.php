<?php 
    require_once 'header.php';
    if(!empty($_SESSION['un'])){
        header('Location: panel/panel.php');
        die; 
    }
    $users = $db->fetchAll('SELECT * FROM userz');
    if(isset($_POST['username']) && isset($_POST['password']))
    {
        function usercheck($un , $pw, $users){
            foreach($users as $user){
                if($user['username'] == $un && $user['password'] == md5($pw)){
                    $_SESSION['un'] = $un;
                    $_SESSION['pw'] = $pw;

                    header('Location: panel/panel.php');

                    return 1;
                }
            }
            return 0;
        }
        $auth= usercheck($_POST['username'],$_POST['password'],$users);
        if($auth == 0){
            echo  "<script>alert('نام کاربری یا رمز عبور صحیح نیست!')</script>";
        }
    }

?>

    <main>
        <div class="login-container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="login-box">
                        <form id="loginForm" method="post" action="login.php">
                            <div class="input-group">
                                <label for="username">نام کابری :</label>
                                <input type="text" id="username" name="username" placeholder="Username" required >
                            </div>
                            <div class="input-group">
                                <label for="password">رمز عبور :</label>
                                <input type="password" id="password" name="password" placeholder="Password"required >
                            </div>
                            <p class="do-you-have">
                                حساب  کاربری ندارید؟
                                <a href="Sign up.php"> ؟ایجاد حساب کاربری</a>
                              .کمتر از یک دقیقه از زمان شما را خواهد گرفت
                            </p>
                            <div class="submit-btn-container">
                                
                                <button type="submit" class="btn">login</button>
                                <p class="p" id="errorMessage"></p>
                            </div>
                            </form>
                            <div class="social-auth">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="login-img-container">
                        <img src="./svg/login.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- <script src="<?php echo PATH_JS;?>kl.js"></script> -->
<?php require_once 'footer.php';?>