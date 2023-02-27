$(document).ready(function() {
    $('#pwdForm').submit(function(e) {

    var datos_usr = document.getElementById('datos_usr').value;
    var datos_pc = document.getElementById('datos_pc').value;

    var internetVal = document.getElementById('internet');
    if(internetVal.checked){
        var internet = 1;
    }
    else{
        var internet = 0;
    }
    var inst_perifericoVal = document.getElementById('inst_periferico');
    if(inst_perifericoVal.checked){
        var inst_periferico = 1;
    }
    else{
        var inst_periferico = 0;
    }

    var limp_equipoVal = document.getElementById('limp_equipo');
    if(limp_equipoVal.checked){
        var limp_equipo = 1;
    }
    else{
        var limp_equipo = 0;
    }

    var tec_mouseVal = document.getElementById('tec_mouse');
    if(tec_mouseVal.checked){
        var tec_mouse = 1;
    }
    else{
        var tec_mouse = 0;
    }

    var falla_monitorVal = document.getElementById('falla_monitor');
    if(falla_monitorVal.checked){
        var falla_monitor = 1;
    }
    else{
        var falla_monitor = 0;
    }

    var checkOtraVal = document.getElementById('checkOtra');
    if(checkOtraVal.checked){
        var checkOtra = 1;
        var otra = document.getElementById('otra').value;
    }
    else{
        var checkOtra = 0;
        var otra = 0;
    }

    // Software
    var act_officeVal = document.getElementById('act_office');
    if(act_officeVal.checked){
        var act_office = 1;
    }
    else{
        var act_office = 0;
    }

    var activar_soVal = document.getElementById('activar_so');
    if(activar_soVal.checked){
        var activar_so = 1;
    }
    else{
        var activar_so = 0;
    }

    var checkOtra4Val = document.getElementById('checkOtra4');
    if(checkOtra4Val.checked){
        var checkOtra4 = 1;
        var otra4 = document.getElementById('otra4').value;
    }
    else{
        var checkOtra4 = 0;
        var otra4 = 0;
    }

    var formateo_completoVal = document.getElementById('formateo_completo');
    if(formateo_completoVal.checked){
        var formateo_completo = 1;
    }
    else{
        var formateo_completo = 0;
    }

    var limpieza_virusVal = document.getElementById('limpieza_virus');
    if(limpieza_virusVal.checked){
        var limpieza_virus = 1;
    }
    else{
        var limpieza_virus = 0;
    }

    var instalar_swVal = document.getElementById('instalar_sw');
    if(instalar_swVal.checked){
        var instalar_sw = 1;
    }
    else{
        var instalar_sw = 0;
    }

    var checkOtra2Val = document.getElementById('checkOtra2');
    if(checkOtra2Val.checked){
        var checkOtra2 = 1;
        var otra2 = document.getElementById('otra2').value;
    }
    else{
        var checkOtra2 = 0;
        var otra2 = 0;

    }

    // otros

    var escanearVal = document.getElementById('escanear');
    if(escanearVal.checked){
        var escanear = 1;
    }
    else{
        var escanear = 0;
    }

    var printColorVal = document.getElementById('printColor');
    if(printColorVal.checked){
        var printColor = 1;
        var numpagdoc = document.getElementById('NoPag').value;
        var noimpresiones = document.getElementById('NoImpresiones').value;
    }
    else{
        var printColor = 0;
        var numpagdoc = 0;
        var noimpresiones = 0;
    }

    var rw_cdVal = document.getElementById('rw_cd');
    if(rw_cdVal.checked){
        var rw_cd = 1;
        var nocopias = document.getElementById('NoCopias').value;
    }
    else{
        var rw_cd = 0;
    }

    var webVal = document.getElementById('web');
    if(webVal.checked){
        var web = 1;
    }
    else{
        var web = 0;
    }

    var checkOtra3Val = document.getElementById('checkOtra3');
    if(checkOtra3Val.checked){
        var checkOtra3 = 1;
        var otra3 = document.getElementById('otra3').value;
    }
    else{
        var checkOtra3 = 0;
        var otra3 = 0;
    }

    if (datos_usr == 1 || datos_pc == 1 || internet == 1 || inst_periferico == 1 || limp_equipo == 1 || tec_mouse == 1 || falla_monitor == 1 || checkOtra == 1){
        var hardware = 1;
    } else {
        var hardware = 0;
    }
    if (act_office == 1 || activar_so == 1 || checkOtra4 == 1 || formateo_completo == 1 || limpieza_virus == 1 || instalar_sw == 1 || checkOtra2 == 1){
        var software = 1;
    } else {
        var software = 0;
    }

    if (escanear == 1 || printColor == 1 || rw_cd == 1 || web == 1 || checkOtra3 == 1){
        var otrosap = 1;
    } else {
        var otrosap = 0;
    }

    var observaciones = document.getElementById('observaciones').value;
        
        e.preventDefault();

        if(otra.length == 0 || /^\s+$/.test(otra)){

        Swal.fire({
            icon: 'error',
            title: 'Faltan datos',
            html: 'Datos incompletos en opción "Otra" de la sección de <b>Hardware</b>',
            footer: 'INCLUSIÓN'
        });

            return;
        }

        if(otra2.length == 0 || /^\s+$/.test(otra2)){

        Swal.fire({
            icon: 'error',
            title: 'Faltan datos',
            html: 'Datos incompletos en opción "Otra" de la sección de <b>Software</b>',
            footer: 'INCLUSIÓN'
        });
        
            return;
        }

        if( otra3.length == 0 || /^\s+$/.test(otra3)){

        Swal.fire({
            icon: 'error',
            title: 'Faltan datos',
            html: 'Datos incompletos en opción "Otra" de la sección de <b>Otros</b>',
            footer: 'INCLUSIÓN'
        });

            return;
        } 

        
            $.ajax({
                url: 'prcd/save.php',
                type: "POST",
                dataType:'json',
                data: {
                    datos_usr:datos_usr,
                    datos_pc:datos_pc,
                    internet:internet,
                    inst_periferico:inst_periferico,
                    limp_equipo:limp_equipo,
                    tec_mouse:tec_mouse,
                    falla_monitor:falla_monitor,
                    checkOtra:checkOtra,
                    otra:otra,
                    act_office:act_office,
                    activar_so:activar_so,
                    checkOtra4:checkOtra4,
                    otra4:otra4,
                    formateo_completo:formateo_completo,
                    limpieza_virus:limpieza_virus,
                    instalar_sw:instalar_sw,
                    checkOtra2:checkOtra2,
                    otra2:otra2,
                    escanear:escanear,
                    printColor:printColor,
                    numpagdoc:numpagdoc,
                    noimpresiones:noimpresiones,
                    rw_cd:rw_cd,
                    nocopias:nocopias,
                    web:web,
                    checkOtra3:checkOtra3,
                    otra3:otra3,
                    observaciones:observaciones,
                    hardware:hardware,
                    software:software,
                    otrosap:otrosap
                },
                success: function(response)
                {
                    // var jsonData = JSON.parse(response);
                    var jsonData = JSON.parse(JSON.stringify(response));

                    
                    console.log(jsonData.variable);
                    console.log(jsonData.error);

                    var num = jsonData.variable;
                        
                    // user is logged in successfully in the back-end
                    // let's redirect
                    if (jsonData.success == "1")
                    {
                        Swal.fire({
                            icon: 'success',
                            imageUrl: 'img/InclusionLogo.png',
                            imageWidth: 200,
                            title: 'Bitácora actualizada',
                            text: 'Su turno es el ' +num,
                            confirmButtonColor: '#3085d6',
                            footer: 'INCLUSIÓN'
                        }).then(function(){window.location='index.html';});
                    }
                    else if (jsonData.success == "0")
                    {
                        Swal.fire({
                            icon: 'error',
                            title: 'Incorrecto',
                            text: 'Incorrecto',
                            footer: 'INCLUSIÓN'
                        }).then(function(){window.location='index.html';});

                    }
                }
            });
        
        
    });
});