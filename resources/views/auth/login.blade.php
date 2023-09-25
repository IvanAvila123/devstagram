@extends('layout.app')

@section('titulo')
    Inicia session en DevStagram
@endsection

@section('contenido')
    <div class="md:flex justify-center md:gab-10 md:items-center p-5">
        <div class="md:w-6/12">

            <img src="{{ asset('img/registrar-2.png') }}" alt="Imagen de login de usuarios">
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{route('login')}}" method="POST" novalidate>
                @csrf

                @if (session('mensaje'))
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{session('mensaje')}}</p>
                @endif
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Email</label>
                    <input type="email" id="email" name="email" placeholder="Tu Email De Registro" class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror" value="{{old('name')}}">
                </div>

                @error('email')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror

                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password De Registro" class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror" value="{{old('name')}}">
                </div>

                @error('password')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror

                <input type="submit" value="Iniciar Seccion" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection