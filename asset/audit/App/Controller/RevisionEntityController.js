zfDoctrineAuditGuiApp.controller("RevisionEntityController",
    ["$scope", "$http", "$routeParams", "config", function($scope, $http, $routeParams, config)
    {

    $http({
        method: "GET",
        url: config.apiUrl + "revision-entity/" + $routeParams.id
    }).then(function success(response) {
        $scope.revisionEntity = response.data;

        // Fetch all revision entity identifier values
        $http({
            method: "GET",
            url: response.data._embedded.revisionEntityIdentifierValue._links.self.href
        }).then(function success(response) {
            $scope.revisionEntityIdentifierValues = response.data;
        }, function error(response) {
            alert('error');
        });

        // Fetch data for changed entity
        $http({
            method: "GET",
            url: response.data._links.revisionEntityData.href
        }).then(function success(response) {
            $scope.revisionEntityValue = response.data;
        }, function error(response) {
            alert('error');
        });

    }, function error(response) {
        alert('error');
    });
}]);
