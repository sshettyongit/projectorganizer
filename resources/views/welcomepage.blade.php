<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

    <style>
        .customnav{
            margin-bottom:0px;
        }
        .tt1{
          font-size:32px;
          margin-right:30px;
          padding-top:20px;
          padding-bottom:20px;
        }
        .container{
            height: auto;
            width : auto;
            overflow : hidden;
            
        }
        .ct1{
            background:#212121;
            padding-top : 30px;
            padding-bottom : 50px;
        }
        .ct11{
            font-size : 250%;
            color : white;
            padding-left : 50%;
            padding-right: 5%;
        }
        .tt2{
          font-size:17px;
        }
        .container2{
            height: auto;
            width:auto;
            margin-top : 10px;
            margin-bottom: 10px;
           
        }
        .ct21{
            float:left;
            margin:10px;
        }
        .ct22{
          float:right;
          margin:10px;
        }
        .tbt1{
          font-size:50px;
          font-family:Verdana, Geneva, sans-serif;
          margin-left:-35px;
          margin-top:150px;
          margin-bottom:150px;
          margin-right:50px;
          width:550px;
        }
        .brac{
            height:550px;
            width:800px;
            padding:10px;
            border-radius:5px;
        }
        .btn1{
            padding-left:140px;
            padding-top: 20px;
        }
        .btn2{
            padding-left:130px;
            padding-top: 20px;
        }
        .txt1{
            font-size:20px;
            font-family:Verdana, Geneva, sans-serif;
            padding-top:60px;
            padding-left:100px;
        }
        .txt2{
            font-size:20px;
            font-family:Verdana, Geneva, sans-serif;
            padding-top:30px;
            padding-left:100px;
        }
        .clean{
          clear:both;
        }
        .contain3{
          background:#343A40;
          height:auto;
          margin-bottom:10px;
          color:white;
          margin-left:auto;
          margin-right:auto;
          padding-top:30px;
          padding-bottom:60px;
        }
        .contain2{
          background:#343A40;
          text-align:center;
        }
        .imgstyle{
          height:200px;
          weight:200px;
          border-radius:5px;
        }
        .piccap{
          margin-top:15px;
        }
        .container3{
          margin-top:15px;
          margin-bottom:5px;
        }
        .ttbx1{
          float:right;

        }
        
        .ttbx2{
          float:left;

        }
        .imgbx{
          height:500px;
          width:550px;
          padding-left:100px;
          margin-bottom:10px;
          margin-top:10px;
        }
    </style>
</head>
<body>
<nav class="customnav navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand mb=5  tt1" href="{{ route('welcome.home') }}">PROJECTORGANIZER</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ml-1">
        <a class="nav-link mb tt2" href="{{ route('login') }}">LOGIN</a>
      </li>
      <li class="nav-item ml-1">
        <a class="nav-link mb tt2" href="{{ route('register') }}">REGISTER</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          More
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          
          <a class="dropdown-item" href="#">About us</a>
          <a class="dropdown-item" href="#">Contact us</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
    <div class="container1">
        <div class="ct1">
            <div class="ct11">"A place to create , organise and keep track of project developomental activities"</div>
        </div>
    </div>
    <div class="container2">
        <div class="ct21 d-inline-block">
            <img src="{{ asset('images\people.jpg') }}" class="brac" alt="ppl together working">
        </div>
        <div class="ct22 d-inline-block">
            <div class="tbt1">
              "A User-friendly platform for <br> Project Management"
            </div>
        </div>
    </div>
    <div class="clean"></div>
    <div class="contain3 container-fluid">
      <div class="container contain2"> 
          <div class="row">
            <div class="col-4">
              <img class="imgstyle" src="{{ asset('images\organize.jpg') }}" alt="">
              <div class="piccap">Track your schedule to work efficiently</div>
            </div>
            <div class="col-4">
              <img class="imgstyle" src="{{ asset('images\graph.jpg') }}" alt="">
              <div class="piccap">Keep a track of all developmental activities</div>
            </div>
            <div class="col-4">
              <img class="imgstyle" src="{{ asset('images\collaborate.jpg') }}" alt="">
              <div class="piccap">"All in one stop" to organize things</div>
            </div>
          </div>
      </div>
    </div>
    <div class="container3">
        <div class="ttbx1 d-inline-block"><div class="tbt1">Simple , Clean and Efficient interface for User and Admin</div></div>
        <div class="ttbx2 d-inline-block"><img class="imgbx" src="{{ asset('images\ui.jpg') }}" alt=""></div>  
    </div>
      <div class="clean"></div>

<footer class="page-footer font-small mdb-color darken-3">


<div class="container">


  <div class="row">


    <div class="col-md-12 py-5">
      <div class="mb-5 flex-center">

  
        <a class="fb-ic">
          <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
        </a>
     
        <a class="tw-ic">
          <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
        </a>
        
        <a class="gplus-ic">
          <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
        </a>
        
        <a class="li-ic">
          <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
        </a>
       
        <a class="ins-ic">
          <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
        </a>
       
        <a class="pin-ic">
          <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
        </a>
      </div>
    </div>
 

  </div>


</div>



<div class="footer-copyright text-center py-3">© 2020 Copyright:
  <a href="#"> PROJECTORGANIZER</a>
</div>


</footer>

 </body>
</html>

