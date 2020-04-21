<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Data</title>
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
        section{
          background-color: greenyellow;
          border: 15px black;
          padding: 8px;
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
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Menu
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item avtive" href="#">Food</a>
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
          <button class="btn btn-outline-success my-2 my-sm-0" type="link">Log in</button>
          <button class="btn btn-outline-success my-2 my-sm-0" type="link">Register</button>
        </form>
      </div>
    </nav>

    <div class="container">
    <h2>Data Table</h2>
    <p>Macflari Skin</p>            
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>nomor id</th>
                <th>Nama</th>
                <th>no. telepon</th>
                <th>Alamat</th>
            </tr>
        </thead>

<?php
    include "../connect.php";
        $query = "select * from reg";
        $sql = mysqli_query($connect,$query);

    while($adm_data = mysqli_fetch_array($sql)){
        echo "<tr>";
        echo "<td>".$adm_data['id_user']."</td>";
        echo "<td>".$adm_data['nama_user']."</td>";
        echo "<td>".$adm_data['telp']."</td>";
        echo "<td>".$adm_data['alamat']."</td>";
        echo "<td>".$adm_data['password']."</td>";
        echo "<td><a href='edit.php?email'".$adm_data['email']."'>Edit |</a>";
        echo "<a href='delete.php?email=".$adm_data['email']."'> Delete</a></td>";
    }
?>

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
</body>
</html>