<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Home page</title>
</head>
<body class="bg-slate-900">
    <div class="my-10 mx-5 flex justify-center items-center flex-col gap-7">
      
        <div class="flex items-center gap-5">
            <h1 class="text-white">You are alredy logged</h1>
            <form action="/logout" method="POST" >
              @csrf
                  <button type="submit" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                      Logout</button>
              </form>    
          </div>

          <x-posts-form button-info="create Post" 
            action-prop="/create-post" />
            <br/>
            <h1 class="text-white">{{$userName}} posts</h1>
            
            {{-- Slot for pages card cards --}}
            
            {{$slot}}

    </div>
</body>
</html>