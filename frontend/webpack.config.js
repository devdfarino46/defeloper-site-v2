const path = require('path');

const isDev = process.env.NODE_ENV === 'dev';

module.exports = {
    mode: isDev ? 'development' : 'production',
    devtool: isDev ? 'source-map' : false,
    cache: isDev ? true : false,
    watch: isDev ? true : false,
    entry: {
    main: path.resolve(__dirname, 'js/main.js')
    },
    output: {
    filename: '[name].js',
    path: isDev ? 
        path.resolve(__dirname, 'prebuild/js') :
        path.resolve(__dirname, '../public/js')
    },
    resolve: {
    extensions: ['.js'],
    },
    module: {
    rules: [
        {
            test: /\.js$/,
            exclude: /node_modules/,
            use: []
        }
    ],
    },
};