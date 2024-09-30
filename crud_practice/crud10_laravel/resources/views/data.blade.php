<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<button type="button" class="btn btn-success"> <a href="{{url('/createData')}}">Data insert</a></button>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-borderd">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Number</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                    @foreach ( $users as $user )
                             <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->number}}</td>
                                <td>{{$user->address}}</td>
                                <td> 
                                    
                                    <a class="btn btn-danger" href="{{route('delete',$user->id)}}" >Delete</a>
                                </td>
                            
                             </tr>
                    
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>
</html>