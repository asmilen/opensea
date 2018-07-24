system.requires.push('ngFileUpload');
system.controller("MapController", TourController);
/**
 *
 * @param {type} $scope
 * @param {type} $http
 * @param {type} $rootScope
 * @returns {undefined}
 */
function TourController($scope, $http, $rootScope, $timeout, Upload) {
    $scope.controllerName = "MapController";
    $scope.previewImg = '/frontend/dist/img/bus-map.png';

    $scope.upload = function (file) {
        $('#saveButton').button('loading');
        Upload.upload({
            url: api_domain + '/api/upload/map',
            data: {images: [file], api_token, path: '/frontend/dist/img/'}
        }).then(function (resp) {
            $scope.previewImg = '/frontend/dist/img/bus-map.png' + '?' + new Date().getTime();
            $('#saveButton').button('reset');
        }, function (resp) {
            // showMessage('Error', 'Can not upload this images', 'error');
            $('#saveButton').button('reset');
        }, function (evt) {
            var progressPercentage = parseInt(100.0 * evt.loaded / evt.total);
        });
    };
}