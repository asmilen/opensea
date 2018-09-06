system.requires.push('ngFileUpload');
system.controller("AttractionController", AttractionController);
/**
 *
 * @param {type} $scope
 * @param {type} $http
 * @param {type} $rootScope
 * @returns {undefined}
 */
function AttractionController($scope, $http, $rootScope, $timeout, Upload) {
    $scope.controllerName = "AttractionController";
    $scope.pageId = 0;
    $scope.filter = {
        key: ""
    };
    $scope.editArticle = {};
    $scope.newArticle = {

    };
    $scope.baseController = this.__proto__ = new BaseController($scope, $http, $rootScope);
    this.initialize = function(){
        $scope.find();
    }
    $scope.find = function(){
        $('#searchParamButton').button('loading');
        var param = {
            api_token: api_token,
            page_id: $scope.pageId + 1

        };
        if ($scope.filter.search) {
            param.search = $scope.filter.search;
        }
        url = api_domain + "/api/attraction/index";
        $http({
            url: url,
            method: "GET",
            params: param,
            header: {
                'Content-Type': 'application/json',
            }
        }).then(
            function(response){
                if (response.data.status == 'successful') {
                    $scope.articles = response.data.data;
                    $scope.pageId = response.data.paginator.off_set / response.data.paginator.limit;
                    $scope.pagesCount = response.data.paginator.page_count;
                } else {
                    showMessage('Error', 'There was an error processing, please try again!', 'error');
                }
                $('#searchParamButton').button('reset');
            }
        );
    };

    $scope.showCreateArticleForm = function(){
        tinymce.remove();
        $scope.newArticle = {};
        $('#createArticleForm').modal('show');
        $scope.previewImg = "";
    }

    $scope.reset = function () {
        $scope.filter = {};
        $scope.find();
    };
    
    $scope.createArticle = function () {
        if (!$scope.newArticle.name) {
            $('#newArticleTitle').focus();
            $('#newArticleTitle').css('border-color', 'red');
            return;
        } else {
            $('#newArticleTitle').css('border-color', '#d2d6de');
        }
        $('#createArticleButton').button('loading');
        var param = {
            api_token: api_token,
            name: $scope.newArticle.name,
            description: $scope.newArticle.description,
            description_vi: $scope.newArticle.description_vi,
            url: $scope.newArticle.url,
            image: $scope.newArticle.image,
        };
        $http.post(api_domain + "/api/attraction/create", param).success(function (data) {
            if (data.status == 'successful') {
                showMessage('Successful!', 'Create successful!', 'success');
                $('#createArticleForm').modal('hide');
                $scope.newArticle = {};
                $scope.find();
            } else {
                showMessage('Error', data.message, 'error');
            }
            $('#createArticleButton').button('reset');
        });
    }

    $scope.showEditArticle = function(article){
        $scope.editArticle = angular.copy(article);
        $scope.previewImg = $scope.editArticle.image;
        $('#editArticleForm').modal('show');
    }

    $scope.updateArticle = function () {
        if (!$scope.editArticle.name) {
            $('#editArticleTitle').focus();
            $('#editArticleTitle').css('border-color', 'red');
            return;
        } else {
            $('#editArticleTitle').css('border-color', '#d2d6de');
        }
        $('#editArticleButton').button('loading');
        var param = {
            api_token: api_token,
            name: $scope.editArticle.name,
            description: $scope.editArticle.description,
            description_vi: $scope.editArticle.description_vi,
            url: $scope.editArticle.url,
            image: $scope.editArticle.image,
            id: $scope.editArticle.id
        };
        $http.post(api_domain + "/api/attraction/update", param).success(function (data) {
            if (data.status == 'successful') {
                showMessage('Successful!', 'Update successful!', 'success');
                $('#editArticleForm').modal('hide');
                $scope.find();
            } else {
                showMessage('Error', data.message, 'error');
            }
            $('#updateArticleButton').button('reset');
        });
    }

    this.initialize();
    

    //fix enable input insert link, image in tinymce
    $(document).on('focusin', function(e) {
        if ($(e.target).closest(".mce-window").length || $(e.target).closest(".moxman-window").length) {
            e.stopImmediatePropagation();
        }
    });

    function hasWhiteSpace(string) {
        return string.indexOf(' ') >= 0;
    }

    $scope.deleteArticle = function (article) {
        if (!confirm("Are you sure delete attraction: " + article.name + '?')) {
            return;
        }
        $http.post(api_domain + "/api/attraction/delete", {id: article.id, api_token: api_token}).success(function (data) {
            if (data.status != 'successful') {
                showMessage("Error", data.message, "error");
            } else {
                showMessage("Successful", "Delete attraction successful!", "success");
                $scope.find();
            }
        });
    };

    $scope.saveSortOrders = function (items) {
        var idSubmit = '#submit-order';
        $(idSubmit).button('loading');
        var param = {
            items: items,
            api_token: api_token
        };
        $http.post(api_domain + "/api/article/update-multi-order", param).success(function (data) {
            if (data.status == 'successful') {
                showMessage('Successful!', 'Update successful!', 'success');
                $scope.find();
            } else {
                showMessage('Error', data.message, 'error');
            }
            $(idSubmit).button('reset');
        });
    }

    $scope.upload = function (file, storeObj, type) {
        $('#saveButton').button('loading');
        var date = new Date();
        Upload.upload({
            url: api_domain + '/api/upload/images',
            data: {images: [file], api_token, path: '/upload/images/news/cover/' + date.getFullYear() + '/' + (date.getMonth() + 1) + '/' + date.getDate() + '/'}
        }).then(function (resp) {
            $scope.onUploadNewStoreLogoSuccess(resp, storeObj, type);
        }, function (resp) {
            // showMessage('Error', 'Can not upload this images', 'error');
            $('#saveButton').button('reset');
        }, function (evt) {
            var progressPercentage = parseInt(100.0 * evt.loaded / evt.total);
        });
    };

    $scope.onUploadNewStoreLogoSuccess = function (resp, storeObj, type) {
        if (type == 'banner') {
            storeObj.banner = resp.data[0];
            $scope.previewBanner = cdn_url  + storeObj.banner;
        } else {
            storeObj.image = resp.data[0];
            $scope.previewImg = storeObj.image;
        }
        $('#saveButton').button('reset');
    };
``}
