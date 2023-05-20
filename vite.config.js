import laravel from "laravel-vite-plugin";
import { defineConfig } from "vite";

export default defineConfig({
    build: {
        outDir: "public",
    },
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
});
