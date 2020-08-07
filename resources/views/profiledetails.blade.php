<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
     <!-- JQuery -->
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

    <style>
        .box1{
            margin-top:125px;
            background:white;
            border:2px solid black;
            padding:30px;
            margin-bottom:100px;
            border-radius:9px;
        }
        .left{
            float:left;

        }
        .right{
            font-size:35px;
            padding-top:150px;
        }
        .editprofile{
            height:450px;
            width:750px;
            margin-bottom:50px;
        }
        .submit-alert{
            display:none;
        }
        .clear{
            clear:both;
        }
        
    </style>
</head>
<body>
    <!--Navbar -->
    <nav class="mb-3 pt-4 pb-4 navbar font-weight-bold navbar-expand-lg navbar-dark orange lighten-1">
        <a class="navbar-brand pr-5 pl-4 black-text" href="#">PROJECTMANAGER</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
            aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
            <ul class="navbar-nav mr-auto">
            
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user.homepage', ['$id' => $details->id]) }}">BACK</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
            </ul>
            <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item avatar">
                <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dark  dropdown-menu-lg-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/logout">LOGOUT</a>
                </div>
            </li>
            </ul>
        </div>
        </nav>
        <!--/.Navbar -->
        

        <div class="container box1">
            <form action="{{ route('edit.profile',['$id' => $details->id]) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">EMAIL ADDRESS</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email"  value="{{ $details->email}}">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                    <div class="form-group">
                        <label for="exampleInputName">NAME</label>
                        <input type="text" class="form-control" id="exampleInputName" name="name" value="{{ $details->name}}">
                    </div> 
                <button onclick="onsubmit()" type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
        
        </script>

        <div>
        <div class="left"><img src="{{ asset('images\editprofile.jpg') }}" class="editprofile" alt=""></div>
        <div class="right">After clicking on submit , check whether the changes are reflected in the main dashboard.</div>
        </div>
        <div class="clear"></div>

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