angular
	.module("jDhaka")
		.controller("bodyController",function ($scope) {
		
			$scope.popup = function () {};

			$scope.popup.state = 0;

			$scope.popup.open = function () {
				$scope.popup.state=1;
			}

			$scope.popup.navigate = function (state) {
				$scope.popup.state = state;
			}	

			$scope.open= function () {
				$scope.popup.state = 1;
			}

			function _openReport() {
				if (type) {

				}}	

			function _createReport(type) {
				if (type) {

				}}

			function _cancelReport() {
				if (type) {

				}}


		});