<?php
  $pageTitle       = "Accueil — Nom de la Société";
  $metaDescription = "Courte description de la société pour le référencement SEO.";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <?php include __DIR__ . '/includes/head.php'; ?>
</head>
<body>

  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>

    <!-- ==============================
         HERO
    ============================== -->
    <section class="hero">
      <div class="container hero__content">
        <span class="hero__label">Bienvenue chez</span>
        <h1 class="hero__title">Titre principal <em>accrocheur</em></h1>
        <p class="hero__subtitle">Phrase d'accroche courte et percutante qui résume ce que fait la société.</p>
        <div class="hero__actions">
          <a href="/PROJET-SOCIETE/pages/services.php" class="btn btn--primary">Nos services</a>

          <a href="/PROJET-SOCIETE/contact.php"        class="btn btn--outline">Nous contacter</a>
        </div>
      </div>
    </section>


    <!-- ==============================
         À PROPOS
    ============================== -->
    <section class="section" id="about">
      <div class="container about__grid">

        <div class="about__image">
          <img src="/assets/img/about.jpg" alt="Photo de l'équipe ou des locaux" loading="lazy">
        </div>

        <div class="about__text">
          <span class="section__label">Qui sommes-nous</span>
          <h2 class="section__title">Notre histoire</h2>
          <p>Texte de présentation de la société. Parler de l'histoire, des valeurs, de la mission.</p>
          <p>Deuxième paragraphe optionnel.</p>
          <ul class="about__values">
            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Valeur ou point fort 1</li>
            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Valeur ou point fort 2</li>
            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Valeur ou point fort 3</li>
          </ul>
        </div>

      </div>
    </section>


    <!-- ==============================
         SERVICES
    ============================== -->
    <section class="section section--alt" id="services">
      <div class="container">

        <div class="section__header">
          <span class="section__label">Ce que nous faisons</span>
          <h2 class="section__title">Nos services</h2>
          <p class="section__desc">Courte introduction sur les services proposés.</p>
        </div>

        <div class="cards-grid">
          <!-- Dupliquer .card selon les besoins -->
          <article class="card fade-in">
            <div class="card__icon"><i class="fa-solid fa-star" aria-hidden="true"></i></div>
            <h3 class="card__title">Service 1</h3>
            <p class="card__text">Description courte du service.</p>
          </article>

          <article class="card fade-in">
            <div class="card__icon"><i class="fa-solid fa-bolt" aria-hidden="true"></i></div>
            <h3 class="card__title">Service 2</h3>
            <p class="card__text">Description courte du service.</p>
          </article>

          <article class="card fade-in">
            <div class="card__icon"><i class="fa-solid fa-shield-halved" aria-hidden="true"></i></div>
            <h3 class="card__title">Service 3</h3>
            <p class="card__text">Description courte du service.</p>
          </article>
        </div>

      </div>
    </section>


    <!-- ==============================
         PORTFOLIO (optionnel)
         → Supprimer si non pertinent
    ============================== -->
    <section class="section" id="portfolio">
      <div class="container">

        <div class="section__header">
          <span class="section__label">Notre travail</span>
          <h2 class="section__title">Nos réalisations</h2>
        </div>

        <div class="portfolio-grid">
          <!-- Dupliquer .portfolio-item selon les besoins -->
          <figure class="portfolio-item fade-in">
            <img src="/assets/img/project-1.jpg" alt="Description du projet 1" loading="lazy">
            <figcaption class="portfolio-item__caption">
              <h3>Projet 1</h3>
              <p>Catégorie / type</p>
            </figcaption>
          </figure>

          <figure class="portfolio-item fade-in">
            <img src="/assets/img/project-2.jpg" alt="Description du projet 2" loading="lazy">
            <figcaption class="portfolio-item__caption">
              <h3>Projet 2</h3>
              <p>Catégorie / type</p>
            </figcaption>
          </figure>

          <figure class="portfolio-item fade-in">
            <img src="/assets/img/project-3.jpg" alt="Description du projet 3" loading="lazy">
            <figcaption class="portfolio-item__caption">
              <h3>Projet 3</h3>
              <p>Catégorie / type</p>
            </figcaption>
          </figure>
        </div>

      </div>
    </section>

  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>

</body>
</html>
