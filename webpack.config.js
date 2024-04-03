// Generated using webpack-cli https://github.com/webpack/webpack-cli

const path = require('path');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const RemoveEmptyScriptsPlugin = require('webpack-remove-empty-scripts');

const isProduction = process.env.NODE_ENV == 'production';


const stylesHandler = isProduction ? MiniCssExtractPlugin.loader : 'style-loader';
// const stylesHandler = MiniCssExtractPlugin.loader;



const config = {
    entry: {
        "bootstrap": { import: './src/js/bootstrap.js', filename: 'js/[name].bundle.js' },
        "bootstrap-icons" : { import: './src/js/bootstrap-icons.js', filename: 'js/[name].bundle.js' },
    },
    output: {
        path: path.resolve(__dirname, 'public/src'),
    },
    plugins: [
        new RemoveEmptyScriptsPlugin()
    ],
    optimization: {
        removeEmptyChunks: true,
        splitChunks: {
            chunks: 'all',
            minSize: 20000,
            name(module, chunks, cacheGroupKey) {
                const moduleFileName = module
                  .identifier()
                  .split('/')
                  .reduceRight((item) => item);
                  const allChunksNames = chunks.map((item) => item.name).join('~');
                  return allChunksNames;
            },
        },
    },
    module: {
        rules: [
            {
                test: /\.(scss|css|sass)$/i,
                use: [stylesHandler, 'css-loader', 'postcss-loader', 'sass-loader'],
            },
            {
                test: /\.(eot|svg|ttf|png|jpg|gif)$/i,
                include: path.resolve(__dirname, './node_modules/bootstrap-icons/font/icons'),
                use: [
                    {
                      loader: 'file-loader',
                      options: {
                        name: '[name].[ext]',
                        outputPath: 'fonts',
                        publicPath: 'fonts',
                      }
                    }
                  ]
                
            },
            {
                test: /\.(woff2|woff)$/i,
                include: path.resolve(__dirname, './node_modules/bootstrap-icons/font/fonts'),
                use: {
                    loader: 'file-loader',
                    options: {
                        name: '[name].[ext]',
                        outputPath: 'fonts',
                        publicPath: 'fonts',
                    },
                }
            }
        ],
    },
};

module.exports = () => {
    if (isProduction) {
        config.mode = 'production';
        config.plugins.push(new MiniCssExtractPlugin({ 
            filename: 'css/[name].css',
        }));

        // config.plugins.push(new WorkboxWebpackPlugin.GenerateSW());

    } else {
        config.mode = 'development';
    }
    return config;
};
