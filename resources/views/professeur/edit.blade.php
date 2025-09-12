@extends('layout')

@section('title', "Secretary - Modification du professeur")

@section('content')
    <div>
        @if($errors->any())
            <ul>
                @foreach ($errors->all() as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <section>
        <div class="flex items-center mb-10 gap-4">
            <a href="{{ route('admin.professeurs.index') }}" class="flex bg-white h-fit py-1 px-2 rounded-sm gap-1 items-center border border-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
                </svg>
                Retour à la liste
            </a>
            <div>
                <h1 class="font-bold text-3xl">Modifier le professeur</h1>
                <p class="text-[#71717A]">Modifiez les informations du professeur</p>
            </div>
        </div>
        <form action="{{ route('admin.professeurs.update', $professeur) }}" method="POST">
            @csrf
            @method('PUT')
            <section class="bg-white p-6 rounded-lg shadow mb-10">
                <div class="mb-3">
                    <h2 class="text-2xl font-semibold">Informations générales</h3>
                    <p class="text-gray-500">Informations personnelles et photo de profil</p>
                </div>

                <div class="grid grid-cols-2 gap-8">
                    <label class="flex flex-col gap-1" for="lastname">
                        Nom
                        <input class="outline-none border border-gray-200 py-[6px] px-3 w-full rounded" value="{{ old('lastname', $professeur->lastname) }}" type="text"id="lastname" name="lastname">
                    </label>
                    <label class="flex flex-col gap-1" for="firstname">
                        Prénom
                        <input class="outline-none border border-gray-200 py-[6px] px-3 w-full rounded" value="{{ old('firstname', $professeur->firstname) }}" type="text" id="firstname" name="firstname">
                    </label>
                    <label class="flex flex-col gap-1" for="email">
                        Email
                        <input class="outline-none border border-gray-200 py-[6px] px-3 w-full rounded" value="{{ old('email', $professeur->email) }}" type="email" id="email" name="email">
                    </label>
                    <label class="flex flex-col gap-1" for="phone">
                        Téléphone
                        <input class="outline-none border border-gray-200 py-[6px] px-3 w-full rounded" value="{{ old('phone', $professeur->phone) }}" type="text" id="phone" name="phone">
                    </label>
                </div>
            </section>

            <section class="bg-white p-6 rounded-lg shadow mb-10">
                <div class="mb-3">
                    <h2 class="text-2xl font-semibold">Informations professionnelles</h3>
                    <p class="text-gray-500">Spécialité du professeur</p>
                </div>
                <div>
                    <label class="flex flex-col gap-1 w-1/2" for="specialite">
                        Spécialité
                        <input class="outline-none border border-gray-200 py-[6px] px-3 w-full rounded" value="{{ old('specialite', $professeur->specialite) }}" type="text" id="specialite" name="specialite">
                    </label>
                </div>
            </section>
            <div class="flex gap-4 justify-end">
                <a href="{{ route('admin.professeurs.index') }}" class="add_prof flex items-center bg-white border border-gray-300 text-black rounded-lg px-3 py-2 gap-4 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                    Annuler
                </a>
                <button type="submit" class="add_prof flex items-center bg-black text-white rounded-lg px-3 py-2 gap-4 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m8.25 3v6.75m0 0-3-3m3 3 3-3M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                    </svg>
                    Enregistrer les modifications
                </button>
            </div>
        </form>
    </section>

@endsection
