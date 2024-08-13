<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>

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
        <div class="row ">
            <div class="coll-12">
                <div class="flex justify-between my-5 bg-gray-500">
                    <a href="/" class="text-white bg-green-600 rounded py-2 px-4 text-xl">home</a>
                    <a href="/" class="bg-green-600 text-white rounded py-2 px-4">Back home</a>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>