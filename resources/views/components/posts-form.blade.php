<div>
    <form action={{ $actionProp }} method="POST"
        class="max-w-fit flex flex-col justify-center items-center ">
      @csrf
        @switch($methodProp)
            @case("PUT")
                @method('PUT')
                @break
            @case('DELETE')
                @method('DELETE')
                @break
                
                @default
                {{-- Dont require method --}}
        @endswitch
        <div class="mb-6">
          <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
          <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            name="title" value="{{ $postTitle }}" required>
        </div>
        <div class="mb-6">
          <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
          <textarea class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            name="body" rows="5" placeholder="Write your thoughts here...">{{ $postBody }}</textarea>
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ $buttonInfo }}</button>
      </form>      
</div>