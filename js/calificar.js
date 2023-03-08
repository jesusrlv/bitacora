function calificar(folio,categoria,subcategoria,id){
    /* var observaciones = document.getElementById('observaciones'+id+subcategoria).value; */
    var likert = document.getElementById('likert'+id+subcategoria).value;
    var calificacion = 0;

    if (likert == 1) {
        calificacion == 0;
    }
    else if (likert == 2) {
        calificacion == 25;
    }
    else if (likert == 3) {
        calificacion == 50;
    }
    else if (likert == 4) {
        calificacion == 75;
    }
    else if (likert == 5) {
        calificacion == 100;
    }
    // let folio = folio;
    $.ajax({
        type: "POST",
        url: "prcd/calificar.php",
        data: {
            /* observaciones:observaciones, */
            likert:likert,
            folio:folio,
            categoria:categoria,
            subcategoria:subcategoria
        },
        success: function(data) {
            // $('#calificacionActual').fadeIn(1000).html(data);
            document.getElementById('likert'+id+subcategoria).setAttribute ("onchange","editarcCalificacion('.$rowSearch['folio'].',1,1,'.$rowSearch['id'].')");
/*             document.getElementById('calificacionActual'+subcategoria+folio).innerHTML = calificacion; */
            // document.getElementById('calificacion'+id+subcategoria).hidden = true;
            // document.getElementById('editadCalf'+id+subcategoria).hidden = false;
            Swal.fire({
                icon: 'success',
                imageUrl: 'img/logo_completo.png',
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
   /*  var observaciones = document.getElementById('observaciones'+id+subcategoria).value; */
    var likert = document.getElementById('likert'+id+subcategoria).value;


    $.ajax({
        type: "POST",
        url: "prcd/editarCalificacion.php",
        data: {
            /* observaciones:observaciones, */
            likert:likert,
            folio:folio,
            categoria:categoria,
            subcategoria:subcategoria
        },
        success: function(data) {
            // var likert = data.likert;
            if (likert == 1) {
                var calificacion = 0;
            }
            else if (likert == 2) {
                var calificacion = 25;
            }
            else if (likert == 3) {
                var calificacion = 50;
            }
            else if (likert == 4) {
                var calificacion = 75;
            }
            else if (likert == 5) {
                var calificacion = 100;
            }
/*             console.log(folio);
            console.log(likert);
            console.log(subcategoria); */
            console.log(calificacion);

            //$('#calificacionActual').fadeIn(1000).html(data);
            document.getElementById('calificacionActual'+subcategoria+folio).innerHTML = "";
            document.getElementById('calificacionActual'+subcategoria+folio).innerHTML = calificacion;
            // document.getElementById('calificacion'+documento).hidden = true;
            // document.getElementById('editadCalf'+documento).hidden = false;
            Swal.fire({
                icon: 'success',
                imageUrl: 'img/logo_completo.png',
                imageHeight: 200,
                title: 'Calificación actualizada',
                text: 'Proceso correcto',
                confirmButtonColor: '#3085d6',
                footer: 'INCLUSIÓN'
            // }).then(function(){window.location.reload()});
            });

        }
    });
}