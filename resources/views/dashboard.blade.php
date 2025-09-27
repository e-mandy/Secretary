@extends('layout')

@section('title', "Secretary - Tableau de bord")

@section('content')

    <section>
        <div class="mb-10">
            <h1 class="font-bold text-3xl">Tableau de bord</h1>
            <p class="text-[#71717A]">Vue d'ensemble de la gestion du secrétariat</p>
        </div>
        <section class="grid md:grid-cols-2 md:gap-6 lg:gap-4 lg:grid-cols-4 mb-8">
            <x-card.header>
                <x-slot:title>
                    Professeurs
                </x-slot>
                <x-slot:icon>
                    <x-heroicon-s-users class="h-6 w-6" />
                </x-slot>
                <x-slot:value>{{ $prof['number'] }}</x-slot>
                <x-slot:date>{{ $prof['last_change'] }}</x-slot>
            </x-card.header>
            <x-card.header>
                <x-slot:title>
                    Documents
                </x-slot>
                <x-slot:icon>
                    <x-heroicon-o-document-text class="h-6 w-6" />
                </x-slot>
                <x-slot:value>{{ $document['number'] }}</x-slot>
                <x-slot:date>{{ $document['last_change'] }}</x-slot>
            </x-card.header>
            <x-card.header>
                <x-slot:title>
                    PV de soutenances
                </x-slot>
                <x-slot:icon>
                    <x-fas-graduation-cap class="h-6 w-6" />
                </x-slot>
                <x-slot:value>{{ $pv_soutenance['number'] }}</x-slot>
                <x-slot:date>{{ $pv_soutenance['last_change'] }}</x-slot>
            </x-card.header>
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
