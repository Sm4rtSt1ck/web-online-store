document.addEventListener("DOMContentLoaded", function() {
    const contactItems = document.querySelectorAll(".contact-item");

    function onScroll() {
        contactItems.forEach(item => {
            const rect = item.getBoundingClientRect();
            if (rect.top < window.innerHeight - 100) {
                item.classList.add("visible");
            }
        });
    }

    window.addEventListener("scroll", onScroll);
    onScroll();
});
