//clolor for add btn
document.getElementById("add").onclick = function(){
    this.style.backgroundColor = "blue";
    document.getElementById("delete").style.backgroundColor = "gray";  
};

//color for delete btn
document.getElementById("delete").onclick = function(){
    this.style.backgroundColor = "red";
    document.getElementById("add").style.backgroundColor = "gray";
};

window.onload=function(){
   
}
