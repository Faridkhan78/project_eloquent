<!DOCTYPE html>
<html lang="en">
<head>
  <title>ELOQUANT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container mt-3">

    <div class="row">
        <div class="col-8 bg-warning-subtle mb-3">
            <h4>All users Data</h4>
        </div>
    </div>



  <div class="row">
    <div class="col-8">
        <a href="" class="btn btn-success btn-sm mb-3">Add new</a>
        <table class="table table-striped table-bordered">
             <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>City</th>
                <th>View</th>
                <th>Delete</th>
                <th>Update</th>
             </tr>
            @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->age}}</td>
                <td>{{$user->city}}</td>
                <td><a href="" class="btn btn-primary btn-sm">View</a></td>
                <td><a href="" class="btn btn-danger btn-sm">Delete</a></td>
                <td><a href="" class="btn btn-warning btn-sm">Update</a></td>
            </tr>
                
            @endforeach

        </table>
    </div>
  </div>
</div>

</body>
</html>
