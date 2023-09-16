<?php include('includes/header.php'); ?>
<div class="container ">
        <h1 class="logo-log">FASION</h1>
    <form class="rig-form" method="POST" action="handlers/handRegister.php">
        <div class="img-rig">
        <img src="images/ahmed-carter-tiWcNvpQF4E-unsplash.jpg" alt="">
        </div>
        <div class="btn-rig">
                    <h3>Sign Up</h3>
                <div class="rig-label">
                    <label class="form-label" >NAME</label>
                    <input type="text" name="username" class="form-control" placeholder="Name">
                </div>
                <div class="rig-label">
                    <label class="form-label">E-MAIL</label>
                    <input type="email" name="useremail" class="form-control" placeholder="Email">
                </div>
                <div class="rig-label">
                    <label class="form-label">PASSWORD</label>
                    <input type="password" name="userpassword" class="form-control" placeholder="Password">
                </div>
                <div class="rig-label">
                    <label class="form-label">CONFIRM PASSWORD</label>
                    <input type="password" name="usercpassword" class="form-control" placeholder="Password">
                </div>
                <div class="rig-label bttn">
                    <input type="submit" name="registerBTN" value="Register" class="form-control btn-outline-success ">
                </div>
                    <h6>Already have account?<a href="login.php">Sign In</a></h6>
        </div>
    </form>
</div>
</body>

<style scoped>
/* *{
    color: #27e1c1;
} */
a{
    text-decoration: none;
    margin-left: 1vh;
    color: #27e1c1;
}
.logo-log{
    font-family: 'Parisienne', cursive;
    text-align: center;
    margin: 5vh 0 10vh 0;
}
.rig-form{
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 12.5vh;
    border-radius: 10vh;
    box-shadow: 15px 15px 5vh rgba(0, 0, 0, 0.2);
}
.img-rig{
    width: 40%;
}
.img-rig img{
    width: 90%;
    height: 100vh;
}

.btn-rig{
    width: 30%;
}
.rig-label{
    margin: 4vh 0 4vh 0;
}
.bttn input{
    background-color: #27e1c1;
}
.bttn input:hover{
    background-color: white;
}
.rig-label input:hover{
    color: #088395;
    box-shadow:#088395 ;
}
</style>
