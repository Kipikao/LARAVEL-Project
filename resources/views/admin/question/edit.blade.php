<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Modifica intrebarea') }}
        </h2>
    </x-slot>

    <form method="post" action="{{ route('question.update.admin', ['question' => $question])}}">
        @csrf
        @method('put')

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


                        <label>Name</label>
                        <input class="border-gray-300 dark:border-gray-700 
                            dark:bg-gray-900 dark:text-gray-300 
                            focus:border-indigo-500 dark:focus:border-indigo-600 
                            focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md 
                            shadow-sm mt-1 block w-full" type="text" name="name" placeholder="Nume" value="{{ $question->name }}" />

                        <label>Mesaj</label>
                        <input class="border-gray-300 dark:border-gray-700 
                            dark:bg-gray-900 dark:text-gray-300 
                            focus:border-indigo-500 dark:focus:border-indigo-600 
                            focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md 
                            shadow-sm mt-1 block w-full" type="text" name="message" placeholder="Mesaj" value="{{ $question->message }}" />

                        <label>Raspuns</label>
                        <input class="border-gray-300 dark:border-gray-700 
                            dark:bg-gray-900 dark:text-gray-300 
                            focus:border-indigo-500 dark:focus:border-indigo-600 
                            focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md 
                            shadow-sm mt-1 block w-full" type="text" name="answer" placeholder="Raspuns" value="{{ $question->answer }}" />

                        <label>Status</label>
                        <input class="border-gray-300 dark:border-gray-700 
                            dark:bg-gray-900 dark:text-gray-300 
                            focus:border-indigo-500 dark:focus:border-indigo-600 
                            focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md 
                            shadow-sm mt-1 block w-full" type="text" name="status" placeholder="status" value="{{ $question->status }}" />


                        <div class="py-12">
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                <div class="bg-white  overflow-hidden ">
                                    <div class="p-6 text-gray-900 dark:text-gray-100 button_style">
                                        <x-cancel-button>
                                            <a href="{{ route('questions.admin') }}">Anulează</a>
                                        </x-cancel-button>
                                        <x-red_action-button>
                                            Trimite modificarea
                                        </x-red_action-button>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </form>


</x-app-layout>