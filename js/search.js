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