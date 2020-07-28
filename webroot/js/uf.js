function highlightUFMG() {
    const rows = document.getElementsByClassName("local-row")

    for (var i = 0; i < rows.length; i++) {
        uf = rows[i].getElementsByClassName("uf")[0]

        if (uf.value === "MG") {
            rows[i].className = "uf-mg"
        }
    }
}

highlightUFMG()