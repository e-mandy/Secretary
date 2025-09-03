@extends('layout')

@section('title', "Secretary - Tableau de bord")

@section('content')

    <section>
        <div class="mb-10">
            <h1 class="font-bold text-3xl">Tableau de bord</h1>
            <p class="text-[#71717A]">Vue d'ensemble de la gestion du secrétariat</p>
        </div>
        <section class="grid md:grid-cols-2 md:gap-6 lg:gap-4 lg:grid-cols-4 mb-8">
            <div class="p-4 rounded-lg shadow opacity-75 bg-white">
                <h6 class="font-medium mb-3 flex justify-between">
                    Professeurs
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                    </svg>
                </h6>
                <span class="text-3xl font-bold">19</span>
                <p class="text-sm text-gray-500">Ce mois ci</p>
            </div>
            <div class="p-4 rounded-lg shadow opacity-75 bg-white">
                <h6 class="font-medium mb-3 flex justify-between">
                    Documents
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                    </svg>
                </h6>
                <span class="text-3xl font-bold">10</span>
                <p class="text-sm text-gray-500">Ce mois ci</p>
            </div>
            <div class="p-4 rounded-lg shadow opacity-75 bg-white">
                <h6 class="font-medium mb-3 flex justify-between">
                    PV Soutenances
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                    </svg>
                </h6>
                <span class="text-3xl font-bold">30</span>
                <p class="text-sm text-gray-500">Ce mois ci</p>
            </div>
        </section>
        <section class="grid sm:grid-cols-1 md:grid-cols-2 gap-4">
            <div class="bg-white p-5 rounded-lg">
                <h2 class="text-2xl font-semibold mb-1">Activités récentes</h3>
                <p class="text-sm text-gray-500">Dernières actions effectuées</p>

                <div class="px-8 mt-4">
                    <div class="flex justify-between items-center relative mb-4 before:block before:w-2 before:h-2 before:left-[-20px] before:bg-green-600 before:rounded-[50%] before:absolute">
                        <div>
                            <h5 class="text-normal">Nouveau document ajouté</h5>
                            <p class="text-sm text-gray-500">Prof. Martin - CV mise à jour</p>
                        </div>
                        <p class="text-sm text-gray-500">Il y a 1 semaine</p>
                    </div>
                    <div class="flex justify-between items-center relative mb-4 before:block before:w-2 before:h-2 before:left-[-20px] before:bg-blue-600 before:rounded-[50%] before:absolute">
                        <div>
                            <h5 class="text-normal">Nouveau document ajouté</h5>
                            <p class="text-sm text-gray-500">Prof. Martin - CV mise à jour</p>
                        </div>
                        <p class="text-sm text-gray-500">Il y a 2h</p>
                    </div>
                    <div class="flex justify-between items-center relative mb-4 before:block before:w-2 before:h-2 before:left-[-20px] before:bg-orange-600 before:rounded-[50%] before:absolute">
                        <div>
                            <h5 class="text-normal">Nouveau document ajouté</h5>
                            <p class="text-sm text-gray-500">Prof. Martin - CV mise à jour</p>
                        </div>
                        <p class="text-sm text-gray-500">Hier</p>
                    </div>
                </div>
            </div>
        </section>
    </section>

@endsection
