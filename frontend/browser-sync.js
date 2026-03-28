const bs = require("browser-sync").create();
// const { createProxyMiddleware } = require('http-proxy-middleware');

bs.init({
    open: false,
    server: {
        baseDir: "./prebuild",
        // middleware: [
        //     createProxyMiddleware('/api', {
        //         target: 'http://localhost:5888',
        //         changeOrigin: true,
        //         pathRewrite: {
        //           '^/api': '/api' // или '/', если нужно убрать /api из пути
        //         },
        //         logLevel: 'debug' // для отладки
        //     })
        // ]
    },
    port: 3000
});

bs.watch('prebuild/**/*.html').on('change', () => {
    bs.reload();
});

bs.watch('prebuild/css/**/*.css').on('change', () => {
    bs.reload('*.css');
});

bs.watch('prebuild/js/**/*.js').on('change', () => {
    bs.reload();
});