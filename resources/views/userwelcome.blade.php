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
             margin-left:-15px;
         }
        .captiontxtbx{
            font-size:58px;
            font-weight:bold;
            text-transform:uppercase;
            font-family:Roboto;
            text-align:center;
            margin-top:-650px;
            margin-bottom:650px;
        }
        .box2{
            background-color:#FFA726;
            height:auto;
            margin-top:-50px;
            margin-bottom:50px;
            padding-top:100px;
            text-align:center;
            padding-bottom:100px;
        }
        .txt21{
            font-size:37px;
            font-weight:bold;
        }
        .txt21:hover{
            color:white;
            transition-duration:1s;
        }
        .animate__animated.animate__fadeIn {
            --animate-duration:5s;
        }
        .animate__animated.animate__fadeInUp{
            --animated-duration:7s;
        }
        .box21{
            margin-top:25px;
            color:white;
            margin-bottom:50px;
        }
        .box22{
            font-size:18px;
        }
        .disclaimer{
            margin-top:10px;
            margin-bottom:10px;
            padding-top:10px;
            padding-bottom:10px;
            height:auto;
        }
        #boxhide{
            visibility: hidden;
            font-size:27px;
            text-align:center;
            margin-bottom:40px;

        }
    </style>
     @notifyCss
    
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
                <a class="nav-link" href="{{ route('userprofile.edit',['$id' => $user->id])}}">Edit profile
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
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
    
    <div class="container">
        <img src="{{ asset('images\userwelcome.jpg')}}"  class="container-fluid box1 animate__animated animate__fadeInUp" alt="">
        <div class="captiontxtbx animate__animated animate__fadeIn ">WELCOME, {{ Auth::user()->name }}</div>
    </div>
    <div class="container-fluid box2">
        <div class="txt21 ">DASHBOARD</div>
        <div class="box21">
            <table class="table" id="table1">
                <thead class="table-dark">
                    <tr>
                    <th scope="col">Project id</th>
                    <th scope="col">Project name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Joining date</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($proj as $data)
                        <tr >
                            <td>{{ $data->pid }}</td>
                            <td>{{ $data->Pname }}</td>
                            <td>{{ $data->description}}</td>
                            <td>{{ $data->pivot->created_at }}</td>
                            <td><a href="{{ route('userproject.details' , ['pid' => $data->pid , 'id' => Auth::user()->id] )}}">Details</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
            <div class="container box22">The above table displays the projects that you are associated with.</div>
            @include('notify::messages')
        @notifyJs
        
    </div> 
    <div class="container-fluid ">
        <div class="container" id="boxhide">OOPS! Empty table? Seems like you aren't part of any existing project on this platform.
            Contact your Admin to get assigned to a project soon
    </div>
    </div>
    <script>
        var txt = document.querySelectorAll("#table1 tr").length;
        if(txt == 1){
            document.querySelector(".container-fluid #boxhide").style.visibility = "visible";
        }
    </script>
    

    




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