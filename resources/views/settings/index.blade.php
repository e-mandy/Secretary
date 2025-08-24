@extends('layout')

@section('title', "Secretary - Paramètres généraux")

@section('content')

    <section>
        <div class="mb-10">
            <h1 class="font-bold text-3xl">Paramètres</h1>
            <p class="text-[#71717A]">Configurez les paramètres de la plateforme.</p>
        </div>
        <section class="bg-white">
            <div>
                <h2 class="text-xl">Informations générales</h3>
                <p class="text-gray-300">Paramètres généraux de l'établissement</p>
            </div>
            <div class="flex items-center">
                <div>
                    <label class="mb-2" for="universite">Nom de l'université</label>
                    <input type="text" name="universite" placeholder="Nom de l'université">
                </div>
                {{-- <div>
                    <label for="departement">Undefined</label>
                    <input type="text" name="undi" placeholder="Nom de l'université">
                </div> --}}
            </div>
            <div>
                <label for="adresse">Adresse</label>
                <input type="text" name="adresse" placeholder="Adresse de l'université">
            </div>
            <div class="flex items-center">
                <div>
                    <label for="telephone">Téléphone</label>
                    <input class="border border-gray-300" type="text" name="telephone" id="telephone">
                </div>
                <div>
                    <label for="email_universite">Email</label>
                    <input class="border border-gray-300" type="email" name="email_universite" id="email_universite">
                </div>
            </div>
        </section>
    </section>

@endsection
