(function () {
	'use strict';

	angular.module('app.landing')
		.controller('LandingController', LandingController);

	LandingController.$inject = [];
	function LandingController() {
		var vm = this;
		console.log('landing');
	}
})();