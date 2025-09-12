@extends('layout')

@section('title', "Secretary - Modification du document du Professeur")

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
            <a href="{{ route('admin.documents.index') }}" class="flex bg-white h-fit py-1 px-2 rounded-sm gap-1 items-center border border-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
                </svg>
                Retour au document
            </a>
            <div>
                <h1 class="font-bold text-3xl">Modifier le document</h1>
                <p class="text-[#71717A]">Modifiez les informations du document</p>
            </div>
        </div>
        <form action="{{ route('admin.documents.update', $document) }}" method="POST">
            @csrf
            @method('PUT')
            <section class="bg-white p-6 rounded-lg shadow mb-10">
                <div class="mb-3">
                    <h2 class="text-2xl font-semibold">Informations générales</h3>
                    <p class="text-gray-500">Détails et métadonnées du document</p>
                </div>

                <div class="grid grid-cols-2 gap-8">
                    <label class="flex flex-col gap-1" for="prof_fullname">
                        Nom et Prénom du Professeur
                        <input class="outline-none border border-gray-200 py-[6px] px-3 w-full rounded" value="{{ old('lastname', $document->professeur->lastname) }} {{ old('firstname', $document->professeur->firstname) }}" type="text" id="prof_fullname" disabled>
                    </label>
                    <label for="type_id" class="font-medium flex flex-col gap-1">
                        Type de document
                        <select class="outline-none border border-gray-200 py-2 px-2 rounded" name="type_id" id="type_id">
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}" @selected($document->type->id == $type->id)>{{ $type->nom }}</option>
                            @endforeach
                        </select>
                    </label>
                </div>
            </section>

            <section class="bg-white p-6 rounded-lg shadow mb-10">
                <div class="mb-3">
                    <h2 class="text-2xl font-semibold">Fichier</h3>
                    <p class="text-gray-500">Gérez le fichier associé au document</p>
                </div>
                <div class="mb-6 flex justify-between items-center border-dashed px-3 py-2 rounded-lg border-2 border-gray-300 bg-gray-100">
                    <div class="flex items-center gap-3">
                        <span class="bg-blue-300 rounded-lg p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="blue" class="size-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                            </svg>
                        </span>
                        <div>
                            <h4 class="font-medium text-lg">{{ $document->nom }}</h4>
                            <p class="text-sm text-gray-500">Uploadé le {{ $document->date_created_at }}</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <button class="block p-1 rounded-lg border border-gray-300 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
                            </svg>
                        </button>
                        {{-- <form action="{{ route('admin.documents.destroy', $document) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="block p-1 rounded-lg border border-gray-300 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" class="size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                </svg>
                            </button>
                        </form> --}}
                    </div>
                </div>
                <div class="mb-4">
                    <p class="mb-2 font-medium">Remplacer le fichier (optionnel)</p>
                    <label class="flex flex-col items-center mb-1 border-2 border-dashed border-gray-300 rounded-lg mx-auto py-6 hover:border-blue-500 cursor-pointer" for="document">
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
                        <input class="hidden" type="file" name="document" id="document">
                    </label>
                </div>
            </section>
            <section class="flex gap-4 justify-end">
                <a href="{{ route('admin.documents.index') }}" class="add_prof flex items-center bg-white border border-gray-300 text-black rounded-lg px-3 py-2 gap-4 cursor-pointer">
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
            </section>
        </form>
    </section>

@endsection
