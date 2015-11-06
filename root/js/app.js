var app = angular.module('purpledragonApp', []);

app.controller('ResultListCtrl', function ($scope) {
  $scope.genes = [
    {'name': 'Gene A',
     'class': 'Class A'},
    {'name': 'Gene B',
     'class': 'Class B'},
    {'name': 'Gene C',
     'class': 'Class B'}
  ];
});
