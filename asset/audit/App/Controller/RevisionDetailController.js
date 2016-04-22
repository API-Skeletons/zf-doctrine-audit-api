zfDoctrineAuditGuiApp.controller("RevisionDetailController",
    ["$scope", "$http", "$routeParams", "config", function($scope, $http, $routeParams, config)
    {

    $http({
        method: "GET",
        url: config.apiUrl + "revision/" + $routeParams.id
    }).then(function success(response) {
        $scope.revision = response.data;

        // Fetch all revision entities for this revision
        $http({
            method: "GET",
            url: response.data._embedded.revisionEntity._links.self.href
        }).then(function success(response) {
            $scope.revisionEntities = response.data;
        }, function error(response) {
            alert('error');
        });
    }, function error(response) {
        alert('error');
    });
}]);

