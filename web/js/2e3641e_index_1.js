var parseDateFormat = 'YYYY-MM-DD HH:mm:ss';
var valueFormat = 'YYYYMMDDHHmm';
var displayFormat = 'LLLL';

$(document).ready(function(){

    initializeDatepickers();

    $("#form-consulta-ot").validate({
        submitHandler: function(form) {
            buscarPedido();
            return false;
        }
    });

    $('#div-datos-pedido').on('click', '#btn-buscar-turnos', function(){
        consultarTurnos();
    })

    $('#div-turnos-disponibles').on('click', 'input[name=turno]', function(e){
        onTurnoClick(e);
    });


    $("#form-actualizacion-datos").validate({
        submitHandler: function(form) {
            $('#btn-actualizar-datos').button('loading');
            actualizarDatos();
            return false;
        }
    });

    //una vez cargado todo el form, habilito el botón de buscar.
    $('#btn-buscar-pedido').prop('disabled', false);

    $('#confirm-otraConsulta').click(function(){
        resetFormBusqueda();
    });

    $('#confirm-imprimir').click(function(){
        window.print();
    });

});


function initializeDatepickers(){

    var defaultDate = new moment();

    var fechaDesde =  $('#turnos-fechadesde').datetimepicker({
        format: 'DD/MM/YYYY',
        minDate: defaultDate,
        defaultDate: defaultDate
    });
    var fechaHasta = $('#turnos-fechahasta').datetimepicker({
        format: 'DD/MM/YYYY',
        defaultDate: defaultDate.clone().add(7, 'd'),
        maxDate: defaultDate.clone().add(7, 'd')
    });
    fechaDesde.on("dp.change", function (e) {
        var maxDate = moment(e.date).add(7, 'd');
        $('#turnos-fechahasta').data("DateTimePicker")
            .maxDate(maxDate)
            .minDate(e.date)
            .date(maxDate)
    });
}

function buscarPedido()
{
    var siniestro = $('#siniestro').val();
    var companiaId = $('#compania').val();
    var params = {
        siniestro: siniestro,
        companiaId: companiaId
    };

    toogleFormConsultaOT(false);

    LCS.NAVIGATION.postToJsonAction('lcs_app.default.obtenerpedidoservicio', params, null, function(response){
            processObtenerPedidoResponse(response);
            toogleFormConsultaOT(true);
        },
        function(){
            toogleFormConsultaOT(true);
        });
}

function toogleFormConsultaOT(editable)
{
    if(editable)
    {
        $('#btn-buscar-pedido').button('reset');
    }
    else
    {
        //estos elementos se desocultan cada uno con su respectiva acción
        $('#div-turnos-disponibles').empty();
        $('#div-datos-pedido').hide();
        $('#div-datos-pedido-error').hide();
        $('#alert-actualizardatos').hide();
        $('#btn-buscar-pedido').button('loading');
    }
    $('#form-consulta-ot .form-control').prop('readonly', !editable);
}

function resetFormBusqueda()
{
    //preparo el form de consulta
    $('#siniestro').val('');
    $('#compania').val('');

    $('#div-datos-pedido input').val('');
    $('#div-datos-pedido p').text('');

    $('#div-turnos-disponibles').empty();
    $('#div-datos-pedido').hide();
    $('#div-datos-pedido-error').hide();
    $('#alert-actualizardatos').hide();

    $('#btn-buscar-pedido').button('reset');

    //limpio el form de confirmacion
    $('#confirmacion-main-container p').text('');

    $('#confirmacion-main-container').fadeOut(function(){
        $('#consulta-main-container').fadeIn();
    });
}

function setDatosPedido(data) {
    $('#nroOt').val(data.nroOt);
    $('#nroOtStatic').text(data.nroOt);
    $('#fechaAltaStatic').text(moment(data.fechaAlta.date, parseDateFormat).format(displayFormat));
    $('#nombre').val(data.nombre);
    $('#patente').val(data.patente);
    $('#celular').val(data.celular);
    setTurnoSeleccionado((data.turno && data.turno.date) ? data.turno.date : null);

    $('#sucursal').val(data.sucursal);
    $('#horasEstimadas').val(data.horasEstimadas);
}

function setDatosConfirmacion(data) {
    $('#confirm-nombre').text(data.nombre);
    $('#confirm-patente').text(data.patente);
    $('#confirm-celular').text(data.celular);
    $('#confirm-sucursal').text(data.sucursal);
    $('#confirm-horasEstimadas').text(data.horasEstimadas);
    $('#confirm-turnoSeleccionado').text(data.turnoText);
}

function setTurnoSeleccionado(turno)
{
    if(turno){
        var turnoMoment = moment(turno, parseDateFormat);
        $('#turnoSeleccionado').val(turnoMoment.format(displayFormat));
        $('#turnoSeleccionadoDate').val(turnoMoment.format(valueFormat));
    }
}

function processObtenerPedidoResponse(response) {
    var data = response.data;
    if(data.errors && data.errors.length > 0)
    {
        $('#datos-pedido-error').empty();
        $('#datos-pedido-error').attr('data-info', data.errors.join('|'));
        LCS.UI.bootstrapAlert('#datos-pedido-error', 'Estimado cliente, verifique su número de siniestro o comuníquese con nuestro call center al 0810-555-2747 – Gracias – ', 'Atención!');

        $('#div-datos-pedido').hide(function(){
            $('#div-datos-pedido-error').show();
        });
    }
    else{

        setDatosPedido(data);
        $('#div-datos-pedido-error').hide(function(){
            $('#div-datos-pedido').show();
        });

        //$('#datos-pedido-info').text(JSON.stringify(data));
    }
}

