function toggleMenu() {
    document.getElementById('navMenu').classList.toggle('active');
}

const scrollContent = document.querySelector(".scroll-content");
const bio = document.querySelector("#bio");
const contact = document.querySelector("#contact");
const links = document.querySelectorAll(".top-menu a");

// Update active saat scroll
scrollContent.addEventListener("scroll", () => {
  let scrollTop = scrollContent.scrollTop;

  if (scrollTop >= contact.offsetTop - 100) {
    setActive("contact");
  } else {
    setActive("bio");
  }
});

// Klik smooth + langsung active
links.forEach(link => {
  link.addEventListener("click", e => {
    e.preventDefault();
    const targetId = link.getAttribute("href");
    const target = document.querySelector(targetId);

    scrollContent.scrollTo({
      top: target.offsetTop,
      behavior: "smooth"
    });

    setActive(targetId.replace("#", ""));
  });
});

// Helper ubah active
function setActive(section) {
  links.forEach(link => link.classList.remove("active"));
  document.querySelector(`.top-menu a[href="#${section}"]`).classList.add("active");
}