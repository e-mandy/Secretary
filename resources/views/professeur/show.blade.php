@extends('layout')

@section('title', "Secretary - Profil professeur")

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/styles/profshow.css') }}">
    <script src="{{ asset('assets/scripts/professeur/show.js') }}" defer></script>
    <section>
        <div class="flex justify-between items-center mb-10">
            <div class="flex gap-3 items-center">
                <a href="#" class="flex bg-white h-fit py-1 px-2 rounded-sm gap-1 items-center border border-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
                    </svg>
                    Retour à la liste
                </a>
                <div>
                    <h1 class="font-bold text-3xl">Profil Professeur</h1>
                    <p class="text-[#71717A]">Détails et gestion du professeur</p>
                </div>
            </div>
            <button class="add_prof flex items-center bg-black text-white rounded-lg px-3 py-2 gap-4 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                </svg>
                Modifier le profil
            </button>
        </div>
        <section class="bg-white p-6 rounded-lg shadow mb-10">
            <div class="flex justify-between mb-6">
                <div class="flex items-center gap-3">
                    <span class="block p-3 border rounded-[50%]">JM</span>
                    <div>
                        <h2 class="text-2xl font-bold">John Doe</h2>
                        <span class="font-medium text-gray-500">Informatique</span>
                    </div>
                </div>
                <div>
                    <p>Ajouté le 02/12/2025</p>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-y-3">
                <p class="flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                    </svg>
                    johndoe@gmail.com
                </p>
                <p class="flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                    </svg>
                    8 documents
                </p>
                <p class="flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                    </svg>
                    +2290198766754
                </p>
            </div>
        </section>
        <section>
            <ul class="onglets flex mb-8">
                <li id="informations" class="is_active w-1/2 text-center cursor-pointer py-1">
                    <a>Informations</a>
                </li>
                <li id="documents" class="w-1/2 text-center cursor-pointer py-1">
                    <a>Documents (2)</a>
                </li>
            </ul>
            <div class="flex gap-4 contains" id="infos">
                <div class="w-1/2 bg-white rounded-lg shadow p-4">
                    <h2 class="text-2xl font-medium mb-5">Informations personnelles</h2>
                    <p class="flex flex-col mb-3 text-lg font-bold text-gray-700">
                        <span class="text-sm font-medium text-gray-500">Prénom</span>
                        John
                    </p>
                    <p class="flex flex-col mb-3 text-lg font-bold text-gray-700">
                        <span class="text-sm font-medium text-gray-500">Nom</span>
                        Doe
                    </p>
                </div>
                <div class="w-1/2 bg-white rounded-lg shadow p-4">
                    <h2 class="text-2xl font-medium mb-5">Informations professionnelles</h2>
                    <p class="flex flex-col mb-3 text-lg text-gray-700 font-bold">
                        <span class="text-sm font-medium text-gray-500">Spécialité</span>
                        Comptabilité
                    </p>
                    <p class="flex flex-col mb-3 text-lg font-bold text-gray-700">
                        <span class="text-sm font-medium text-gray-500">Ajouté le</span>
                        12/12/2025
                    </p>
                </div>
            </div>
            <div class="contains hidden bg-white p-5 rounded-lg" id="docs">
                <div class="mb-5">
                    <h3 class="text-2xl font-medium">Documents du professeur</h3>
                    <p class="text-gray-500 font-medium">3 documents(s) enregistrés</p>
                </div>
                <table class="w-full">
                    <thead>
                        <tr>
                            <th>Nom fichier</th>
                            <th>Type</th>
                            <th>Date d'ajout de fichier</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-t-1 border-gray-300">
                            <td class="w-1/3">AGOSSOU_Sebastien_CV.pdf</td>
                            <td>
                                <span class="border border-gray-300 px-2 rounded-xl">CV</span>
                            </td>
                            <td>15/06/2025</td>
                            <td class="flex gap-3 items-center">
                                <a class="block border border-gray-300 p-1 rounded hover:bg-gray-200" href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                </a>
                                <a class="block border border-gray-300 p-1 rounded hover:bg-gray-200" href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </section>
@endsection
