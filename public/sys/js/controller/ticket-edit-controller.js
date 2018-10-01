system.controller("TicketEditController", TicketEditController);
/**
 *
 * @param {type} $scope
 * @param {type} $http
 * @param {type} $rootScope
 * @returns {undefined}
 */
function TicketEditController($scope, $http, $rootScope, $timeout, Upload) {
    $scope.controllerName = "TicketEditController";
    $scope.editArticle = {};
    $scope.listType = [
        {value: 'normal', name: 'Normal'},
        {value: 'family', name: 'Family'}
    ];

    $scope.baseController = this.__proto__ = new BaseController($scope, $http, $rootScope);

    function attachFeatureForm() {
        this.disabled = false;
    }

    function detachFeatureForm() {
        this.disabled = false;
    }

    function attachOfferForm() {
        this.disabled = false;
    }

    function detachOfferForm() {
        this.disabled = false;
    }

    $scope.attachFeatureForm = new attachFeatureForm();
    $scope.detachFeatureForm = new detachFeatureForm();
    $scope.attachOfferForm = new attachOfferForm();
    $scope.detachOfferForm = new detachOfferForm();

    $scope.initialize = function(){
        $scope.getUnAssignedComponents();
        $scope.show();
    }

    $scope.show = function(){
        var param = {
            api_token: api_token,
        };
        url = '/api/ticket/' + TICKET_ID + '/edit';
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
                    $scope.previewImg = $scope.editArticle.image_url;
                } else {
                    showMessage('Error', 'There was an error processing, please try again!', 'error');
                }
            }
        );
    };

    $scope.getUnAssignedComponents = function () {
        $http.get('/system/ticket/' + TICKET_ID + '/unassigned-components')
            .then(response => {
                $scope.UnAssignedComponents = response.data;
            });
    }

    $scope.updateArticle = function () {
        $('#editArticleButton').button('loading');
        var param = {
            api_token: api_token,
            name : $scope.editArticle.name,
            type : $scope.editArticle.type,
            image_url : $scope.editArticle.image_url,
            id: TICKET_ID
        };
        $http.post(api_domain + "/api/ticket/update", param).success(function (data) {
            if (data.status == 'successful') {
                showMessage('Successful!', 'Update successful!', 'success');
                $scope.show();
            } else {
                showMessage('Error', data.message, 'error');
            }
            $('#updateArticleButton').button('reset');
        });
    }

    $scope.initialize();
    

    //fix enable input insert link, image in tinymce
    $(document).on('focusin', function(e) {
        if ($(e.target).closest(".mce-window").length || $(e.target).closest(".moxman-window").length) {
            e.stopImmediatePropagation();
        }
    });

    function hasWhiteSpace(string) {
        return string.indexOf(' ') >= 0;
    }

    $scope.upload = function (file, storeObj, type) {
        $('#saveButton').button('loading');
        var date = new Date();
        Upload.upload({
            url: api_domain + '/api/upload/images',
            data: {images: [file], api_token, path: '/upload/images/seed/ticket/' + date.getFullYear() + '/' + (date.getMonth() + 1) + '/' + date.getDate() + '/'}
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
        storeObj.image_url = resp.data[0];
        $scope.previewImg = storeObj.image_url;
        $('#saveButton').button('reset');
    };

    $scope.attachFeature = function (feature) {
        $scope.attachFeatureForm.disabled = true;

        $http.post('/system/ticket/' + TICKET_ID + '/features/' + feature.id)
            .then(response => {
                $scope.initialize();

                $scope.attachFeatureForm.disabled = false;
            })
    }

    $scope.detachFeature = function (feature) {
        $scope.detachFeatureForm.disabled = true;

        $http.delete('/system/ticket/' + TICKET_ID + '/features/' + feature.id)
            .then(response => {
                $scope.initialize();

                $scope.detachFeatureForm.disabled = false;
            })
    }

    $scope.attachOffer = function (offer) {
        $scope.attachOfferForm.disabled = true;

        $http.post('/system/ticket/' + TICKET_ID + '/offers/' + offer.id)
            .then(response => {
                $scope.initialize();

                $scope.attachOfferForm.disabled = false;
            })
    }

    $scope.detachOffer = function (offer) {
        $scope.detachOfferForm.disabled = true;

        $http.delete('/system/ticket/' + TICKET_ID + '/offers/' + offer.id)
            .then(response => {
                $scope.initialize();

                $scope.detachOfferForm.disabled = false;
            })
    }
}
