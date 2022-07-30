@extends('layouts.app')

@section('title')
    Inicia Sesion en DevStagram
@endsection

@section('content')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{asset('img/login.jpg')}}" alt="Imagen de Login de Usuarios">
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded shadow-xl">
            <form >
                @csrf  

                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        Email
                    </label>
                    <input
                    id="email"
                    name="email"
                    type="email"
                    placeholder="Email@example.com"
                    class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror"
                    value="{{ old('email') }}"
                    >

                    @error('email')
                    <p class="bg-red-500 text-white p-2 my-2 rounded-lg text-sm text-center">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        Password
                    </label>
                    <input
                    id="password"
                    name="password"
                    type="password"
                    placeholder="Password de Registro"
                    class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror"
                    >

                    @error('password')
                    <p class="bg-red-500 text-white p-2 my-2 rounded-lg text-sm text-center">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <input 
                type="submit"
                value="Iniciar Sesion"
                class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection