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
            padding-right:10px;
        }
        .caption{
            font-family: Arial, Helvetica, sans-serif;
            font-size:30px;
            padding-top:50px;
        }
        .custom{
            margin-top:20px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand h1 mainnav" href="{{ route('welcome.home') }}">PROJECTORGANIZER</a>
            <span class="navbar-text">
            <div class="d-inline-block nav1"> <a href="{{ route('welcome.home') }}" >HOME</a> </div>
            </span>
        </div>
    </nav>
    <div class="container">
        <form action="{{ route('admin.update', ['id' => $category->id]) }}" method="POST">
            <div class="caption">NAME:     {{ $category->name }}</div>
            <br>
            <div class="caption d-inline">ADMIN STATUS:</div> <input type="text" class="d-inline" name="admin" value="{{ $category->is_admin }}">
            <small id="emailHelp" class="form-text text-muted">to make above user admin enter 1.</small>

            @csrf
            <button type="submit" class="btn btn-dark custom">CHANGE STATUS</button>
        </form>
    </div>
</body>
</html>