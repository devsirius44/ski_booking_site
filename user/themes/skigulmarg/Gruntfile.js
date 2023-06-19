module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        sass: {
            dist: {
                files: {
                    'css/style.css': 'scss/style.scss'
                }
            }
        },

        cssmin: {
            css: {
                src: 'css/style.css',
                dest: 'css/style.min.css'
            }
        },

        uglify: {
            build: {
                files: [
                    {
                        src: 'js/functions.js',
                        dest: 'js/functions.min.js'
                    },
                    {
                        src: 'js/weather.js',
                        dest: 'js/weather.min.js'
                    },
                ]
            }
        },
    });

    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-uglify');

    grunt.registerTask('default', ['sass', 'cssmin', 'uglify']);
};
