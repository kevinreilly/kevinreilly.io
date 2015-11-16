<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=320, height=device-height, target-densitydpi=medium-dpi" />
        <!-- SCROLLS -->
        <!-- load bootstrap and fontawesome via CDN -->
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" />
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" />

        <link rel="stylesheet" href="resources/css/style.css">

        <script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>

        <script src="https://use.typekit.net/lkt0dlq.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>
    </head>
    <body ng-app="myApp">
        <!-- HEADER AND NAVBAR -->
        <header>
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" ng-init="isCollapsed = true" ng-click="isCollapsed = !isCollapsed">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="index.php"><img src="resources/img/home-union-logo.png"></a>
                            </div>
                            <div class="navbar-collapse navbar-right" ng-class="{collapse: isCollapsed}">
                                <ul class="nav navbar-nav">
                                    <li><a ng-click="isCollapsed = !isCollapsed" class="<?php if($page=='home'){echo 'active';} else{echo 'inactive';} ?>" href="index.php">Home <?php if($page=='home'){echo '<i class="fa fa-caret-down"></i>';} else{echo '<i class="fa fa-caret-right"></i>';} ?></a></li>
                                    <li><a ng-click="isCollapsed = !isCollapsed" class="<?php if($page=='why-invest'){echo 'active';} else{echo 'inactive';} ?>" href="why-invest.php">Why Invest <?php if($page=='why-invest'){echo '<i class="fa fa-caret-down"></i>';} else{echo '<i class="fa fa-caret-right"></i>';} ?></a></li>
                                    <li><a ng-click="isCollapsed = !isCollapsed" class="<?php if($page=='how-it-works'){echo 'active';} else{echo 'inactive';} ?>" href="how-it-works.php">How it Works <?php if($page=='how-it-works'){echo '<i class="fa fa-caret-down"></i>';} else{echo '<i class="fa fa-caret-right"></i>';} ?></a></li>
                                    <li><a ng-click="isCollapsed = !isCollapsed" class="<?php if($page=='about'){echo 'active';} else{echo 'inactive';} ?>" href="about.php">About <?php if($page=='about'){echo '<i class="fa fa-caret-down"></i>';} else{echo '<i class="fa fa-caret-right"></i>';} ?></a></li>
                                    <li><a ng-click="isCollapsed = !isCollapsed" class="<?php if($page=='contact'){echo 'active';} else{echo 'inactive';} ?>" href="contact.php">Contact <?php if($page=='contact'){echo '<i class="fa fa-caret-down"></i>';} else{echo '<i class="fa fa-caret-right"></i>';} ?></a></li>
                                    <li><a ng-click="isCollapsed = !isCollapsed" class="btn btn-default" role="button" href="register.php">Start Now</a></li>
                                </ul>
                            </div><!--/.nav-collapse -->
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <!-- MAIN CONTENT AND INJECTED VIEWS -->
        <div id="main">