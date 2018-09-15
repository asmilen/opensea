const webpack = require('webpack');
const UglifyJsPlugin = require('uglifyjs-webpack-plugin');
const CopyPlugin = require('copy-webpack-plugin');

module.exports = {
  entry: {
    home: __dirname + '/src/js/app/home.js',
    bonbon: __dirname + '/src/js/app/bonbon.js',
    rewind: __dirname + '/src/js/app/rewind.js',
  },
  output: {
    path: __dirname + '/dist',
    filename: 'js/[name].js',
  },
  module: {
    rules: [
      { // js files
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader',
        },
      },
      { // html file
        test: /\.html$/,
        use: {
          loader: 'html-loader',
          options: {
            attrs: [':data-src']
          }
        }
      },
      { // css
        test: /\.css$/,
        use: [ 'style-loader', 'css-loader' ]
      },
      { // font
        test: /\.(eot|woff\d?|ttf|otf|svg)$/i,
        use: [{
          loader: 'file-loader',
          options: {
            name: '[name].[ext]',
            outputPath: 'fonts/'
          }
        }]
      },
      { // image
        test: /\.(jpe?g|png|gif)$/i, 
        loader: "file-loader?name=images/[name].[ext]"
      },
      { // scss
        test: /\.(scss)$/,
        use: [{
          loader: 'style-loader', // inject CSS to page
        }, {
          loader: 'css-loader', // translates CSS into CommonJS modules
        }, {
          loader: 'postcss-loader', // Run post css actions
          options: {
            plugins: function () { // post css plugins, can be exported to postcss.config.js
              return [
              require('precss'),
              require('autoprefixer')
              ];
            }
          }
        }, {
          loader: 'sass-loader' // compiles Sass to CSS
        }]
      }
      ],
    },
    plugins: [
      new CopyPlugin([
        { from: 'src/images', to: 'images' }
        ]),
      new webpack.ProvidePlugin({
        $: 'jquery',
        jQuery: 'jquery',
        'window.jQuery': 'jquery'
      })
    ],
    optimization: {
      minimizer: [
      new UglifyJsPlugin({}),
      ],
    // splitChunks: {
    //   chunks: 'all'
    // }
  },
};
