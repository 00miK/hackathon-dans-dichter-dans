<?php
  $pageTitle       = "Events — Dans! Dichter! Dans!";
  $metaDescription = "Ontdek het komende DOGMA Spoken Word Festival op 11-12 juni in Gand. Programma, line-up en media.";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <?php include __DIR__ . '/../includes/head.php'; ?>
</head>
<body>

  <?php include __DIR__ . '/../includes/header.php'; ?>

  <main class="events-page">

    <!-- ===================================================
         HERO — Bannière événement
    =================================================== -->
    <section class="ev-hero">

      <!-- Blobs décoratifs roses (hors overflow du wrapper) -->
      <div class="ev-deco ev-deco--tr" aria-hidden="true"></div>
      <div class="ev-deco ev-deco--mr" aria-hidden="true"></div>

      <div class="ev-hero__wrapper">
        <img src="/PROJET-SOCIETE/assets/img/eventC.png" alt="Event hero" class="ev-hero__bg-img">
        <div class="ev-hero__overlay"></div>
        <div class="ev-hero__content">
          <span class="ev-hero__cursive">Event</span>
          <p class="ev-hero__info">DOGMA spoken Word Festival &nbsp;|&nbsp; 11 - 12 Juin &nbsp;·&nbsp; Gand</p>
          <a href="#event-detail" class="btn btn--hero">Bekijk het komende event</a>
        </div>
        <!-- M1 — à l'intérieur du wrapper, au-dessus de l'image -->
        <img class="ev-m-letter ev-m-letter--top"
             src="/PROJET-SOCIETE/assets/img/M_letter.png"
             alt="" aria-hidden="true">
      </div>
    </section>


    <!-- ===================================================
         TITRE PRINCIPAL
    =================================================== -->
    <section class="ev-title-section" id="event-detail">

      <!-- M2 — niveau titre DOGMA, bord droit -->
      <img class="ev-m-letter ev-m-letter--mid"
           src="/PROJET-SOCIETE/assets/img/M_letter.png"
           alt="" aria-hidden="true">

      <div class="container">
        <h1 class="ev-main-title">DOGMA Spoken Word Festival</h1>
        <p class="ev-main-meta">11 - 12 Juni &nbsp;·&nbsp; Gand</p>
      </div>
    </section>


    <!-- ===================================================
         OVER HET EVENEMENT  +  LINE-UP
    =================================================== -->
    <section class="ev-info-section">

      <!-- M3 — sous le line-up, bord droit, rotation 180° -->
      <img class="ev-m-letter ev-m-letter--bot"
           src="/PROJET-SOCIETE/assets/img/M_letter.png"
           alt="" aria-hidden="true">

      <div class="container ev-info-grid">

        <!-- Colonne gauche : description -->
        <div class="ev-about">
          <h2 class="ev-about__subtitle">Over het evenement</h2>
          <p class="ev-about__text">
            Dans! Dichter! Dans! is een platform waar spoken word centraal staat.
            We ondersteunen opkomende artiesten en geven hen een podium om hun
            verhalen te delen. Door middel van live performances, interviews en
            media bouwen we aan een gemeenschap waar woorden kracht krijgen.
          </p>
          <a href="/PROJET-SOCIETE/pages/about.php" class="btn btn--pink">Meer over ons</a>
        </div>

        <!-- Colonne droite : Line-Up -->
        <div class="ev-lineup">
          <h2 class="ev-lineup__title">Line-Up</h2>
          <div class="ev-lineup__photos">

            <div class="ev-lineup__photo-wrap">
              <img src="/PROJET-SOCIETE/assets/img/e3.png" alt="Artiest 1">
            </div>

            <div class="ev-lineup__photo-wrap">
              <img src="/PROJET-SOCIETE/assets/img/e4.png" alt="Artiest 2">
            </div>

            <div class="ev-lineup__photo-wrap">
              <img src="/PROJET-SOCIETE/assets/img/e5.png" alt="Artiest 3">
            </div>

          </div>
        </div>

      </div>
    </section>


    <!-- ===================================================
         MEDIA
    =================================================== -->
    <section class="ev-media-section">
      <div class="container">

        <span class="ev-media__cursive">Media</span>

        <div class="ev-media__grid">

          <!-- Colonne gauche : 2 vidéos YouTube superposées -->
          <div class="ev-media__videos">

            <div class="ev-media__video-wrap">
              <iframe
                src="https://www.youtube.com/embed/zvKhIGSS0Kw"
                title="Dans! Dichter! Dans! — Aftermovie 1"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
              </iframe>
            </div>

            <div class="ev-media__video-wrap">
              <iframe
                src="https://www.youtube.com/embed/zvKhIGSS0Kw"
                title="Dans! Dichter! Dans! — Aftermovie 2"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
              </iframe>
            </div>

          </div>

          <!-- Colonne droite : 2 images -->
          <div class="ev-media__images">

            <div class="ev-media__img-wrap">
              <img src="/PROJET-SOCIETE/assets/img/e2.jpeg" alt="Media foto 1">
            </div>

            <div class="ev-media__img-wrap">
              <img src="/PROJET-SOCIETE/assets/img/e1.jpeg" alt="Media foto 2">
            </div>

          </div>

        </div>
      </div>
    </section>

  </main>

  <?php include __DIR__ . '/../includes/footer.php'; ?>

</body>
</html>
