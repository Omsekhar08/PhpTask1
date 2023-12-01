<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .mainborder{
            height: 700px;
            width: 100%;
            border: 1px solid;
            justify-content: center;
            background: #36D1DC;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #5B86E5, #36D1DC);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #5B86E5, #36D1DC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

             /* background-image: radial-gradient( circle 897px at 9% 80.3%,  rgb(107, 110, 209) 0%, rgba(133, 137, 237, 0.9) 100.2% );; */
        }
        .cartborder{
          
            margin-top: 100px;
            height: 500px;
            width: 70%;
            border: 2px solid;
            margin-left: 15%;
        }
        .display{
            display: grid;
            height: 500px;
            width: 520px;
            justify-content: center;
            justify-items: center;
            float: left;
            border: 2px solid;
        }
        .welcometext{
            margin-top: 150px;
        }
        .login{
            background-color: #fff;
            height: 500px;
            width: 400px;
            justify-content: center;
          float: right;
            border: 2px solid;
     
            
        }
        .username {
        
                border: none;
                outline: none;
                border-radius: 15px;
                padding: 1em;
                margin-top: 10px;
                margin-left: 100px;
                background-color: #ccc;
                box-shadow: inset 2px 5px 10px rgba(0,0,0,0.3);
                transition: 300ms ease-in-out;
         }

            .username:focus {
            background-color: white;
            transform: scale(1.05);
            box-shadow: 13px 13px 100px #969696,
                        -13px -13px 100px #ffffff;
            }
            .password{
                border: none;
            outline: none;
            border-radius: 15px;
            padding: 1em;
            margin-top: 10px;
            margin-left: 100px;
            background-color: #ccc;
            box-shadow: inset 2px 5px 10px rgba(0,0,0,0.3);
            transition: 300ms ease-in-out;
            }
        .password:focus{
            background-color: white;
        transform: scale(1.05);
        box-shadow: 13px 13px 100px #969696,
                    -13px -13px 100px #ffffff;
        }
        button {
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
        color: white;
        margin-top: 20px;
        margin-left: 140px;
        background-color: #171717;
        padding: 1em 2em;
        border: none;
        border-radius: .6rem;
        position: relative;
        cursor: pointer;
        overflow: hidden;
        }

        button span:not(:nth-child(6)) {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        height: 30px;
        width: 30px;
        background-color: #0c66ed;
        border-radius: 50%;
        transition: .6s ease;
        }

        button span:nth-child(6) {
        position: relative;
        }

        button span:nth-child(1) {
        transform: translate(-3.3em, -4em);
        }

        button span:nth-child(2) {
        transform: translate(-6em, 1.3em);
        }

        button span:nth-child(3) {
        transform: translate(-.2em, 1.8em);
        }

        button span:nth-child(4) {
        transform: translate(3.5em, 1.4em);
        }

        button span:nth-child(5) {
        transform: translate(3.5em, -3.8em);
        }

        button:hover span:not(:nth-child(6)) {
        transform: translate(-50%, -50%) scale(4);
        transition: 1.5s ease;
        }
        
        .checkbox-wrapper-65 *,
        .checkbox-wrapper-65 ::after,
        .checkbox-wrapper-65 ::before {
        box-sizing: border-box;
        /* margin-top: 10px; */
        }

        .checkbox-wrapper-65 .cbx {
        position: relative;
        display: block;
        float: left;
        margin-top: 10px;
        margin-left: 100px;
        width: 18px;
        height: 18px;
        border-radius: 4px;
        background-color: #1c4780;
        background-image: linear-gradient(#0f698d, #1d3c6b);
        box-shadow: inset 0 1px 1px rgba(255,255,255,0.15), inset 0 -1px 1px rgba(0,0,0,0.15);
        transition: all 0.15s ease;
        }

        .checkbox-wrapper-65 .cbx svg {
        position: absolute;
        top: 3px;
        left: 3px;
        fill: none;
        stroke-linecap: round;
        stroke-linejoin: round;
        stroke: #fff;
        stroke-width: 2;
        stroke-dasharray: 17;
        stroke-dashoffset: 17;
        transform: translate3d(0, 0, 0);
        }

        .checkbox-wrapper-65 .cbx + span {
        float: left;
        margin-left: 6px;
        }

        .checkbox-wrapper-65 {
        user-select: none;
        }

        .checkbox-wrapper-65 label {
        display: inline-block;
        cursor: pointer;
        }

        .checkbox-wrapper-65 input[type="checkbox"] {
        display: none;
        visibility: hidden;
        }

        .checkbox-wrapper-65 input[type="checkbox"]:checked + .cbx {
        background-color: #606062;
        background-image: linear-gradient(#2584d2, #1d52c1);
        }

        .checkbox-wrapper-65 input[type="checkbox"]:checked + .cbx svg {
        stroke-dashoffset: 0;
        transition: all 0.15s ease;
        }
        .forgetpass{
        
        margin-left: 225px;
        margin-top: -25px;
        }
        button {
 padding: 17px 40px;
 border-radius: 50px;
 border: 0;
 /* background-color: white; */
 box-shadow: rgb(0 0 0 / 5%) 0 0 8px;
 letter-spacing: 1.5px;
 text-transform: uppercase;
 font-size: 15px;
 transition: all .5s ease;
}

button:hover {
 letter-spacing: 3px;
 background-color: hsl(261deg 80% 48%);
 color: hsl(0, 0%, 100%);
 box-shadow: rgb(93 24 220) 0px 7px 29px 0px;
}

button:active {
 letter-spacing: 3px;
 background-color: hsl(261deg 80% 48%);
 color: hsl(0, 0%, 100%);
 box-shadow: rgb(93 24 220) 0px 0px 0px 0px;
 transform: translateY(10px);
 transition: 100ms;
}
.Signin a{
    text-decoration: none;
    color: #ffff;
}
    </style>
</head>
<body>
    <div class="mainborder">
        <div class="cartborder">
            <div class="display">
                <div class="welcometext" >

                    <h1>WELCOME BACK !</h1>
                    <h3>User</h3>
                </div>
                
               
            </div>
        
        <div>

        </div>
           <form action="Login.php" method="post">
        <div class="login">
           <h3 style="margin-left: 20px;">  Hello! <br> User</h3>
            <h3 style="margin-left: 100px;">Login your Account</h3>
            <input type="text" autocomplete="off" name="email" class="username" placeholder="Email Address">
            <input class="password" 
             placeholder="******" type="password" name="password">
             <div class="checkbox-wrapper-65">
                <label for="cbk1-65">
                  <input id="cbk1-65" type="checkbox">
                  <span class="cbx">
                    <svg viewBox="0 0 12 11" height="11px" width="12px">
                      <polyline points="1 6.29411765 4.5 10 11 1"></polyline>
                    </svg>
                  </span>
                  <span>Remind me</span>
                </label>
              </div>
              <div class="forgetpass">
                <a href="#">forget password</a>
              </div>

             <div>
             <button name="submit"  type="submit">
                    <span class="circle1"></span>
                    <span class="circle2"></span>
                    <span class="circle3"></span>
                    <span class="circle4"></span>
                    <span class="circle5"></span>
                    <!-- <input type="submit" value="Submit" name="submit" onclick="showMessage()"  > -->
                    <span class="submit" name="submit">Submit</span>
                </button>               

             </div>
             <div class="Signin">
                <button><a href="SignupPage.php"> SignUp</a>
                </button>
            </div>
            <a href="#" style="margin-left: 300px; margin-top: -100px;">?New User</a>
        </div>
        </form>
        
    </div>
    </div>
</body>
</html>
<?php
    $conn=new mysqli('localhost','root','root','Userlogin');
 
if(isset($_POST['submit'])){
    
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $result=mysqli_query($conn,"select Email,Password from users where 
    Email='$email' and Password='$pass' ");
    $check=mysqli_num_rows($result);
    echo"$check";
    if($result->num_rows >0){
        header("location:https://www.w3.com");
    }
    else{
        echo"Please check email or  Password";
    }
    
}
if(isset($_POST['Signin'])){
    sleep(2);
    header("location:SignupPage.php");
}
?>