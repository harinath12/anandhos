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

    apiService.hm_testimonials = function(){
        return httpService.get(APIURL+'hm_testimonials')
        .then(function (res) {
            return res['data'];
        });
    }

    apiService.hm_get_testimonial = function(id){
        return httpService.get(APIURL+'hm_get_testimonial&id='+id)
        .then(function (res) {
            return res['data'];
        });
    }

    apiService.hm_save_testimonial = function(data){
        return httpService.post(APIURL+'hm_save_testimonial', data)
        .then(function (res) {
            return res['data'];
        });
    }

    apiService.hm_delete_testimonial = function(id){
        return httpService.post(APIURL+'hm_delete_testimonial', {delete:[id]})
        .then(function (res) {
            return res['data'];
        });
    }

    apiService.hm_change_testimonial_status = function(st, id){
        return httpService.post(APIURL+'hm_change_testimonial_status', {status: st, id:id})
        .then(function (res) {
            return res['data'];
        });
    }
    

    apiService.hm_gallery = function(){
        return httpService.get(APIURL+'hm_gallery')
        .then(function (res) {
            return res['data'];
        });
    }

    apiService.hm_get_gallery = function(id){
        return httpService.get(APIURL+'hm_get_gallery&id='+id)
        .then(function (res) {
            return res['data'];
        });
    }

    apiService.hm_save_gallery = function(data){
        return httpService.post(APIURL+'hm_save_gallery', data)
        .then(function (res) {
            return res['data'];
        });
    }

    apiService.hm_delete_gallery = function(id){
        return httpService.post(APIURL+'hm_delete_gallery', {delete:[id]})
        .then(function (res) {
            return res['data'];
        });
    }

    apiService.hm_change_gallery_status = function(st, id){
        return httpService.post(APIURL+'hm_change_gallery_status', {status: st, id:id})
        .then(function (res) {
            return res['data'];
        });
    }
    

    apiService.hm_videogallery = function(){
        return httpService.get(APIURL+'hm_videogallery')
        .then(function (res) {
            return res['data'];
        });
    }

    apiService.hm_get_videogallery = function(id){
        return httpService.get(APIURL+'hm_get_videogallery&id='+id)
        .then(function (res) {
            return res['data'];
        });
    }

    apiService.hm_save_videogallery = function(data){
        return httpService.post(APIURL+'hm_save_videogallery', data)
        .then(function (res) {
            return res['data'];
        });
    }

    apiService.hm_delete_videogallery = function(id){
        return httpService.post(APIURL+'hm_delete_videogallery', {delete:[id]})
        .then(function (res) {
            return res['data'];
        });
    }

    apiService.hm_change_videogallery_status = function(st, id){
        return httpService.post(APIURL+'hm_change_videogallery_status', {status: st, id:id})
        .then(function (res) {
            return res['data'];
        });
    }
    
    apiService.hm_category = function(){
        return httpService.get(APIURL+'hm_category')
        .then(function (res) {
            return res['data'];
        });
    }

    apiService.hm_save_category = function(data){
        return httpService.post(APIURL+'hm_save_category', data)
        .then(function (res) {
            return res['data'];
        });
    }

    apiService.hm_delete_category = function(id){
        return httpService.post(APIURL+'hm_delete_category', {delete:[id]})
        .then(function (res) {
            return res['data'];
        });
    }

    apiService.hm_change_category_status = function(st, id){
        return httpService.post(APIURL+'hm_change_category_status', {status: st, id:id})
        .then(function (res) {
            return res['data'];
        });
    }
    
    return apiService;
});