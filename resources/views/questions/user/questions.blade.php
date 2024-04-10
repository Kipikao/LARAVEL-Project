<x-app-layout>

    <img src="{{ asset('img/pozeSite/masina-pe-autostrada2.jpg') }}" alt="poza intrebari" class="pozaNav">
    <div>
        <div class="lg:flex lg:items-center lg:justify-between ">
            <div class="min-w-0 flex-1 ">
                <div class="mt-1 flex flex-col sm:mt-0 sm:flex-row sm:flex-wrap sm:space-x-6 button_add">
                    <div class="mt-5 flex lg:ml-4 lg:mt-0">
                        <span class="sm:ml-3">
                            <button type="button" class="inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                <svg class="-ml-0.5 mr-1.5 h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                </svg>
                                <a href="{{ route('questions.add.user')}}">Adauga o nouă întrebare</a>
                            </button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-mesaj>

    </x-mesaj>



    @foreach ($question as $val)
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ $val->name }}
                    <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-6 text-gray-900 dark:text-gray-100">
                                    {{ $val->message }}
                                </div>
                            </div>
                        </div>
                    </div>
                    @if(isset($val->answer))
                    <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-6 text-gray-900 dark:text-gray-100">
                                    {{ $val->answer }}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    <x-secondary-button>
                        <div>{{ $val->status }} {{ ' la data de '}} {{ $val->created_at }}</div>
                    </x-secondary-button>
                    
                    @if(Auth()->user()->id === $val->user_id)
                    <div class="button_style">
                        <x-edit-button>
                            <a href="{{ route('question.edit.user', ['question' => $val])}}">Edit</a>
                        </x-edit-button>
                        <x-red_delete-button>
                            <form method="post" action="{{ route('question.destroy.user', ['question' => $val])}}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Sterge" />
                            </form>
                        </x-red_delete-button>
                    </div>
                    @endif



                </div>
            </div>
        </div>
    </div>

    @endforeach

    <div class="row mt-5">
        <div class="col-md-12">
            {{ $question->links() }}
        </div>
    </div>



</x-app-layout>