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
//   var inp5 = 0;
//   var inp6 = 0;
//   var inp7 = 0;
//   var inp8 = 0;

// inp5 = document.getElementById('cc-name');
// inp6 = document.getElementById('cc-number');
// inp7 = document.getElementById('cc-expiration');
// inp8 = document.getElementById('cc-cvv');

// if((inp5.value.length > 0) && (inp6.value.length > 0) && (inp7.value.length > 0) && (inp8.value.length > 0)){
//   document.getElementById("button3").disabled = false;
// }
// else {
//   document.getElementById("button3").disabled = true;
// }
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
// submit

          // $(document).ready(function(){
          // var form=$("#form1");
          // $("#form1").submit(function(event){
          // $.ajax({
          //         type:"POST",
          //         url:"prcd/filtro.php",
          //         data:form.serialize(),
          //         dataType: "html",
          //         // async:false,
          //         cache: false,
          //           success: function(data) {
          //             $("#txtHint").html(data);                  
          //           }               
          //         });
                  
          //         event.preventDefault();
          // });
          // });

  function submitReservation(){
    // var date = document.getElementById('scheduleDate').value;
    // var hour = document.getElementById('scheduleTime').value;
    // var last = document.getElementById('lastName').value;
    // var first = document.getElementById('firstName').value;
    // var email = document.getElementById('email').value;
    // var address = document.getElementById('address').value;
    // var data=getFiles();
    // data = getFormData("formSchedule",data);
    var formData = new FormData(document.getElementById("formSchedule"));
 
    // var filter= document.querySelector("[name='filter']").value;
    // var filtro= document.querySelector("[name='filtro']").value;
    // var talla= document.querySelector("[name='talla']").value;
        
          $.ajax({
                  type:"POST",
                  url:"prcd/save.php",
                  // data:{
                  //   date:date,
                  //   hour:hour,
                  //   last:last,
                  //   first:first,
                  //   email:email,
                  //   address:address
                  // },
                  data:formData,
                  dataType: "html",
                  contentType:false,
                  processData:false,
                  cache: false,
                    success: function(data) {
                      // $("#txtHint").html(data);    
                      // alert("Reservation Done!")     
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
                    }).then(function(){window.location='schedule.php';});         
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
/*                 document.getElementById('otra').required = true; */
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
/*                 document.getElementById('otra2').required = true; */
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
/*                 document.getElementById('otra3').required = true; */
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
/*                 document.getElementById('otra4').required = true; */
                document.getElementById('otra4').setAttribute("name","actualizar_sw2");
            }
            else{
                // valorCheck.value = 0;
                document.getElementById('otra4').disabled = true;
                document.getElementById('otra4').removeAttribute("name");
                
            }
        }