function getDiaTurnoObject(lastDay) {
    var $object = $($('#template-turno-dia').html());
    $object.find('legend').text(lastDay.format('dddd D [de] MMMM [de] YYYY'));

    return $object;
}

function appendTurnoDisponibleObject($currentDayObject, value)
{
    //obtengo el turno actual, si estuviera disponible
    var turnoDate = $('#turnoSeleccionadoDate').val();
    var turnoMoment = moment(turnoDate, valueFormat);
    var currentTurno = turnoMoment.isValid() ? turnoMoment : null;
    var checked = currentTurno && currentTurno.isSame(value);
    var hora = value.format('HH:mm');
    var value = value.format(parseDateFormat);

    var $object = $($('#template-turno-hora').html());
    $object.append( document.createTextNode(hora))
        .children('input')
        .attr('id', 'turno_'+value)
        .val(value)
        .prop('checked', checked);

    $currentDayObject.find('.horas-container').append($object);

    var selectedClassName = 'turno-selected';
    if(checked){
        $currentDayObject.find('legend').addClass(selectedClassName);
        $object.addClass(selectedClassName);
    }
}

function processTurnosDisponibles(response) {
    var divTurnos = $('#div-turnos-disponibles');
    divTurnos.empty();

    var turnos = response.data.turnos;
    var currentDayObject;
    if(turnos)
    {
        var lastDay;
        for(var i=0;i<turnos.length;i++)
        {
            var currentTurno = moment(turnos[i].date);
            //aca voy a llevar el control del dia, para ordenar un poco mejor los turnos disponibles

            if(!lastDay || !lastDay.isSame(currentTurno.clone().startOf('day')))
            {
                currentDayObject = getDiaTurnoObject(currentTurno);
                divTurnos.append(currentDayObject);
            }

            appendTurnoDisponibleObject(currentDayObject, currentTurno);

            lastDay = currentTurno.clone().startOf('Day');
        }
    }
}

function consultarTurnos(){
    var nroOt = $('#nroOt').val();
    var fechaDesde = $('#turnos-fechadesde').data("DateTimePicker").date().format('YYYYMMDD');
    var fechaHasta = $('#turnos-fechahasta').data("DateTimePicker").date().format('YYYYMMDD');

    var params = {
        nroOt: nroOt,
        fechaDesde: fechaDesde,
        fechaHasta: fechaHasta
    };
    var $btn = $('#btn-buscar-turnos').button('loading');
    LCS.NAVIGATION.postToJsonAction('lcs_app.default.turnosdisponibles', params, null, function(response){
            processTurnosDisponibles(response);
            $btn.button('reset');
        },
        function(){
            $btn.button('reset');
        });
}

function onTurnoClick(e){
    var $turnoSeleccionado = $('input[name=turno]:checked');
    if($turnoSeleccionado.length > 0) {
        var turnoSeleccionadoValue = $turnoSeleccionado.val();
        setTurnoSeleccionado(turnoSeleccionadoValue);

        var selectedClassName = 'turno-selected';
        var $turnosContainer = $('#div-turnos-disponibles');
        $turnosContainer.find('label').removeClass(selectedClassName);
        $turnosContainer.find('legend').removeClass(selectedClassName);
        $turnoSeleccionado.parent().addClass(selectedClassName);
        $turnoSeleccionado.closest('fieldset').find('legend').addClass(selectedClassName);
    }
}

function actualizarDatos()
{
    var nroOt = $('#nroOt').val();
    var nombre = $('#nombre').val();
    var patente = $('#patente').val();
    var celular = $('#celular').val();
    var turno = $('#turnoSeleccionadoDate').val();
    var turnoText = $('#turnoSeleccionado').val();
    var sucursal = $('#sucursal').val();
    var horasEstimadas = $('#horasEstimadas').val();

    var data = {
        nroOt: nroOt,
        nombre: nombre,
        patente: patente,
        celular: celular,
        turno: turno,
        turnoText: turnoText,
        sucursal: sucursal,
        horasEstimadas: horasEstimadas
    };

    toogleFormDatosOT(false);

    LCS.NAVIGATION.postToJsonAction('lcs_app.default.actualizardatos', null, data, function(response){
            processActualizarDatosResponse(response, data);
            toogleFormDatosOT(true);
        },
        function(){
            toogleFormDatosOT(true);
        });
}

function toogleFormDatosOT(editable)
{
    if(editable)
    {
        $('#btn-actualizar-datos').button('reset');
    }
    else
    {
        $('#alert-actualizardatos').hide();
    }
    $('.form-datos-ot').prop('readonly', !editable);
}

function showConfirmationForm(data) {
    setDatosConfirmacion(data);
    $('#consulta-main-container').fadeOut(function(){
        $('#confirmacion-main-container').fadeIn();
    });
}


function processActualizarDatosResponse(response, data){
    var successClass = 'alert-success';
    var errorClass = 'alert-danger';

    if(response.data.success)
    {
        showConfirmationForm(data);

        //$('#alert-actualizardatos')
        //    .removeClass(errorClass)
        //    .addClass(successClass)
        //    .text('Datos actualizados con éxito!')
        //    .show();
    }
    else{
        $('#alert-actualizardatos')
            .removeClass(successClass)
            .addClass(errorClass)
            .text('Error!: ' + response.data.errors[0])
            .show();
    }
}
