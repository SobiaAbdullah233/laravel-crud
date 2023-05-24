<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                      <th>Firstname</th>
                      <th>Lastname</th>
                      <th>Address1</th>
                      <th>Address2</th>
                      <th>State</th>
                      <th>Zip</th>
                      <th>City</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Membership type</th>
                      <th>Contect way</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($users as $user )


                    <tr>
                      <td>{{$user->fname}}</td>
                      <td>{{$user->lname}}</td>
                      <td>{{$user->address1}}</td>
                      <td>{{$user->address2}}</td>
                      <td>{{$user->state}}</td>
                      <td>{{$user->zip}}</td>
                      <td>{{$user->city}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->phone}}</td>
                      <td>{{$user->category}}</td>
                      <td>{{$user->contectway}}</td>
                     <td> <a href="{{url('editform', $user->id)}}" class="btn btn-info btn-small">Edit</a>
                      <button class="btn btn-danger btn-small">Delete</button>
                    </td>

                    </tr>
                    @endforeach

                  </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
