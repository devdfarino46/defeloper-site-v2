const path = require('path');

const isDev = process.env.NODE_ENV === 'dev';

module.exports = {
    mode: isDev ? 'development' : 'production',
    devtool: isDev ? 'source-map' : false,
    cache: isDev ? true : false,
    watch: isDev ? true : false,
    entry: {
    main: path.resolve(__dirname, 'ts/main.ts')
    },
    output: {
    filename: '[name].js',
    path: isDev ? 
        path.resolve(__dirname, 'prebuild/js') :
        path.resolve(__dirname, '../theme/assets/js')
    },
    resolve: {
    extensions: ['.ts', '.js'],
    },
    module: {
    rules: [
        {
            test: /\.ts$/,
            exclude: /node_modules/,
            use: 'ts-loader'
        }
    ],
    },
};