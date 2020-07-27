<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
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
        .customtable{
        }
        body{
            background: #ebebe0;
        }
        .dark{
            background:black;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand h1 mainnav" href="{{ route('welcome.home') }}">PROJECTORGANIZER</a>
        <span class="navbar-text">
        <div class="d-inline-block nav1"> <a href="{{ route('welcome.home') }}" >HOME</a> </div>

        <div class="d-inline-block nav1"> <a href="{{ route('project.details') }}" >PROJECT PANEL</a> </div>

        <div class="nav-item dropdown d-inline-block">
        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{ Auth::user()->name }}
        </a>
        <div class="dropdown-menu dark" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/logout">LOGOUT</a>
        </div>
      </div>
      
      <div></div>
    </span>
</nav>
<div class="caption">Admin Panel</div>
<div class="container">
<table class="table table-dark  table-striped">
        <thead>
            <tr>
                <th >ID</th>
                <th >Name</th>
                <th>email</th>
                <th>Joining date</th>
                <th>Recent Update</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($userdata as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->created_at }}</td>
                    <td>{{ $data->updated_at }}</td>
                    <td><a href="{{ route('update.user',['id' => $data->id]) }}">Update</a>
                    <a href="{{ route('remove.user',['id' => $data->id]) }}">| Delete |</a>
                    <a href="{{ route('make.admin',['id' => $data->id]) }}">Make admin</a></td>
                </tr>
            @endforeach
        </tbody>
</table>
</div>

</body>
</html>