'use strick'

const path = require("path");
const autoprefixer = require('autoprefixer')
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
// const HtmlWebpackPlugin = require('html-webpack-plugin')
module.exports = {
  mode: 'development',
  entry: {
    main: "./src/js/main.js",
  },
  output: {
    path: path.resolve(__dirname, 'public/src'),
    filename: '[name].js'
  },
  optimization: {
    splitChunks: {
      chunks: 'all',
    },
  },
  module: {
    rules: [
      {
        test: /\.(scss|css|sass)$/,
        // include: /src/,
        // exclude: path.resolve(__dirname, "node_modules"),
        // sideEffects: true,
        // sideEffects: true,
        use: [
          {
            // Adds CSS to the DOM by injecting a `<style>` tag

            loader: MiniCssExtractPlugin.loader,
          },
          {
            // Interprets `@import` and `url()` like `import/require()` and will resolve them
            loader: 'css-loader'
          },
          {
            // Loader for webpack to process CSS with PostCSS
            loader: 'postcss-loader',
            options: {
              postcssOptions: {
                plugins: [
                  autoprefixer(),
                ]
              }
            }
          },
          {
            // Loads a SASS/SCSS file and compiles it to CSS
            loader: 'sass-loader'
          }
        ]
      },
      {
        test: /\.(js)$/,
        include: /src/,
        exclude: path.resolve(__dirname, "node_modules"),
      }
    ]
  },
  plugins: [
    // new HtmlWebpackPlugin({ template: './src/index.html' })
    new MiniCssExtractPlugin({ filename: "[name].css" })
  ]
}