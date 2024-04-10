<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Programare nouă') }}
        </h2>
    </x-slot>

    <!-- Form programari -->
    <form method="post" action="{{ route('programari.store') }}">
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

                        <label class="block font-medium text-sm text-gray-700 dark:text-gray-300">
                            <input class="border-gray-300 dark:border-gray-700 
                            dark:bg-gray-900 dark:text-gray-300 
                            focus:border-indigo-500 dark:focus:border-indigo-600 
                            focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md 
                            shadow-sm mt-1 block w-full" type="text" name="appointment" placeholder="Ce problema aveti?" required>
                        </label>
                        <label class="block font-medium text-sm text-gray-700 dark:text-gray-300">
                            <input class="border-gray-300 dark:border-gray-700 
                            dark:bg-gray-900 dark:text-gray-300 
                            focus:border-indigo-500 dark:focus:border-indigo-600 
                            focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md 
                            shadow-sm mt-1 block w-full" type="date" name="date_wanted" placeholder="Data dorita" required>
                        </label>

                        <textarea name="customer_message" cols="30" rows="10" placeholder="Mesajul tău..." required class="border-gray-300 dark:border-gray-700 
                            dark:bg-gray-900 dark:text-gray-300 
                            focus:border-indigo-500 dark:focus:border-indigo-600 
                            focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md 
                            shadow-sm mt-1 block w-full">
                        </textarea>


                    </div>
                    <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="button_style">
                                <x-cancel-button>
                                    <a href="{{ route('programari') }}">Anulează</a>
                                </x-cancel-button>

                                <x-red_action-button>
                                     Trimite înregistrarea
                                </x-red_action-button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>

</x-app-layout>