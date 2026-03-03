<?php
  $pageTitle       = "Accueil — Dans! Dichter! Dans!";
  $metaDescription = "DDD brengt spoken word tot leven met live events en performances.";
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
         HERO — Vidéo YouTube
    ============================== -->
    <section class="hero">
      <div class="hero__video-wrapper">
        <iframe
          id="hero-video"
          src="https://www.youtube.com/embed/zvKhIGSS0Kw?autoplay=1&mute=1&loop=1&playlist=zvKhIGSS0Kw&controls=0&showinfo=0&rel=0&modestbranding=1&playsinline=1"
          title="Hero background video"
          frameborder="0"
          allow="autoplay; encrypted-media"
          allowfullscreen>
        </iframe>
        <div class="hero__overlay"></div>
        <div class="hero__content">
          <h1 class="hero__title">Waar woorden het<br>podium vinden.</h1>
          <p class="hero__subtitle">DDD brengt spoken word tot leven<br>met live events en performances.</p>
          <a href="/PROJET-SOCIETE/pages/events.php" class="btn btn--hero">Bekijk het komende event</a>
        </div>
      </div>
    </section>


    <!-- ==============================
         À PROPOS
    ============================== -->
    <section class="section about" id="about">
      <div class="container about__content">
        <h2 class="about__title">Over Dans! Dichter! Dans!</h2>
        <p class="about__text">Dans! Dichter! Dans! is een platform waar spoken word centraal staat. We ondersteunen opkomende artiesten en geven hen een podium om hun verhalen te delen.</p>
        <p class="about__text">Door middel van live performances, interviews en media bouwen we aan een gemeenschap waar woorden kracht krijgen.</p>
        <a href="/PROJET-SOCIETE/pages/about.php" class="btn btn--pink">Meer over ons</a>
      </div>
    </section>


    <!-- ==============================
         KOMENDE EVENTS
    ============================== -->
    <section class="section events" id="events">
      <div class="container">
        <div class="events__header">
          <h2 class="events__title">Komende events</h2>
          <a href="/PROJET-SOCIETE/pages/events.php" class="btn btn--pink">Meer over ons</a>
        </div>
        <div class="events__grid">

          <article class="event-card fade-in">
            <div class="event-card__img">
              <img src="/PROJET-SOCIETE/assets/img/event-placeholder.jpg" alt="Dans! Dichter! Dans! 2026">
            </div>
            <div class="event-card__body">
              <h3 class="event-card__title">Dans! Dichter! Dans! 2026</h3>
              <p class="event-card__meta"><i class="fa-regular fa-calendar"></i> 12 maart 2026</p>
              <p class="event-card__meta"><i class="fa-solid fa-location-dot"></i> Brussel</p>
              <p class="event-card__desc">Een avond vol spoken word, performance en nieuwe stemmen.</p>
            </div>
          </article>

          <article class="event-card fade-in">
            <div class="event-card__img">
              <img src="/PROJET-SOCIETE/assets/img/event-placeholder.jpg" alt="Dans! Dichter! Dans! 2026">
            </div>
            <div class="event-card__body">
              <h3 class="event-card__title">Dans! Dichter! Dans! 2026</h3>
              <p class="event-card__meta"><i class="fa-regular fa-calendar"></i> 12 maart 2026</p>
              <p class="event-card__meta"><i class="fa-solid fa-location-dot"></i> Brussel</p>
              <p class="event-card__desc">Een avond vol spoken word, performance en nieuwe stemmen.</p>
            </div>
          </article>

          <article class="event-card fade-in">
            <div class="event-card__img">
              <img src="/PROJET-SOCIETE/assets/img/event-placeholder.jpg" alt="Dans! Dichter! Dans! 2026">
            </div>
            <div class="event-card__body">
              <h3 class="event-card__title">Dans! Dichter! Dans! 2026</h3>
              <p class="event-card__meta"><i class="fa-regular fa-calendar"></i> 12 maart 2026</p>
              <p class="event-card__meta"><i class="fa-solid fa-location-dot"></i> Brussel</p>
              <p class="event-card__desc">Een avond vol spoken word, performance en nieuwe stemmen.</p>
            </div>
          </article>

          <article class="event-card fade-in">
            <div class="event-card__img">
              <img src="/PROJET-SOCIETE/assets/img/event-placeholder.jpg" alt="Dans! Dichter! Dans! 2026">
            </div>
            <div class="event-card__body">
              <h3 class="event-card__title">Dans! Dichter! Dans! 2026</h3>
              <p class="event-card__meta"><i class="fa-regular fa-calendar"></i> 12 maart 2026</p>
              <p class="event-card__meta"><i class="fa-solid fa-location-dot"></i> Brussel</p>
              <p class="event-card__desc">Een avond vol spoken word, performance en nieuwe stemmen.</p>
            </div>
          </article>

        </div>
      </div>
    </section>


    <!-- ==============================
         IMPACT IN CIJFERS
    ============================== -->
    <section class="section impact" id="impact">
      <div class="container">
        <h2 class="impact__title">
          Onze <em class="impact__accent">impact</em> in cijfers
        </h2>
        <div class="impact__grid">
          <div class="impact__stat">
            <span class="impact__number">10+</span>
            <span class="impact__label">Edities georganiseerd</span>
          </div>
          <div class="impact__divider"></div>
          <div class="impact__stat">
            <span class="impact__number">150+</span>
            <span class="impact__label">Artiesten op het podium</span>
          </div>
          <div class="impact__divider"></div>
          <div class="impact__stat">
            <span class="impact__number">1000+</span>
            <span class="impact__label">Bezoekers</span>
          </div>
          <div class="impact__divider"></div>
          <div class="impact__stat">
            <span class="impact__number">5</span>
            <span class="impact__label">Jaar actief</span>
          </div>
        </div>
      </div>
    </section>

  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>

</body>
</html>