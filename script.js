document.addEventListener("DOMContentLoaded", () => {
    let currentPage = window.location.pathname.split("/").pop();

    // Se estiver vazio (caso da home)
    if (currentPage === "") {
        currentPage = "index.html";
    }

    // Remove possível extensão .html
    currentPage = currentPage.replace(".html", "");

    const links = document.querySelectorAll(".menu-link");

    links.forEach(link => {
        let linkHref = link.getAttribute("href");

        // Remove barra inicial
        linkHref = linkHref.replace("/", "");

        // Remove .html
        linkHref = linkHref.replace(".html", "");

        if (linkHref === currentPage) {
            link.classList.add("active");
        }
    });
});

const ranges = document.querySelectorAll(".orcamento-range");

ranges.forEach(range => {

    function updateRange() {
        const percent = (range.value - range.min) / (range.max - range.min) * 100;

        range.style.background = `
            linear-gradient(
                to right,
                #4ade80 0%,
                #4ade80 ${percent}%,
                rgba(255,255,255,0.08) ${percent}%,
                rgba(255,255,255,0.08) 100%
            )
        `;
    }

    updateRange();
});

const modal = document.querySelector(".modal");
const openModalBtn = document.querySelector(".transaction_filter_container button");
const closeModalBtn = document.querySelector(".close_modal");

openModalBtn.addEventListener("click", function (e) {
    modal.style.display = "flex";
    document.body.style.overflow = "hidden";

    // Pequeno delay para o navegador perceber a mudança de display
    setTimeout(() => {
        modal.style.opacity = "1";
    }, 80);
});

closeModalBtn.addEventListener("click", function (e) {
    modal.style.display = "none";
    modal.style.opacity = "0.5";
    document.body.style.overflow = "auto";
});

const rows = document.querySelectorAll(".transactions-table tbody tr");
const rowsPerPage = 4;

let currentPage = 1;
const totalPages = Math.ceil(rows.length / rowsPerPage);

const prevBtn = document.getElementById("prevPage");
const nextBtn = document.getElementById("nextPage");
const pageInfo = document.getElementById("pageInfo");

function showPage(page) {
    rows.forEach((row, index) => {
        row.style.display =
            index >= (page - 1) * rowsPerPage &&
                index < page * rowsPerPage
                ? ""
                : "none";
    });

    pageInfo.textContent = `${page} de ${totalPages}`;

    prevBtn.disabled = page === 1;
    nextBtn.disabled = page === totalPages;
}

prevBtn.addEventListener("click", () => {
    if (currentPage > 1) {
        currentPage--;
        showPage(currentPage);
    }
});

nextBtn.addEventListener("click", () => {
    if (currentPage < totalPages) {
        currentPage++;
        showPage(currentPage);
    }
});

showPage(currentPage);