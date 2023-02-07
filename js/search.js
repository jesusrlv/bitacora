function searchDate(){
    var dateSearch = document.getElementById('busquedaDate').value;
    console.log(dateSearch);
    $.ajax({
        url: 'prcd/search.php',
        type: "POST",
        dataType:'dataString',
        data: {
            dateSearch:dateSearch
        },
        success: function(data)
        {
            $('#searchDate').fadeIn(1000).html(data);
        }

    });

}