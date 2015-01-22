<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="favicon.ico">

        <title>Starter Template for Bootstrap</title>

        <!-- Bootstrap core CSS -->
        <link href="/thirdparty/bootstrap3/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="/thirdparty/bootstrap3/css/bootstrap-theme.min.css" rel="stylesheet">

        <style>
            body {
                padding-top: 60px;
            }
        </style>

        @yield('css')

    </head>

  <body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">ONEMODEL</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Model</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                </ul>	
				 <div class="col-lg-3">
                  <div class="input-group">
                   <input type="text" class="form-control" placeholder="Search for...">
                   <span class="input-group-btn">
                   <button class="btn btn-default" type="button">Go!</button>
                   </span>
                 </div><!-- /input-group -->
                </div><!-- /.col-lg-6 -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="page-scroll">
                        <a href="file:///C:/Users/PC/Downloads/Compressed/startbootstrap-freelancer-1.0.1/indexadmin.html">Admin</a>
                    </li>                   
                </ul>
				</div>
            </div>
            <!-- /.navbar-collapse -->
        <!-- /.container-fluid -->
    </nav>

        <div class="container">

            @yield('content')
        </div><!-- /.container -->


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="/thirdparty/jquery/jquery-2.1.1.min.js"></script>
        <script src="/thirdparty/holderjs/holder.js"></script>

        <script src="/thirdparty/angularjs/angular.min.js"></script>
        <script src="/thirdparty/angular-loading-spinner/angular-loading-spinner.js"></script>
        <script src="/thirdparty/angular-loading-spinner/spin.js"></script>
        <script src="/thirdparty/angular-loading-spinner/angular-spinner.min.js"></script>
        <script src="/thirdparty/angular-base64-upload/dist/angular-base64-upload.min.js"></script>
        <script src="/thirdparty/angular-bootstrap/ui-bootstrap-tpls-0.12.0.min.js"></script>
        <script src="/thirdparty/bootstrap3/js/bootstrap.min.js"></script>
        <script src="/js/modules/AlertModule.js"></script>

        <script>

            var mainApp = angular.module('mainApp',['ngLoadingSpinner']);

            mainApp.controller('currentUserController',function($scope,$http) {

                $scope.user = null;

                $scope.init = function() {
                    $http.get('/current-user').success(function(response){
                        $scope.user = response.data;
                    })
                }

                $scope.init();
                });

            angular.bootstrap($("#mainApp"),['mainApp']);

        </script>


        @yield('js')



    </body>
</html>
