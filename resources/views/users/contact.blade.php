@extends('users.layouts.app',['title' => 'contact'])
@section('main-content')
<!-- Page Title -->
    <div class="page-title dark-background">
      <div class="container position-relative">
        <h1>Contacter nous ici</h1>
        <p></p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('utilisateur.index') }}">Acceuil</a></li>
            <li class="current">Contact</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->
    <!-- Contact Section -->
    <section  class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Nous contacter</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Addresse</h3>
                <p> Thiès, Parcelles Assainies Unité 01, Villa 02, Face Poste de Police,</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Appelez-nous</h3>
                <p>33 951 40 61</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Envoyer nous un courriel</h3>
                <p>sypress66@gmail.com, sypress@netcourrier.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            <form action="{{ route('utilisateur.contact.store') }}" method="POST" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              @csrf
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Votre prenom et nom" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Votre adress email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Objet du message" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="msg" rows="6" placeholder="Votre message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Chargement</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Votre message a été envoyé. Nous vous remercions de votre attention.</div>

                  <button type="submit">Envoyer un message</button>
                </div>

                </div>
              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->
@endsection