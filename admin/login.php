<?php include "includes/header.php" ?>
<body style="background-image:url('../img/adminbackg.jpg'); background-size:cover">
    <div class="row" style="margin-top:100px">
        <div class="col 16 offset-13 m8 offset-m2 s12">
            <div class="card-panel center grey lighten-2" style="margin-bottom:0px">
                <ul class="tabs grey lighten-2">
                    <li class="tab">
                        <a href="#login">Login</a>
                    </li>
                    <li class="tab">
                        <a href="#signup">SignUp</a>
                    </li>
                </ul>
            </div>

        </div>
        <div class="col 16 offset-13 m8 offset-m2 s12" id="login">
            <div class="card-panel center" style="margin-top:1px">
                <h5>Login To continue</h5>
                <?php
                if(isset($_SESSION['message']))
                {
                    echo $_SESSION['message'];
                    unset ($_SESSION['message']);
                }
                ?>
                <form action="login_check.php" method="Post">
                <div class="input-field">
                    <input type="text" id="username" name="username" placeholder="Enter Username">
                </div>
                <div class="input-field">
                    <input type="password" id="password" name="password" placeholder="Enter Password">
                </div>
                <input type="submit" name="login" class="btn" value="Login">
                </form>
            </div>
        </div>
        <div class="col 16 offset-13 m8 offset-m2 s12" id="signup">
            <div class="card-panel center" style="margin-top:1px">
                <h5>SignUp now</h5>
                <div class="input-field">
                   <form action="signup.php" method="Post">
                   <input type="email" name="email" id="email" placeholder="Enter Email" class="validate">
                    <label for="email" data-error="Invalid Email Format" data-success="Valid Email"></label>
                </div>
                <div class="input-field">
                    <input type="text" id="username" name="username" placeholder="Enter Username">
                </div>
                <div class="input-field">
                    <input type="password" id="password" name="password" placeholder="Enter Password">
                </div>
                <input type="submit" name="signup" class="btn" value="Sign Up">
                   </form>
            </div>
            
        </div>
        <!--SignUp and login area-->
    </div>

<?php include "includes/footer.php" ?>