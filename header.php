<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>Mobile Store</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .hoverable{
  display:inline-block;
  backface-visibility: hidden;
  vertical-align: middle;
  position:relative;
  box-shadow: 0 0 1px rgba(0,0,0,0);
  tranform: translateZ(0);
  transition-duration: .3s;
  transition-property:transform;
}

.hoverable:before{
  position:absolute;
  pointer-events: none;
  z-index:-1;
  content: '';
  top: 100%;
  left: 5%;
  height:10px;
  width:90%;
  opacity:0;
  background: -webkit-radial-gradient(center, ellipse, rgba(255, 255, 255, 0.35) 0%, rgba(255, 255, 255, 0) 80%);
  background: radial-gradient(ellipse at center, rgba(255, 255, 255, 0.35) 0%, rgba(255, 255, 255, 0) 80%);
  /* W3C */
  transition-duration: 0.3s;
  transition-property: transform, opacity;
}

.hoverable:hover, .hoverable:active, .hoverable:focus{
  transform: translateY(-5px);
}
.hoverable:hover:before, .hoverable:active:before, .hoverable:focus:before{
  opacity: 1;
  transform: translateY(-5px);
}



@keyframes bounce-animation {
  16.65% {
    -webkit-transform: translateY(8px);
    transform: translateY(8px);
  }

  33.3% {
    -webkit-transform: translateY(-6px);
    transform: translateY(-6px);
  }

  49.95% {
    -webkit-transform: translateY(4px);
    transform: translateY(4px);
  }

  66.6% {
    -webkit-transform: translateY(-2px);
    transform: translateY(-2px);
  }

  83.25% {
    -webkit-transform: translateY(1px);
    transform: translateY(1px);
  }

  100% {
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }
}

.bounce {
  animation-name: bounce-animation;
  animation-duration: 2s;
}



/*everything below here is just setting up the page, so dont worry about it */


@media (min-width: 768px) {
  .navbar{
    text-align: center !important;
    float: none;
    display: inline-block;
  }
}
.page-title {
  opacity: .75 !important;
}
#Menu{
    font-size:4vh;
    margin-top:2vh;
} 
h1{
    font-size:6vh;
}  
#cart_icon{
    padding:0px;
    margin-top:-2vh;
    font-size:6vh;
    position:relative;
}
#cart_count_indicator{
    margin-top:2vh;
    margin-left:-4vh;
    position:absolute;
}
#main_header_div{
    
}
    </style>
    <div id="main_header_div" class="container-fluid">
        <div id="Menu" class="row">
                <div class="row">
                    <h1 class="col-4 border hoverable">Mobile Store</h1>
                    <a id="len1" class="hoverable col" href="#">Home</a>
                    <a id="len2" class="hoverable col" href="#">About</a>
                    <a id="len3" class="hoverable col" href="#">Portfolio</a>
                    <a class="bi bi-cart col" href="#" id="cart_icon"><span id="cart_count_indicator" class="btn btn-danger rounded-circle "><?php if(isset($_SESSION['cart'])) echo count($_SESSION["cart"]); else echo 0; ?></span></a>
                    <a id="log_in_link" class="hoverable col" href="login_form.php"><?php if(isset($_SESSION['login'])) echo $_SESSION["login"]; else echo "Log in"; ?></a>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $(function(){
        var str = '#len'; //increment by 1 up to 1-nelemnts
        $(document).ready(function(){
            var i, stop;
            i = 1;
            stop = 4; //num elements
            setInterval(function(){
            if (i > stop){
                return;
            }
            $('#len'+(i++)).toggleClass('bounce');
            }, 500)
        });
        

    });
</script>
<script src="code.js"></script>
</html>
