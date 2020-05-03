<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<style>
        body{
          background-color:aqua;
        }
        h1{
          text-align: center;
          text-transform: uppercase;
          color: black;
        }
        p{
          text-indent: 50px;
          text-align: justify;
          letter-spacing: 3px;
        }
        .login_box{
	      width: 350px;
	      background-color: gray;
	      margin: 80px auto;
	      padding: 30px 20px;
        }
        .login_brand{
	      text-align: center;
	      text-transform: uppercase;
        }
        
      </style>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">HomeCook</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="../home/index.html">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Menu
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item avtive" href="../home/food.html">Food<span class="sr-only">(current)</span></a>
              <a class="dropdown-item" href="#">Baverage</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Payment</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <button class="btn btn-outline-success my-2 my-sm-0" type="link"><a href="../login/login.php">Log in</a></button>
          <button class="btn btn-outline-success my-2 my-sm-0" type="link">Register</button>
        </form>
    </div>
</nav>

<div class="login_box">
  <p class="login_brand">log in</p>
  <form>
    <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<footer class="page-footer font-small blue-grey lighten-5">
  <div style="background-color: rgb(177, 211, 155);">
    <div class="container">
      <div class="row py-4 d-flex align-items-center">
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">Get Closer With Alif</h6>
        </div>
        <div class="col-md-6 col-lg-7 text-center text-md-right">
          <a href="#"><img src="ofwf.jpg" style="height:20px"></a>
          <a href="#"><img src="huiwff.jpg" style="height:20px"></a>
          <a href="#"><img src=",yfifgw.jpg" style="height:20px"></a>
          <a href="#"><img src="fhejhuwf.jpg" style="height:20px"></a>
          <a href="#"><img src="hfuhwfi.jpg" style="height:20px"></a>
        </div></div></div></div>
  <br><br>
  
  <div class="container-fluid text-center text-md-left">
    <div class="row">
        <div class="col-md-6 mt-md-0 mt-3"></div>
        <hr class="clearfix w-100 d-md-none pb-3">
        <div class="col-md-3 mb-md-0 mb-3">
        <h5 class="text-uppercase">Company</h5>
        <ul class="list-unstyled">
          <li>
            <a href="#!">ABOUT ME</a>
          </li>
          <li>
            <a href="#!">WANNA GET NOTIFIED?</a>
          </li>
          <li>
            <a href="#!"></a>
          </li>
        </ul>
      </div>

      <div class="col-md-3 mb-md-0 mb-3">
        <h5 class="text-uppercase">Help</h5>
        <ul class="list-unstyled">
          <li>
            <a href="#!">HAVE A QUESTION?</a>
          </li>
          <li>
            <a href="#!">ORDER</a>
          </li>
          <li>
            <a href="#!">COMPLAIN</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</body>
</html>