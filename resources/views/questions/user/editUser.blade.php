<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Modifica intrebarea') }}
        </h2>
    </x-slot>

    <form method="post" action="{{ route('question.update.user', ['question' => $question])}}">
        @csrf
        @method('put')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">

                        <label>Mesaj</label>
                        <input class="border-gray-300 dark:border-gray-700 
                            dark:bg-gray-900 dark:text-gray-300 
                            focus:border-indigo-500 dark:focus:border-indigo-600 
                            focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md 
                            shadow-sm mt-1 block w-full" type="text" name="message" placeholder="Mesaj" value="{{ $question->message }}" />

                        <div class="py-12">
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                <div class="bg-white  overflow-hidden ">
                                    <div class="p-6 text-gray-900 dark:text-gray-100 button_style">
                                        <x-cancel-button>
                                            <a href="{{ route('questions.user') }}">Anulează</a>
                                        </x-cancel-button>
                                        <x-red_action-button>
                                            Trimite modificare
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