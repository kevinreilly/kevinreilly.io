var webApp = angular.module('webApp', ['ui.router','ngAnimate','ui.bootstrap']);

webApp.config(function($stateProvider, $urlRouterProvider) {
    
    $urlRouterProvider.otherwise('/');
    
    $stateProvider
        
        .state('home', {
            url: '/',
            views: {
                '': {templateUrl: 'partials/partial-home.html' },
                'updates@home': { 
                    templateUrl: 'partials/partial-updates.html',
                    controller: 'postsCtrl'
                }
            }
        })
        .state('work', {
        	url: '/work',
        	templateUrl: 'partials/partial-work.html'
        })
        .state('photography', {
            url: '/photography',
            templateUrl: 'partials/partial-photography.html'     
        })
        .state('contact', {
            url: '/contact',
            templateUrl: 'partials/partial-contact.html'     
        });
});

webApp.controller('mainCtrl', function($scope) {
	
});

webApp.controller('iconCarouselCtrl', function($scope, $http){
	$http.get("http://kevinreilly.io/json/data.json").success(function(response){
		$scope.slides = response.iconSlides;
	});
	
});
webApp.controller('postsCtrl', function($scope, $http){
	$http.get("http://kevinreilly.io/json/posts.json").success(function(response){
		$scope.posts = response.posts;
	});
});