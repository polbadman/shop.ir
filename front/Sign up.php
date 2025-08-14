<?php
require '../config.php';
require_once 'header.php';


if (isset($_POST['username']) && isset($_POST['password'])  && isset($_POST['email']) && isset($_POST['mobile'])) {

    $un     = $_POST['username'];
    $pw     = $_POST['password'];
    $mobile = $_POST['mobile'];
    $email  = $_POST['email'];



    function registeruser($un, $pw, $mobile, $email)
    {
        $db = new Database;


        $data   = array(
            'username' => $un,
            'password' => md5($pw),
            'email' => $email,
            'mobile' => $mobile,
            'role' => 3,
        );

        // print_r($data);exit;
        $result = $db->insert('userz', $data);
        if ($result != 1) {

            $_SESSION['un'] = $un;
            $_SESSION['pw'] = $pw;

            header('Location: '.PATH_PANEL.'/panel.php');
            return 1;
        }
        if ($result != 1) {
            echo  "<script>alert('در فرایند ثبت نام خطایی رخ داده')</script>";
        }
    }
    registeruser($un, $pw, $mobile, $email);
}
?>
<main>
    <div class="login-container" style="height: 100%;">
        <div class="row">
            <div class="col-lg-8">
                <div class="login-box">
                    <form id="signupform" method="post" action="Sign up.php">
                        <div class="input-group">
                            <label for="mobile">موبایل :</label>
                            <input type="text" id="mobile" pattern="([0-9]{11})" name="mobile" placeholder="mobile"
                                required>
                        </div>
                        <div class="input-group">
                            <label for="username">نام کابری :</label>
                            <input type="text" id="username" name="username" placeholder="Username" required>
                        </div>
                        <div class="input-group">
                            <label for="username">ایمیل:</label>
                            <input type="email" id="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="input-group">
                            <label for="password">رمز عبور :</label>
                            <input type="password" id="password" name="password" placeholder="Password" required>
                        </div>
                        <p class="do-you-have">
                            حساب کاربری دارید؟
                            <a href="login.php">برو توش</a>
                        </p>
                        <div class="submit-btn-container">
                            <button type="submit" class="btn">Sign up</button>
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
                    <img src="<?php echo PATH_SVG?>login.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</main>
<?php require_once PATH_FRONT . '/footer.php'; ?>