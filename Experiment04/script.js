function grade(){
    var s1 = Number(document.getElementById('n1').value);
    var s2 = Number(document.getElementById('n2').value);
    var s3 = Number(document.getElementById('n3').value);
    var s4 = Number(document.getElementById('n4').value);
    var s5 = Number(document.getElementById('n5').value);
    var tm = s1 + s2 + s3 + s4 + s5
    var p = tm / 5;
    document.getElementById('total').innerHTML = tm;
    document.getElementById('Percentage').innerHTML = p +'%';
    if (p >= 75 ) {
        document.getElementById('grade').innerHTML = 'Distinction';
    }
    else if ((p >= 60) & (p < 75)) {
        document.getElementById('grade').innerHTML = '1st Class';
    }
    else if ((p >= 50) & (p < 60)) {
        document.getElementById('grade').innerHTML = '2nd Class';
    }
    else if ((p >= 40) & (p < 50)) {
        document.getElementById('grade').innerHTML = 'Pass';
    }
    else {
        document.getElementById('grade').innerHTML = 'Fail';
    }
    document.getElementById("result").style.display = 'block';
    document.getElementById('n1').disabled = true;
    document.getElementById('n2').disabled = true;
    document.getElementById('n3').disabled = true;
    document.getElementById('n4').disabled = true;
    document.getElementById('n5').disabled = true;
}