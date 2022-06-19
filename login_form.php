<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        *{margin:0;padding:0;box-sizing:border-box;font-family:"poppins", sans-serif}
        body{display:flex;justify-content:center;align-items:center;height:100vh;background-color:#000}
        .container{background:rgb(15,15,15);width:350px;height:350px;border-radius:20px;display:flex;justify-content:center;flex-direction:column;color:#fff;padding:2em}
        .heading{font-size:2em;margin-bottom:0.5em}.box{margin:0.2em 0}
        .container .box p{color:rgba(255,255,255,0.701)}
        .container .box div{position:relative;width:100%;height:40px;margin:0.2em 0}
        .container .box input{position:absolute;width:100%;height:100%;background:rgba(19,19,19);color:#fff;border:none;outline:none;padding-left:0.8em;border-radius:10px;transition:all 0.5s}
        .container .box input:focus::placeholder{color:#fff}.container .box div::before{content:'';position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:102%;height:105%;border-radius:10px;background:linear-gradient(to right, #ff416c,#ff4b2b)}
        .loginBtn{width:102%;height:40px;border-radius:10px;margin:0.2em 0;transform:translate(-1%);cursor:pointer;color:#fff;background:linear-gradient(to right, #ff416c,#ff4b2b);transition:all 0.5s}.loginBtn:hover{transform:translate(-1%,5%);box-shadow:0 0 10px #ff416d65}
        .text{font-size:0.8em;margin-top:0.5em;text-align:center;color:rgba(255,255,255,0.625)}
        .text a{color:rgba(255,255,255,0.911)}
    </style>
    <div class="container">
        <p class="heading">Login In</p>
        <div class="box">
            <p>Email</p>
            <div> <input id="email" type="text" autocomplete="off" placeholder="Enter your email"> </div>
        </div>
        <div class="box">
            <p>Password</p>
            <div> <input type="text" id="password" autocomplete="off" placeholder="Enter your password"> </div>
        </div> <button class="loginBtn" id="login_btn">Login</button>
        <p class="text">New User? <a href="register_form.php">Register</a></p>
    </div>
</body>
<script>
    $(document).ready(function(){
        $("#login_btn").click(function(){
            $email = $('#email').val();
            $password = $('#password').val();
            $.ajax({
                type:'post',
                url:'user_server.php',
                data:{
                    request_login:'login',
                    email:$email,
                    password:$password
                },
                success:function(response){
                    alert(response);
                    if(response ==="Sumit")
                        window.location='index.php';
                }
            });
        });
    });
</script>
</html>