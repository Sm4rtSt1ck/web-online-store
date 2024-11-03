document.addEventListener("DOMContentLoaded", function() {
    const homeItems = document.querySelectorAll(".category");
    document.querySelector(".home").classList.add("visible");

    homeItems.forEach(item => {
        item.classList.add("visible");
    });
});
