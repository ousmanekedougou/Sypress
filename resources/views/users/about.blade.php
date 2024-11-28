@extends('users.layouts.app',['title' => 'a-propos'])
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
        <h1>Sypress A-propos</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('utilisateur.index') }}">Acceuil</a></li>
            <li class="current">A Propos</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->
    <!-- Contact Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>A propos de</h2>
        <p>Qui sommes-nous ?</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p>
              SYPRESS (Synergie Prestataire Services) est une structure de prestation de services, essentiellement composée de jeunes filles et d’hommes issus des rangs militaires et paramilitaires, qui excelle dans la sécurité, le nettoiement et l’exploitation d’espaces verts.
            </p>
            <p>
            Pilotée par des professionnels formés, elle a été créée en 2013 sous le numéro du registre de commerce : R.C: SN DKR- 2013-A-10948 et NINEA: 004841468 1R1 par Monsieur Mbaye SYLLA, ex Adjudant Chef des Forces Armées Sénégalaises suite à ses études expériences acquises après plusieurs années (28 ans) de services actifs.
            </p>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <p>
              Autorisée à exercer les services de gardiennage, surveillance, escorte et transfert de fonds suivant l’arrêté ministériel n° 02746 du16 février 2017 et de nettoiement n° 0374/MSAS/SNH/DLC du 15 Mai 2017

              IMPLANTATION : initialement implantée à F21, Scat Urbam, Grand Yoff à Dakar-Sénégal, elle a actuellement transféré ses locaux à Thiès au quartier Parcelles Assainies Unité1 Villa n°2 face Poste Police.
            </p>
            <p>
              CHAMP D’ACTIONS : SYPRESS intervient sur l’ensemble du territoire national et se projette dans un avenir d’élargir ses activités sur l’international.
            </p>
          </div>

          <div class="row container section-title" data-aos="fade-up">
            <p>Nos objectifs</p>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
              <ul>
                <li><i class="bi bi-check2-circle"></i> <span> Accompagner l’état dans sa politique d’emploi, d’insertion et de réinsertion</span></li>
                <li><i class="bi bi-check2-circle"></i> <span>Promouvoir le statut social des membres des forces de sécurité (armée, gendarmerie, police, sapeur pompiers, douanes eaux et forets entre autres) libérés, retraités médicalement et physiquement aptes, et jouissant d’une bonne</span></li>
                
              </ul>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
              <ul>
                <li><i class="bi bi-check2-circle"></i> <span>Lutter contre le chômage corrélatif à l’insécurité.</span></li>
                <li><i class="bi bi-check2-circle"></i> <span>Préserver l’environnement.</span></li>
              </ul>
            </div>
          </div><!-- End Section Title -->

        </div>

      </div>

    </section><!-- /About Section -->

    <section id="transport" class="contact section" style="margin-top: -60px;">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Sypress</h2>
        <p>MOT DU DIRECTEUR</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade" data-aos-delay="100">

      <div class="row">
        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
          <p class="fst-italic">
            En effet, l’insécurité et l’insalubrité constituent les malheurs publics les plus perceptibles au Sénégal. Leur recrudescence est si manifeste qu’elle a atteint des proportions inquiétantes comme en attestent les incidents de ces derniers jours interpellant ainsi l’état en premier chef d’une part et de la société d’autre part.

            Ensuite pour la sécurité, au Sénégal, chaque jour, plus de mille (1000) interventions sont effectuées par les services de police, de gendarmerie et de sapeurs pompiers, soit une intervention presque toutes les quatre vingt dix (90) secondes environ. On dénombre également plus de cent mille (100 000) cambriolages par an soit : Une (01) effraction toutes les 05’15’’.
          </p>
          <p class="fst-italic">
            Et, les métiers de la sécurité et de la protection ne peuvent s’improviser. La sécurité est une facette de la sûreté. Notre organisation utilise les modèles institutionnels publics et militaires. Elle nécessite d’être pluridisciplinaire et d’articuler les compétences autour de collaborateurs spécialisés mais complémentaires. Elle possède une constante essentielle qui est l’évaluation d’une situation ou d’un risque par la mise en relief du volet formation d’où la création d’un institut de formation de sécurité presque inexistant au Sénégal.
            Ces temps, on assiste à beaucoup d’immeubles qui s’écroulent sous l’effet d’ignorance les plus élémentaires de la sécurité car construire et aménager un immeuble, une entreprise, un hall d’exposition, un local commercial, nécessite une analyse des différentes composantes de sécurité en tenant compte des contraintes réglementaires, techniques et humaines.
          </p>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 text-center">
          <img src="{{ asset('user/assets/img/team/dg.jpg') }}" alt="" class="img-fluid">
          <h6 class="mt-3">Mr Mbaye SYLLA</h6>
          <p>Administrateur SYNERGIE PRESTATAIRE SERVICES SYPRESS</p>
        </div>
      </div>

      <div class="row">
      <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
          <p class="fst-italic">
              Il est rare également, qu’une entreprise, ses dirigeants, ne soient pas confrontés aux problèmes d’intrusions, de sabotages (internes ou externes) et aux tentatives d’agression. Nous pensons qu’il est nécessaire, pour pérenniser votre activité et gérer les risques inhérents à celle-ci, de procéder à une phase d’étude technique, indispensable avant la mise en place d’un plan de sécurité par les cabinets d’études et de conseils.
              Le titre du premier rapport du bureau des Nations Unies pour l’Afrique de L’Ouest intitulé « Chômage des jeunes et insécurité régionale en Afrique de l’Ouest » met en relief la corrélation entre le chômage et l’insécurité.
            </p>
        </div>

        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
          <p class="fst-italic">
            Sur ce, SYPRESS entend jouer activement sa partition dans la sécurité, le nettoiement, le transport, le négoce entre autres en vue de participer :
          </p>
          <ul>
            <li><i class="bi bi-check2-all"></i>
              <spab> à l’instauration de la sécurité ; </spab>
            </li>
            <li><i class="bi bi-check2-all"></i> <span>A la préservation de l’environnement.</span></li>
            <li><i class="bi bi-check2-all"></i> <span>A la mobilité du personnel</span></li>
            <li><i class="bi bi-check2-all"></i> <span>A la formation professionnelle en sécurité</span></li>
            <li><i class="bi bi-check2-all"></i> <span>Aux échanges commerciaux</span></li>
            <li><i class="bi bi-check2-all"></i> <span>Et surtout de lutter contre le chômage corolaire à l’insécurité</span></li>
          </ul>
        </div>
        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
          <p class="fst-italic"> Pour l’insalubrité, la prolifération de «Mbeubeuss» en miniature formées à chaque coin de rue, contribue dangereusement à la dégradation de l’environnement, engendre des problèmes de santé publique et influe négativement sur le tourisme. Et ce, malgré l’engagement et l’investissement de beaucoup de milliards que l’état mette dans les contrats avec les structures spécialisées (AMA, VEOLIA, UCG).
          L’intervention aussi des charretiers dans le cadre de l’évacuation des ordures ménagères aux frais de la population jusque là allouée à la Municipalité encourage la mise en place de ces structures spécialisées tantôt citées.  
        </p>
        </div>
        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
          <p class="fst-italic">
            « La sécurité est un métier, c'est notre métier de plus de 28 ans d’expérience. »
            « Vous ne confieriez jamais vos enfants au premier venu, pour la sécurité c'est du même ressort. »

            Avec SYPRESS, ne démultipliez plus vos démarches, vous pouvez bénéficier de la polyvalence d’un unique interlocuteur. Nos services s’adressent aux particuliers et professionnels : (commerces, bureaux, gestionnaires d’immeubles, etc.). Implantés à Thiès, nous intervenons sur toute l’étendue du pays et projetons à l’avenir nos actions et services à l’étranger.
          </p>
        </div>
      </div>

      </div>

    </section><!-- /Contact Section -->
@endsection