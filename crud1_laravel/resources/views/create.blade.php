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
        <div class="flex justify-between bg-slate-600">
              <a href="/" class=" bg-green-600 text-white rounded py-2 px-4">Home</a>
              <a href="/create" class=" bg-green-600 text-white rounded py-2 px-4">Back home</a>
        </div>

        <div class="row">
             <h2>data</h2>
        </div>
    </div>
</body>
</html>