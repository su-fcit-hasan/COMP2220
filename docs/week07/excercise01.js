function myFunction1(){
    var answer = prompt("what is your age");
    if (answer < 18){
        alert("You are not allowed to visit this website");
    }
    else{
        alert("You are allowed to visit this website");
    }
}
function f2c(f){
    var c = (f-32)/ 1.8;
    return c;
}

function myFunction2(){
    var answer = prompt("what is the weather");
    var c = f2c(Number.parseInt(answer));
    alert(c);
}

function myFunction3(){
    var answer = prompt("what is the dollar");
    var o = answer * 3.67;
    alert(o);
}

function myFunction4(){
    var x = 10;
    var result = "";
    while(x >= 1){
        result = result + x;
        x--;
    }
    document.getElementById("demo").innerHTML = result;
}

function myFunction5(){
    var x = Number.parseInt(prompt("what is the hour"));
    alert(x);
    if(x >=6 && x<=10){
        document.getElementById("food").innerHTML = "breakfast";
    } else if (x>=11 && x<=13){
        document.getElementById("food").innerHTML = "lunch";
    } else if (x >=17 && x<=20)  {
        document.getElementById("food").innerHTML = "dinner";
    } else
        document.getElementById("food").innerHTML = "nothing come again";
}
function myFunction6(){
    do{
        var r = prompt("Which company made Javascript");
    }while(r == "Oracle");
    alert("Correct answer");
}

function tip(am){
    return am * 0.20;
}
function myFunction7(){
    var a = Number.parseInt(prompt("Enter total bill amount"));
    var t = tip(a);
    alert("Tip amount for " + a + " is " + t);
}


function myFunction8(clr){
    document.getElementById("body").style.backgroundColor = clr;
}
