<x-appo-layout>

    @section('navadmin1')

    <hr style="margin-block: 20px;">
    <x-mesaj>

    </x-mesaj>
    <form method="post" action="{{ route('programariupdate', ['id' => $id])}}">
        @csrf

        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
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
                <div>
                    <div class="mt-6 border-t border-white/10">
                        <dl class="divide-y divide-white/10">
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900 dark:text-gray-100">Nr</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-900 dark:text-gray-100 sm:col-span-2 sm:mt-0">{{ $id->id }}</dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900 dark:text-gray-100">User id</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-900 dark:text-gray-100 sm:col-span-2 sm:mt-0">{{ $id->user_id }}</dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900 dark:text-gray-100">Dată dorită</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-900 dark:text-gray-100 sm:col-span-2 sm:mt-0">
                                    <input class="border-gray-300 dark:border-gray-700 
                                    dark:bg-gray-900 dark:text-gray-300 
                                    focus:border-indigo-500 dark:focus:border-indigo-600 
                                    focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md 
                                    shadow-sm mt-1 block w-full" type="date" name="date_wanted" value="{{ $id->date_wanted }}" />
                                </dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900 dark:text-gray-100">Mesaj service</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-900 dark:text-gray-100 sm:col-span-2 sm:mt-0">
                                    <input class="border-gray-300 dark:border-gray-700 
                                    dark:bg-gray-900 dark:text-gray-300 
                                    focus:border-indigo-500 dark:focus:border-indigo-600 
                                    focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md 
                                    shadow-sm mt-1 block w-full" type="text" name="serv_message" value="{{ $id->serv_message }}" />
                                </dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900 dark:text-gray-100">Mesaj client</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-900 dark:text-gray-100 sm:col-span-2 sm:mt-0">{{ $id->customer_message }}</dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900 dark:text-gray-100">Status</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-900 dark:text-gray-100 sm:col-span-2 sm:mt-0">
                                    <input class="border-gray-300 dark:border-gray-700 
                                    dark:bg-gray-900 dark:text-gray-300 
                                    focus:border-indigo-500 dark:focus:border-indigo-600 
                                    focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md 
                                    shadow-sm mt-1 block w-full" type="text" name="status" placeholder="{{ $id->status }}" cols="30" rows="10" />
                                </dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900 dark:text-gray-100">Creat la</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-900 dark:text-gray-100 sm:col-span-2 sm:mt-0">{{ date('d.m.Y H:m', strtotime($id->created_at)) }}</dd>
                            </div>
                        </dl>
                    </div>
                </div>
                <div class="button_style">
                    <x-cancel-button>
                        <a href="{{ route('programarishow', ['id' => $id])}}">Anulează</a>
                    </x-cancel-button>
                    <x-red_action-button>
                        Trimite răspunsul
                    </x-red_action-button>
                </div>
            </div>
        </div>
    </form>

    <hr style="margin-block: 20px;">
    <hr style="margin-block: 20px;">


    @endsection

    @section('navadmin2')

    <p class="bannerQue">Pagină răspuns programări</p>


    <img src="{{ asset('/img/setappointment.png') }}" alt="Pagina programari">


    @endsection
</x-appo-layout>