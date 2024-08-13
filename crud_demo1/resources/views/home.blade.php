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
                    <h1 class="text-white bg-green-600 rounded py-2 px-4 text-xl">home</h1>
                    <a href="/create" class="bg-green-600 text-white rounded py-2 px-4">Add new_post</a>
                </div>

                
                 <form method="POST" action="{{route('filestore')}}">
                    @csrf
                    
                    <div class=" flex flex-col gap-5">
                        <label for="">Name:</label>
                        <input type="text" name="name" placeholder="name .......">

                        <label for="">Description:</label>
                        <input type="text" name="description" placeholder="description.........">

                        <input type="file" name="image" id="">
                         <input  class="bg-green-600 text-white rounded py-2 px-4" type="submit">
                     </div>
                </form>
               
            </div>
        </div>
    </div>
    
</body>
</html>