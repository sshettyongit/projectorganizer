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
    .infobox{
        margin-top:50px;
        margin-bottom:100px;
        padding-top:50px;
        padding-bottom:50px;
        padding-left:45px;
        padding-right:25px;
        background:#FFA726;
    }
    .txt1{
      font-size:30px;
      font-weight:bold;
      margin-bottom:10px;
    }
    .txt2{
      font-size:28px;
      margin-bottom:10px;
    }
    .txt31{
      font-weight:bold;
    }
    .task-section{
      margin-top:20px;
      margin-bottom:50px;

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
                <a class="nav-link" href="{{ route('user.homepage', ['id' => Auth::user()->id]) }}">BACK
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
    <div class="infobox container">
        <span><div class="txt1">Project Name : {{ $proj->Pname }}</div></span>
        <span><div class="txt2">{{ $proj->description }}</div></span>
        <span><div class="txt3"> <span class="txt31">Created at:</span>  {{ $proj->created_at }}</div></span>
        <span><div class="txt4"> <span class="txt31">Last updated at:</span> {{ $proj->updated_at }}</div></span>                
    </div>

    <div class="container-fluid task-section">
      <div class="task-caption"></div>
      <table class="table">
        <thead class="table-dark">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Task name</th>
            <th scope="col">Descrption</th>
            <th scope="col">Created at</th>
            <th scope="col">Status</th>
            <th scope="col">Status updated at</th>
          </tr>
        </thead>
        <tbody>
          @foreach($tasks as $task)
            <tr>
              <th scope="row">T-{{ $task->tid }}</th>
              <td>{{ $task->Tname}}</td>
              <td>{{ $task->Tdescription }}</td>
              <td>{{ $task->created_at }}</td>
              <td>{{ $task->task_status }}</td>
              <td>{{ $task->updated_at }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="container mt-4 mb-4">
    <a href="{{ route('add.tasks' , ['id' => Auth::user()->id , 'pid' => $proj->pid] )}}" class="btn custombtn btn-secondary btn-block btn-lg active" role="button" aria-pressed="true">ADD NEW TASKS TO YOUR PROJECT</a>
  </div>
    

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