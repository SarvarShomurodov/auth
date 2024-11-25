<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('posts.index') }}" 
                        class="mt-4 px-4 py-2 bg-indigo-600 text-white rounded-md shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 float-right">
                            Orqaga
                    </a>
                    <form method="POST" action="{{ route('posts.update',$post->id) }}">
                        @csrf
                        @method('PUT')
                        <label for="example-input" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            Post nomi
                        </label>
                        <input style="width: 25%" type="text" name="name" id="example-input"
                               value="{{ $post->name }}" 
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm dark:bg-gray-900 dark:border-gray-700 dark:text-gray-100 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" 
                               placeholder="Malumotni kiriting...">
                        <label for="example-input" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            Post description
                        </label>
                        <textarea name="description" id="example-textarea" cols="30" rows="10"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm dark:bg-gray-900 dark:border-gray-700 dark:text-gray-100 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" 
                            placeholder="Malumotni kiriting...">{{ $post->description }}</textarea>
                        <button type="submit" 
                                class="mt-4 px-4 py-2 bg-indigo-600 text-white rounded-md shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Jo`natish
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>