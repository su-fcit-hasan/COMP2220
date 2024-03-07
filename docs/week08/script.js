function oddEven(num){
    if(num % 2 == 0){
        return "Even";
    } else {
        return "Odd";
    }
}
function ftn1(){
    var x = Number.parseInt(prompt("Enter a number"));
    alert(oddEven(x));
}

function ftn2(){
    var x = prompt("Enter a string");
    alert(x.length);
}
function ftn3(){
    do{
        var x = prompt("Enter a string");
        document.getElementById("demo").innerHTML += x + x.length + "<br>";
    }while(x.length<=5);
}
