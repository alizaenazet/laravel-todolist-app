<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900">
  <div class="my-10 mx-5 flex justify-center items-center flex-col gap-7">
    
<h1 class="text-white">edit for {{$post['title']}}</h1>
<x-posts-form button-info="save changes"
  action-prop='/post/edit/{{$post->id}}'
  method-prop="PUT"
  post-title='{{$post->title}}'
  post-body='{{$post->body}}'
  />

  </div>
</body>
</html>