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