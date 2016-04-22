function convertDateObjectsToDates(input)
{
    // Ignore things that aren't objects.
    if (typeof input !== "object") {
        return input;
    }

    for (var key in input) {
        if (!input.hasOwnProperty(key)) continue;

        var value = input[key];
        if (!value) continue;

        if (value.hasOwnProperty('date') &&
            value.hasOwnProperty('timezone') &&
            value.hasOwnProperty('timezone_type')) {

            input[key] = new Date(value.date.replace(" " , "T"));
        } else if (typeof value === "object") {
            // Recurse into object
            convertDateObjectsToDates(value);
        }
    }
}

var zfDoctrineAuditGuiApp = angular.module("zfDoctrineAuditGuiApp", ["ngRoute", "angular-loading-bar"])
    .config(["$httpProvider", function ($httpProvider) {
         $httpProvider.defaults.transformResponse.push(function(responseData) {
            convertDateObjectsToDates(responseData);
            return responseData;
        });
    }])
    .constant("config", {
        apiUrl: "/audit/"
    })
;

zfDoctrineAuditGuiApp.controller("mainController", ["$scope", "config", function($scope, config) {
}]);

