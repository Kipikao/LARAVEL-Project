<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Caiet Service') }}
        </h2>
    </x-slot>




    <div class="lg:flex lg:items-center lg:justify-between ">
        <div class="min-w-0 flex-1 ">
            <div class="mt-1 flex flex-col sm:mt-0 sm:flex-row sm:flex-wrap sm:space-x-6 button_add">
                <div class="mt-5 flex lg:ml-4 lg:mt-0">
                    <span class="sm:ml-3">
                        <button type="button" class="inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            <svg class="-ml-0.5 mr-1.5 h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                            </svg>
                            <a href="{{ route('notebooks.add')}}">Adauga o nouă înregistrare</a>
                        </button>
                    </span>
                </div>
            </div>
        </div>
    </div>



    @foreach ($caiet as $val)
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ $val->carNumber }} <br> {{ 'Km  ' }}{{ $val->kmCar }}
                    <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-6 text-gray-900 dark:text-gray-100">
                                    {{ $val->store }}
                                </div>
                            </div>
                        </div>
                    </div>
                    {{ $val->created_at }}
                    <div class="button_style">
                        <x-edit-button>
                            <a href="{{ route('notebooks.edit', ['caiet' => $val]) }}">Edit</a>
                        </x-edit-button>
                        <x-delete-button class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                            <form method="post" action="{{ route('notebooks.destroy', ['caiet' => $val])}}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Sterge" />
                            </form>
                        </x-delete-button>
                    </div>
                    {{--<div> <a href="{{ url ('notebooks/' . $val-> id )}}"></a>
                </div>--}}

            </div>
        </div>
    </div>
    </div>

    @endforeach

    <div class="row mt-5">
        <div class="col-md-12">
            {{ $caiet->links() }}
        </div>
    </div>
</x-app-layout>