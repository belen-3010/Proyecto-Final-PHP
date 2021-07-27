let genero = document.getElementById("genero");
let genero2 = document.getElementById("genero2").style.display="none";
let valor = genero2.value;


function aparece(){
if(valor="narrativo"){
    genero2 = document.getElementById("genero2").style.display="inline";
}else{
    console.log("no es correcto")
}
}
