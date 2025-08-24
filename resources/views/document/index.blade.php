@extends('layout')

@section('title', "Secretary - Liste de documents de professeurs")

@section('content')
    <script src="{{ asset('assets/scripts/document.js') }}" defer></script>
    <section>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        @endif
        <div class="flex justify-between items-center mb-10">
            <div>
                <h1 class="font-bold text-3xl">Gestion des professeurs</h1>
                <p class="text-[#71717A]">Gérez les informations relatives aux professeurs</p>
            </div>
            <button class="add_doc flex items-center bg-black text-white rounded-lg px-3 py-2 gap-4 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
                Ajouter un document
            </button>
        </div>
        <section class="grid grid-cols-4 gap-6 mb-8">
            <div class="bg-blue-200 p-4 rounded-lg shadow opacity-75">
                <h6 class="font-medium mb-4 flex justify-between text-blue-900">
                    Total Documents
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 0 1-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 0 1 1.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 0 0-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 0 1-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 0 0-3.375-3.375h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H9.75" />
                    </svg>
                </h6>
                <span class="text-3xl text-blue-700">{{ $doc_amount }}</span>
            </div>

        </section>
        <section class="bg-white px-6 pt-6">
            <div class="flex justify-between items-center mb-5">
                <div>
                    <h3 class="text-2xl font-semibold">Bibliothèque des documents</h3>
                    <p class="text-[#71717A]">{{ $doc_amount }} document(s) trouvé(s)</p>
                </div>
                <div class="flex gap-4">
                    <select class="border border-black rounded-lg p-2" name="filtre" id="filtre">
                        <option value="">Filtrer par type de document</option>
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}">{{ $type->nom }}</option>
                        @endforeach
                    </select>
                    <label for="search" class="flex gap-1 border rounded-lg py-1 px-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                        <input class="py-1 px-2 outline-none w-[210px]" type="text" name="search" id="search" placeholder="Rechercher un professeur...">
                    </label>
                </div>
            </div>
            <div class="grid grid-cols-4 pb-8">
                @foreach ($documents as $document)

                    <div class="bg-white px-5 py-5 rounded-lg border border-gray-300">
                        <div class="flex justify-between items-center">
                            <div class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                </svg>
                                <div>
                                    <h4 class="text-sm font-medium mb-1 wrap-anywhere">{{ $document->nom }}</h4>
                                    <span class="block w-fit py-1 px-4 bg-blue-300 rounded-xl text-blue-700 text-xs hover:bg-gray-800 text-center">{{ $document->type->nom }}</span>
                                </div>
                            </div>
                            <div class="p-1 hover:bg-gray-300 rounded cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                                </svg>
                            </div>
                        </div>
                        <div class="py-4">
                            <p class="flex gap-3 mb-2 text-[#49494e] items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                                </svg>
                                {{ $document->professeur->lastname }} {{ $document->professeur->firstname }}
                            </p>
                            <p class="flex gap-3 mb-2 text-[#49494e]">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                                </svg>
                                {{ ($document->date_created_at) }}
                            </p>
                        </div>
                        <hr>
                        <div class="flex justify-end py-4 items-center">

                            <div class="flex gap-4 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
                                </svg>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        <div class="overlay hidden fixed z-40 bg-black opacity-75 w-screen h-screen top-0 left-0"></div>

        <div class="popup_add_doc z-50 bg-white hidden w-[440px] fixed top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] px-8 pt-6 pb-7 rounded-lg">
            <h3 class="text-2xl font-bold mb-2">Ajouter un nouveau document</h3>
            <p class="text-[#71717A] mb-5">Remplissez les informations relatives au document</p>
            <form method="POST" action="{{ route('admin.documents.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="w-full mb-4">
                    <label for="id_professeur" class="font-medium flex flex-col gap-1">
                        Professeur
                        <select class="outline-none border border-gray-200 py-2 px-2 rounded" name="id_professeur" id="id_professeur">
                            <option selected disabled>Sélectionner un professeur</option>
                            @foreach ($profs as $prof)
                                <option value="{{ $prof->id }}">{{ $prof->lastname }} {{ $prof->firstname }}</option>
                            @endforeach
                        </select>
                    </label>
                </div>
                <div class="w-full mb-4">
                    <label for="type_id" class="font-medium flex flex-col gap-1">
                        Type de document
                        <select class="outline-none border border-gray-200 py-2 px-2 rounded" name="type_id" id="type_id">
                            <option selected disabled>Sélectionner le type</option>
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}">{{ $type->nom }}</option>
                            @endforeach
                        </select>
                    </label>
                </div>
                <div class="mb-4">
                    <label for="document" class="font-medium flex flex-col gap-1">
                        Choisir le fichier
                        <input class="outline-none border border-gray-200 py-2 px-2 rounded" type="file" name="document" id="document" required>
                    </label>
                </div>
                <button class="w-full bg-black cursor-pointer text-white py-2 rounded" type="submit">Ajouter</button>
            </form>
        </div>
    </section>

@endsection
