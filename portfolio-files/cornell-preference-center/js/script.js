var formApp = angular.module('formApp',[]);

formApp.controller('listCtrl', function($scope, $http){
	$http.get("http://kevinreilly.io/portfolio-files/cornell-preference-center/js/lists.json").success(function(response){
		$scope.states = response.states;
		$scope.countries = response.countries;
		$scope.defaultCountry = response.countries[0];
	});
});


$(document).ready(function(){
	$("[class='switchbox']").bootstrapSwitch();
	
	$('.country').change(function(){
		var $selectedCountryCode = $('.country option:selected').data('countrycode');
		var $selectedCountry = $('.country option:selected').val();
						
		$('.countryCode').val($selectedCountryCode);
		
		if($selectedCountry !== 'United States' && $selectedCountry !== 'Canada'){
			$('.countryRequired').removeClass('requiredField');
			$('.countryRequired').find('select').removeAttr('required');
		}
		else {
			$('.countryRequired').addClass('requiredField');
			$('.countryRequired').find('select').attr('required','required');
		}
	});
	
	$('.btn-cancel').click(function(event){
		event.preventDefault();
	    location.reload();
	});
});
$(window).load(function(){
	(function matchHeight(){
		var $height = $('.matchHeight').children().height();
		
		console.log($height);
		
		$('.matchHeight').children().height($height);
		$('.matchHeight').css('display','inline-block');
	})();
});