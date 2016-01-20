(function() {

    "use strict";

    // This should be the actual name of your module
    var app = angular.module("postModule", []);

    // Find the token value from the page using jQuery
    var token = $("meta[name=csrf-token]").attr("content");
    
    // Set the token as an Angular constant
    app.constant("CSRF_TOKEN", token);
    
    // Configure $http to include both your token and a flag indicating the request is AJAX
    app.config(["$httpProvider", "CSRF_TOKEN", function($httpProvider, CSRF_TOKEN) {
        $httpProvider.defaults.headers.common["X-Csrf-Token"] = CSRF_TOKEN;
        $httpProvider.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
    }]);

    app.filter('phpDate', function(){
        return function(input, format){
            var date = moment.tz(input.date, input.timezone);

            if (format == "human"){
                return date.fromNow();
            } else {
                return date.format(format);
            }
        }
    })

    app.controller("ManagePostsController", ["$log", "$http", "$scope", function($log, $http, $scope){

        $scope.posts = [];

        $http.get("/posts").then(function(response){
            $log.info("Ajax request successful!");
            $scope.posts = response.data.posts;
            $log.info(response);
        }, function(response){
            $log.error("Ajax request failed.");
            $log.debug(response);
        })
    }]);
})();