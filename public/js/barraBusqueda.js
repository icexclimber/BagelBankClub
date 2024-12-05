// Mostrar u ocultar la barra de búsqueda
document.getElementById("toggleSearch").addEventListener("click", () => {
    const searchBar = document.getElementById("searchBar");
    if (searchBar.classList.contains("hidden")) {
        searchBar.classList.remove("hidden");
        searchBar.classList.add("visible");
    } else {
        searchBar.classList.remove("visible");
        searchBar.classList.add("hidden");
    }
});
