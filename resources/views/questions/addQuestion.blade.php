    <x-app-layout>
        <!-- Form questions -->
    <form method="post" action="{{ route('question.store') }}">
        @csrf
        @method('post')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- error list -->
                @if ($errors->any())
                <div class="alert alert-danger mt-5">
                    <strong class="text-red-500">Error!</strong> <br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li class="text-red-500">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">

                        @if(!(Auth()->user()))
                        <label class="block font-medium text-sm text-gray-700 dark:text-gray-300">
                            <input class="border-gray-300 dark:border-gray-700 
                            dark:bg-gray-900 dark:text-gray-300 
                            focus:border-indigo-500 dark:focus:border-indigo-600 
                            focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md 
                            shadow-sm mt-1 block w-full" type="text" name="name" placeholder="Nume" required />
                        </label>
                        @endif

                        <textarea name="message" cols="30" rows="10" placeholder="Întrebarea ta..." required class="border-gray-300 dark:border-gray-700 
                            dark:bg-gray-900 dark:text-gray-300 
                            focus:border-indigo-500 dark:focus:border-indigo-600 
                            focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md 
                            shadow-sm mt-1 block w-full"></textarea>
                        
                        <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="button_style">
                                <x-cancel-button>
                                    <a href="{{ route('questions') }}">Anulează</a>
                                </x-cancel-button>

                                <button class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                    <svg class="-ml-0.5 mr-1.5 h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                    </svg>
                                    <input type="submit" value="Trimite întrebarea" />
                                </button>
                            </div>
                        </div>
                    </div>


                    </div>
                </div>
            </div>
        </div>
    </form>

    </x-app-layout>
    