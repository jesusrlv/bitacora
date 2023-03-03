function calificar(folio,categoria,subcategoria,id){
    var observaciones = document.getElementById('observaciones'+id+subcategoria).value;
    var likert = document.getElementById('likert'+id+subcategoria).value;
    // let folio = folio;
    $.ajax({
        type: "POST",
        url: "prcd/calificar.php",
        data: {
            observaciones:observaciones,
            likert:likert,
            folio:folio,
            categoria:categoria,
            subcategoria:subcategoria
        },
        success: function(data) {
            // $('#calificacionActual').fadeIn(1000).html(data);
            document.getElementById('likert'+id+subcategoria).setAttribute ("onchange","editarcCalificacion('.$rowSearch['folio'].',1,'.$rowSearch['id'].')");
            document.getElementById('calificacionActual'+subcategoria+folio).innerHTML = calificacion;
            // document.getElementById('calificacion'+id+subcategoria).hidden = true;
            // document.getElementById('editadCalf'+id+subcategoria).hidden = false;
            Swal.fire({
                icon: 'success',
                imageUrl: '../../img/logo_consejo_04.png',
                imageHeight: 200,
                title: 'Documento calificado',
                text: 'Proceso correcto',
                confirmButtonColor: '#3085d6',
                footer: 'INCLUSIÓN'
            });
        }
    });
}

function editarCalificacion(folio,categoria,subcategoria,id){
    var observaciones = document.getElementById('observaciones'+id+subcategoria).value;
    var likert = document.getElementById('likert'+id+subcategoria).value;

    $.ajax({
        type: "POST",
        url: "prcd/editarCalificaciones.php",
        data: {
            observaciones:observaciones,
            likert:likert,
            folio:folio,
            categoria:categoria,
            subcategoria:subcategoria
        },
        success: function(data) {
            // $('#calificacionActual').fadeIn(1000).html(data);
            document.getElementById('calificacionActual'+subcategoria+folio).innerHTML = calificacion;
            // document.getElementById('calificacion'+documento).hidden = true;
            // document.getElementById('editadCalf'+documento).hidden = false;
            Swal.fire({
                icon: 'success',
                imageUrl: '../../img/logo_consejo_04.png',
                imageHeight: 200,
                title: 'Calificación actualizada',
                text: 'Proceso correcto',
                confirmButtonColor: '#3085d6',
                footer: 'INJUVENTUD'
            });
        }
    });
}