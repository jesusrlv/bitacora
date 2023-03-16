function calificar(folio,categoria,subcategoria,id){
    
    var likert = document.getElementById('likert'+id+subcategoria).value;
    var observaciones = document.getElementById('observaciones'+id+subcategoria).value;
    /* var calificacion = 0; */
/* 
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
    } */
    // let folio = folio;
    $.ajax({
        type: "POST",
        url: "prcd/calificar.php",
        data: {
            /* observaciones:observaciones, */
            likert:likert,
            folio:folio,
            categoria:categoria,
            subcategoria:subcategoria,
            observaciones:observaciones
        },
        success: function(data) {
            if (likert == 1) {
                var calificacion = 0;
                document.getElementById('calificacionActual'+subcategoria+folio).setAttribute ("class","row mb-3 border border-danger p-2 text-end");
                document.getElementById('calificacionActual'+subcategoria+folio).setAttribute ("style","box-shadow: -8px 0px 0px 0px #dc3545; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #dc3545");
            }
            else if (likert == 2) {
                var calificacion = 25;
                document.getElementById('calificacionActual'+subcategoria+folio).setAttribute ("class","row mb-3 bg-danger-subtle p-2 text-end");
                document.getElementById('calificacionActual'+subcategoria+folio).setAttribute ("style","box-shadow: -8px 0px 0px 0px #f8d7da; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #f8d7da;");
            }
            else if (likert == 3) {
                var calificacion = 50;
                document.getElementById('calificacionActual'+subcategoria+folio).setAttribute ("class","row mb-3 border border-warning p-2 text-end");
                document.getElementById('calificacionActual'+subcategoria+folio).setAttribute ("style","box-shadow: -8px 0px 0px 0px #ffc107; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #ffc107;");
            }
            else if (likert == 4) {
                var calificacion = 75;
                document.getElementById('calificacionActual'+subcategoria+folio).setAttribute ("class","row mb-3 border border-success-subtle p-2 text-end");
                document.getElementById('calificacionActual'+subcategoria+folio).setAttribute ("style","box-shadow: -8px 0px 0px 0px #a3cfbb; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #a3cfbb;");
            }
            else if (likert == 5) {
                var calificacion = 100;
                document.getElementById('calificacionActual'+subcategoria+folio).setAttribute ("class","row mb-3 border border-success p-2 text-end");
                document.getElementById('calificacionActual'+subcategoria+folio).setAttribute ("style","box-shadow: -8px 0px 0px 0px #198754; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #198754;");
            }
            // $('#calificacionActual').fadeIn(1000).html(data);
            document.getElementById('calificacionActual'+subcategoria+folio).innerHTML = "";
            document.getElementById('likert'+id+subcategoria).setAttribute ("onchange","editarcCalificacion('.$rowSearch['folio'].',1,1,'.$rowSearch['id'].')");
            document.getElementById('calificacionActual'+subcategoria+folio).innerHTML = observaciones + " " +calificacion;
            console.log("Esta es la calificación editable"+calificacion);
            console.log("Subcategoría"+subcategoria);
            console.log("Folio"+folio);
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
    var observaciones = document.getElementById('observaciones'+id+subcategoria).value;
    var likert = document.getElementById('likert'+id+subcategoria).value;
/*     var observaciones = document.getElementById('observaciones'+id+subcategoria).value; */


    $.ajax({
        type: "POST",
        url: "prcd/editarCalificacion.php",
        data: {
            observaciones:observaciones,
            likert:likert,
            folio:folio,
            categoria:categoria,
            subcategoria:subcategoria,
            observaciones:observaciones
        },
        success: function(data) {
            // var likert = data.likert;
            if (likert == 1) {
                var calificacion = 0;
                document.getElementById('calificacionActual'+subcategoria+folio).setAttribute ("class","row mb-3 border border-danger p-2 text-end");
                document.getElementById('calificacionActual'+subcategoria+folio).setAttribute ("style","box-shadow: -8px 0px 0px 0px #dc3545; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #dc3545");
            }
            else if (likert == 2) {
                var calificacion = 25;
                document.getElementById('calificacionActual'+subcategoria+folio).setAttribute ("class","row mb-3 bg-danger-subtle p-2 text-end");
                document.getElementById('calificacionActual'+subcategoria+folio).setAttribute ("style","box-shadow: -8px 0px 0px 0px #f8d7da; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #f8d7da;");
            }
            else if (likert == 3) {
                var calificacion = 50;
                document.getElementById('calificacionActual'+subcategoria+folio).setAttribute ("class","row mb-3 border border-warning p-2 text-end");
                document.getElementById('calificacionActual'+subcategoria+folio).setAttribute ("style","box-shadow: -8px 0px 0px 0px #ffc107; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #ffc107;");
            }
            else if (likert == 4) {
                var calificacion = 75;
                document.getElementById('calificacionActual'+subcategoria+folio).setAttribute ("class","row mb-3 border border-success-subtle p-2 text-end");
                document.getElementById('calificacionActual'+subcategoria+folio).setAttribute ("style","box-shadow: -8px 0px 0px 0px #a3cfbb; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #a3cfbb;");
            }
            else if (likert == 5) {
                var calificacion = 100;
                document.getElementById('calificacionActual'+subcategoria+folio).setAttribute ("class","row mb-3 border border-success p-2 text-end");
                document.getElementById('calificacionActual'+subcategoria+folio).setAttribute ("style","box-shadow: -8px 0px 0px 0px #198754; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #198754;");
            }
            //console.log(folio);
            console.log(likert);
            //console.log(subcategoria);
            console.log(calificacion);

            //$('#calificacionActual').fadeIn(1000).html(data);
            document.getElementById('calificacionActual'+subcategoria+folio).innerHTML = "";
            document.getElementById('calificacionActual'+subcategoria+folio).innerHTML = calificacion;
            document.getElementById('calificacionActual'+subcategoria+folio).innerHTML = observaciones + " " +calificacion;
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

