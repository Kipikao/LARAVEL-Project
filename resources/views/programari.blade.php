<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Programari') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Afla repede si sigur cat te costa reparatia pentru masina ta 
                        si cand o poti realiza la noi in service completand cu usurinta formularul 
                        online de programari prin intermediul butonului de adăugare programare nouă.
                        Dupa completarea acestui formular, unul dintre consultantii nostri de 
                        reparatii te va contacta pentru oferta de reparatie.
                        ") }}
                </div>
            </div>
        </div>
    </div>
    
    <x-mesaj></x-mesaj>


    <div class="min-w-0 flex-1 ">
        <div class="mt-1 flex flex-col sm:mt-0 sm:flex-row sm:flex-wrap sm:space-x-6 button_add">
            <div class="mt-5 flex lg:ml-4 lg:mt-0">
                <span class="sm:ml-3">
                    <button type="button" class="inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        <svg class="-ml-0.5 mr-1.5 h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        <a href="{{ route('programariadd')}}">Adauga o nouă programare</a>
                    </button>
                </span>
            </div>
        </div>
    </div>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __(" După completarea formularului, restul de date pot fi comunicate telefonic 
                        consultantului de service în momentul în care acesta vă contactează.
                        Detaliile tehnice necesare identificării mașinii se află în talon (ex. talon:nou sau vechi) 
                        De aceea va recomandăm ca după ce ați efectuat programarea online sa aveti talonul 
                        la îndemână. Consultantul nostru vă poate contacta în orice moment între orele 8:00 – 17:30 
                        de luni până vineri.

                        Pentru orice fel de nelamuriri legate de completarea 
                        formularului online sau dacă doriți să ne contactați, ne puteti contacta la următoarele numere de telefon: 
                        +40 771780762, +40 723326072 sau prin formularul de contact sau la adresa de email contact@marco.ro") }}
                </div>
            </div>
        </div>
    </div>

    @foreach ($programari as $programare)
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ $programare->date_wanted }} <br><br>
                    <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-6 text-gray-900 dark:text-gray-100">
                                    {{ $programare->appointment }}
                                </div>
                            </div>
                        </div>
                    </div>
                    @if($programare->customer_message !== null)
                    <div class="py-6">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-6 text-gray-900 dark:text-gray-100">
                                    {{ $programare->customer_message }}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if($programare->serv_message !== null)
                    <div class="py-6">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-6 text-gray-900 dark:text-gray-100">
                                    {{ $programare->serv_message }}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    <x-secondary-button>
                        <div>{{ $programare->status }} {{ ' la data de '}} {{ $programare->created_at }}</div>
                    </x-secondary-button>


                    <div class="button_style">
                        <x-edit-button>
                            <a href="{{ route('programari.edit', ['programare' => $programare]) }}">Edit</a>
                        </x-edit-button>
                        <x-delete-button>
                            <form method="post" action="{{ route('programari.destroy', ['programare' => $programare])}}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Sterge" />
                            </form>
                        </x-delete-button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @endforeach
    <div class="row mt-5">
        <div class="col-md-12">
            {{ $programari->links() }}
        </div>
    </div>

</x-app-layout>