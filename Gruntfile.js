module.exports = function(grunt) {


	grunt.initConfig({

		watch: {
			options: {
				livereload: true
			},
		}

		express: {


		}
	});

	grunt.registerTask('speak', function() {

		console.log("jsdbjkvb");
	});

	grunt.registerTask('yell', function() {

		console.log("skgdkfjksvjsnfj");
	});





	grunt.registerTask('anything', ['speak', 'yell']);



	grunt.loadNpmTasks('grunt-parallel');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-express');

};
// *************************************************************************

