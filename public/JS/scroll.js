var projecten = document.getElementById('Projecten');
var diensten = document.getElementById('Diensten');
var overons = document.getElementById('OverOns');
var nieuws = document.getElementById('Nieuws');
var contact = document.getElementById('Contact');

projecten.addEventListener('click', scrollFunction);
diensten.addEventListener('click', scrollFunction2);
overons.addEventListener('click', scrollFunction3);
nieuws.addEventListener('click', scrollFunction4);
contact.addEventListener('click', scrollFunction5);

function scrollFunction() {
    document.documentElement.scrollTop = 2100;
  }

  function scrollFunction2() {
    document.documentElement.scrollTop = 1000;
  }

  function scrollFunction3() {
    document.documentElement.scrollTop = 100;
  }

  function scrollFunction4() {
    document.documentElement.scrollTop = 4150;
  }

  function scrollFunction5() {
    document.documentElement.scrollTop = 5300;
  }