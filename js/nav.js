let sectionTable = [document.getElementById("liens-burger-educ"),  document.getElementById("liens-burger-travail"),  document.getElementById("liens-burger-etranger")];
let sectionOuverte;

function bougerMenu(section){
    for(i = 0; i < 3; i++){
        if(i % 2 == 0){
            sectionTable[i].style.left = "-101vw";
        }else{
            sectionTable[i].style.right = "-101vw";
        }
        
    }
    if(section != sectionOuverte){
        if(section % 2 == 0){
            sectionTable[section].style.left = "0";
        }else{
            sectionTable[section].style.right = "0";
        }
        sectionOuverte = section;
    }else{
        sectionOuverte = -1;
    }
}