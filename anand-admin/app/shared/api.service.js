hmapp.factory('ApiService', function (httpService, $q, APIURL, $rootScope) {
	var apiService = {};
    
    apiService.notification = function(msg, type){
        $.toast({
            heading: type,
            text: msg,
            showHideTransition: 'plain',
            icon: type.toLowerCase(),
            position: 'top-right'
        });
    };

    apiService.upload = function(data){
        return httpService
        .post(APIURL+'hm_upload', data)
        .then(function (res) {
            return res['data'];
        });
    };
    
	apiService.login = function (data) {
	    return httpService
        .post(APIURL+'hm_login', data)
        .then(function (res) {
            return res['data'];
        });
    };

    apiService.forgotPassword = function (data) {
        return httpService
        .post(APIURL+'hm_forgot_password', data)
        .then(function (res) {
            return res['data'];
        });
    };

    apiService.resetPassword = function (data) {
        return httpService
        .post(APIURL+'hw_reset_password', data)
        .then(function (res) {
            return res['data'];
        });
    };

    apiService.hm_blogs = function(){
        return httpService.get(APIURL+'hm_blogs')
        .then(function (res) {
            return res['data'];
        });
    }

    apiService.hm_get_blog = function(id){
        return httpService.get(APIURL+'hm_get_blog&id='+id)
        .then(function (res) {
            return res['data'];
        });
    }

    apiService.hm_save_blog = function(data){
        return httpService.post(APIURL+'hm_save_blog', data)
        .then(function (res) {
            return res['data'];
        });
    }

    apiService.hm_delete_blog = function(id){
        return httpService.post(APIURL+'hm_delete_blog', {delete:[id]})
        .then(function (res) {
            return res['data'];
        });
    }

    apiService.hm_change_blog_status = function(st, id){
        return httpService.post(APIURL+'hm_change_blog_status', {status: st, id:id})
        .then(function (res) {
            return res['data'];
        });
    }
    
    return apiService;
});