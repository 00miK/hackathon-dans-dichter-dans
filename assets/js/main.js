

/* ===== 1. NAVBAR ===== */
const navbar = document.getElementById("navbar");
if (navbar) {
  window.addEventListener("scroll", () => {
    navbar.classList.toggle("scrolled", window.scrollY > 50);
  });
}

/* ===== 2. BURGER MENU ===== */
const burger   = document.getElementById("burger-btn");
const navLeft  = document.querySelector(".navbar__left");
const navRight = document.querySelector(".navbar__right");

if (burger) {
  burger.addEventListener("click", () => {
    const isOpen = navLeft ? navLeft.classList.toggle("open") : false;
    if (navRight) navRight.classList.toggle("open", isOpen);
    burger.classList.toggle("active", isOpen);
    burger.setAttribute("aria-expanded", isOpen);
  });
  document.querySelectorAll(".navbar__link:not(.navbar__dropdown-btn)").forEach(link => {
    link.addEventListener("click", () => {
      if (navLeft) navLeft.classList.remove("open");
      if (navRight) navRight.classList.remove("open");
      burger.classList.remove("active");
      burger.setAttribute("aria-expanded", false);
    });
  });
}

/* ===== 3. DROPDOWN MEDIA ===== */
const dropdownBtn  = document.querySelector(".navbar__dropdown-btn");
const dropdownMenu = document.querySelector(".navbar__dropdown-menu");

if (dropdownBtn && dropdownMenu) {
  dropdownBtn.addEventListener("click", (e) => {
    e.stopPropagation();
    const isOpen = dropdownMenu.classList.toggle("open");
    dropdownBtn.setAttribute("aria-expanded", isOpen);
  });
  document.addEventListener("click", () => {
    dropdownMenu.classList.remove("open");
    dropdownBtn.setAttribute("aria-expanded", false);
  });
}



/* ===== 4. ANIMATIONS AU SCROLL ===== */
const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry, i) => {
    if (entry.isIntersecting) {
      setTimeout(() => entry.target.classList.add("visible"), i * 80);
      observer.unobserve(entry.target);
    }
  });
}, { threshold: 0.15 });

document.querySelectorAll(".fade-in").forEach(el => observer.observe(el));

const style = document.createElement("style");
style.textContent = ".fade-in { opacity: 0; transform: translateY(24px); transition: opacity 0.6s ease, transform 0.6s ease; } .fade-in.visible { opacity: 1; transform: translateY(0); }";
document.head.appendChild(style);

/* ===== 5. FORMULAIRE DE CONTACT ===== */
const form = document.getElementById("contact-form");
if (form) {
  form.addEventListener("submit", (e) => {
    e.preventDefault();
    const name    = document.getElementById("name").value.trim();
    const email   = document.getElementById("email").value.trim();
    const message = document.getElementById("message").value.trim();
    if (!name || !email || !message) { alert("Merci de remplir tous les champs."); return; }
    const emailOk = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    if (!emailOk) { alert("Adresse email invalide."); return; }
    form.reset();
    document.getElementById("form-success").hidden = false;
  });
}

/* ===== 6. ANNEE FOOTER ===== */
const yearEl = document.getElementById("year");
if (yearEl) yearEl.textContent = new Date().getFullYear();  