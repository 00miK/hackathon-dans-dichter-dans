# Dans! Dichter! Dans!

Site vitrine pour **Dans! Dichter! Dans! (DDD)**, un collectif belge dédié au spoken word. La plateforme présente les events, les artistes et les performances de la compagnie.

---

## Structure du projet

```
PROJET-SOCIETE/
├── index.php               # Page d'accueil
├── contact.php             # Page de contact
├── pages/
│   ├── about.php           # À propos
│   ├── events.php          # Agenda des events
│   └── archives.php        # Archives
├── includes/
│   ├── head.php            # Balises <head> communes
│   ├── header.php          # Navigation
│   └── footer.php          # Pied de page
└── assets/
    ├── css/                # Feuilles de style (par page + variables)
    ├── js/                 # Scripts JavaScript
    ├── img/                # Images
    ├── fonts/              # Polices locales
    └── svg/                # Icônes SVG
```

## Technologies

- **PHP** — templates et includes
- **HTML5 / CSS3** — mise en page responsive
- **JavaScript** — interactions front-end
- **FontAwesome 6** — iconographie
- **XAMPP** — serveur local (Apache + PHP)

## Installation locale

1. Cloner le dépôt dans le dossier `htdocs` de XAMPP :
   ```bash
   git clone <url-du-repo> C:/xampp/htdocs/PROJET-SOCIETE
   ```

2. Démarrer Apache via le panneau de contrôle XAMPP.

3. Ouvrir dans le navigateur :
   ```
   http://localhost/PROJET-SOCIETE/
   ```

## Pages

| Page | URL |
|------|-----|
| Accueil | `/PROJET-SOCIETE/` |
| À propos | `/PROJET-SOCIETE/pages/about.php` |
| Events | `/PROJET-SOCIETE/pages/events.php` |
| Archives | `/PROJET-SOCIETE/pages/archives.php` |
| Contact | `/PROJET-SOCIETE/contact.php` |

---

lien Canva : https://www.canva.com/design/DAHC_WIXwlo/w1NHktuB8TaSlnzOL6fpnw/edit?utm_content=DAHC_WIXwlo&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton