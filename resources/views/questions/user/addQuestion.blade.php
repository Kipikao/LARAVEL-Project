    <x-app-layout>
        <!-- Form questions -->
    <form method="post" action="{{ route('question.store.user') }}">
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

                        <textarea name="message" cols="30" rows="10" placeholder="Întrebarea ta..." required class="border-gray-300 dark:border-gray-700 
                            dark:bg-gray-900 dark:text-gray-300 
                            focus:border-indigo-500 dark:focus:border-indigo-600 
                            focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md 
                            shadow-sm mt-1 block w-full"></textarea>
                        
                        <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="button_style">
                                <x-cancel-button>
                                    <a href="{{ route('questions.user') }}">Anulează</a>
                                </x-cancel-button>

                                <x-red_action-button>  
                                    Trimite întrebarea
                                </x-red_action-button>
                            </div>
                        </div>
                    </div>


                    </div>
                </div>
            </div>
        </div>
    </form>

    </x-app-layout>
    