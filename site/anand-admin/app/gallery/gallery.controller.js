angular.module('app')

        .controller('galleryController', galleryController);



galleryController.$inject = ['$scope', '$state', '$rootScope', 'APIURL', '$http', 'ApiService']



function galleryController($scope, $state, $rootScope, APIURL, $http, ApiService) {

    $scope.pagingSize = 5;

    $scope.dataPerPage = 10;

    $scope.totalItems = [];

    $scope.displayItems = [];



    $scope.pageInfo = {submitted: false};

    $scope.form_data = {};

    $scope.totalItems = [];

    if($state.current.name == 'gallery') {
        ApiService.hm_gallery().then(function(res){
            $scope.totalItems = res.data;
        });
    } else if($state.current.name == 'edit_gallery') {
        ApiService.hm_get_gallery($state.params.id).then(function(res){
            $scope.form_data = res.data;
        });
    } 

    $scope.category = [];
    ApiService.hm_category().then(function(res){
        $scope.category = res.data;
    });

    $scope.save = function(frm){

    	$scope.pageInfo.submitted = true;
        frm.$setDirty();
    	if(frm.$valid){

    		ApiService.hm_save_gallery($scope.form_data).then(function(res){

    			ApiService.notification(res.msg, 'success');

    			$state.go('gallery');

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

    	ApiService.hm_delete_blog($scope.pageInfo.actionId).then(function(res){

    		$('#deleteAppModal').modal('hide');

    		ApiService.notification(res.msg, 'success');

    		ApiService.hm_gallery().then(function(res){

		    	$scope.totalItems = res.data;

		    });

    	});

    };



    $scope.change_status = function(st, id){

    	ApiService.hm_change_gallery_status(st, id).then(function(res){

    		ApiService.notification(res.msg, 'success');

    		ApiService.hm_gallery().then(function(res){

		    	$scope.totalItems = res.data;

		    });

    	});

    };

}