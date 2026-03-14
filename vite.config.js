import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/bootstrap.min.css',
                'resources/css/font-awesome-pro.css',
                'resources/css/meanmenu.css',
                'resources/css/typography.css',
                'resources/css/mobile-menu.css',
                'resources/css/header.css',
                'resources/css/footer.css',
                'resources/css/fonts.css',
                'resources/css/blog-page.css',
                'resources/css/comon.css',
                'resources/css/animation.css',
                'resources/css/advisr-unit.css',
                'resources/css/advisr-core.css',
                'resources/css/responsive.css',
                'node_modules/aos/dist/aos.css',
                'node_modules/owl.carousel/dist/assets/owl.carousel.min.css',
                'node_modules/jquery-nice-select/css/nice-select.css',
                'resources/js/app.js',
                'resources/js/main.js',
            ],
            refresh: true,
        }),
    ],
});
