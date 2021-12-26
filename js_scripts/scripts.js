document.getElementById("add").style.backgroundColor = "white";
document.getElementById("delete").style.backgroundColor = "white";

document.getElementById("add").onclick = function(){
    this.style.backgroundColor = "blue";
    document.getElementById("delete").style.backgroundColor = "gray";
};

document.getElementById("delete").onclick = function(){
    this.style.backgroundColor = "red";
    document.getElementById("add").style.backgroundColor = "gray";
};
