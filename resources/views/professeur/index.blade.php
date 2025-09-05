@extends('layout')

@section('title', "Secretary - Liste des Professeurs")

@section('content')
    <script src="{{ asset('assets/scripts/professeur/professeur.js') }}" defer></script>
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
            <button class="add_prof flex items-center bg-black text-white rounded-lg px-3 py-2 gap-4 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
                Ajouter un professeur
            </button>
        </div>
        <section class="grid grid-cols-4 gap-6 mb-8">
            <div class="bg-white p-4 rounded-lg shadow">
                <h6 class="font-medium mb-4">Total Professeurs</h6>
                <span class="text-3xl text-blue-700">{{ $prof_count }}</span>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <h6 class="font-medium mb-4">Enregistrement à jour</h6>
                <span class="text-3xl text-yellow-500">{{ $prof_count - $prof_incomplet }}</span>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <h6 class="font-medium mb-4">Enregistrement incomplet</h6>
                <span class="text-3xl text-green-500">{{ $prof_incomplet }}</span>
            </div>
        </section>
        <section class="bg-white px-6 py-6">
            <div class="flex justify-between items-center mb-5">
                <div>
                    <h3 class="text-2xl font-semibold">Liste des Professeurs</h3>
                    <p class="text-[#71717A]">{{ $prof_count }} professeur(s) trouvé(s)</p>
                </div>
                <div class="flex items-center gap-4">
                    <div class="flex gap-2 items-center bg-gray-200 p-1 rounded-lg">
                        <div class="layoutIcon active p-1 rounded-lg cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-layout-grid-icon lucide-layout-grid"><rect width="7" height="7" x="3" y="3" rx="1"/><rect width="7" height="7" x="14" y="3" rx="1"/><rect width="7" height="7" x="14" y="14" rx="1"/><rect width="7" height="7" x="3" y="14" rx="1"/></svg>
                        </div>
                        <div class="groupIcon p-1 rounded-lg cursor-pointer bg-black">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="18" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-table2-icon lucide-table-2"><path d="M9 3H5a2 2 0 0 0-2 2v4m6-6h10a2 2 0 0 1 2 2v4M9 3v18m0 0h10a2 2 0 0 0 2-2V9M9 21H5a2 2 0 0 1-2-2V9m0 0h18"/></svg>
                        </div>
                    </div>
                    <label for="search" class="flex gap-1 border rounded-lg py-1 px-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                        <input class="py-1 px-2 outline-none w-[210px]" type="text" name="search" id="search" placeholder="Rechercher un professeur...">
                    </label>
                </div>
            </div>
            <div class="layoutSide hidden grid-cols-3 gap-3">
                @foreach($professeurs as $professeur)
                    <div class="bg-white px-6 py-7 rounded-xl border border-gray-300">
                        <div class="flex justify-between items-center">
                            <div class="flex items-center gap-4">
                                <span class="block rounded-[50%] w-14 h-14 p-4 bg-linear-to-r from-cyan-500 to-blue-500 text-white font-bold text-center">{{ $professeur->lastname[0] }}{{ $professeur->firstname[0] }}</span>
                                <div>
                                    <h4 class="text-xl font-semibold mb-1">{{ $professeur->lastname }} {{ $professeur->firstname }}</h4>
                                    <span class="block py-1 px-2 bg-blue-300 rounded-xl text-blue-700 text-xs hover:bg-gray-800 text-center">{{ $professeur->specialite }}</span>
                                </div>
                            </div>
                            <div class="p-1 hover:bg-gray-300 rounded cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                                </svg>
                            </div>
                        </div>
                        <div class="py-4">
                            <p class="flex gap-3 mb-2 text-[#49494e]">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                </svg>
                                {{ $professeur->email }}
                            </p>
                            <p class="flex gap-3 mb-2 text-[#49494e]">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                </svg>
                                {{ $professeur->phone }}
                            </p>
                        </div>
                        <hr>
                        <div class="flex justify-between py-4">
                            <p class="text-sm"><span class="font-medium">8</span> documents</p>
                            <p class="text-sm">Ajouté depuis le 25/05/2025</p>
                        </div>
                        <a href="{{ route('admin.professeurs.show', $professeur) }}" class="border flex justify-center gap-3 rounded-sm py-1 border-gray-400 hover:bg-gray-50" href="">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                            Voir le profil
                        </a>
                    </div>
                @endforeach

            </div>
            <div class="groupSide block">
                <div class="border border-gray-300 rounded-lg px-2">
                    <table class="w-full">
                        <thead>
                            <tr class="px-4">
                                <th class="">Professeur</th>
                                <th>Spécialité</th>
                                <th>Contact</th>
                                <th>Date de création</th>
                                <th>Documents</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($professeurs as $professeur)
                                <tr class="border-t-1 border-gray-300">
                                    <td class="text-center flex flex-col font-bold">
                                        <span>
                                            {{ $professeur->lastname }}
                                        </span>
                                        <span>
                                            {{ $professeur->firstname }}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="block py-[1px] bg-blue-50 border border-gray-300 rounded-xl text-blue-700 text-sm font-bold hover:bg-gray-800 text-center w-fit px-2">{{ $professeur->specialite }}</span>
                                    </td>
                                    <td>
                                        <p class="flex items-center gap-2 text-sm mb-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                            </svg>
                                            {{ $professeur->email }}
                                        </p>
                                        <p class="flex items-center gap-2 text-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                            </svg>
                                            {{ $professeur->phone }}
                                        </p>
                                    </td>
                                    <td>
                                        <p></p>
                                        <p>Août 2025</p>
                                    </td>
                                    <td class="flex flex-col items-center">
                                        <span>08</span><span>documents</span>
                                    </td>
                                    <td>
                                        <div class="p-1 hover:bg-gray-300 rounded cursor-pointer w-fit mx-auto">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                                            </svg>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <div class="overlay hidden fixed z-40 bg-black opacity-75 w-screen h-screen top-0 left-0"></div>

        <div class="popup_add_prof z-50 bg-white hidden w-[440px] fixed top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] px-8 pt-6 pb-7 rounded-lg">
            <h3 class="text-2xl font-bold mb-2">Ajouter un nouveau professeur</h3>
            <p class="text-[#71717A] mb-5">Remplissez les informations relatives au professeur</p>
            <form method="POST" action="{{ route('admin.professeurs.store') }}">
                @csrf
                <div class="flex items-center w-full justify-between mb-4">
                    <label for="lastname" class="font-medium flex flex-col gap-1 w-[48%]">
                        Nom de famille
                        <input class="outline-none border border-gray-200 py-2 px-2 rounded" type="text" name="lastname" id="lastname" placeholder="eg.Agossou" required>
                    </label>
                    <label for="firstname" class="font-medium flex flex-col gap-1 w-[48%]">
                        Prénom
                        <input class="outline-none border border-gray-200 py-2 px-2 rounded" type="text" name="firstname" id="firstname" placeholder="Eg.Sebastien" required>
                    </label>
                </div>
                <div class="w-full mb-4">
                    <label for="email" class="font-medium flex flex-col gap-1">
                        Adresse Email
                        <input class="outline-none border border-gray-200 py-2 px-2 rounded" type="email" name="email" id="email" placeholder="eg.agossousebastien@gmail.com" required>
                    </label>
                </div>
                <div class="mb-4">
                    <label for="phone" class="font-medium flex flex-col gap-1">
                        Numéro de téléphone
                        <input class="outline-none border border-gray-200 py-2 px-2 rounded" type="text" name="phone" id="phone" placeholder="+229 01 98 76 54 32" required>
                    </label>
                </div>
                <div class="mb-6">
                    <label for="specialite" class="font-medium flex flex-col gap-1">
                        Spécialité
                        <input class="outline-none border border-gray-200 py-2 px-2 rounded" type="text" name="specialite" id="specialite" placeholder="Développeur web backend">
                    </label>
                </div>
                <button class="w-full bg-black cursor-pointer text-white py-2 rounded" type="submit">Ajouter</button>
            </form>
        </div>
    </section>
@endsection
