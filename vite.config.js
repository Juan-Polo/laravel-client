import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/css/table-index.css",
                "resources/css/perfil.css",
                "resources/css/grados.css",
                "resources/css/forms.css",
                "resources/css/interfaz_grado.css",
                "resources/css/tareas_class.css",
                "resources/css/pdf.css",
                "resources/css/stylechat.css",
                "resources/css/asignaturas.css",
                "resources/css/login.css",
                "resources/css/carrousel.css",
                "resources/css/pre-fre.css",
                "resources/css/mision_vision.css",
                "resources/css/contactenos.css",

                //////////////////////////////////////////////////////
                "resources/js/app.js",
                "resources/js/forms.js",
                "resources/js/login.js",
                "resources/js/carrousel.js",
                "resources/js/pre-fre.js",

                "resources/js/mostrar_contenido.js",
            ],
            refresh: true,
        }),
    ],
});
