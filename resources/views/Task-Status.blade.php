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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>

    <style>
        .boxlabel{
            margin-top:50px;
            
            text-align:center;
            font-size:45px;
            font-weight:bold;
        }
        .box1{
            margin-top:20px;
            margin-bottom:150px;
            border: black solid 1px;
            border-radius:5px;
            padding-top:45px;
            padding-bottom:35px;
            color:white;
            background:#1C2A48;
            padding-left:35px;
        }  
        .fieldcolumn1{
            font-size:35px;
            font-weight:bold;
            margin-top:5px;
            margin-bottom:10px;
        }
        .fieldcolumn2{
            font-size:30px;
            margin-top:25px;
            margin-bottom:10px;
        }
        .fieldcolumn3{
            padding-top:20px;
        }
        .fieldcolumn4{

        }
        .label{
            margin-left:-15px;
        }
        .label0{
            margin-left:-15px;
            margin-bottom:25px;
        }
        .label1{
            margin-left:-1px;
            margin-bottom:50px;
        }
    </style>
    @notifyCss
</head>
<body>
        <!--Navbar -->
        <nav class="mb-3 pt-4 pb-4 navbar font-weight-bold navbar-expand-lg navbar-dark orange lighten-1">
        <a class="navbar-brand pr-5 pl-4 black-text animate__animated animate__fadeInLeft" href="#">PROJECTMANAGER</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
            aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link animate__animated animate__fadeInLeft animate__delay-1s" href="{{ route('userproject.details',['$id' => $users->id , '$pid' => $proj->pid ]) }}">BACK</a>
            </li>
            <li class="nav-item">
                <a class="nav-link animate__animated animate__fadeInLeft animate__delay-2s" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link animate__animated animate__fadeInLeft animate__delay-3s" href="#">Pricing</a>
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
        <div class="container boxlabel animate__animated animate__fadeIn animate__delay-1s">Task Details</div>

        <div class="container box1 animate__animated animate__fadeIn animate__delay-1s">
            <form action="{{ route('change.status' , ['$id' => $users->id , '$pid' => $proj->pid , '$tid' => $tasks->tid ]) }}" method="POST">
            @csrf
            <span class="fieldcolumn1">{{ $tasks->Tname }}</span><br><br>
            <span class="fieldcolumn2">{{ $tasks->Tdescription }}</span><br><br>
            <span class="fieldcolumn3">Created at: {{ $tasks->created_at }}</span><br><br>
            <span class="fieldcolumn4"> 
            <div class="form-group col-md-2">
                <label for="inputState" class="label">Status</label>
                <select id="inputState" class="form-control label0" name="tstatus">
                    <option selected>{{ $tasks->task_status }}</option>
                    <option>Completed</option>
                </select>
            </div>
            </span>
            <button type="submit" class="btn label1 btn-success waves-effect">SUBMIT</button>
        </div>
        </form>
        @include('notify::messages')
        @notifyJs


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