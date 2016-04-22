zfDoctrineAuditGuiApp.config(function($routeProvider) {
    $routeProvider
        .when("/", {
            templateUrl: "pages/revision.html",
            controller: "RevisionController"
        })
        .when("/revision/:id", {
            templateUrl: "pages/revision-detail.html",
            controller: "RevisionDetailController"
        })
        .when("/revision-entity/:id", {
            templateUrl: "pages/revision-entity.html",
            controller: "RevisionEntityController"
        })
        ;
});