function valorCheckbox(){

    var valorCheck = document.getElementById('valueCheckbox');

    if(valorCheck.checked){
        valorCheck.value = 1;
    }
    else{
        valorCheck.value = 0;
    }
}