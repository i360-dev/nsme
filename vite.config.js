import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                //js
                "resources/js/main.js",

                //css
                "resources/css/bootstrap.min.css",
                "resources/css/responsive.css",
                "resources/css/advisr-core.css",
                "resources/css/animation.css",
                "resources/css/advisr-unit.css",
                "resources/css/advisr-core.css",
                "resources/css/comon.css",
                "resources/css/blog-page.css",
                "resources/css/footer.css",
                "resources/css/header.css",
                "resources/css/mobile-menu.css",
                "resources/css/typography.css",
                "resources/css/fonts.css",
                "resources/css/meanmenu.css",
                "resources/css/font-awesome-pro.css",
                "node_modules/aos/dist/aos.css",
                "node_modules/owl.carousel/dist/assets/owl.carousel.min.css",
                "node_modules/jquery-nice-select/css/nice-select.css"
            ],
            refresh: true,
        }),
    ],
});
