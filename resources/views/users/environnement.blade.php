@extends('users.layouts.app',['title' => 'environnement'])
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
        <h1>Sypress Environnement</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('utilisateur.index') }}">Acceuil</a></li>
            <li class="current">environnement</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->
    <!-- Contact Section -->
    <section id="environnement" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Sypress</h2>
        <p>Domaine de l'environnement</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade" data-aos-delay="100">

      <div class="row">
        <div class="col-lg-6">
          <p class="fst-italic">
            La prolifération de «Mbeubeuss» en miniature formées à chaque coin de rue, contribue dangereusement à la dégradation
            de l’environnement, engendre des problèmes de santé publique et influe négativement sur le tourisme. 
          </p>
          <p class="fst-italic">
            Et ce, malgré

            l’engagement et l’investissement de beaucoup de milliards que l’état mette dans les contrats avec les structures

            spécialisées (AMA, VEOLIA, UCG).
          </p>
          <p class="fst-italic">
            L’intervention aussi des charretiers dans le cadre de l’évacuation des ordures ménagères aux frais de la population jusque

            là allouée à la Municipalité encourage la mise en place de ces structures spécialisées tantôt citées.
          </p>
          <p class="fst-italic">

            <h6>ENVIRONNEMENT (NETTOIEMENT – ENTRETIEN & DECORATION) :</h6>

            La propreté et l’évacuation des déchets humains sont nécessaires à une bonne santé. 
          </p>
          <p class="fst-italic">  
            Si l’on ne s’en occupe pas d’une

            manière professionnelle et sécurisée, elles peuvent polluer l’environnement et provoquer de graves problèmes de santé.
          </p>
        </div>
        <div class="col-lg-6">
          <img src="{{asset('user/assets/img/team/env.jpg')}}" alt="" class="img-fluid">
        </div>
        <div class="col-lg-6">
          <h6>SYPRESS ENVIRONNEMENT :</h6>
          <p class="fst-italic">
            Grâce à son action préventive sur la population et efficace sur l’assainissement, est à votre service en vous proposant ses prestations ci-dessous.
          </p>
          <ul>
            <li><i class="bi bi-check2-all"></i>
              <spab>Identifier, hiérarchiser et étudier les risques </spab>
            </li>
            <li><i class="bi bi-check2-all"></i> <span>Nettoyage et Lessivage des surfaces</span>.</li>
            <li><i class="bi bi-check2-all"></i> <span> Nettoyage des intérieurs / extérieurs.</span></li>
            <li><i class="bi bi-check2-all"></i> <span>Nettoyage de printemps, remise en état après travaux ... remise en état après réception, après dégâts des eaux (inondation)...</span>.</li>
          </ul>
        </div>
        <div class="col-lg-6">
          <p>
            Que vous soyez une industrie, entreprise privée ou publique, école, crèche, mairie ou association, SYPRESS

            ENVIRONNEMENT vous apporte le meilleur de ses prestations pour vous rendre un résultat impeccable. Nous faisons

            également la remise en état après la construction d'une maison ou d'un immeuble.
          </p>
          <ul>
            <li><i class="bi bi-check2-all"></i>
              <spab>Une solution globale pour les gestionnaires de sites.</spab>
            </li>
            <li><i class="bi bi-check2-all"></i> <span>Entretien quotidien de vos bureaux, locaux.</span></li>
            <li><i class="bi bi-check2-all"></i> <span> Intervention urgente pour un dégât des eaux.</span></li>
            <li><i class="bi bi-check2-all"></i> <span>Débouchage de vide-ordure </span></li>
            <li><i class="bi bi-check2-all"></i> <span>Dératisation et désinfection de vos domiciles </span></li>
            <li><i class="bi bi-check2-all"></i> <span>Remplacement au pied levé d’un gardien, d’un ouvrier d’entretien </span></li>
            <li><i class="bi bi-check2-all"></i> <span>Rénovation et décoration d’un appartement </span></li>
            <li><i class="bi bi-check2-all"></i> <span>Un nettoyage impeccable après chacun de nos passages. </span></li>
          </ul>
        </div>
      </div>

      </div>

    </section><!-- /Contact Section -->
@endsection