const urgent = document.querySelector(".urgent");
const a_faire = document.querySelector(".a-faire");
const information = document.querySelector(".information");

const changeUrgentColor = (e) => {
    if(e.target.id == "urgent") {
        urgent.style.backgroundColor = "red";
    } else {
        urgent.style.backgroundColor = "lightcoral";
    }
};

const changeAFaireColor = (e) => {
    if(e.target.id == "a-faire") {
        a_faire.style.backgroundColor = "blue";
    } else {
        a_faire.style.backgroundColor = "lightblue";
    }
};

const changeInformationColor = (e) => {
    if(e.target.id == "information") {
        information.style.backgroundColor = "green"
    } else {
        information.style.backgroundColor = "lightgreen"
    }
};

urgent.addEventListener("mouseover", changeUrgentColor);
a_faire.addEventListener("mouseover", changeAFaireColor);
information.addEventListener("mouseover", changeInformationColor);