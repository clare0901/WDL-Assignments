function Fact(){
    input = document.getElementById('num');
    num = input.value;
    var ans = 1;
    for (var i = 1; i <= num ;i++)
    {
        ans = ans * i
    }
    document.getElementById('label').style.visibility = "visible";
    document.getElementById('fact').style.visibility = "visible";
    document.getElementById('fact').value = ans; 
}

function Even_Odd(){
    var first = document.getElementById('one').value;
    var second = document.getElementById('two').value;

    var even = [];
    var odd = [];
    for(var i = first; i <= second; i++){
        if(i % 2 === 0){
            even.push(i);
        }
        else{
            odd.push(i);
        }
    }
    
document.getElementById('odd').innerHTML = odd;
document.getElementById('even').innerHTML = even;
}