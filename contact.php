<?php
  $pageTitle       = "Contact — Nom de la Société";
  $metaDescription = "Contactez-nous pour toute demande d'information ou devis.";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <?php include __DIR__ . '/includes/head.php'; ?>
</head>
<body>

  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>
    <div class="container contact__grid">

      <div class="contact__info">
        <span class="section__label">Parlons-nous</span>
        <h1 class="section__title">Contactez-nous</h1>
        <p>N'hésitez pas à nous écrire pour tout renseignement. Nous répondons sous 48h.</p>

        <ul class="contact__details">
          <li>
            <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
            <span>123 rue Example, 75000 Paris</span>
          </li>
          <li>
            <i class="fa-solid fa-phone" aria-hidden="true"></i>
            <a href="tel:+33100000000">+33 1 00 00 00 00</a>
          </li>
          <li>
            <i class="fa-solid fa-envelope" aria-hidden="true"></i>
            <a href="mailto:contact@societe.fr">contact@societe.fr</a>
          </li>
        </ul>
      </div>

      <form class="contact__form" id="contact-form" novalidate>
        <div class="form-group">
          <label for="name">Nom complet <span aria-hidden="true">*</span></label>
          <input type="text" id="name" name="name" placeholder="Jean Dupont" required>
        </div>

        <div class="form-group">
          <label for="email">Email <span aria-hidden="true">*</span></label>
          <input type="email" id="email" name="email" placeholder="jean@exemple.fr" required>
        </div>

        <div class="form-group">
          <label for="subject">Sujet</label>
          <input type="text" id="subject" name="subject" placeholder="Demande d'information">
        </div>

        <div class="form-group">
          <label for="message">Message <span aria-hidden="true">*</span></label>
          <textarea id="message" name="message" rows="5" placeholder="Votre message..." required></textarea>
        </div>

        <button type="submit" class="btn btn--primary btn--full">
          Envoyer le message
          <i class="fa-solid fa-paper-plane" aria-hidden="true"></i>
        </button>

        <p class="form__success" id="form-success" role="alert" hidden>
          ✅ Merci ! Votre message a bien été envoyé.
        </p>
      </form>

    </div>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>

</body>
</html>
