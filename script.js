document.addEventListener("DOMContentLoaded", function () {
    const dropdownTitles = document.querySelectorAll(".dropdown-title");

    dropdownTitles.forEach(title => {
        title.addEventListener("click", function () {
            const targetId = this.getAttribute("data-target");
            const targetContent = document.getElementById(targetId);
            const icon = this.querySelector("i");

            if (targetContent.classList.contains("show")) {
                targetContent.classList.remove("show");
                icon.classList.remove("rotated");
            } else {
                // Tutup semua sebelum membuka yang baru
                document.querySelectorAll(".dropdown-content").forEach(content => content.classList.remove("show"));
                document.querySelectorAll(".dropdown-title i").forEach(icon => icon.classList.remove("rotated"));

                targetContent.classList.add("show");
                icon.classList.add("rotated");
            }
        });
    });
});
