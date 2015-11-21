<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!doctype html>
<html lang="en" ng-app="purpledragonApp">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Gene Search Engine</title>

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap-theme.css">

  <link rel="stylesheet" href="css/main.css">

  <script src="js/jquery-2.1.4.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/angular.js"></script>

  <script src="js/app.js"></script>

</head>

<body>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Purple Dragon</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li>
      </div><!--/.nav-collapse -->
    </div>
  </nav>
  <div class="container"> <!-- ng-controller="GeneSearchCtrl"-->
    <div class="form-group">
      <div class="input-group">
        <input type="search" class="form-control" id="gene-query" placeholder="search">
        <div class="input-group-btn">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">search <span class="caret"></span></button>
        <ul class="dropdown-menu dropdown-menu-right">
          <li><a href="#name">Gene name</a></li>
          <li><a href="#class">Gene class</a></li>
          <li><a href="#sequence">Gene sequence</a></li>
        </ul>
      </div><!-- /btn-group -->
      </div>
    </div> <!-- search bar-->

    <div class="row">
      <div class="col-md-3">
        Params
      </div>
      <div class="col-md-9">
        <div ng-controller="ResultListCtrl">
          <div class="table-responsive">
            <table class="table table-striped table-condensed">
              <tr><th>Name</th><th>Class</th></tr>
              <tr ng-repeat="gene in genes">
                <td><span>{{gene.name}}</span></td><td>{{gene.class}}</td>
              </tr>
            </table>
          </div>
        </div><!-- ng-controller -->
      </div>
    </div>
  </div><!-- container-->
</body>

</html>
