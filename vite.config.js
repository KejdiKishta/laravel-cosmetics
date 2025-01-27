import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from '@vitejs/plugin-vue';
import path from "path";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/scss/app.scss", "resources/js/app.js"],
            refresh: true,
        }),
        vue(),
    ],
    // Add resolve object and aliases
    resolve: {
        alias: {
            "~bootstrap": path.resolve(__dirname, "node_modules/bootstrap"),
            "~@fortawesome": path.resolve(__dirname, "node_modules/@fortawesome"),
            "~resources": "/resources/",
            vue: 'vue/dist/vue.esm-bundler.js', // Alias per abilitare il runtime compiler
            
        },
    },
});
