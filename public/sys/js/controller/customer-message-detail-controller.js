system.controller("CustomerMessageDetailController", CustomerMessageDetailController);
/**
 *
 * @param {type} $scope
 * @param {type} $http
 * @param {type} $rootScope
 * @returns {undefined}
 */
function CustomerMessageDetailController($scope, $http, $rootScope, $timeout, Upload) {
    $scope.controllerName = "CustomerMessageDetailController";
    $scope.editArticle = {};
    $scope.listStatus = [
        {value: 'new', name: 'New'},
        {value: 'inprocess', name: 'Inprocess'},
        {value: 'done', name: 'Done'},
    ];
    $scope.baseController = this.__proto__ = new BaseController($scope, $http, $rootScope);
    this.initialize = function(){
        $scope.show();
    }
    $scope.show = function(){
        var param = {
            api_token: api_token,
        };
        url = '/api/customer-message/' + CUSTOMER_MESSAGE_ID + '/detail';
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
                    $scope.editArticle = response.data.data;
                    $scope.editArticle.note = JSON.parse($scope.editArticle.note);
                } else {
                    showMessage('Error', 'There was an error processing, please try again!', 'error');
                }
            }
        );
    };

    $scope.reset = function () {
        $scope.show();
    };

    $scope.updateArticle = function () {
        $('#editArticleButton').button('loading');
        var param = {
            api_token: api_token,
            note_new: $scope.editArticle.note_new,
            status: $scope.editArticle.status,
            id: CUSTOMER_MESSAGE_ID
        };
        $http.post(api_domain + "/api/customer-message/update", param).success(function (data) {
            if (data.status == 'successful') {
                showMessage('Successful!', 'Update successful!', 'success');
                $scope.show();
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
}
