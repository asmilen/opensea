system.requires.push('ngFileUpload');
system.controller("CustomerMessageController", CustomerMessageController);
/**
 *
 * @param {type} $scope
 * @param {type} $http
 * @param {type} $rootScope
 * @returns {undefined}
 */
function CustomerMessageController($scope, $http, $rootScope, $timeout, Upload) {
    $scope.controllerName = "CustomerMessageController";
    $scope.pageId = 0;
    $scope.filter = {
        key: ""
    };
    $scope.editArticle = {};
    $scope.listStatus = [
        {value: 'new', name: 'New'},
        {value: 'inprocess', name: 'Inprocess'},
        {value: 'done', name: 'Done'},
    ];
    $scope.listOrder = [
        {value: 'date_asc', name: 'Date ascending'},
        {value: 'date_desc', name: 'Date decrease'},
        {value: 'create_at_asc', name: 'Create time ascending'},
        {value: 'create_at_desc', name: 'Create time decrease'}
    ];
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
        if ($scope.filter.email) {
            param.email = $scope.filter.email;
        }
        if ($scope.filter.name) {
            param.name = $scope.filter.name;
        }
        if ($scope.filter.phone_number) {
            param.phone_number = $scope.filter.phone_number;
        }
        if ($scope.filter.status) {
            param.status = $scope.filter.status;
        }
        if ($scope.filter.order) {
            param.order = $scope.filter.order;
        }
        url = api_domain + "/api/customer-message/index";
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

    $scope.reset = function () {
        $scope.filter = {};
        $scope.find();
    };
    
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

}
