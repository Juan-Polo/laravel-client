// formulario de grados
document.addEventListener("DOMContentLoaded", function () {
    document
        .getElementById("btnMostrarFormulario")
        .addEventListener("click", function () {
            document.getElementById("DivformularioDegrees").style.display =
                "block";
        });

    document
        .getElementById("btnCerrarFormulario")
        .addEventListener("click", function () {
            document.getElementById("DivformularioDegrees").style.display =
                "none";
        });
});
