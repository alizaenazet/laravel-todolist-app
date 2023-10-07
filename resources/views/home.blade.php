<x-home-layout>
  <x-slot:userName >
    {{auth()->user()->name}}
  </x-slot>
  <div class="w-full flex justify-center flex-row gap-7 flex-wrap">
    @foreach ($posts as $post)
  <div class="min-w-384 max-w-md p-6 flex flex-col flex-wrap gap-1 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$post['title']}}</h5>
        <h5 class="mb-2 text-sm font-semibold tracking-tight text-gray-900 dark:text-white">by {{$post->user->name}}</h5>
    <p class="mb-3 font-normal w-9/12 text-gray-700 dark:text-gray-400">{{$post['body']}}</p>
    <a href="/post/edit/{{$post->id}}">
      <p class="mb-3 font-normal text-blue-700 dark:text-blue-400">Edit pages</p>
    </a>
  
    <form action="/post/{{$post->id}}" method="POST">
      @csrf
      @method('DELETE')
    <button type="submit" class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Delete</button>
    </form> 
  </div>
    @endforeach
  </div>
</x-home-layout>