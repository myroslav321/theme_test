var remoteBranch = 'gh-pages';
var remoteRepo = 'git@github.com:myroslav321/theme_test.git';
module.exports = function (grunt) {
    require('time-grunt')(grunt);
    require('load-grunt-config')(grunt, {
        data: {
            site: 'site',
            cssFolder: 'css',
            lessFolder: 'less',
            dev: 'dev',
            temp: 'temp',
            bc: 'dev/bower_components',
            remoteRepo: remoteRepo,
            remoteBranch: remoteBranch
        },
        jitGrunt: {
            jitGrunt: true,
            staticMappings: { buildcontrol: 'grunt-build-control' }
        }
    });
    grunt.loadNpmTasks('grunt-notify');
};