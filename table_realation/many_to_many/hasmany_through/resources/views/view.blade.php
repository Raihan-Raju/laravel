<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-8"> 
                <div class="card"> 
                    <div class="card-header"> 
                        <h3>View Data</h3>
                    </div>
                    <div class="card-body"> 
                        <table class="table table-hover"> 
                            <tr> 
                                <th>Id</th>
                                
                                <th>User</th>
                                <th>Role</th>
                            </tr>

                            @foreach ($users as $user )
                                <tr> 
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>@foreach ($user->roles as $role)
                                            {{$role->name}}
                                    @endforeach</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>