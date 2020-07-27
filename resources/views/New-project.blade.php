<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand h1 mainnav" href="{{ route('welcome.home') }}">PROJECTORGANIZER</a>
            <span class="navbar-text">
            <div class="d-inline-block nav1"> <a href="{{ route('project.details') }}" >BACK TO PROJECT PANEL</a> </div>
            </span>
        </div>
    </nav>
    <br><br>
    <br>

    <div class="container">
    <form action="{{ route('new.project') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">PROJECT NAME</label>
                <input type="text" class="form-control" id="exampleInputName" name="Pname"  >
            </div>
                <div class="form-group">
                    <label for="exampleInputName">DESCRIPTION</label>
                    <textarea class="form-control" id="exampleInputDescription" name="Pdescription"  rows="4"></textarea>
                </div>
            
                <button type="submit" class="btn btn-success">Create</button>
        </form>
        </div>
</body>
</html>