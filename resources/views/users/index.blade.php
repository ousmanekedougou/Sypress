@extends('users.layouts.app',['title' => 'acceuil'])
@section('main-content')
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div id="hero-carousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">Bienvenue à <span>Sypress</span></h2>
            <p class="animate__animated animate__fadeInUp">Le groupe SYNERGIE PRESTATAIRE SERVICES (SYPRESS) est articulé en quatre sécteurs :
                Sypress Sécurité, Sypress Evironnement (Néttoiment, Décoration et Entretient),Sypress Transport, et Sypres Négoce
              </p>
            <a href="#services" class="btn-get-started animate__animated animate__fadeInUp scrollto">Nos services</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">Sécurité & Environnement</h2>
            <p class="animate__animated animate__fadeInUp">Le Groupe entend s’exceller activement dans la sécurité, le nettoiement et la formation en vue de participer : à l’instauration de la sécurité, à la préservation de l’environnement , à la formation professionnelle en sécurité , et surtout de lutter contre le chômage à l’instar des autres structures spécialisées dans ces secteurs tantôt cités. </p>
            <a href="#pricing" class="btn-get-started animate__animated animate__fadeInUp scrollto">Nos Tarifications</a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">Transport & Négoce</h2>
            <p class="animate__animated animate__fadeInUp">
              Un groupe synergie de prestataire de services.
            </p>
            <a href="#team" class="btn-get-started animate__animated animate__fadeInUp scrollto">Notre équipe</a>
          </div>
        </div>

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>

      <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
          <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
        </defs>
        <g class="wave1">
          <use xlink:href="#wave-path" x="50" y="3"></use>
        </g>
        <g class="wave2">
          <use xlink:href="#wave-path" x="50" y="0"></use>
        </g>
        <g class="wave3">
          <use xlink:href="#wave-path" x="50" y="9"></use>
        </g>
      </svg>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>A propos de</h2>
        <p>Qui sommes-nous ?</p>
      </div><!-- End Section Title -->

      <div class="container">

      <div class="row gy-4">

        <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
          <p>CREATION : SYNERGIE PRESTATAIRE SERVICES : SYPRESS est une structure de prestation de services, essentiellement composée de jeunes filles et d’hommes issus des rangs militaires et paramilitaires, qui excelle dans la sécurité, le nettoiement et l’exploitation d’espaces verts....
          </p>
          <ul>
            <li><i class="bi bi-check2-circle"></i> <span>D’accompagner l’état dans sa politique d’emploi...</span></li>
            <li><i class="bi bi-check2-circle"></i> <span>De lutter contre le chômage corrélatif à l’insécurité.</span></li>
            <li><i class="bi bi-check2-circle"></i> <span>De préserver l’environnement.</span></li>
          </ul>
        </div>

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <p>Pilotée par des professionnels formés, elle a été créée en 2013 sous le numéro du registre de commerce : R.C: SN DKR- 2013-A-10948 et NINEA: 004841468 1R1 par Monsieur Mbaye SYLLA, ex Adjudant Chef des Forces Armées Sénégalaises suite à ses études expériences acquises après plusieurs années (28 ans) de services actifs.... </p>
          <a href="{{ route('utilisateur.about') }}" class="read-more"><span>Lire la suite</span><i class="bi bi-arrow-right"></i></a>
        </div>

        </div>

      </div>

    </section><!-- /About Section -->
    <!-- Services Section -->
    <section id="services" class="services section" style="margin-top: -40px;">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>Ce que nous offrons</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="bi bi-cash-stack" style="color: #0dcaf0;"></i>
              </div>
              <a target="_blank" href="{{ route('utilisateur.security') }}" class="stretched-link">
                <h3>Sécurité</h3>
              </a>
              <p>
                SYPRESS SECURITE est composée essentiellement d’hommes et de femmes (agent de sécurité) ayant subi une formation militaire.Statique ou mobile, l’agent de sécurité est chargé de ......
              </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-calendar4-week" style="color: #fd7e14;"></i>
              </div>
              <a target="_blank" href="{{ route('utilisateur.environnement') }}" class="stretched-link">
                <h3>Environnement</h3>
              </a>
              <p>La prolifération de «Mbeubeuss» en miniature formées à chaque coin de rue, contribue dangereusement à la dégradation de l’environnement, engendre des problèmes de santé publique et influe négativement sur le tourisme....</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-chat-text" style="color: #20c997;"></i>
              </div>
              <a target="_blank" href="{{ route('utilisateur.transport') }}" class="stretched-link">
                <h3>Transport</h3>
              </a>
              <p>Dans le cadre de la mondialisation, les échanges, le développement du tourisme et le boom du e-commerce, le secteur du transport et de la logistique constituent les piliers de l’essor économique mondial....</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-credit-card-2-front" style="color: #df1529;"></i>
              </div>
              <a target="_blank" href="{{ route('utilisateur.negoce') }}" class="stretched-link">
                <h3>Négoce</h3>
              </a>
              <p>SYPRESS évolue également dans le secteur du Négoce qui est aussi l’un de ces secteurs prioritaires et est considéré comme outil d’aide à la prise de décision et observatoire de veille sur les tendances du marché....</p>
            </div>
          </div><!-- End Service Item -->


        </div>

      </div>

    </section><!-- /Services Section -->



    <!-- Pricing Section -->
    <section id="pricing" class="pricing section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Tarification</h2>
        <p>Ce qu'ils disent de nous</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-3">

          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing-item featured">
              <h3>Sécurité</h3>
              <h5>2000<span>/Mois</span></h5>
              <ul>
                <li>Service 1</li>
                <li>Service 2</li>
                <li>Service 3</li>
                <li>Service 4</li>
                <li>Service 5</li>
              </ul>
              <div class="btn-wrap">
                <a href="{{ route('utilisateur.contact.index') }}" class="btn-buy">Nous contacter</a>
              </div>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="pricing-item featured">
              <h3>Environnement</h3>
              <h5>2000<span>/Mois</span></h5>
              <ul>
                <li>Service 1</li>
                <li>Service 2</li>
                <li>Service 3</li>
                <li>Service 4</li>
                <li>Service 5</li>
              </ul>
              <div class="btn-wrap">
                <a href="{{ route('utilisateur.contact.index') }}" class="btn-buy">Nous contacter</a>
              </div>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="pricing-item featured">
              <h3>Transport</h3>
              <h5>2000<span>/Mois</span></h5>
              <ul>
                <li>Service 1</li>
                <li>Service 2</li>
                <li>Service 3</li>
                <li>Service 4</li>
                <li>Service 5</li>
              </ul>
              <div class="btn-wrap">
                <a href="{{ route('utilisateur.contact.index') }}" class="btn-buy">Nous contacter</a>
              </div>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="pricing-item featured">
              <span class="advanced">Advanced</span>
              <h3>Négoce</h3>
              <h5>2000<span>/Mois</span></h5>
              <ul>
                <li>Service 1</li>
                <li>Service 2</li>
                <li>Service 3</li>
                <li>Service 4</li>
                <li>Service 5</li>
              </ul>
              <div class="btn-wrap">
                <a href="{{ route('utilisateur.contact.index') }}" class="btn-buy">Nous contacter</a>
              </div>
            </div>
          </div><!-- End Pricing Item -->

        </div>

      </div>

    </section><!-- /Pricing Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Questions fréquemment posées</h2>
        <p>Questions fréquemment posées</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-12">
            <div class="custom-accordion" id="accordion-faq">
              <div class="accordion-item">
                <h2 class="mb-0">
                  <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-faq-1">
                    How to download and register?
                  </button>
                </h2>

                <div id="collapse-faq-1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion-faq">
                  <div class="accordion-body">
                    Far far away, behind the word mountains, far from the countries
                    Vokalia and Consonantia, there live the blind texts. Separated
                    they live in Bookmarksgrove right at the coast of the Semantics,
                    a large language ocean.
                  </div>
                </div>
              </div>
              <!-- .accordion-item -->

              <div class="accordion-item">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-faq-2" "="">
                How to create your paypal account?
              </button>
            </h2>
            <div id=" collapse-faq-2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion-faq">
                    <div class="accordion-body">
                      A small river named Duden flows by their place and supplies it
                      with the necessary regelialia. It is a paradisematic country, in
                      which roasted parts of sentences fly into your mouth.
                    </div>
              </div>
            </div>
            <!-- .accordion-item -->

            <div class="accordion-item">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-faq-3">
                  How to link your paypal and bank account?
                </button>
              </h2>

              <div id="collapse-faq-3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion-faq">
                <div class="accordion-body">
                  When she reached the first hills of the Italic Mountains, she
                  had a last view back on the skyline of her hometown
                  Bookmarksgrove, the headline of Alphabet Village and the subline
                  of her own road, the Line Lane. Pityful a rethoric question ran
                  over her cheek, then she continued her way.
                </div>
              </div>
            </div>
            <!-- .accordion-item -->

          </div>
        </div>
      </div>
      </div>
    </section><!-- /Faq Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>L'équipe</h2>
        <p>Notre équipe de travail</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="{{asset('user/assets/img/team/securite.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="{{asset('user/assets/img/team/env.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="{{asset('user/assets/img/team/transport.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="{{asset('user/assets/img/team/negoce.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->
@endsection