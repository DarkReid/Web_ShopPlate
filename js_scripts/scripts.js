//red color btn
document.getElementById("add").onclick = function(){
    this.style.backgroundColor = "blue";
    document.getElementById("delete").style.backgroundColor = "gray";  
};

//blue color btn
document.getElementById("delete").onclick = function(){
    this.style.backgroundColor = "red";
    document.getElementById("add").style.backgroundColor = "gray";
};

//dropdown menu, show/hide div block
function selectedValue(selected){
    var selected = document.getElementById(selected);

    if(selected.value == "none"){
        document.getElementById("DVD").style.display = "none";
        document.getElementById("Furniture").style.display = "none";
        document.getElementById("Book").style.display = "none";
    }
    else if(selected.value == "dvd"){
        document.getElementById("DVD").style.display = "block";
        document.getElementById("Furniture").style.display = "none";
        document.getElementById("Book").style.display = "none";
    }
    else if(selected.value == "furniture"){
        document.getElementById("DVD").style.display = "none";
        document.getElementById("Furniture").style.display = "block";
        document.getElementById("Book").style.display = "none";
    }
    else if(selected.value == "book"){
        document.getElementById("DVD").style.display = "none";
        document.getElementById("Furniture").style.display = "none";
        document.getElementById("Book").style.display = "block";
    }
}