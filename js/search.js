function searchDate(){
    var dateSearch = document.getElementById('busquedaDate').value;
    console.log(dateSearch);
    $.ajax({
        url: 'prcd/search.php',
        type: "POST",
        dataType:'html',
        data: {
            dateSearch:dateSearch
        },
        success: function(data)
        {
            $('#searchDate').fadeIn(1000).html(data);
        }

    });

}
const hoy = new Date();
function pendientes(){
    var hoy = new Date();
    var dateSearch = hoy.getFullYear() + '-' + ( hoy.getMonth() + 1 ) + '-' + hoy.getDate();
    console.log(dateSearch);
    $.ajax({
        url: 'prcd/search2.php',
        type: "POST",
        dataType:'html',
        data: {
            dateSearch:dateSearch
        },
        success: function(data)
        {
            $('#searchDate').fadeIn(1000).html(data);
        }

    });
    // document.getElementById('contador1').innerHTML = "";

    // const collection = document.getElementsByClassName("valores");
    //     for (let i = 0; i < collection.length; i++) {
    //        var valor = valor + collection[i].value;
    //     }      
    collection = document.querySelectorAll("#valores");
    for (let i = 0; i < collection.length; i++) {
        var valor = valor + collection[i].nodeValue;
    }      
        console.log("Colección "+collection);
        console.log("Valor de los input "+valor);
        // document.getElementById('contador1').innerHTML = valor;
}

function cambioStatus(x){
    $.ajax({
        url: 'prcd/cambioEstatus.php',
        type: "POST",
        dataType:'html',
        data: {
            x:x
        },
        success: function(data)
        {
            // $('#cambioStatus1').fadeIn(1000).html(data);
            // document.getElementById('cambioStatus1').innerHTML ='<a href="cambioStatus('.$rowSearch['id'].')" onclick=""><span class="badge text-bg-danger"><i class="bi bi-x-circle-fill"></i> No Solucionado</span></a>';
        }

    });

}

function desbloquearfinal(){
    document.getElementById("fechafinal").disabled = false;
    
}

function searchDate2(){
    var dateSearch1 = document.getElementById('fechainicial').value;
    var dateSearch2 = document.getElementById('fechafinal').value;
    $.ajax({
        url: 'prcd/fechasreporte.php',
        type: "POST",
        dataType:'html',
        data: {
            dateSearch1:dateSearch1,
            dateSearch2:dateSearch2
        },
        success: function(data)
        {
            $('#searchDate1').fadeIn(1000).html(data);
        }

    });

}