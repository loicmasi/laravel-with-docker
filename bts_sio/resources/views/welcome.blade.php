@extends('layouts.app')

@section('content')
<!-- Section Introduction -->
<section class="py-5">
    <div class="container text-center">
        <h2 class="section-header">Bienvenue aux Nouveaux Arrivants</h2>
        <p class="lead">Découvrez nos guides et démos pour bien démarrer avec vos environnements de travail.</p>
        <a href="#" class="btn btn-primary">Voir les Guides</a>
    </div>
</section>

<!-- Section des Guides -->
<section class="py-5">
    <div class="container">
        <h2 class="section-header">Guides d'Installation</h2>
        <div class="row">
            <!-- Guide 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Guide 1">
                    <div class="card-body">
                        <h5 class="card-title">Installer un IDE</h5>
                        <p class="card-text">Découvrez comment installer et configurer un IDE comme VS Code.</p>
                        <a href="#" class="btn btn-primary">Voir plus</a>
                    </div>
                </div>
            </div>
            <!-- Guide 2 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('img/docker_banner.png') }}" class="card-img-top" alt="Guide 2">
                    <div class="card-body">
                        <h5 class="card-title">Configurer Docker</h5>
                        <p class="card-text">Apprenez à configurer Docker pour vos projets.</p>
                        <a href="{{ route('docker') }}" class="btn btn-primary">Voir plus</a>
                    </div>
                </div>
            </div>
            <!-- Guide 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Guide 3">
                    <div class="card-body">
                        <h5 class="card-title">Installer un Serveur Local</h5>
                        <p class="card-text">Guide pour installer un serveur local comme XAMPP.</p>
                        <a href="#" class="btn btn-primary">Voir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section des Démos -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-header">Démos d'Utilisation</h2>
        <div class="row">
            <!-- Démo 1 -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/500x300" class="card-img-top" alt="Démo 1">
                    <div class="card-body">
                        <h5 class="card-title">Configurer un Projet Laravel</h5>
                        <p class="card-text">Suivez cette démo pour configurer un projet Laravel avec Docker.</p>
                        <a href="{{ route('laravel') }}" class="btn btn-primary">Voir la Démo</a>
                    </div>
                </div>
            </div>
            <!-- Démo 2 -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/500x300" class="card-img-top" alt="Démo 2">
                    <div class="card-body">
                        <h5 class="card-title">Utilisation de VS Code</h5>
                        <p class="card-text">Tutoriel vidéo pour utiliser VS Code dans vos projets.</p>
                        <a href="#" class="btn btn-primary">Voir la Démo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection