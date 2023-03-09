var All = document.getElementById('All');
var Design = document.getElementById('Design');
var Art = document.getElementById('Art');
var Electronica = document.getElementById('Electronica');
var Laser = document.getElementById('Laser');

All.addEventListener('click', Project1);
Design.addEventListener('click', Project2);
Art.addEventListener('click', Project3);
Electronica.addEventListener('click', Project4);
Laser.addEventListener('click', Project5);

function Project1(){
  document.getElementById('project1').style.display = "initial";
  document.getElementById('project2').style.display = "initial";
  document.getElementById('project3').style.display = "initial";
  document.getElementById('project4').style.display = "initial";
  document.getElementById('project5').style.display = "initial";
  document.getElementById('project6').style.display = "initial";
  document.getElementById('project7').style.display = "initial";
}
function Project2(){
  document.getElementById('project1').style.display = "none";
  document.getElementById('project2').style.display = "none";
  document.getElementById('project3').style.display = "none";
  document.getElementById('project4').style.display = "none";
  document.getElementById('project5').style.display = "initial";
  document.getElementById('project6').style.display = "initial";
  document.getElementById('project7').style.display = "initial";
}

function Project3(){
  document.getElementById('project1').style.display = "initial";
  document.getElementById('project2').style.display = "initial";
  document.getElementById('project3').style.display = "none";
  document.getElementById('project4').style.display = "initial";
  document.getElementById('project5').style.display = "initial";
  document.getElementById('project6').style.display = "none";
  document.getElementById('project7').style.display = "none";
}

function Project4(){
  document.getElementById('project1').style.display = "none";
  document.getElementById('project2').style.display = "none";
  document.getElementById('project3').style.display = "initial";
  document.getElementById('project4').style.display = "none";
  document.getElementById('project5').style.display = "none";
  document.getElementById('project6').style.display = "none";
  document.getElementById('project7').style.display = "none";
}

function Project5(){
  document.getElementById('project1').style.display = "none";
  document.getElementById('project2').style.display = "none";
  document.getElementById('project3').style.display = "none";
  document.getElementById('project4').style.display = "none";
  document.getElementById('project5').style.display = "none";
  document.getElementById('project6').style.display = "initial";
  document.getElementById('project7').style.display = "none";
}
