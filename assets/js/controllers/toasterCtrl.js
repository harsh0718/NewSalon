'use strict';
/** 
  * controller for AngularJS-Toaster
*/
app.controller('ToasterDemoCtrl', ['$scope', 'toaster', function ($scope, toaster) {
    $scope.toaster = {
        type: 'success',
        title: 'Title',
        text: 'Message'
    };
    $scope.pop = function () {
        
        toaster.pop('success', 'success','success');
    };
}]);