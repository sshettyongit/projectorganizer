<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    @notifyCss
    <style>
        .mainnav{
            padding-top:15px;
            padding-bottom:15px;
        }
        .nav2{
            padding-right:20px;
            padding-left:20px;
        }
        .nav1{
            padding-right:30px;
        }
        .caption{
            font-family: Arial, Helvetica, sans-serif;
            font-size:27px;
            padding-top:20px;
            padding-left:50px; 
            margin:10px;
            padding-bottom:20px;
        }
        
        body{
            background: #ebebe0;
        }
        .dark{
            background:black;
        }
        .custombtn{
            margin-bottom:50px;
        }
        .linktxt{
            color:white;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand h1 mainnav" href="{{ route('welcome.home') }}">PROJECTORGANIZER</a>
        <span class="navbar-text">
        <div class="d-inline-block nav1"> <a href="{{ route('welcome.home') }}" >HOME</a> </div>

        <div class="d-inline-block nav1"> <a href="{{ route('admin.panel') }}" >ADMIN PANEL</a> </div>

        <div class="nav-item dropdown d-inline-block">
        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{ Auth::user()->name }}
        </a>
        <div class="dropdown-menu dark" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/logout">LOGOUT</a>
        </div>
      </div>
      @notifyJs
      @include('notify::messages')
      <div></div>
    </span>
</nav>
<div class="caption">PROJECT PANEL</div>
<div class="container-fluid">
<table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Project Name</th>
                <th>Created at</th>
                <th>Description</th>
                <th>Actions</th>
        </thead>
        <tbody>
            @foreach($projectdetails as $data)
                <tr>
                    <td>{{ $data->pid }}</td>
                    <td>{{ $data->Pname }}</td>
                    <td>{{ $data->created_at }}</td>
                    <td>{{ $data->description }}</td>
                    <td><a  class="linktxt" href="{{ route('rename.project',['id' => $data->pid]) }}">Rename</a>
                    <a href="{{ route('delete.project' , ['id' => $data->pid]) }}">| Delete </a>
                    <a href="{{ route('user.project', ['id' => $data->pid]) }}">| Details </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
</table>
</div>
<div class="container mt-4">
    <a href="{{ route('create.project') }}" class="btn custombtn btn-secondary btn-block btn-lg active" role="button" aria-pressed="true">CLICK HERE TO CREATE A NEW PROJECT</a>
</div>
<br><br>
<br><br>
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