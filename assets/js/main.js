/* ===== 1. NAVBAR ===== */
const navbar = document.getElementById("navbar");
if (navbar) {
  window.addEventListener("scroll", () => {
    navbar.classList.toggle("scrolled", window.scrollY > 50);
  });
}

/* ===== 2. BURGER MENU ===== */
const burger     = document.getElementById("burger-btn");
const mobileMenu = document.getElementById("mobile-menu");

if (burger) {
  burger.addEventListener("click", () => {
    const isOpen = mobileMenu ? mobileMenu.classList.toggle("open") : false;
    if (mobileMenu) mobileMenu.setAttribute("aria-hidden", !isOpen);
    burger.classList.toggle("active", isOpen);
    burger.setAttribute("aria-expanded", isOpen);
  });
  if (mobileMenu) {
    mobileMenu.querySelectorAll("a").forEach(link => {
      link.addEventListener("click", () => {
        mobileMenu.classList.remove("open");
        mobileMenu.setAttribute("aria-hidden", true);
        burger.classList.remove("active");
        burger.setAttribute("aria-expanded", false);
      });
    });
  }
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

/* ===== 5. FORMULAIRE DE CONTACT — Formspree ===== */
const form = document.getElementById("contact-form");
if (form) {
  form.addEventListener("submit", async (e) => {
    e.preventDefault();
    const data     = new FormData(form);
    const response = await fetch(form.action, {
      method: "POST",
      body: data,
      headers: { "Accept": "application/json" }
    });
    if (response.ok) {
      form.reset();
      const success = document.getElementById("form-success");
      if (success) success.hidden = false;
    } else {
      alert("Er is een fout opgetreden. Probeer het opnieuw.");
    }
  });
}

/* ===== 6. ANNEE FOOTER ===== */
const yearEl = document.getElementById("year");
if (yearEl) yearEl.textContent = new Date().getFullYear();