@extends('layouts.appo')
@section('content')

@section('navadmin2')
<p class="bannerQue">Vizualizare user "{{ $user->id }}"</p>
<p class="bannerQue">{{ $user->email }}</p>
<div class="py-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div>
            <div class="mt-6 border-t border-white/10">
                <dl class="divide-y divide-white/10">
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900 dark:text-gray-100">Nick Name</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-900 dark:text-gray-100 sm:col-span-2 sm:mt-0"> {{ $user->nickName ? : '-' }}</dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900 dark:text-gray-100">Nume</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-900 dark:text-gray-100 sm:col-span-2 sm:mt-0">{{ $user->name }}</dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900 dark:text-gray-100">Email</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-900 dark:text-gray-100 sm:col-span-2 sm:mt-0">{{ $user->email }}</dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900 dark:text-gray-100">Telefon</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-900 dark:text-gray-100 sm:col-span-2 sm:mt-0">{{$user->phone ? : '-' }}</dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900 dark:text-gray-100">Talon</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-900 dark:text-gray-100 sm:col-span-2 sm:mt-0">{{ $user->car_reg ? : '-' }}</dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dd class="mt-1 text-sm leading-6 text-gray-900 dark:text-gray-100 sm:col-span-2 sm:mt-0"><img src="{{ asset($user->car_reg) }}" alt=""></dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900 dark:text-gray-100">Creat la</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-900 dark:text-gray-100 sm:col-span-2 sm:mt-0">{{ date('d.m.Y H:m', strtotime($user->created_at)) }}</dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900 dark:text-gray-100">Email verificat la</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-900 dark:text-gray-100 sm:col-span-2 sm:mt-0">{{ $user->email_verified_at ? : 'Email neverificat' }}</dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900 dark:text-gray-100">Acces</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-900 dark:text-gray-100 sm:col-span-2 sm:mt-0">{{ $user->is_admin ? 'Admin' : 'Restrictionat' }}</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
</div>

<div class="button_style">

    <x-delete-button>
        <form method="post" action="{{ route('admin.destroy', ['id' => $user])}}">
            @csrf
            @method('delete')
            <input type="submit" value="Sterge" />
        </form>
    </x-delete-button>
</div>
@endsection

@section('navadmin1')
<div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto responsivf">
            <h1 class="bannerQue1 font-semibold leading-6 text-gray-900">Lista cu toți utilizatorii</h1>
            <p class="mt-2 text-sm text-gray-700"></p>
        </div>
        {{--<div class="mt-4 sm:mt-0 sm:flex-none">
            <button type="button" class="button_add inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                <svg class="-ml-0.5 mr-1.5 h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <a href="{{ route('admin')}}">Acasă</a>
            </button>
        </div>--}}
        <div class="mt-4 sm:mt-0 sm:flex-none">
            <button type="button" class="button_add inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                <svg class="-ml-0.5 mr-1.5 h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <a href="{{ route('admin.add')}}">Adaugă utilizator</a>
            </button>
        </div>
    </div>


    <div class="responsiv">
        <hr style="margin-block: 20px;">
        <p class="bannerQue">Vizualizare user "{{ $user->id }}"</p>
        <p class="bannerQue">{{ $user->email }}</p>
        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div>
                    <div class="mt-6 border-t border-white/10">
                        <dl class="divide-y divide-white/10">
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900 dark:text-gray-100">Nick Name</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-900 dark:text-gray-100 sm:col-span-2 sm:mt-0"> {{ $user->nickName ? : '-' }}</dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900 dark:text-gray-100">Nume</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-900 dark:text-gray-100 sm:col-span-2 sm:mt-0">{{ $user->name }}</dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900 dark:text-gray-100">Email</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-900 dark:text-gray-100 sm:col-span-2 sm:mt-0">{{ $user->email }}</dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900 dark:text-gray-100">Telefon</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-900 dark:text-gray-100 sm:col-span-2 sm:mt-0">{{$user->phone ? : '-' }}</dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900 dark:text-gray-100">Talon</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-900 dark:text-gray-100 sm:col-span-2 sm:mt-0">{{ $user->car_reg ? : '-' }}</dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dd class="mt-1 text-sm leading-6 text-gray-900 dark:text-gray-100 sm:col-span-2 sm:mt-0"><img src="{{ asset($user->car_reg) }}" alt=""></dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900 dark:text-gray-100">Creat la</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-900 dark:text-gray-100 sm:col-span-2 sm:mt-0">{{ date('d.m.Y H:m', strtotime($user->created_at)) }}</dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900 dark:text-gray-100">Email verificat la</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-900 dark:text-gray-100 sm:col-span-2 sm:mt-0">{{ $user->email_verified_at ? : 'Email neverificat' }}</dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900 dark:text-gray-100">Acces</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-900 dark:text-gray-100 sm:col-span-2 sm:mt-0">{{ $user->is_admin ? 'Admin' : 'Restrictionat' }}</dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>

        <div class="button_style">

            <x-delete-button>
                <form method="post" action="{{ route('admin.destroy', ['id' => $user])}}" enctype="multipart/form-data">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Sterge" />
                </form>
            </x-delete-button>
        </div>
        <hr style="margin-block: 20px;">
        <hr style="margin-block: 20px;">
    </div>

    <!-- Vizualizare  -->
    <div class="sm:flex-auto responsiv">
        <h1 class="bannerQue1 font-semibold leading-6 text-gray-900">Lista cu toți utilizatorii</h1>
        <p class="mt-2 text-sm text-gray-700"></p>
    </div>
    <div class="mt-8 flow-root">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Nr</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Nick Name</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Nume</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Email</th>
                                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                    <span class="sr-only">View</span>
                                </th>
                                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                            @foreach($users as $user)

                            <tr>
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">{{ $user->id }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $user->nickName? :'-' }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $user->name }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $user->email }}</td>
                                <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                    <x-view-button>
                                        <a href="{{ route('admin.show',['id' => $user]) }}" class="text-indigo-600 hover:text-indigo-900">View</a>
                                    </x-view-button>
                                </td>
                                <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                    <x-edit-button>
                                        <a href="{{ route('admin.edit',['id' => $user]) }}">Edit</a>
                                    </x-edit-button>
                                </td>
                            </tr>

                            @endforeach
                            ​
                            <!-- More people... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mt-5">
    <div class="col-md-12">
        {{ $users->links() }}
    </div>
</div>
@endsection

@endsection