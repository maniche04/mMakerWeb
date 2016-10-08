var app = angular.module('mMaker', [], function($interpolateProvider) {
	$interpolateProvider.startSymbol('<%');
	$interpolateProvider.endSymbol('%>');
});
 
app.controller('newsArticleController', function($scope, $http) {
 
	$scope.articles = [];
	$scope.singleview = '';
	$scope.loading = false;
	$scope.baseurl = 'http://localhost/mmaker/public'
 
	$scope.init = function() {
		$scope.loading = true;
		$http.get($scope.baseurl + '/api/news/article').
		success(function(data, status, headers, config) {
			$scope.articles = data;
			$scope.loading = false;
 
		});
	}

	$scope.loadArticle = function(article) {
		$scope.singleview = article;
		$scope.singleview.body = $scope.singleview.body.replace(/\n/g, "<br>");
		setTimeout(
		  function() 
		  {
		    $('.ui.modal').modal('show');
		  }, 500);
	}


 
	$scope.init();
 
});

app.filter('unsafe', function($sce) { return $sce.trustAsHtml; });