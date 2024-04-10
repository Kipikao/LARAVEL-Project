<x-app-layout>

    <img src="{{ asset('img/pozeSite/masina-pe-autostrada2.jpg') }}" alt="poza intrebari" class="pozaNav">
    
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


                    <div class="button_style">
                        
                        <x-edit-button>
                            <a href="{{ route('question.edit.admin', ['question' => $val])}}">Edit</a>
                        </x-edit-button>
                        <x-red_delete-button>
                            <form method="post" action="{{ route('question.destroy.admin', ['question' => $val])}}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Sterge" />
                            </form>
                        </x-red_delete-button>
                    </div>

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