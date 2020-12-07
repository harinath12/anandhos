angular.module('app')

        .controller('videogalleryController', videogalleryController);



videogalleryController.$inject = ['$scope', '$state', '$rootScope', 'APIURL', '$http', 'ApiService']



function videogalleryController($scope, $state, $rootScope, APIURL, $http, ApiService) {

    $scope.pagingSize = 5;

    $scope.dataPerPage = 10;

    $scope.totalItems = [];

    $scope.displayItems = [];



    $scope.pageInfo = {submitted: false};

    $scope.form_data = {};

    $scope.totalItems = [];

    if($state.current.name == 'videogallery') {
        ApiService.hm_videogallery().then(function(res){
            $scope.totalItems = res.data;
        });
    } else if($state.current.name == 'edit_videogallery') {
        ApiService.hm_get_videogallery($state.params.id).then(function(res){
            $scope.form_data = res.data;
        });
    } 

    $scope.save = function(frm){

    	$scope.pageInfo.submitted = true;
        frm.$setDirty();
    	if(frm.$valid){

    		ApiService.hm_save_videogallery($scope.form_data).then(function(res){

    			ApiService.notification(res.msg, 'success');

    			$state.go('videogallery');

    		});

    	} else {

    		ApiService.notification('Please fill all required fields', 'error');

    	}

    };



    $scope.edit = function(data){

    	$scope.form_data = data;

    	$('#addNewAppModal').modal('show');

    };



    $scope.delete = function(data){

    	$scope.pageInfo.actionId = data;

    	$('#deleteAppModal').modal('show');

    };



    $scope.delete2 = function(id){

    	ApiService.hm_delete_videogallery($scope.pageInfo.actionId).then(function(res){

    		$('#deleteAppModal').modal('hide');

    		ApiService.notification(res.msg, 'success');

    		ApiService.hm_videogallery().then(function(res){

		    	$scope.totalItems = res.data;

		    });

    	});

    };



    $scope.change_status = function(st, id){

    	ApiService.hm_change_videogallery_status(st, id).then(function(res){

    		ApiService.notification(res.msg, 'success');

    		ApiService.hm_videogallery().then(function(res){

		    	$scope.totalItems = res.data;

		    });

    	});

    };

}