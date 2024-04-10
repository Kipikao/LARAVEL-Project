@extends('layouts.appo')
@section('content')

@section('navadmin2')
<p class="bannerQue">Pagină adaugă utilizator</p>

<img src="{{ asset('img/addadmin.png') }}" alt="">
@endsection

@section('navadmin1')
<div class="sm:flex-auto">
    <h1 class="bannerQue1 font-semibold leading-6 text-gray-900">Adaugă utilizator nou</h1>
</div>

<form method="POST" action="{{ route('admin.store') }}" enctype="multipart/form-data">
    @csrf

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
                        <input type="text" name="nickName" class="border-gray-300 dark:border-gray-700 
                            dark:bg-gray-900 dark:text-gray-300 
                            focus:border-indigo-500 dark:focus:border-indigo-600 
                            focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md 
                            shadow-sm mt-1 block w-full" placeholder="Nick Name">
                    </label>
                    <label class="block font-medium text-sm text-gray-700 dark:text-gray-300">
                        <input type="text" name="name" class="border-gray-300 dark:border-gray-700 
                            dark:bg-gray-900 dark:text-gray-300 
                            focus:border-indigo-500 dark:focus:border-indigo-600 
                            focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md 
                            shadow-sm mt-1 block w-full" placeholder="Nume">
                    </label>
                    <label class="block font-medium text-sm text-gray-700 dark:text-gray-300">
                        <input type="email" name="email" class="border-gray-300 dark:border-gray-700 
                            dark:bg-gray-900 dark:text-gray-300 
                            focus:border-indigo-500 dark:focus:border-indigo-600 
                            focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md 
                            shadow-sm mt-1 block w-full" placeholder="E-mail">
                    </label>
                    <label class="block font-medium text-sm text-gray-700 dark:text-gray-300">
                        <input type="text" name="phone" class="border-gray-300 dark:border-gray-700 
                            dark:bg-gray-900 dark:text-gray-300 
                            focus:border-indigo-500 dark:focus:border-indigo-600 
                            focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md 
                            shadow-sm mt-1 block w-full" placeholder="Telefon">
                    </label>
                    <x-addfile-button></x-addfile-button>

                    <label class="block font-medium text-sm text-gray-700 dark:text-gray-300">
                        <input type="password" name="password" class="border-gray-300 dark:border-gray-700 
                            dark:bg-gray-900 dark:text-gray-300 
                            focus:border-indigo-500 dark:focus:border-indigo-600 
                            focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md 
                            shadow-sm mt-1 block w-full" placeholder="Parola">
                    </label>
                    </label><label class="block font-medium text-sm text-gray-700 dark:text-gray-300">
                        <input type="text" name="is_admin" class="border-gray-300 dark:border-gray-700 
                            dark:bg-gray-900 dark:text-gray-300 
                            focus:border-indigo-500 dark:focus:border-indigo-600 
                            focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md 
                            shadow-sm mt-1 block w-full" placeholder="Acces">
                    </label>

                    <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="button_style">
                                <x-cancel-button>
                                    <a href="{{ route('admin') }}">Anulează</a>
                                </x-cancel-button>

                                <x-red_action-button>
                                    Adaugă
                                </x-red_action-button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection

@endsection