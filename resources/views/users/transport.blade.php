@extends('users.layouts.app',['title' => 'transport'])
@section('main-content')
<!-- Page Title -->
    <div class="page-title dark-background">
      <div class="container position-relative">
        <h1>Sypress Transport</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('utilisateur.index') }}">Acceuil</a></li>
            <li class="current">transport</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->
    <!-- Contact Section -->
    <section id="transport" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Sypress</h2>
        <p>Domaine du transport</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade" data-aos-delay="100">

      <div class="row">
        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
          <p class="fst-italic">
            Dans le cadre de la mondialisation, les échanges, le développement du tourisme et le boom du e-commerce, le secteur

            du transport et de la logistique constituent les piliers de l’essor économique mondial en général et composent la rampe de

            lancement expulsive et incontournable du développement économique africain en particulier.
          </p>
          <p class="fst-italic">
            Recevoir chez soi un colis commandé sur internet, solliciter une entreprise de déménagement, faire ses achats à

            distance... Autant de situations du quotidien qui nécessitent d’avoir recours à un ou plusieurs moyens de transports. Et les

            particuliers ne sont pas les seuls concernés. Toutes les entreprises font aujourd’hui appel à des sociétés de transport afin

            d’acheminer jusqu’à elles leurs matières premières et d’expédier leurs marchandises vers leurs clients ou des points de

            vente leur permettant de mieux se concentrer aux questions centrales.
          </p>

          <p class="fst-italic">
            SYPRESS TRANSPORT vous accompagne aussi bien dans la sécurité que dans la livraison de vos produits tout en

            respectant les délais prescrits. Nous nous occupons de la livraison de tous vos produits, fonds, matières premières, colis,

            courriers entre autres afin de vous permettre de gérer des dossiers centraux.
          </p>
          <p class="fst-italic">
            SYPRESS TRANSPORT c’est votre partenaire privilégié en matière de transport, une extension de votre équipe qui gère

            avec, par et pour vous tous vos besoins en matière de livraison. Nous sommes une entreprise de services et nous gérons

            pour vous toutes vos livraisons de colis dans les conditions et délais optimales.

            SYPRESS TRANSPORT rayonne aussi dans l’escorte de VIP et de personne dangereuse, dans le transfert de fonds et de

            courrier et dans le covoiturage.
          </p>
          
        </div>
        <div class="col-lg-6 order-1 order-lg-2 text-center">
          <img src="{{asset('user/assets/img/team/transport.jpg')}}" alt="" class="img-fluid">
        </div>
      </div>

      </div>

    </section><!-- /Contact Section -->
@endsection