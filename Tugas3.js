function theme(){

    var selectBox = document.getElementById("theme");
    var value = selectBox.options[selectBox.selectedIndex].value;
    if(value=="0"){
        var b = document.getElementById("warna");
        b.style.backgroundColor = "white";
        b.style.color = "black";
    }
    else{
        var b = document.getElementById("warna");
        b.style.backgroundColor = "black";
        b.style.color = "white";
    }
}

function cuaca(){
    var selectBox = document.getElementById("weather");
    var value = selectBox.options[selectBox.selectedIndex].value;
    var cuaca = document.getElementById("cuaca");
    if(value == "0"){
        
        cuaca.innerText = "Know yourself, know your worth.";
    }
    else if(value == "1"){
        cuaca.innerText = "live for today, plan for tomorrow, party tonight."
    }
    else if(value == "2"){
        cuaca.innerText = "nobody really likes us expcept for us."
    }
    else{
        cuaca.innerText = "i'm just saying you could do better."
    }

}

function factor(){
    var x = document.getElementById("factor").value;
    var y = x;
    var hasil = document.getElementById("hasil");
    for(i = y-1; i>1 ;i--){
        y=y*i;
    }
    hasil.innerText = "The Factorial of "+x+" is "+y;
}