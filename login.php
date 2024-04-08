<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        header("location: users.php");
    }
?>

<?php include_once "header.php";?>
    <body>
        <div class="wrapper">
            <section class="form login">
                <header>RealTime chat app</header>
                <form action="#">
                    <div class="error-txt">
                        This is an error message!
                    </div>
                    <div class="name-details">
                        <div class="field input">
                            <label>Email Address</label>
                            <input type="text" name = "email" placeholder="First Name">
                        </div>
                        <div class="field input">
                            <label>Password</label>
                            <input type="password" name = "password" placeholder="Enter your password">
                            <i class="fas fa-eye"></i>
                        </div>
                        <div class="field button">
                            <input type="submit" value="continue to chat">
                        </div>
                    </div>
                </form>
                <div class="link">
                    New Here?
                    <a href="index.php">SignUp now</a>
                </div>
            </section>
        </div>
        <script src="javascript/pass-show-hide.js"></script>
        <script src="javascript/login.js"></script>
    </body>
</html>
