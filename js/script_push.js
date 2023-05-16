function validarInputs(){

  var inp1 = 0;
  var inp2 = 0;

inp1 = document.getElementById('datos_usr');
inp2 = document.getElementById('datos_pc');


if((inp1.value.length > 0) && (inp2.value.length > 0)){
  document.getElementById("button2").disabled = false;
}
else {
  document.getElementById("button2").disabled = true;
}
}

function dateTime(){
  document.getElementById("hiddenDiv").hidden = false;
  document.getElementById("button1").disabled = true;
  document.getElementById("scheduleTime").value="";

}
function validarInputs2(){

var valor = document.getElementById("fileSwimm").value;

if(valor !== "" || valor !== NULL){
  document.getElementById("button3").disabled = false;
}
else{
  document.getElementById("button3").disabled = true;
}

}

function checkOut(){
  document.getElementById("btnCheckout").disabled = false;
}

function dateTime(){
  document.getElementById("hiddenDiv").hidden = false;
  document.getElementById("button1").disabled = true;
  document.getElementById("scheduleTime").value="";

}

function queryDate(){
  
  var dateS= document.querySelector("[name='scheduleDate']").value;
  var dateT= document.querySelector("[name='scheduleTime']").value;
  console.log(dateS);
        $.ajax({
                type:"POST",
                url:"prcd/date.php",
                data:{
                  dateS:dateS,
                  dateT:dateT
                },
                dataType: "html",
                cache: false,
                  success: function(data) {
                    $("#scheduleId").html(data);                  
                  }               
                });
}

function reservation(){
    var date = document.getElementById('scheduleDate').value;
    document.getElementById('dateInf').innerHTML = date;

    var hour = document.getElementById('scheduleTime').value;
    document.getElementById('hourInf').innerHTML = hour;

    var last = document.getElementById('lastName').value;
    document.getElementById('lastInf').innerHTML = last;

    var first = document.getElementById('firstName').value;
    document.getElementById('firstInf').innerHTML = first;

    var email = document.getElementById('email').value;
    document.getElementById('emailInf').innerHTML = email;

    var address = document.getElementById('address').value;
    document.getElementById('addressInf').innerHTML = address;

    var namecc = document.getElementById('cc-name').value;
    document.getElementById('ccInf').innerHTML = namecc;

    var numbercc = document.getElementById('cc-number').value;
    document.getElementById('ccnumber').innerHTML = numbercc;

}


  function submitReservation(){

    var formData = new FormData(document.getElementById("formSchedule"));
          $.ajax({
                  type:"POST",
                  url:"prcd/save.php",
                  data:formData,
                  dataType: "html",
                    success: function(data) {
                      Swal.fire({
                        icon: 'success',
                        imageUrl: 'img/InclusionLogo.png',
                        imageHeight: 200,
                        imageAlt: 'Inclusión',
                        title: 'Done!',
                        text: 'Su ticket será atendido a la brevedad',
                        text: '# de Ticket',
                        confirmButtonColor: '#3085d6',
                        footer: 'INCLUSIÓN'
                    }).then(function(){window.location='index.html';});         
                    }               
                  });
                  
                  event.preventDefault();

        }

        // bloqueos de input
        function cambioCheck1(){
          var valorCheck = document.getElementById('checkOtra');
            if(valorCheck.checked){
                // valorCheck.value = 1;
                document.getElementById('otra').disabled = false;
                document.getElementById('otra').setAttribute("name","otra1_desc");
            }
            else{
                // valorCheck.value = 0;
                document.getElementById('otra').disabled = true;
                document.getElementById('otra').removeAttribute("name");
                
                
            }
        }
        function cambioCheck2(){
          var valorCheck = document.getElementById('checkOtra2');
            if(valorCheck.checked){
                // valorCheck.value = 1;
                document.getElementById('otra2').disabled = false;
                document.getElementById('otra2').setAttribute("name","otra2_desc");
            }
            else{
                // valorCheck.value = 0;
                document.getElementById('otra2').disabled = true;
                document.getElementById('otra2').removeAttribute("name");
                
            }
        }
        function cambioCheck3(){
          var valorCheck = document.getElementById('checkOtra3');
            if(valorCheck.checked){
                // valorCheck.value = 1;
                document.getElementById('otra3').disabled = false;
                document.getElementById('otra3').setAttribute("name","otra3_desc");
            }
            else{
                // valorCheck.value = 0;
                document.getElementById('otra3').disabled = true;
                document.getElementById('otra3').removeAttribute("name");
                
            }
        }
        function cambioCheck4(){
          var valorCheck = document.getElementById('checkOtra4');
            if(valorCheck.checked){
                // valorCheck.value = 1;
                document.getElementById('otra4').disabled = false;
                document.getElementById('otra4').setAttribute("name","actualizar_sw2");
            }
            else{
                // valorCheck.value = 0;
                document.getElementById('otra4').disabled = true;
                document.getElementById('otra4').removeAttribute("name");
                
            }
        }
        function mostrarInputs(){
          var valorCheck = document.getElementById('printColor');
            if(valorCheck.checked){
                // valorCheck.value = 1;
                document.getElementById('inputPrint').hidden = false;
                
                document.getElementById('NoPag').setAttribute("name","numpagdoc");
                document.getElementById('NoPag').required = true;

                document.getElementById('NoImpresiones').setAttribute("name","noimpresiones");
                document.getElementById('NoImpresiones').required = true;

                document.getElementById('archivoimprimir').setAttribute("name","imprimirFile");
                document.getElementById('archivoimprimir').required = true;
            }
            else{
                // valorCheck.value = 0;
                document.getElementById('inputPrint').hidden = true;
                document.getElementById('NoPag').removeAttribute("name");
                document.getElementById('NoImpresiones').removeAttribute("name");
                document.getElementById('archivoimprimir').removeAttribute("name");
                
            }
        }
        function mostrarInputs2(){
          var valorCheck = document.getElementById('rw_cd');
            if(valorCheck.checked){
                // valorCheck.value = 1;
                document.getElementById('inputRW').hidden = false;
                
                document.getElementById('NoCopias').setAttribute("name","nocopias");
                document.getElementById('NoCopias').required = true;

                document.getElementById('archivocd').setAttribute("name","grabarFile");
                document.getElementById('archivocd').required = true;

            }
            else{
                // valorCheck.value = 0;
                document.getElementById('inputRW').hidden = true;
                document.getElementById('NoCopias').removeAttribute("name");
                document.getElementById('archivocd').removeAttribute("name");
                
            }
        }
        function mostrarInputs3(){
          var valorCheck = document.getElementById('web');
            if(valorCheck.checked){
                // valorCheck.value = 1;
                document.getElementById('WebUpload').hidden = false;
                document.getElementById('WebFile').setAttribute("name","publicarFile");
                document.getElementById('WebFile').required = true;
            }
            else{
                // valorCheck.value = 0;
                document.getElementById('WebUpload').hidden = true;
                document.getElementById('WebFile').removeAttribute("name");
                
            }
        }

