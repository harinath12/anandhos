angular.module('app')

        .controller('blogsController', blogsController);



blogsController.$inject = ['$scope', '$state', '$rootScope', 'APIURL', '$http', 'ApiService']



function blogsController($scope, $state, $rootScope, APIURL, $http, ApiService) {

    $scope.pagingSize = 5;

    $scope.dataPerPage = 10;

    $scope.totalItems = [];

    $scope.displayItems = [];



    $scope.pageInfo = {submitted: false};

    $scope.form_data = {};

    $scope.totalItems = [];

    if($state.current.name == 'blogs') {
        ApiService.hm_blogs().then(function(res){
            $scope.totalItems = res.data;
        });
    } else if($state.current.name == 'edit_blog') {
        ApiService.hm_get_blog($state.params.id).then(function(res){
            $scope.form_data = res.data;
        });
    } 

    $scope.save = function(frm){

    	$scope.pageInfo.submitted = true;

    	if(frm.$valid){

    		ApiService.hm_save_blogs($scope.form_data).then(function(res){

    			$('#addNewAppModal').modal('hide');

    			ApiService.notification(res.msg, 'success');

    			ApiService.hm_blogs().then(function(res){

			    	$scope.totalItems = res.data;

			    });

			    $scope.form_data = {};

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

    	ApiService.hm_delete_blogs($scope.pageInfo.actionId).then(function(res){

    		$('#deleteAppModal').modal('hide');

    		ApiService.notification(res.msg, 'success');

    		ApiService.hm_blogs().then(function(res){

		    	$scope.totalItems = res.data;

		    });

    	});

    };



    $scope.change_status = function(st, id){

    	ApiService.hm_change_blogs_status(st, id).then(function(res){

    		ApiService.notification(res.msg, 'success');

    		ApiService.hm_blogs().then(function(res){

		    	$scope.totalItems = res.data;

		    });

    	});

    };

}