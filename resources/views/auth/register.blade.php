@extends('auth.auth_layout')

@section('title', "Secretary - Inscription")

@section('auth_container')
    <img src="">
    <h1 class="text-center text-2xl font-bold mb-4">Inscrivez-vous</h1>
    <form class="w-full flex flex-col gap-5" action="{{ route('admin.register.store') }}" method="POST">

        @csrf
        <x-auth.input type="text" name="lastname" placeholder="Ex: d'ALMEIDA">
            <x-slot:value>Nom</x-slot>
        </x-auth.input>

        <x-auth.input type="text" name="firstname" placeholder="Ex: d'ALMEIDA">
            <x-slot:value>Prénom</x-slot>
        </x-auth.input>

        <x-auth.input type="email" name="email" placeholder="Veuillez entrer votre email">
            <x-slot:value>Email</x-slot>
        </x-auth.input>

        <x-auth.input type="password" name="password" name="password" placeholder="Veuillez entrer votre mot de passe">
            <x-slot:value>Mot de passe</x-slot>
        </x-auth.input>

        <x-auth.input type="password" name="password_confirmation" name="password" placeholder="Veuillez entrer votre mot de passe">
            <x-slot:value>Mot de passe confirmé</x-slot>
        </x-auth.input>

        <button class="w-9/10 rounded-lg border-none block mt-[20px] mx-auto mb-[10px] bg-black h-[50px] text-white cursor-pointer" type="submit">S'inscrire</button>
    </form>



    <div class="flex items-center w-[95%] justify-around">
        <hr class="w-2/5">OR<hr class="w-2/5">
    </div>

    <p class="text-[0.88rem]">Vous avez déjà un compte ? <a class="text-[#2143B0]" href="{{ route('admin.login') }}">Connectez-vous</a></p>
@endsection
