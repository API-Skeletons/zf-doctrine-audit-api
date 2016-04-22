zfDoctrineAuditGuiApp.controller("RevisionController", ["$scope", "$http", "config", function($scope, $http, config) {
    $scope.load = function(url)
    {
        if (! url) {
            url = config.apiUrl + "revision";
        }

        $http({
            method: "GET",
            url: url
        }).then(function success(response) {
            $scope.collection = response.data;
        }, function error(response) {
            alert('error');
        });
    }
}]);

