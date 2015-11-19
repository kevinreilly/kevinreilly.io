var webApp = angular.module('webApp', ['ui.router','ui.bootstrap','ngAnimate']);

webApp.config(function($stateProvider, $urlRouterProvider) {
    
    $urlRouterProvider.otherwise('/');
    
    $stateProvider
        
        // home view
        .state('home', {
            url: '/',
            views: {
                '': { templateUrl: 'partials/partial-home.html' },
                'iconCarousel@home': {
                    templateUrl: 'partials/iconCarousel.html',
                    controller: 'iconCarouselCtrl'
                }
            }
        })
        
        // portfolio view
        .state('portfolio', {
           url: '/portfolio',
           templateUrl: 'partials/partial-portfolio.html',
           controller: 'portfolioCtrl'
        })
        // web portfolio view
        .state('portfolio.wordpress', {
            url: '/wordpress',
            templateUrl: 'partials/partial-portfolio-wordpress.html',
            controller: 'portfolioWordPressCtrl'
        })
        // web portfolio view
        .state('portfolio.web', {
            url: '/web',
            templateUrl: 'partials/partial-portfolio-web.html',
            controller: 'portfolioWebCtrl'
        })
        // email portfolio view
        .state('portfolio.email', {
            url: '/email',
            templateUrl: 'partials/partial-portfolio-email.html',
            controller: 'portfolioEmailCtrl'
        })
        // photography view
        .state('photography', {
            url: '/photography',
            templateUrl: 'partials/photography.html',
            controller: 'photographyCtrl'
        });        
});

// main controller
webApp.controller('mainCtrl', function($scope) {
    $scope.rootURL = 'http://kevinreilly.io';
});

// portfolio controller
webApp.controller('portfolioCtrl', function($scope){
    //portfolio filters
    $('.portfolio-filters').on('mouseenter', 'a', function(){
        $(this).addClass('mouseOn');
    });
    $('.portfolio-filters').on('mouseleave', 'a', function(){
        $(this).removeClass('mouseOn');
    });
    $('.portfolio-filters').on('click', 'a', function(){
        $('.portfolio-filters').find('a').removeClass('selected');
        $(this).addClass('selected');
        $(this).closest('.hero').addClass('short-hero');
    });
});

// portfolio animations
var portfolioAnimations = function(){
    $('.portfolio-list').on('mouseenter', '.portfolio-item', function(){
        $(this).addClass('portfolio-item-hover');
    });
    $('.portfolio-list').on('mouseleave', '.portfolio-item', function(){
        $(this).removeClass('portfolio-item-hover');
    });
    $('.portfolio-list').on('click', '.portfolio-item', function(){
        $(this).find('.portfolio-item-overlay').fadeToggle();
        $(this).find('.portfolio-item-desc').slideToggle();
        $('html, body').animate({
            scrollTop: $(this).offset().top - 50
        }, 750);
    });
};


// wordpress portfolio controller
webApp.controller('portfolioWordPressCtrl', function($scope, $http){
    var currentPath = window.location.pathname;
    $http.get("http://kevinreilly.io"+ currentPath +"json/portfolio.json")
    .success(function(response){
        $scope.wordpress = response.wordpress;
    });
    portfolioAnimations();
});

// web portfolio controller
webApp.controller('portfolioWebCtrl', function($scope, $http){
    var currentPath = window.location.pathname;
    $http.get("http://kevinreilly.io"+ currentPath +"json/portfolio.json")
    .success(function(response){
        $scope.web = response.web;
    });
    portfolioAnimations();
});

// email portfolio controller
webApp.controller('portfolioEmailCtrl', function($scope, $http){
    var currentPath = window.location.pathname;
    $http.get("http://kevinreilly.io"+ currentPath +"json/portfolio.json")
    .success(function(response){
        $scope.email = response.email;
    });
    portfolioAnimations();
});
webApp.controller('photographyCtrl', function($scope, $http){
    var currentPath = window.location.pathname;
    $http.get("http://kevinreilly.io"+ currentPath +"json/albums.json")
    .success(function(response){
        $scope.albums = response.albums;
    });
});

// icon carousel controller
webApp.controller('iconCarouselCtrl', function($scope){
    $scope.icons = ['fa-camera-retro','fa-beer','fa-laptop','fa-tree','fa-rocket','fa-wordpress','fa-map','fa-hand-spock-o','fa-steam-square','fa-rebel','fa-bicycle','fa-music'];
});