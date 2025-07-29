@extends('auth.auth_layout')

@section('title', "Secretary - Inscription")

@section('auth_container')
    <img src="">
    <h1 class="text-center text-2xl font-bold mb-4">Inscrivez-vous</h1>
    <form class="w-full flex flex-col gap-5" action="{{ route('admin.register.store') }}" method="POST">

        @if($errors->any())
            @foreach($errors->all() as $message)
                <li>{{ $message }}</li>
            @endforeach
        @endif
        @csrf
        <fieldset class="rounded-lg pt-0 px-[12px] pb-[12px] w-[90%] border border-black m-auto">
            <legend class="text-[0.85rem]">Nom</legend>
            <input class="border-none w-full outline-none placeholder:text-[0.8rem]" type="text" name="lastname" placeholder="Ex: d'ALMEIDA">
        </fieldset>
        <fieldset class="rounded-lg pt-0 px-[12px] pb-[12px] w-[90%] border border-black m-auto">
            <legend class="text-[0.85rem]">Prénom</legend>
            <input class="border-none w-full outline-none placeholder:text-[0.8rem]" type="text" name="firstname" placeholder="Ex: John">
        </fieldset>
        <fieldset class="rounded-lg pt-0 px-[12px] pb-[12px] w-[90%] border border-black m-auto">
            <legend class="text-[0.85rem]">Email</legend>
            <input class="border-none w-full outline-none placeholder:text-[0.8rem]" type="email" name="email" placeholder="Veuillez entrer votre email">
        </fieldset>
        <fieldset class="rounded-lg pt-0 px-[12px] pb-[12px] w-[90%] border border-black m-auto">
            <legend class="text-[0.85rem]">Mot de passe</legend>
            <input class="border-none w-full outline-none placeholder:text-[0.8rem]" type="password" name="password" placeholder="Veuillez entrer votre mot de passe">
        </fieldset>
        <fieldset class="rounded-lg pt-0 px-[12px] pb-[12px] w-[90%] border border-black m-auto">
            <legend class="text-[0.85rem]">Confirmer votre mot de passe</legend>
            <input class="border-none w-full outline-none placeholder:text-[0.8rem]" type="password" name="password_confirmation" placeholder="Veuillez entrer votre mot de passe">
        </fieldset>
        <button class="w-9/10 rounded-lg border-none block mt-[20px] mx-auto mb-[10px] bg-black h-[50px] text-white cursor-pointer" type="submit">S'inscrire</button>
    </form>



    <div class="flex items-center w-[95%] justify-around">
        <hr class="w-2/5">OR<hr class="w-2/5">
    </div>

    <p class="text-[0.88rem]">Vous avez déjà un compte ? <a class="text-[#2143B0]" href="{{ route('admin.login') }}">Connectez-vous</a></p>
@endsection        