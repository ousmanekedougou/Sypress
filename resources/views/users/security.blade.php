@extends('users.layouts.app',['title' => 'sécurité'])
<style>
  li{
    list-style-type: none;
    padding: 2px;
  }
</style>
@section('main-content')
<!-- Page Title -->
    <div class="page-title dark-background">
      <div class="container position-relative">
        <h1>Sypress Sécurité</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('utilisateur.index') }}">Acceuil</a></li>
            <li class="current">sécurité</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->
    <!-- Contact Section -->
    <section id="security" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Sypress</h2>
        <p>Domaine de la sécurité</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade" data-aos-delay="100">

      <div class="row">
        <div class="col-lg-6">
          <p class="fst-italic">
            Sypress sécurité SYPRESS SECURITE est composée essentiellement d’hommes et de femmes (agent de sécurité) ayant subi une formation militaire.
          </p>
          <p class="fst-italic">
            Statique ou mobile, l’agent de sécurité est chargé :
            D’assurer la protection de vos biens ; la sécurité des personnes, d’une entreprise, d’un entrepôt, d’un événement ou d’un domicile entre autres.
          </p>
          <p class="fst-italic">
            Les Interventions s'effectuent dans les plus brefs délais par un agent pour effectuer une levée de doute et gérer un éventuel événement réel, en alertant si nécessaire les forces de l'ordre, sapeurs pompiers.
          </p>
          <p class="fst-italic">
            Notre société de gardiennage s'associe à vous dans un strict respect éthique et des normes sécuritaires pour combattre et prévenir toute malveillance vis à vis de vos biens et personnels.
          </p>
          <p class="fst-italic">
            Pour répondre à ces exigences, des hommes et femmes sont soigneusement recrutés pour une qualité de prestation irréprochable.
          </p>
          <p class="fst-italic">
            Pour SYPRESS SECURITE : la meilleure protection passe par la prévention des “situations de crise” et par la souplesse des interventions plutôt que par le déploiement d’une force aveugle et donc, impuissante.
          </p>


          

          
          
        </div>

        <div class="col-lg-6">
          <img src="{{asset('user/assets/img/team/securite.jpg')}}" alt="" class="img-fluid">
        </div>

        <div class="col-lg-6">
        <h6>Avant chaque intervention, SYPRESS SECURITE réalise un diagnostic pour :</h6>
          <ul>
            <li><i class="bi bi-check2-all"></i>
              <spab>Identifier, hiérarchiser et étudier les risques </spab>
            </li>
            <li><i class="bi bi-check2-all"></i> <span>Repérer les vecteurs d’insécurité</span>.</li>
            <li><i class="bi bi-check2-all"></i> <span> Déterminer les procédures d’interventions conformément à la réglementation du site ou de l’entreprise préalablement établie.</span></li>
            <li><i class="bi bi-check2-all"></i> <span>Renforcer les éléments qui participent à une meilleure prévention et une meilleure sécurité</span>.</li>
          </ul>
          <p>
            Cette méthode vise à appréhender les problèmes dans leur globalité en fonction du contexte d’intervention et des objectifs

              fixés. Elle permet de faciliter “in situ” les interventions discrètes, de diminuer les causes de conflit et de mieux neutraliser

              les facteurs de risques.

              SYPRESS SECURITE, dans le cadre de la surveillance, décline pour le client toutes activités et techniques de sûreté que

              sont : <br> Surveillance gardiennage – Surveillance statique des lieux  sites – parkings – entrepôts – magasins – Contrôle des

            accès – Rondes à vue – Alarme / Télésurveillance – Sécurité Incendie – Accueil / Réception.
          </p>
        </div>

        <div class="col-lg-6">
        <h6>Ainsi, SYPRESS SECURITE est articulée en trois(03) sections :</h6>
          <ul>
            <li><i class="bi bi-check2-all"></i>
              <spab>Identifier, hiérarchiser et étudier les risques </spab>
            </li>
            <li><i class="bi bi-check2-all"></i> <span>GARDIENNAGE : Mise à disposition de gardien de sécurité fiable, autonome et compétent.</span>.</li>
            <li><i class="bi bi-check2-all"></i> <span> ESCORTE – PROTECTION RAPPROCHEE : Mise à disposition de garde du corps formé et entraîné pour assurer la protection d’autorités et personnalités.</span></li>
            <li><i class="bi bi-check2-all"></i> <span>
              SURVEILLANCE : La surveillance humaine regroupe les activités de surveillance et de prévention nécessitant la

              présence d’un agent de sécurité sur les lieux à surveiller. Les activités de surveillance humaine sont composées de

              gardiennage et d’interventions sur alarmes de sécurité ou d’incendie. Nous intervenons également dans les

              sytèmes d’alarme et télésurveillance
            </span>.</li>
          </ul>
        </div>

      </div>

      </div>

    </section><!-- /Contact Section -->
@endsection