@extends('layout')

@section('title', "Secretary - Liste des PV Soutenance")

@section('content')
    <script src="{{ asset('assets/scripts/pv_soutenance.js') }}" defer></script>
    <section>
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
                <span class="text-3xl text-blue-700"></span>
            </div>
            <div class="bg-green-200 p-4 rounded-lg shadow opacity-75">
                <h6 class="font-medium mb-4 flex justify-between text-green-900">
                    Terminées
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </h6>
                <span class="text-3xl text-blue-700"></span>
            </div>
            <div class="bg-orange-200 p-4 rounded-lg shadow opacity-75">
                <h6 class="font-medium mb-4 flex justify-between text-orange-900">
                    En préparation
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </h6>
                <span class="text-3xl text-blue-700"></span>
            </div>
        </section>
        <section class="bg-white px-6 py-6">
            <div class="flex justify-between items-center mb-5">
                <div>
                    <h3 class="text-2xl font-semibold">Bibliothèque des PV de Soutenances</h3>
                    <p class="text-[#71717A]">pv de soutenance(s) trouvé(s)</p>
                </div>
                <div class="flex gap-4">
                    <select class="border border-black rounded-lg p-2" name="filtre" id="filtre">
                        <option value="">Filtrer par statut</option>

                    </select>
                    <label for="search" class="flex gap-1 border rounded-lg py-1 px-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                        <input class="py-1 px-2 outline-none w-[210px] placeholder:text-sm" type="text" name="search" id="search" placeholder="Rechercher un pv de soutenance...">
                    </label>
                </div>
            </div>
            <section>
                <div class="rounded-lg border border-gray-300 p-4">
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex gap-4 items-center">
                            <span class="h-14 w-14 block rounded-[50%] border-2 border-white shadow-lg p-4 bg-linear-to-r from-cyan-500 to-blue-500 text-white font-bold">MJ</span>
                            <div>
                                <h4 class="text-xl font-semibold mb-1">Jonh Doe</h4>
                                <span>Intelligence artificielle</span>
                            </div>
                        </div>
                        <div class="flex gap-5 items-center">
                            <span class="font-medium text-sm">Terminée</span>
                            <div class="p-1 hover:bg-gray-300 rounded cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="grid lg:grid-cols-3">
                        <div>
                            <h3 class="text-gray-600 font-medium mb-3">PLANNING</h3>
                            <p class="flex gap-2 mb-2 text-sm items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                                </svg>
                                vendredi, 28 Juin 2025
                            </p>
                            <p class="flex gap-2 mb-2 text-sm items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                14:00
                            </p>
                            <p class="flex gap-2 mb-2 text-sm items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205 3 1m1.5.5-1.5-.5M6.75 7.364V3h-3v18m3-13.636 10.5-3.819" />
                                </svg>
                                Salle OB
                            </p>
                        </div>
                        <div>
                            <h3 class="text-gray-600 font-medium mb-3">JURY</h3>
                            <p class="flex gap-2 mb-2 text-sm items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                                </svg>
                                Dr. ATOHOUN
                            </p>
                            <p class="flex gap-2 mb-2 text-sm items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                                </svg>
                                Prof. DOE
                            </p>
                            <p class="flex gap-2 mb-2 text-sm items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                                </svg>
                                Prof. AGOSSOU
                            </p>
                        </div>
                        <div>
                            <h3 class="text-gray-600 font-medium uppercase mb-3">Résultats</h3>
                            <p class="flex gap-2 mb-2 text-sm items-center">
                                Note:
                                <span>16/20</span>
                            </p>
                            <p>
                                Mention:
                                <span>Bien</span>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <div class="overlay hidden fixed z-40 bg-black opacity-75 w-screen h-screen top-0 left-0"></div>

        <div class="popup_add_pv_soutenance z-50 bg-white hidden w-[540px] fixed top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] px-8 pt-6 pb-7 rounded-lg">
            <h3 class="text-2xl font-bold mb-2">Créer un nouveau PV de Soutenance</h3>
            <p class="text-[#71717A] mb-5">Remplissez les informations relatives à la soutenance</p>
            <form method="POST" action="{{ route('admin.professeurs.store') }}">
                @csrf
                <div class="flex items-center w-full justify-between mb-4">
                    <label for="nom" class="font-medium flex flex-col gap-1 w-[48%]">
                        Nom de l'étudiant
                        <input class="outline-none border border-gray-200 py-2 px-2 rounded" type="text" name="nom" id="nom" placeholder="eg. d'ALMEIDA" required>
                    </label>
                    <label for="firstname" class="font-medium flex flex-col gap-1 w-[48%]">
                        Type de soutenance
                        <select class="border border-black rounded-lg p-2" name="id_filiere" id="id_filiere">
                            <option disabled>Sélectionner le type</option>
                        </select>
                    </label>
                </div>
                <div class="flex items-center w-full justify-between mb-4">
                    <label for="date" class="font-medium flex flex-col gap-1 w-[48%]">
                        Date
                        <input class="outline-none border border-gray-200 py-2 px-2 rounded" type="date" name="date" id="date" required>
                    </label>
                    <label for="heure" class="font-medium flex flex-col gap-1 w-[48%]">
                        Heure
                        <input class="outline-none border border-gray-200 py-2 px-2 rounded" type="time" name="date" id="date" required>
                    </label>
                </div>
                <div class="mb-6">
                    <label for="specialite" class="font-medium flex flex-col gap-1">
                        Membres du jury
                        <textarea class="border-1 border-gray-300 rounded-lg placeholder:text-gray-300" name="membres_jury" id="membres_jury" cols="30" rows="5" placeholder="Listez les membres du jury (un par ligne)"></textarea>
                    </label>
                </div>
                <button class="w-full bg-black cursor-pointer text-white py-2 rounded" type="submit">Ajouter</button>
            </form>
        </div>
    </section>
@endsection
