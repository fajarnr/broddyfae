document.addEventListener("DOMContentLoaded", function() {
    const searchContainer = document.querySelector(".search-container");
    const searchIcon = document.querySelector(".search-icon");
    const searchInput = document.querySelector(".search-input");

    searchIcon.addEventListener("click", function() {
        searchContainer.classList.add("active");
      setTimeout(() => searchInput.focus(), 300); // Fokus setelah animasi
    });

    document.addEventListener("click", function(e) {
        if (!searchContainer.contains(e.target)) {
        searchContainer.classList.remove("active");
        searchInput.value = "";
    }
    });
});