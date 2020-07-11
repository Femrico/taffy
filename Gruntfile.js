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

		// Watch changes for assets.
		watch: {
			css: {
				files: [
					'style.scss',
					'assets/css/**/**.scss',
				],
				tasks: [
					'sass'
				]
			},
		},

	});

	grunt.loadNpmTasks('grunt-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
}
