@extends('layout')

@section('title', "Secretary - Modification du PV de soutenance")

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
    <section class="pb-8">
        <div class="flex items-center mb-10 gap-4">
            <a href="{{ route('admin.pv_soutenance.index') }}" class="flex bg-white h-fit py-1 px-2 rounded-sm gap-1 items-center border border-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
                </svg>
                Retour
            </a>
            <div>
                <h1 class="font-bold text-3xl">Modifier le PV de soutenance</h1>
                <p class="text-[#71717A]">Modifiez les informations du pv de soutenance de l'étudiant</p>
            </div>
        </div>
        <form action="{{ route('admin.pv_soutenance.update', $pv_soutenance) }}" method="POST">
            @csrf
            @method('PUT')
            <section class="bg-white p-6 rounded-lg shadow mb-10">
                <div class="mb-3">
                    <h2 class="text-2xl font-semibold">Informations générales</h3>
                    <p class="text-gray-500">Informations en rapport avec la soutenance</p>
                </div>

                <div class="flex items-center gap-4 mb-3">
                    <span class="block rounded-[50%] w-14 h-14 p-4 bg-linear-to-r from-cyan-500 to-blue-500 text-white font-bold text-center">JD</span>
                    <div class="flex flex-col gap-1">
                        <h3 class="text-xl font-bold">{{ $pv_soutenance->nom_etu }}</h2>
                        <span class="block py-[2px] px-2 border border-gray-300 rounded-xl text-blue-700 text-xs hover:bg-gray-800 text-center">{{ $pv_soutenance->filiere->nom }}</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-8">
                    <label class="flex flex-col gap-1" for="nom_etu">
                        Nom et prénom de l'étudiant
                        <input class="outline-none border border-gray-200 py-[6px] px-3 w-full rounded" value="{{ old('nom_etu', $pv_soutenance->nom_etu) }}" type="text"id="nom_etu" name="nom_etu">
                    </label>
                    <label for="id_filiere" class="font-medium flex flex-col gap-1">
                        Type de soutenance
                        <select class="border border-gray-200 rounded-lg p-2 text-gray-500" name="id_filiere" id="id_filiere">
                            <option value="">Sélectionner le type</option>
                            @foreach ($filieres as $filiere)
                                <option value="{{ $filiere->id }}" @selected($filiere->id == $pv_soutenance->id_filiere)>{{ $filiere->nom }}</option>
                            @endforeach
                        </select>
                    </label>
                    <label class="flex flex-col gap-1" for="date">
                        Date
                        <input class="outline-none border border-gray-200 py-[6px] px-3 w-full rounded" value="{{ $pv_soutenance->soutenance_date }}" type="date" id="date" name="date">
                    </label>
                </div>
            </section>

            <section class="bg-white p-6 rounded-lg shadow mb-10">
                <div class="mb-3">
                    <h2 class="text-2xl font-semibold flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        Composition du jury (non fonctionnel)
                    </h3>
                    <p class="text-gray-500">Membre du jury de soutenance</p>
                </div>
                <div>
                    <div class="flex items-center gap-4 mb-4">
                        <label class="gap-1 w-9/10" for="specialite">
                            <input class="outline-none border border-gray-200 py-[6px] px-3 w-full rounded" value="John Doe" type="text" id="specialite" name="specialite">
                        </label>
                        <button class="w-1/9 border border-gray-200 rounded text-red-500 h-full py-[6px]">Annuler</button>
                    </div>
                    <div class="flex items-center gap-4 mb-4">
                        <label class="gap-1 w-9/10" for="specialite">
                            <input class="outline-none border border-gray-200 py-[6px] px-3 w-full rounded" value="John Doe" type="text" id="specialite" name="specialite">
                        </label>
                        <button class="w-1/9 border border-gray-200 rounded text-red-500 h-full py-[6px]">Annuler</button>
                    </div>
                    <div class="flex items-center gap-4 mb-4">
                        <label class="gap-1 w-9/10" for="specialite">
                            <input class="outline-none border border-gray-200 py-[6px] px-3 w-full rounded" value="John Doe" type="text" id="specialite" name="specialite">
                        </label>
                        <button class="w-1/9 border border-gray-200 rounded text-red-500 h-full py-[6px]">Annuler</button>
                    </div>
                </div>
            </section>
            <section class="bg-white p-6 rounded-lg shadow mb-10">
                <div class="mb-3">
                    <h2 class="text-2xl font-semibold">Résultats</h3>
                    <p class="text-gray-500">Note et évaluation de la soutenance</p>
                </div>
                <div class="flex items-center gap-8">
                    <label class="flex flex-col gap-1 w-1/2" for="note">
                        Note
                        <input class="outline-none border border-gray-200 py-[6px] px-3 w-full rounded" value="{{ old('note', $pv_soutenance->note) }}" type="number" id="note" name="note">
                    </label>
                    <label class="flex flex-col w-1/2" for="mention">
                        Mention
                        <select class="outline-none border border-gray-200 py-2 px-2 rounded" name="mention" id="mention" disabled>
                            <option value="passable">Passable</option>
                            <option value="abien">Assez bien</option>
                            <option value="bien">Bien</option>
                            <option value="tbien">Très bien</option>
                        </select>
                    </label>
                </div>
            </section>
            <section class="bg-white rounded-lg p-6 shadow mb-10">
                <div class="mb-3">
                    <h2 class="text-2xl font-semibold">Procès verbal</h3>
                    <p class="text-gray-500">Fichier de PV de Soutenance</p>
                </div>
                @if($pv_soutenance->pv_file)
                    <div class="mb-6 flex justify-between items-center border-dashed px-3 py-2 rounded-lg border-2 border-green-200 bg-green-50">
                        <div class="flex items-center gap-3">
                            <span class="bg-green-300 rounded-lg p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                </svg>
                            </span>
                            <div>
                                <h4 class="font-medium text-lg">{{ $pv_soutenance->pv_file }}</h4>
                                <p class="text-sm text-gray-500">Uploadé le {{ $pv_soutenance->date_created_at }}</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <a href="#" class="block p-1 rounded-lg border border-gray-300 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
                                </svg>
                            </a>
                        </div>
                    </div>
                @endif
                <div class="mb-4">
                    <p class="mb-2 font-medium">{{ ($pv_soutenance->pv_file) ? "Remplacer le fichier (optionnel)" : "Ajouter le fichier de pv" }}</p>
                    <label class="flex flex-col items-center mb-1 border-2 border-dashed border-gray-300 rounded-lg mx-auto py-6 hover:border-blue-500 cursor-pointer" for="pv_file">
                        <span class="bg-gray-200 p-1 rounded-lg mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
                            </svg>
                        </span>
                        <h5 class="font-medium">Choisir un nouveau fichier</h5>
                        <p class="text-sm text-gray-500 mb-2">PDF, JPG, PNG, DOCX</p>
                        <span class="flex border border-gray-300 text-sm font-medium p-2 gap-4 rounded-lg items-center hover:bg-red-100 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 xs:hidden sm:block">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
                            </svg>
                            Choisir un fichier
                        </span>
                        <input class="hidden" type="file" name="pv_file" id="pv_file">
                    </label>
                </div>
            </section>
            <div class="flex gap-4 justify-end">
                <a href="{{ route('admin.pv_soutenance.index') }}" class="add_prof flex items-center bg-white border border-gray-300 text-black rounded-lg px-3 py-2 gap-4 cursor-pointer">
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
