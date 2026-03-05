<?php
  $pageTitle       = "Contact — Dans! Dichter! Dans!";
  $metaDescription = "Neem contact met ons op voor vragen over ons programma, een samenwerking, of gewoon hallo zeggen.";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <?php include __DIR__ . '/includes/head.php'; ?>
</head>
<body>

  <?php include __DIR__ . '/includes/header.php'; ?>

  <main class="contact-page">

    <!-- Formes abstraites roses en arrière-plan -->
    <div class="contact-blob contact-blob--tl" aria-hidden="true"></div>
    <div class="contact-blob contact-blob--br" aria-hidden="true"></div>

    <!-- Lettre C décorative — côté droit, sous le contenu -->
    <img class="c-letter"
         src="/PROJET-SOCIETE/assets/img/C_lettre.png"
         alt="" aria-hidden="true">

    <div class="container contact__grid">

      <!-- ===== COLONNE GAUCHE ===== -->
      <div class="contact__info">

        <h1 class="contact__title">Contact</h1>

        <p class="contact__desc">
          Vragen over ons programma, een
          samenwerking, of gewoon hallo zeggen?
          <strong>We horen graag van je.</strong>
        </p>

        <div class="contact__details">

          <div class="contact__detail-item">
            <div class="contact__icon-wrap">
              <i class="fa-regular fa-envelope" aria-hidden="true"></i>
            </div>
            <div>
              <p class="contact__detail-label">E-mailadres</p>
              <a href="mailto:info@dansdichterdans.be" class="contact__detail-value">
                info@dansdichterdans.be
              </a>
            </div>
          </div>

          <div class="contact__detail-item">
            <div class="contact__icon-wrap">
              <i class="fa-solid fa-phone" aria-hidden="true"></i>
            </div>
            <div>
              <p class="contact__detail-label">Telefoonnummer</p>
              <a href="tel:+32488868211" class="contact__detail-value">
                +32 488 86 82 11
              </a>
            </div>
          </div>

        </div>
      </div>

      <!-- ===== COLONNE DROITE — FORMULAIRE ===== -->
      <div class="contact__form-card">
        <form id="contact-form" action="https://formspree.io/f/xeelyywe" method="POST" novalidate>

          <div class="form-row">
            <div class="form-group">
              <label for="naam">Naam<span>*</span></label>
              <input type="text" id="naam" name="naam" placeholder="Joe doe" required>
            </div>
            <div class="form-group">
              <label for="voornaam">Voornaam<span>*</span></label>
              <input type="text" id="voornaam" name="voornaam" placeholder="Radie" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label for="email">E-Mailadres<span>*</span></label>
              <input type="email" id="email" name="email" placeholder="Joe.radie@gmail.com" required>
            </div>
            <div class="form-group">
              <label for="telefoon">Telefoonnummer</label>
              <input type="tel" id="telefoon" name="telefoon" placeholder="+ 123 467 890">
            </div>
          </div>

          <div class="form-group">
            <label for="bericht">Bericht<span>*</span></label>
            <textarea id="bericht" name="bericht" rows="5" placeholder="Uw bericht" required></textarea>
          </div>

          <button type="submit" class="btn-verzenden">Verzenden</button>
          <p id="form-success" hidden style="color:green; margin-top:1rem;">✓ Bericht verzonden! We nemen snel contact met je op.</p>

        </form>
      </div>

    </div>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>

</body>
</html>