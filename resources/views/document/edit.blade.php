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
    <section>
        <div class="flex items-center mb-10 gap-4">
            <a href="{{ route('admin.professeurs.index') }}" class="flex bg-white h-fit py-1 px-2 rounded-sm gap-1 items-center border border-gray-300">
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
        <form action="#" method="POST">
            @csrf
            @method('PUT')
            <section class="bg-white p-6 rounded-lg shadow mb-10">
                <div class="mb-3">
                    <h2 class="text-2xl font-semibold">Informations générales</h3>
                    <p class="text-gray-500">Détails et métadonnées du document</p>
                </div>

                <div class="grid grid-cols-2 gap-8">
                    <label class="flex flex-col gap-1" for="lastname">
                        Nom de Professeur
                        <input class="outline-none border border-gray-200 py-[6px] px-3 w-full rounded" value="{{ old('lastname', $professeur->lastname) }}" type="text"id="lastname" name="lastname">
                    </label>
                    <label class="flex flex-col gap-1" for="firstname">
                        Type de document
                        <input class="outline-none border border-gray-200 py-[6px] px-3 w-full rounded" value="{{ old('firstname', $professeur->firstname) }}" type="text" id="firstname" name="firstname">
                    </label>
                </div>
            </section>

            <section class="bg-white p-6 rounded-lg shadow mb-10">
                <div class="mb-3">
                    <h2 class="text-2xl font-semibold">Fichier</h3>
                    <p class="text-gray-500">Gérez le fichier associé au document</p>
                </div>
                <div>
                    <div>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                            </svg>
                        </span>
                        <div>
                            <h4>CV_John_Doe.pdf</h4>
                            <p>° Uploadé le 12/04/2025</p>
                        </div>
                    </div>
                    <div>
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
                            </svg>
                        </button>
                        <button>

                        </button>
                    </div>
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
