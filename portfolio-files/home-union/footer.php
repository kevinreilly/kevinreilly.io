        </div>
        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-3 social">
                            <a href="https://www.homeunion.com"><img src="resources/img/home-union-logo-black.png"></a>
                            <br><br>
                            <a target="_blank" href="https://www.facebook.com/HomeUnion"><img src="resources/img/facebook.png"></a>&nbsp;&nbsp;
                            <a target="_blank" href="https://twitter.com/Home_Union"><img src="resources/img/twitter.png"></a>&nbsp;&nbsp;
                            <a target="_blank" href="https://www.linkedin.com/company/homeunion"><img src="resources/img/instagram.png"></a>&nbsp;&nbsp;
                            <a target="_blank" href="https://plus.google.com/+Homeunion/posts"><img src="resources/img/youtube.png"></a>
                        </div>
                        <div class="col-md-3">
                            <strong>RESOURCES</strong><br>
                            <a href="https://investor.homeunion.com/">Get Started</a><br>
                            <a href="https://www.homeunion.com/real-estate-investment-locations/">Real Estate Investment Locations</a><br>
                            <a href="http://homeunionrentals.com/">HomeUnion Rentals</a><br>
                            <a href="https://www.homeunion.com/about-home-union/faq/">FAQ</a><br>
                            <a href="https://www.homeunion.com/about-home-union/in-the-news/">Press</a><br>
                            <a href="https://www.homeunion.com/about-home-union/success-stories/">Success Stories</a><br>
                        </div>
                        <div class="col-md-2">
                            <strong>ABOUT</strong><br>
                            <a href="https://www.homeunion.com/about-home-union/">About Us</a><br>
                            <a href="https://www.homeunion.com/about-home-union/#team">Meet the Team</a><br>
                        </div>
                        <div class="col-md-2">
                            <strong>CONTACT</strong><br>
                            <a href="https://www.homeunion.com/contact/">Contact Us</a><br>
                            <a href="https://www.homeunion.com/partner-with-us/">Partner with Us</a><br>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script>
        var app = angular.module('myApp', []);
        app.controller('customersCtrl', function($scope, $http){
            $http.get("http://pierrydev.net/homeUnion/2/faqs.json").success(function (response){
                $scope.about = response.about;
                $scope.investing = response.investing;
                $scope.properties = response.properties;
                $scope.management = response.management;
                $scope.selling = response.selling;
                $scope.bios = response.bios;
            });
        });
        app.filter('to_trusted', ['$sce', function($sce){
            return function(text) {
                return $sce.trustAsHtml(text);
            };
        }]);
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    </body>
</html>