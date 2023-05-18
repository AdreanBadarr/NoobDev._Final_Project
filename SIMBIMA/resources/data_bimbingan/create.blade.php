@extends('data_bimbingan.layout')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Dashboard</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    </head>

    <body>
        <header>
            <nav class="border-gray-200 bg-sky-800 dark:bg-gray-900">
                <div class="flex flex-wrap items-center justify-between p-4 mx-auto">
                    <div class="flex items-center">
                        <img src="http://sipil.usk.ac.id/wp-content/uploads/2018/02/Logo-Unsyiah-Kuning-HD-1012x972-Transparan-1.png"
                            class="ml-3 mr-3" alt="Logo Usk" width="50" height="50" />
                        <div class="text-center">
                            <h1 class="text-xl font-bold text-white">SIMBIMA</h1>
                            <em class="text-base font-normal text-white">Universitas Syiah Kuala</em>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <a href="/dashboard" class="mx-4 font-normal text-white hover:text-gray-400">Dashboard</a>
                        <a href="/data_bimbingan" class="mx-4 font-normal text-white hover:text-gray-400">View Data</a>
                        <a href="/data_bimbingan/create" class="mx-4 font-normal text-white hover:text-gray-400">Input
                            Data</a>
                        <a href="/barchart" class="mx-4 font-normal text-white hover:text-gray-400">Statistik</a>
                        <a href="/" class="mx-4 font-normal text-white hover:text-gray-400">Logout</a>
                    </div>
                </div>
            </nav>
        </header>
        <main class="pt-20" style="background-color: #0e4166; position: relative text-align: white;">
            <div class="flex flex-col items-center justify-center float">
                <div
                    class="w-full bg-white rounded-lg shadow dark:border md:mt-4 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">

                        <h1
                            class="text-xl font-bold leading-tight tracking-tight text-center text-gray-900 md:text-4xl dark:text-white ">
                            Input Data
                        </h1>
                        <form action="{{ url('data_bimbingan') }}" method="post" class="mx-auto">
                            {!! csrf_field() !!}
                            <div class="mb-4">
                                <input type="text" list="nama" placeholder="Nama" name="nama"
                                    class="block w-full px-3 py-2 border-gray-300 rounded-md shadow-sm form-input focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    required />
                                <datalist id="nama">
                                    @foreach ($nama as $value)
                                        <option value="{{ $value }}"></option>
                                    @endforeach
                                </datalist>
                            </div>
                            <div class="mb-4">
                                <input type="text" list="NIM" placeholder="NIM" name="NIM"
                                    class="block w-full px-3 py-2 border-gray-300 rounded-md shadow-sm form-input focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    required />
                                <datalist id="NIM">
                                    @foreach ($NIM as $value)
                                        <option value="{{ $value }}"></option>
                                    @endforeach
                                </datalist>
                            </div>
                            <div class="mb-4">
                                <input type="text" list="dosen_pembimbing_1" placeholder="Dosen Pembimbing 1"
                                    name="dosen_pembimbing_1"
                                    class="block w-full px-3 py-2 border-gray-300 rounded-md shadow-sm form-input focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    required>
                                <datalist id="dosen_pembimbing_1">
                                    @foreach ($dosen_1 as $value)
                                        <option value="{{ $value }}"> </option>
                                    @endforeach
                                </datalist>
                            </div>
                            <div class="mb-4">
                                <input type="text" list="dosen_pembimbing_2" placeholder="Dosen Pembimbing 2"
                                    name="dosen_pembimbing_2"
                                    class="block w-full px-3 py-2 border-gray-300 rounded-md shadow-sm form-input focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    required />
                                <datalist id="dosen_pembimbing_2">
                                    @foreach ($dosen_2 as $value)
                                        <option value="{{ $value }}"> </option>
                                    @endforeach
                                </datalist>
                            </div>
                            <div class="mb-4">
                                <input type="text" list="dosen_penguji" placeholder="Dosen Penguji " name="dosen_penguji"
                                    class="block w-full px-3 py-2 border-gray-300 rounded-md shadow-sm form-input focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    required />
                                <datalist id="dosen_penguji">
                                    @foreach ($dosen_penguji as $ID3 => $Nama)
                                        <option value="{{ $Nama }}"></option>
                                    @endforeach
                                </datalist>
                            </div>
                            <div class="text-center">
                                <input type="submit" value="Save"
                                    class="inline-block px-4 py-2 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <x-background></x-background>
        </main>

        <footer class="pt-3 text-center bg-white fixed-bottom">
            <p>&copy; 2023 NoobDev</p>
        </footer>

    </body>

    </html>


@stop
