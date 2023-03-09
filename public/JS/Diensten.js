var count = 0;

var title1 = document.getElementById('scrolltitle1');
var title2 = document.getElementById('scrolltitle2');

var text1 = document.getElementById('scrolltext1');
var text2 = document.getElementById('scrolltext2');

function rb(){
  count+=1;

  switch(count){
    case 1:
      title1.innerHTML = "3D Printen - Print farm";
      text1.innerHTML = "Onze betrouwbare Ender3 machines zijn in staat in relatief korte tijd grote volumes te printen in een goede kwaliteit";

      title2.innerHTML = "3D Printen - Formlabs";
      text2.innerHTML = "Deze hars printer kan met behulp van laserlicht en een speciale vloeistof heel gedetaileerd 3D-printen. Zeer geschikt voor bijvoorbeeld sieraden of miniaturen."
    break;
    
  }

  console.log(count);
}

function lb(){
  count-=1;

  if(count == -1){
    count = 0;
  }

  if(count === 0){
    title2.innerHTML = "3D Printen - Print farm";
    text2.innerHTML = "Onze betrouwbare Ender3 machines zijn in staat in relatief korte tijd grote volumes te printen in een goede kwaliteit";

    title1.innerHTML = "3D Printen - Objet30 Prime";
    text1.innerHTML = "Deze hoogwaardige 3D printer print de fijnste ontwerpen in hoog detail. Het ondersteunende materiaal is wateroplosbaar en daardoor eenvoudig en zonder 'littekens' te verwijderen"
  }

  console.log(count);
}



