@extends('layout')

@section('title', "Secretary - Liste des PV Soutenance")

@section('content')
    <script src="{{ asset('assets/scripts/pv_soutenance.js') }}" defer></script>
    <script src="{{ asset('assets/scripts/script.js') }}" defer></script>
    <section>
        @if($errors->any())
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        @endif
        <div class="flex justify-between items-center mb-10">
            <div>
                <h1 class="font-bold text-3xl">PV de Soutenances</h1>
                <p class="text-[#71717A]">Gérez les informations relatives aux pv de soutenances</p>
            </div>
            <button class="add_pv_soutenance flex items-center bg-black text-white rounded-lg px-3 py-2 gap-4 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
                Ajouter un PV de Soutenance
            </button>
        </div>
        <section class="grid grid-cols-4 gap-6 mb-8">
            <div class="bg-purple-200 p-4 rounded-lg shadow opacity-75">
                <h6 class="font-medium mb-4 flex justify-between text-purple-900">
                    Total PV Soutenances
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                    </svg>
                </h6>
                <span class="text-3xl text-blue-700">{{ $nbr_pv }}</span>
            </div>
        </section>
        <section class="bg-white px-6 py-6">
            <div class="flex justify-between items-center mb-5">
                <div>
                    <h3 class="text-2xl font-semibold">Bibliothèque des PV de Soutenances</h3>
                    <p class="text-[#71717A]">{{ $nbr_pv }} pv de soutenance(s) trouvé(s)</p>
                </div>
            </div>
            <section>
                @foreach($pv_soutenances as $pv_soutenance)
                    <div class="rounded-lg border border-gray-300 p-4 mb-6">
                        <div class="flex items-center justify-between mb-3">
                            <div class="flex gap-4 items-center">
                                <span class="h-14 w-14 rounded-[50%] border-2 border-white shadow-lg p-4 bg-linear-to-r from-cyan-500 to-blue-500 text-white font-bold flex justify-center items-center text-3xl">{{ $pv_soutenance->nom_etu[0] }}</span>
                                <div>
                                    <h4 class="text-xl font-semibold mb-1">{{ $pv_soutenance->nom_etu }}</h4>
                                    <span class="block w-fit py-1 px-4 bg-blue-300 rounded-xl text-blue-700 text-xs hover:bg-gray-800 text-center">{{ $pv_soutenance->filiere->nom }}</span>
                                </div>
                            </div>
                            <div class="flex gap-5 items-center">
                                <div class="voirButton p-1 hover:bg-gray-300 rounded cursor-pointer relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                                    </svg>
                                    <div class="optionsPopup bg-white border border-gray-300 p-2 w-[130px] rounded absolute top-[100%] right-0 hidden">
                                        <ul class="flex flex-col gap-2">
                                            <li>
                                                <a class="flex gap-3 items-center hover:bg-gray-200 p-1 rounded" href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                    </svg>
                                                    Voir profil
                                                </a>
                                            </li>
                                            <li>
                                                <a class="flex gap-3 items-center hover:bg-gray-200 p-1 rounded" href="{{ route('admin.pv_soutenance.edit', $pv_soutenance) }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                    </svg>
                                                    Modifier
                                                </a>
                                            </li>
                                            <li>
                                                <form action="#" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="flex gap-3 items-center hover:bg-gray-200 p-1 rounded text-red-600 cursor-pointer" type="submit">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                        </svg>
                                                        Supprimer
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid lg:grid-cols-3 mb-4">
                            <div>
                                <h3 class="text-gray-600 font-medium mb-3">PLANNING</h3>
                                <p class="flex gap-2 mb-2 text-sm items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                                    </svg>
                                    {{ $pv_soutenance->date_created_at }}
                                </p>
                            </div>
                            <div>
                                <h3 class="text-gray-600 font-medium mb-3">JURY</h3>

                            </div>
                            <div>
                                <h3 class="text-gray-600 font-medium uppercase mb-3">Résultats</h3>
                                <p class="flex mb-4 text-sm items-center justify-between">
                                    Note:
                                    <span class="text-lg font-semibold">{{ $pv_soutenance->note }}/20</span>
                                </p>
                                <p class="flex items-center justify-between">
                                    Mention:
                                    @switch($pv_soutenance->mention)
                                        @case("passable")
                                            <span class="text-sm py-1 px-4 bg-red-400 rounded-2xl text-white hover:bg-black hover:text-red-400">Passable</span>
                                            @break

                                        @case("abien")
                                            <span class="text-sm py-1 px-4 bg-orange-400 rounded-2xl text-white hover:bg-black hover:text-orange-400">Assez Bien</span>
                                            @break

                                        @case("bien")
                                            <span class="text-sm py-1 px-4 bg-blue-400 rounded-2xl text-white hover:bg-black hover:text-blue-400">Bien</span>
                                            @break

                                        @case("tbien")
                                            <span class="text-sm py-1 px-4 bg-green-400 rounded-2xl text-white hover:bg-black hover:text-green-400">Très Bien</span>
                                            @break
                                    @endswitch
                                </p>
                            </div>
                        </div>
                        {{-- <hr class="mb-6"> --}}
                        <div class="flex justify-between">
                            {{-- <p class="flex gap-2 items-center uppercase text-gray-500 text-lg font-medium">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                </svg>
                                Procès-verbal
                            </p> --}}
                            @if($pv_soutenance->pv_file)
                                <span class="flex gap-1 items-center w-fit py-1 px-4 bg-blue-300 rounded-xl text-blue-700 text-xs hover:bg-gray-800 text-center mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                                    </svg>
                                    Fichier uploadé
                                </span>
                            @endif
                        </div>
                        @if ($pv_soutenance->pv_file)
                            <div class="flex justify-between items-center border-dashed p-3 rounded-lg border-green-300 border-2 bg-green-50">
                                <div class="flex items-center gap-4">
                                    <span class="block p-2 bg-green-200 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                        </svg>
                                    </span>
                                    <div>
                                        <h4 class="font-medium">Nom du document.extension</h4>
                                        <p class="text-sm text-gray-400">Uploadé le 28/09/2024</p>
                                    </div>
                                </div>
                                <div>
                                    <a href="{{ route('admin.pv_soutenance.download', $pv_soutenance) }}" class="block bg-white border border-gray-300 p-2 rounded-lg cursor-pointer hover:bg-gray-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        @else
                            {{-- <div class="mb-4">
                                <label class="flex flex-col items-center mb-1 border-2 border-dashed border-gray-300 rounded-lg mx-auto p-4 hover:border-blue-500" for="pv_file">
                                    <span class="bg-gray-200 p-2 rounded-lg mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="gray" class="size-8">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
                                        </svg>
                                    </span>
                                    <h5 class="font-medium">Téléchargez le PV de Soutenance</h5>
                                    <p class="text-sm text-gray-500 font-medium mb-2">PDF jusqu'à 8mo.</p>
                                    <span class="flex gap-4 border border-gray-300 text-sm font-medium p-2 rounded-lg items-center cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 xs:hidden sm:block">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
                                        </svg>
                                        Choisir un fichier
                                    </span>
                                    <input class="hidden" type="file" name="pv_file" id="pv_file">
                                </label>
                            </div> --}}
                        @endif
                    </div>
                @endforeach
            </section>
        </section>
        <div class="overlay hidden fixed z-40 bg-black opacity-75 w-screen h-screen top-0 left-0"></div>

        <div class="popup_add_pv_soutenance z-50 bg-white hidden w-[600px] fixed top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] px-8 pt-6 pb-7 rounded-lg">
            <h3 class="text-2xl font-bold">Créer un nouveau PV de Soutenance</h3>
            <p class="text-[#71717A] mb-6">Remplissez les informations relatives à la soutenance</p>
            <form method="POST" action="{{ route('admin.pv_soutenance.store') }}">
                @csrf
                <div class="flex items-center w-full justify-between mb-4">
                    <label for="nom_etu" class="font-medium flex flex-col gap-1 w-[48%] text-sm">
                        Nom de l'étudiant
                        <input class="outline-none border border-gray-200 py-2 px-2 rounded" type="text" name="nom_etu" id="nom_etu" placeholder="eg. d'ALMEIDA Arnaud" required>
                    </label>
                    <label for="id_filiere" class="font-medium flex flex-col gap-1 w-[48%] text-sm">
                        Type de soutenance
                        <select class="border border-gray-200 rounded-lg p-2 text-gray-500" name="id_filiere" id="id_filiere">
                            <option value="">Sélectionner le type</option>
                            @foreach ($filieres as $filiere)
                                <option value="{{ $filiere->id }}">{{ $filiere->nom }}</option>
                            @endforeach
                        </select>
                    </label>
                </div>
                <div class="flex items-center w-full justify-between mb-4">
                    <label for="soutenance_date" class="font-medium flex flex-col gap-1 w-[48%] text-sm">
                        Date
                        <input class="outline-none border border-gray-200 py-2 px-2 rounded" type="date" name="soutenance_date" id="soutenance_date" required>
                    </label>
                </div>
                <div class="flex items-center w-full justify-between mb-4">
                    <label for="note" class="font-medium flex flex-col gap-1 w-[48%] text-sm">
                        Note
                        <input class="outline-none border border-gray-200 py-2 px-2 rounded" type="number" name="note" id="note" placeholder="Ex: 16" required>
                    </label>
                </div>
                <div class="mb-4">
                    <label class="flex flex-col items-center mb-1 border-2 border-dashed border-gray-300 rounded-lg mx-auto p-4 hover:border-blue-500" for="pv_file">
                        <span class="bg-gray-200 p-1 rounded-lg mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
                            </svg>
                        </span>
                        <h5 class="font-medium">Téléchargez le PV de Soutenance</h5>
                        <p class="text-sm text-gray-500 font-medium mb-2">PDF jusqu'à 8mo.</p>
                        <span class="flex justify-between border border-gray-300 text-sm font-medium p-2 w-[31%] rounded-lg items-center hover:bg-red-100 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 xs:hidden sm:block">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
                            </svg>
                            Choisir un fichier
                        </span>
                        <input class="hidden" type="file" name="pv_file" id="pv_file">
                    </label>
                    <legend class="text-red-400 font-medium text-xs">Le fichier du PV de soutenance peut être ajouté après la création du PV de soutenance.</legend>
                </div>
                <button class="w-full bg-black cursor-pointer text-white py-2 rounded" type="submit">Ajouter</button>
            </form>
        </div>
    </section>
@endsection
