@extends('layouts.app')

@section('content')
<!-- Section des Guides -->
<section class="py-5">
    <div class="container">
        <h2 class="section-header">Démarrer avec Docker</h2>
        <div class="row">
            <!-- Guide 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Installer Docker</h5>
                        <p class="card-text">
                            Découvrez comment installer Docker sur une machine Windows. L'installation de WSL
                            (Windows Subsystem Linux) est obligatoire, mais ce fait automatiquement lors
                            de l'installation de Docker.
                        </p>
                        <a href="#" class="btn btn-primary">Voir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h5>dedede</h5>
                    </div>
                    <div class="card-body">
                        <h5>Try</h5>
                        <p>The content : Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor maiores assumenda repudiandae, 
                            commodi totam, voluptatem id voluptate amet a iste quo 
                            nesciunt perferendis quis officiis reiciendis veniam suscipit. Obcaecati, iure.
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>
            <!-- Guide 2 -->
            {{-- <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('img/docker_banner.png') }}" class="card-img-top" alt="Guide 2">
                    <div class="card-body">
                        <h5 class="card-title">Configurer Docker</h5>
                        <p class="card-text">Apprenez à configurer Docker pour vos projets.</p>
                        <a href="{{ route('docker') }}" class="btn btn-primary">Voir plus</a>
                    </div>
                </div>
            </div> --}}
            <!-- Guide 3 -->
            {{-- <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Guide 3">
                    <div class="card-body">
                        <h5 class="card-title">Installer un Serveur Local</h5>
                        <p class="card-text">Guide pour installer un serveur local comme XAMPP.</p>
                        <a href="#" class="btn btn-primary">Voir plus</a>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</section>

@endsection