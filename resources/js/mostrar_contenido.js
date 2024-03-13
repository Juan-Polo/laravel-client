function Mostrar_Tareas() {
    document.getElementById("div_tareas").style.display = "flex";
    document.getElementById("button_tareas").style.backgroundColor = "white";
    document.getElementById("button_tareas").style.border = "solid 2px #f19721";

    Ocultar_Chat();
    Ocultar_pdf();
    Ocultar_Horario();
}

function Ocultar_Tareas() {
    document.getElementById("div_tareas").style.display = "none";
    document.getElementById("button_tareas").style.backgroundColor = "#f19721";
    document.getElementById("button_tareas").style.border = "solid 2px black";
}

function Mostrar_Ocultar_Tareas() {
    var div_tareas = document.getElementById("div_tareas");

    if (div_tareas.style.display == "none") {
        Mostrar_Tareas();
    } else {
        Ocultar_Tareas();
    }
}

// Mostrar interfaz de pdf

function Mostrar_pdf() {
    document.getElementById("div_pdf").style.display = "flex";
    document.getElementById("button_pdf").style.backgroundColor = "white";

    document.getElementById("button_pdf").style.border = "solid 2px #f19721";

    Ocultar_Chat();
    Ocultar_Tareas();
    Ocultar_Horario();
}

function Ocultar_pdf() {
    document.getElementById("div_pdf").style.display = "none";
    document.getElementById("button_pdf").style.backgroundColor = "#f19721";
    document.getElementById("button_pdf").style.color = "black";
    document.getElementById("button_pdf").style.border = "solid 2px black";
}

function Mostrar_Ocultar_pdf() {
    var div_pdf = document.getElementById("div_pdf");

    if (div_pdf.style.display == "none") {
        Mostrar_pdf();
    } else {
        Ocultar_pdf();
    }
}

// Mostrar interfaz de horario

function Mostrar_Horario() {
    document.getElementById("div_horario").style.display = "flex";
    document.getElementById("button_horario").style.backgroundColor = "white";

    document.getElementById("button_horario").style.border =
        "solid 2px #f19721";

    Ocultar_Chat();
    Ocultar_Tareas();
    Ocultar_pdf();
}

function Ocultar_Horario() {
    document.getElementById("div_horario").style.display = "none";
    document.getElementById("button_horario").style.backgroundColor = "#f19721";
    document.getElementById("button_horario").style.border = "solid 2px black";
}

function Mostrar_Ocultar_Horario() {
    var div_horario = document.getElementById("div_horario");

    if (div_horario.style.display == "none") {
        Mostrar_Horario();
    } else {
        Ocultar_Horario();
    }
}
