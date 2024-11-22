<x-app-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="">
                        @csrf
                        <label for="example-input" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            Enter Text
                        </label>
                        <input type="text" name="example_input" id="example-input" 
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm dark:bg-gray-900 dark:border-gray-700 dark:text-gray-100 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" 
                               placeholder="Type something...">
                        <button type="submit" 
                                class="mt-4 px-4 py-2 bg-indigo-600 text-white rounded-md shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
