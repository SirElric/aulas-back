"use restrict"

var $display = 0;

const newCuriosity = () => {
    if($display == 0){
        document.getElementById('config-curiosity').style.display="none"; 
        document.getElementById('show-content').style.display="block"; 

        document.getElementById('new-curiosity').value="Nova Curiosidade";

        $display = 1;
    }else{
        document.getElementById('config-curiosity').style.display="flex"; 
        document.getElementById('show-content').style.display="none"; 

        document.getElementById('new-curiosity').value="Curiosidades";

        $display = 0;
    }
}        

const newAbout = () => {

    if($display == 0){
        document.getElementById('form-about').style.display="none"; 
        document.getElementById('show-content').style.display="block"; 

        document.getElementById('new-about').value="Nova informação";

        $display = 1;

    }else{

        document.getElementById('form-about').style.display="block"; 
        document.getElementById('show-content').style.display="none"; 

        document.getElementById('new-about').value="Informações da Empresa";

        $display = 0;
    }
}      

const newLocal = () => {

    if($display == 0){
        document.getElementById('form-local').style.display="grid"; 
        document.getElementById('show-content').style.display="none"; 

        document.getElementById('new-local').value="Localização das Lojas";

        $display = 1;

    }else{

        document.getElementById('form-local').style.display="none"; 
        document.getElementById('show-content').style.display="block"; 

        document.getElementById('new-local').value="Nova Loja";

        $display = 0;
    }
}