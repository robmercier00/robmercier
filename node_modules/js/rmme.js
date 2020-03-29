var rmme = angular.module('rmmeapp', []);
rmme.controller('showModule', function($scope) {
  $scope.printcv = function() {
    window.print();
  }
});

window.onload = function() {
  var randomNumber = Math.floor((Math.random() * 16) + 1);
  document.getElementById('logo').setAttribute('src', 'images/logo'+randomNumber+'/cover.png');
  var d = new Date();
  document.getElementById('current-year').innerHTML = d.getFullYear();
}

function printCV() {
  window.print();
}