<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel_10_crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="bg-info p-3 m-3 text-center"><h2>Laravel_10 DB CRUD </h2><hr></div>

<button type="button" class="btn btn-success"> <a class="text-decoration-none text-light" href="{{url('/viewData')}}">View Data</a></button>

<div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
               
                <form action="" method="post"  class="form-control">
                    @csrf
                    <marquee class="text-danger bg-dark fw-bold p-3">laravel_10_crud//// practice of Raihan Raju</marquee>

                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" value="{{old('name')}}" class="form-control" placeholder="Name---" required>

                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="{{old('email')}}" class="form-control" placeholder="Email---" required>

                    <label for="number">Number</label>
                    <input type="text" name="number" id="number" value="{{old('number')}}" class="form-control" placeholder="Number---" required>

                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" value="{{old('address')}}" placeholder="Address" class="form-control" required>

                    
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>