import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import { viteStaticCopy } from 'vite-plugin-static-copy'

export default defineConfig({
    css: {
        devSourcemap: true, // показывать из какого файла взят css
    },
    build: {
        outDir: "./public_html/build/",
        cssSourceMap: true, //это тоже показывать из какого файла взят css , но заработало после добавления верхнего :)
    },
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/src/assets/main.scss",
                "resources/sass/app.scss",
                "resources/js/app.js",
            ],
            publicDirectory: "public_html",
            refresh: true,
        }),
        viteStaticCopy({
            targets: [
                {
                    src: "resources/src/assets/img",
                    dest: "../assets",
                },
            ],
            publicDirectory: "public_html",
        }),
    ],
});
