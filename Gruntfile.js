module.exports = function (grunt) {

	grunt.initConfig({
		pkg: grunt.file.readJSON("package.json"),
		concat: {
			options: {
				separator: ";"
			},
			target: {
				src: "includes/js/libs/*.js",
				dest: "includes/js/libs/libs.min.js"
			}
		},
		uglify: {
			options: {
				mangle: true,
				compress: true,
				banner: "/* <%= pkg.author %> | <%= pkg.license %> " +
						"<%= grunt.template.today('yyyy-mm-dd') %> */\n"
			},
			target: {
				src: "includes/js/playground.js",
				dest: "includes/js/playground.min.js"
			}
		},
		jshint: {
			all: "includes/js/*.min.js"
		},
		sass: {
			production: {
				options: {
					style: 'expanded',
					lineNumbers: true
				},
				files: {
					'style.css': 'includes/sass/style.scss'
				}
			}
		},
		watch: {
			scripts: {
				files: ["includes/js/playground.js"],
				tasks: ["uglify"]
			},
			sass: {
				files: ["includes/sass/*.scss", "includes/css/*.scss"],
				tasks: ["sass"]
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');

	grunt. registerTask("default", ['sass']);

};