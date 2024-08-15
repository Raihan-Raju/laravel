<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style type="text/tailwindcss">
    @layer utilities {
      .container{
        @apply px-10 mx-auto
      }
    }
  </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <tr>
                        <th>Id</th>
                        <th>name</th>
                        <th>Description</th>
                        <th>image</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($homes as $home)
                    
                    @endforeach
                    <tr>
                        <td>{{$home->id}}</td>
                        <td>{{$home->name}}</td>
                        <td>{{$home->description}}</td>
                        <td>{{$home->image}}</td>
                
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>