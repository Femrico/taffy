module.exports = function (grunt) {
	'use strict';

	var sass = require('node-sass');

	grunt.initConfig({
		sass: {
			build: {
				options: {
					implementation: sass,
					sourceMap: true
				},
				files: [{
					'style.css': 'style.scss'
				}]
			}
		},

		babel: {
			options: {
				presets: ['@wordpress/babel-preset-default']
			},
			dist: {
				files: {
					'main.js': 'assets/js/main.js'
				}
			}
		},


		// Watch changes for assets.
		watch: {
			css: {
				files: [
					'style.scss',
					'assets/css/*.scss',
				],
				tasks: [
					'sass'
				]
			},
			js: {
				files: [
					// main js
					'assets/js/*.js',
				],
				tasks: [
					'babel'
				]
			}
		},

	});

	grunt.loadNpmTasks('grunt-sass');
	grunt.loadNpmTasks('grunt-babel');
	grunt.loadNpmTasks('grunt-contrib-watch');
}
