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
            border: 2px solid;
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
            border:none;
            outline: none;
            display: grid;
            height: 500px;
            width: 400px;
            justify-content: center;
            justify-items: center;
            float: right;
            
        }
        .welcometext{
            margin-top: 150px;
        }
        .group {
 position: relative;
 margin-left: 100px
}

.input {
 font-size: 16px;
 padding: 10px 10px 10px 5px;
 display: block;
 width: 200px;
 border: none;
 border-bottom: 1px solid #515151;
 background: transparent;
}

.input:focus {
 outline: none;
}

label {
 color: #999;
 font-size: 18px;
 font-weight: normal;
 position: absolute;
 pointer-events: none;
 left: 5px;
 top: 10px;
 transition: 0.2s ease all;
 -moz-transition: 0.2s ease all;
 -webkit-transition: 0.2s ease all;
}

.input:focus ~ label, .input:valid ~ label {
 top: -20px;
 font-size: 14px;
 color: #5264AE;
}

.bar {
 position: relative;
 display: block;
 width: 200px;
}

.bar:before, .bar:after {
 content: '';
 height: 2px;
 width: 0;
 bottom: 1px;
 position: absolute;
 background: #5264AE;
 transition: 0.2s ease all;
 -moz-transition: 0.2s ease all;
 -webkit-transition: 0.2s ease all;
}

.bar:before {
 left: 50%;
}

.bar:after {
 right: 50%;
}

.input:focus ~ .bar:before, .input:focus ~ .bar:after {
 width: 50%;
}

.highlight {
 position: absolute;
 height: 60%;
 width: 100px;
 top: 25%;
 left: 0;
 pointer-events: none;
 opacity: 0.5;
}

.input:focus ~ .highlight {
 animation: inputHighlighter 0.3s ease;
}

@keyframes inputHighlighter {
 from {
  background: #5264AE;
 }

 to {
  width: 0;
  background: transparent;
 }
}
.group1 {
    margin-left: 100px;
 position: relative;
 margin-top: 5px;
}

.input {
   
 font-size: 16px;
 padding: 10px 10px 10px 5px;
 display: block;
 width: 200px;
 border: none;
 margin-top: 25px;
 border-bottom: 1px solid #515151;
 background: transparent;
}

.input:focus {
 outline: none;
}

label {
 color: #999;
 font-size: 18px;
 font-weight: normal;
 position: absolute;
 pointer-events: none;
 left: 5px;
 top: 10px;
 transition: 0.2s ease all;
 -moz-transition: 0.2s ease all;
 -webkit-transition: 0.2s ease all;
}

.input:focus ~ label, .input:valid ~ label {
 top: -20px;
 font-size: 14px;
 color: #5264AE;
}

.bar {
 position: relative;
 display: block;
 width: 200px;
}

.bar:before, .bar:after {
 content: '';
 height: 2px;
 width: 0;
 bottom: 1px;
 position: absolute;
 background: #5264AE;
 transition: 0.2s ease all;
 -moz-transition: 0.2s ease all;
 -webkit-transition: 0.2s ease all;
}

.bar:before {
 left: 50%;
}

.bar:after {
 right: 50%;
}

.input:focus ~ .bar:before, .input:focus ~ .bar:after {
 width: 50%;
}

.highlight {
 position: absolute;
 height: 60%;
 width: 100px;
 top: 25%;
 left: 0;
 pointer-events: none;
 opacity: 0.5;
}

.input:focus ~ .highlight {
 animation: inputHighlighter 0.3s ease;
}

@keyframes inputHighlighter {
 from {
  background: #5264AE;
 }

 to {
  width: 0;
  background: transparent;
 }

}
.group2 {
    margin-left: 100px;
 position: relative;
}
.group3 {
    margin-left: 100px;
 position: relative;
}

        .login{
            
            background-color: #fff;
            height: 500px;
            width: 520px;
            justify-content: center;
          float: left;
            /* border: 2px solid; */
      
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
        button {
  --primary-color: #645bff;
  --secondary-color: #fff;
  --hover-color: #111;
  --arrow-width: 10px;
  --arrow-stroke: 2px;
  box-sizing: border-box;
  border: 0;
  border-radius: 20px;
  color: var(--secondary-color);
  padding: 1em 1.8em;
  background: var(--primary-color);
  display: flex;
  transition: 0.2s background;
  align-items: center;
  gap: 0.6em;
  font-weight: bold;
}

button .arrow-wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
}

