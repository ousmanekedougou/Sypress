@extends('users.layouts.app',['title' => 'négoce'])
@section('main-content')
<!-- Page Title -->
    <div class="page-title dark-background">
      <div class="container position-relative">
        <h1>Sypress Négoce</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('utilisateur.index') }}">Acceuil</a></li>
            <li class="current">négoce</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->
    <section id="negoce" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Sypress</h2>
        <p>Domaine du négoce</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade" data-aos-delay="100">

      <div class="row">
        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
          <p class="fst-italic">
            SYPRESS évolue également dans le secteur du Négoce qui est aussi l’un de ces secteurs prioritaires et est considéré

            comme outil d’aide à la prise de décision et observatoire de veille sur les tendances du marché.

            SYPRESS NEGOCE présente toute l’actualité marchande régionale, nationale et internationale

            A cet effet, nous proposons, à travers SYPRESS NEGOCE, une valeur ajoutée pour l’ensemble de nos clients et

            partenaires.
          </p>
            <h6>Nous nous démarquons ainsi par :</h6>
          <ul>
            <li><i class="bi bi-check2-all"></i>
              <spab>La capacité d’innovation dans des services adjacents proposés aux clients, permettant de se démarquer vis-à-vis de la concurrence. </spab>
            </li>
            <li><i class="bi bi-check2-all"></i> <span>La chaîne des approvisionnements tant sur le plan tarifaire que sur celui du pilotage des fournisseurs et de la gestion des stocks.</span>.</li>
            <li><i class="bi bi-check2-all"></i> <span>Une réactivité toujours plus forte nécessitant une accélération de l’ensemble des processus de l’entreprise et la suppression des tâches sans valeur ajoutée.</span></li>
            <li><i class="bi bi-check2-all"></i> <span></span>La maîtrise de l’ensemble des flux de gestion et des informations clients, la personnalisation de la relation avec ces derniers.</li>
            <li><i class="bi bi-check2-all"></i> <span>La mise en œuvre de normes assurant la qualité de service.SYPRESS NEGOCE est l’interlocuteur privilégié qui intervient tout au long de la procédure dans la réussite de vos opérations commerciales et d’import-export.</span></li>
          </ul>
          
        </div>
        <div class="col-lg-6 order-1 order-lg-2 text-center">
          <img src="{{asset('user/assets/img/team/negoce.jpg')}}" alt="" class="img-fluid">
        </div>
      </div>

      </div>

    </section><!-- /Contact Section -->
@endsection