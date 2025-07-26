@extends('auth.auth_layout')

@section('title', "Secretary - Connexion")

@section('auth_container')
    <img src="">
    <h1 class="text-center text-2xl font-bold mb-4">Connectez-vous à votre compte</h1>
    <form class="w-full flex flex-col gap-5">
        <fieldset class="rounded-lg pt-0 px-[12px] pb-[12px] w-[90%] border border-black m-auto">
            <legend class="text-[0.85rem]">Email</legend>
            <input class="border-none w-full outline-none placeholder:text-[0.8rem]" type="text" name="email" placeholder="Ex: d'ALMEIDA">
        </fieldset>
        <fieldset class="rounded-lg pt-0 px-[12px] pb-[12px] w-[90%] border border-black m-auto">
            <legend class="text-[0.85rem]">Mot de passe</legend>
            <input class="border-none w-full outline-none placeholder:text-[0.8rem]" type="password" name="password" placeholder="Veuillez entrer votre mot de passe">
        </fieldset>
        <button class="w-9/10 rounded-lg border-none block mt-[20px] mx-auto mb-[10px] bg-black h-[50px] text-white cursor-pointer" type="submit">Se connecter</button>
    </form>



    <div class="flex items-center w-[95%] justify-around">
        <hr class="w-2/5">OR<hr class="w-2/5">
    </div>

    <p class="text-[0.88rem]">Vous n'avez pas de compte ? <a class="text-[#2143B0]" href="{{ route('admin.register') }}">Inscrivez vous</a></p>
@endsection        