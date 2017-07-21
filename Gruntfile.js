module.exports = function(grunt){
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        concat: {
            options: {
                seperator: ';'
            },
            dist: {
                src: ['css/*.css'],
                dest: 'css/concat.css'
            }
        },
        cssmin: {
            options: {
                 mergeIntoShorthands: false,
                roundingPrecision: -1
  },
                target: {
                    files: {
                    'css/output.css': ['css/bulma.css', 'css/stylesheet.css', 'font-awesome/css/font-awesome.css']
                    }
                }
}
    });
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.registerTask('default', ['cssmin']);
};