// formulario de grados
document.addEventListener("DOMContentLoaded", function () {
    document
        .getElementById("btnMostrarFormulario")
        .addEventListener("click", function () {
            document.getElementById("DivformularioDegrees").style.display =
                "flex";
        });

    document
        .getElementById("btnCerrarFormulario")
        .addEventListener("click", function () {
            document.getElementById("DivformularioDegrees").style.display =
                "none";
        });
});

/////////////////////////

// FORMULARIO ASIGNATURAS

////////////////////////

document.addEventListener("DOMContentLoaded", function () {
    document
        .getElementById("btnMostrarFormularioAsignatura")
        .addEventListener("click", function () {
            document.getElementById("DivFormAsignaturas").style.display =
                "block";
        });

    document
        .getElementById("btnCerrarFormularioAsignaturas")
        .addEventListener("click", function () {
            document.getElementById("DivFormAsignaturas").style.display =
                "none";
        });
});
