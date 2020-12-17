var tableau = document.getElementById('tableau');

fetch('halloffame.php',{})
.then(r => r.json())
.then(r =>{

  var c=1;
  for(i in r) {
    console.log(r[i]);
    var ligne = document.createElement('tr');
    var infos = "<td>"+r[i]['pseudo']+"</td><td>"+r[i]['temps']+"</td><td>"+r[i]['score']+'</td>';
    ligne.innerHTML = infos;
    tableau.appendChild(ligne);
    //var styleCSS = document.getElementsByClassName('styleCellule');

  }



})
