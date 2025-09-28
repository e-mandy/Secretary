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
        <section>
            <div class="w-2/3 bg-white p-5 rounded-lg">
                <h2 class="text-2xl font-semibold mb-1">Activités récentes</h3>
                <p class="text-sm text-gray-500">Dernières actions effectuées</p>

                <div class="px-8 mt-4">
                    @if($document['recents'] != null)
                        @foreach ($document['recents'] as $activity)
                            <x-card.recent-activity color="green">
                                <x-slot:message>{{ $activity['message'] }}</x-slot>
                                <x-slot:name>{{ $activity['value']->nom }} - {{ $activity['value']->type->nom }}</x-slot>
                                <x-slot:date>{{ $activity['recent_activity'] }}</x-slot>
                            </x-card.recent-activity>
                        @endforeach
                    @endif

                    @if($prof['recents'] != null)
                        @foreach ($prof['recents'] as $activity)
                            <x-card.recent-activity color="blue">
                                <x-slot:message>{{ $activity['message'] }}</x-slot>
                                <x-slot:name>Mr {{ $activity['value']->lastname }} {{ $activity['value']->firstname }}</x-slot>
                                <x-slot:date>{{ $activity['recent_activity'] }}</x-slot>
                            </x-card.recent-activity>
                        @endforeach
                    @endif

                    @if($pv_soutenance['recents'] != null)
                        @foreach ($pv_soutenance['recents'] as $activity)
                            <x-card.recent-activity color="red">
                                <x-slot:message>{{ $activity['message'] }}</x-slot>
                                <x-slot:name>Mr {{ $activity['value']->nom_etu }}</x-slot>
                                <x-slot:date>{{ $activity['recent_activity'] }}</x-slot>
                            </x-card.recent-activity>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>
    </section>

@endsection
