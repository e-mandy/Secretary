@extends('layout')

@section('title', "Secretary - Paramètres généraux")

@section('content')

    <section>
        <div class="mb-10">
            <h1 class="font-bold text-3xl">Paramètres</h1>
            <p class="text-[#71717A]">Configurez les paramètres de la plateforme.</p>
        </div>
        <section class="bg-white pt-4 pb-6 px-5 rounded-lg mb-10">
            <div class="mb-3">
                <h2 class="text-2xl font-semibold">Informations générales</h3>
                <p class="text-gray-500">Paramètres généraux de l'établissement</p>
            </div>
            <div class="flex items-center mb-4">
                <div class="w-1/2">
                    <label class="block mb-2" for="universite">Nom de l'université</label>
                    <input class="w-full outline-none border border-gray-300 rounded-lg p-2" type="text" name="universite" placeholder="Nom de l'université">
                </div>
                {{-- <div>
                    <label for="departement">Undefined</label>
                    <input type="text" name="undi" placeholder="Nom de l'université">
                </div> --}}
            </div>
            <div class="mb-4">
                <label class="block mb-2" for="adresse">Adresse</label>
                <input class="w-full outline-none border border-gray-300 rounded-lg p-2" type="text" name="adresse" placeholder="Adresse de l'université">
            </div>
            <div class="flex items-center gap-8">
                <div class="w-1/2">
                    <label class="block mb-2" for="telephone">Téléphone</label>
                    <input class="w-full outline-none border border-gray-300 rounded-lg p-2" type="text" name="telephone" id="telephone" placeholder="Ex: +2290190785634">
                </div>
                <div class="w-1/2">
                    <label class="block mb-2" for="email_universite">Email</label>
                    <input class="w-full outline-none border border-gray-300 rounded-lg p-2" type="email" name="email_universite" id="email_universite" placeholder="Ex: universite@example.com">
                </div>
            </div>
        </section>
        <section class="bg-white pt-4 pb-6 px-5 rounded-lg mb-10">
            <div class="mb-3">
                <h2 class="text-2xl font-semibold">Notifications</h3>
                <p class="text-gray-500">Gérez les notifications et alertes</p>
            </div>
            <div class="w-fit bg-red-200 mx-auto rounded-lg p-10">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-16 mx-auto">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <p class="text-center text-xl">En phase de développement.</p>
            </div>
        </section>
        <section class="bg-white pt-4 pb-6 px-5 rounded-lg mb-10">
            <div class="mb-3">
                <h2 class="text-2xl font-semibold">Sauvegarde et sécurité</h3>
                <p class="text-gray-500">Options de sauvegarde et de sécurité des données</p>
            </div>
            <div class="w-fit bg-red-200 mx-auto rounded-lg p-10">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-16 mx-auto">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <p class="text-center text-xl">En phase de développement.</p>
            </div>
        </section>
    </section>

@endsection