button .arrow {
  margin-top: 1px;
  width: var(--arrow-width);
  background: var(--primary-color);
  height: var(--arrow-stroke);
  position: relative;
  transition: 0.2s;
}

button .arrow::before {
  content: "";
  box-sizing: border-box;
  position: absolute;
  border: solid var(--secondary-color);
  border-width: 0 var(--arrow-stroke) var(--arrow-stroke) 0;
  display: inline-block;
  top: -3px;
  right: 3px;
  transition: 0.2s;
  padding: 3px;
  transform: rotate(-45deg);
}

button:hover {
  background-color: var(--hover-color);
}

button:hover .arrow {
  background: var(--secondary-color);
}

button:hover .arrow:before {
  right: 0;
}
.Signin a{
    text-decoration: none;
    color: #ffff;
}


/* @media query */
@media screen  and (max-width: 1331px) {
    .display{
        display: grid;
            height: 500px;
            width: 300px;
            justify-content: center;
            justify-items: center;
            
    }
}
@media screen  and (max-width: 1191px) {
    .display{
        display: grid;
            height: 500px;
            width: 200px;
            justify-content: center;
            justify-items: center;
             
    }
    .login{
            
            border:none;
            outline: none;
            background-color: #fff;
            height: 500px;
            width: 400px;
            justify-content: center;
          float: right;
             
     
            
        }
}
@media screen and (max-width:875) {
    
}
@media screen  and (max-width: 731px) {
    .display{
        display: grid;
            height: 500px;
            width: 150px;
            justify-content: center;
            justify-items: center;
            
    }
    .login{
            
            border:none;
            outline: none;
            background-color: #fff;
            height: 500px;
            width: 350px;
            justify-content: center;
          float: left;
             
     
            
        }
}
    </style>
</head>
<body>
    <div class="mainborder">
        <div class="cartborder">
            <div class="display">
                <div class="welcometext" >

                    <h2>WELCOME  TO HYSTERSIS</h2>
                    <!-- <h2 style="margin-left: 40px;">User</h2> -->
                </div>               
            </div>        
        <div>
        </div>
           <form action="SignupPage.php" method="post" class="login">
        <div >
             <h2 style="margin-left: 40px;">Personal details</h2>
             <div>

                <div class="group">
                    <input required="" type="text" class="input" name="Name">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Name</label>
                  </div>
                </div>
                <div class="group1">
                    <input required="" type="text" class="input" name="Email">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Email</label>
                  </div>
                  <div class="group2">
                    <input required="" type="number" class="input" name="Phone">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Phone</label>
                  </div>
                  <div class="group3">
                    <input required="" type="password" class="input" name="Password">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Password</label>
                  </div>
             
                </form>

             <div>
                <button name="submit"  type="submit" >
                    <span class="circle1"></span>
                    <span class="circle2"></span>
                    <span class="circle3"></span>
                    <span class="circle4"></span>
                    <span class="circle5"></span>
                    <!-- <input type="submit" value="Submit" name="submit" onclick="showMessage()"  > -->
                    <span class="submit" name="submit">Submit</span>
                </button>   
             </div>
             <div class="Signin" >
             <button>
    <a href="Login.php"> Sign up</a>
    <div class="arrow-wrapper">
        <div class="arrow"></div>
        
    </div>
</button>
            </div>
            
            <a href="Login.php" style="margin-left: 300px; margin-top: -100px;">?have account</a>
        </div>
       
        
    </div>
    </div>
</body>
 <script>
 
    function sign(){
        setTimeout(function() {
    window.location.href = ' Login.php';
    
   
}, 2000);
    }
 </script>
</html>
<?php

if(isset($_POST['submit'])){
    $name=$_POST['Name'];
    $email=$_POST['Email'];
    $phone=$_POST['Phone'];
    $pass=$_POST['Password'];
    $conn=new mysqli('localhost','root','root','Userlogin');
   
    $query=mysqli_query($conn,"select Email,Phone from users where Email='$email'");
    $check=mysqli_num_rows($query);
    if($check>0){
       
echo "you have already account  ";
}

elseif($conn){
    $sql="insert into users (Name,Email,Phone,Password) 
    values('$name','$email',$phone,'$pass')";
    mysqli_query($conn,$sql);
    echo"Account created successfully";
}
else{
    die($sql);
}
}
if(isset($_POST['login'])){
    header('location:Login.php');
}

?>