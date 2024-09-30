<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel_10_crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<button type="button" class="btn btn-success"> <a href="{{url('/viewData')}}">View Data</a></button>
<div class="bg-info p-3 m-3 text-center">Laravel CRUD <hr></div>
<div class="container">
        <div class="row">
            <div class="col-8">
               
                <form action="/store" method="post" enctype="multipart/form-data" class="form-control">
                    @csrf
                    <marquee class="text-danger">laravel_10_crud//// practice of Raihan Raju</marquee>

                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name---" required>

                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email---" required>

                    <label for="number">Number</label>
                    <input type="text" name="number" id="number" class="form-control" placeholder="Number---" required>

                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" placeholder="Address" class="form-control" required>

                    
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>