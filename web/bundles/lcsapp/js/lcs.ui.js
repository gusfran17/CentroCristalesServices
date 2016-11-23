LCS.UI = LCS.UI || (function ($) {
    function showGrowl(title, message)
    {
        //por ahora
        alert(message);
        //return _showGrowl(title, message, false);
    }

    function error(title, message)
    {
        alert(message);
        //_showGrowl(title, message, true);
    }

    function _showGrowl(title, message, error)
    {
        $.blockUI({
            message: getGrowlDiv(title, message, error),
            fadeIn: 500,
            fadeOut: 500,
            timeout: 2500,
            showOverlay: false,
            centerY: false,
            css: {
                width: '350px',
                top: '10px',
                left: '',
                right: '10px',
                border: 'none',
                padding: '5px',
                backgroundColor: '#000',
                '-webkit-border-radius': '10px',
                '-moz-border-radius': '10px',
                opacity: .9,
                color: '#fff'
            }
        });
    }

    function getGrowlDiv(title, message, error)
    {
        return $('<div class="growlUI'+ (error?' error':'') +'" style="display: none;"><h1>' + title + '</h1><h2>' + message + '</h2></div>');
    }

    
    function replicateValueTo(from,to,always){
        if(always || $('#'+to).val() === '')
        {
            $('#'+to).val($('#'+from).val());
        }
    }

    function bootstrapAlert(selector, text, title, mode)
    {
        var html = '<div class="alert alert-dismissible alert-' + (mode ? mode : 'danger') + '" role="alert">'
                    + (title ? '<strong>' + title + '</strong> ' : '')
                    + text + '</div>';


        $(selector).append(html);
    }
        
    return {
        showGrowl:showGrowl, //BC
        message:showGrowl,
        error:error,
        replicateValueTo:replicateValueTo,
        bootstrapAlert:bootstrapAlert
    };

}(jQuery));

$(document).ready(function(){
    $('input[data-replicate-to]').change(function(){
        var $this = $(this);
        var from = $this.attr('id');
        var to = $this.data('replicate-to');
        LCS.UI.replicateValueTo(from,to);
    });
    $('input[data-replicate-always-to]').change(function(){
        var $this = $(this);
        var from = $this.attr('id');
        var to = $this.data('replicate-to');
        LCS.UI.replicateValueTo(from,to,true);
    });
});


(function($) {

    $.fn.tableCheckable = function(opts) {

        return this.each(function(index, element) {

            // Establish our default settings
            var settings = $.extend({
                checkAllOnInit   : true,
                checkAllControlId: 'chk-todos_'+index,
                checkItemClass   : 'chk-item_'+index,
                checkItemName    : 'chk-items_'+index+'[]'
            }, opts);

            doCheckable(this, settings);
        });

    };

    function doCheckable(table, opts)
    {
        //preparo variables que voy a usar para construir la cosa
        var $table = $(table);
        var tableId = $table.attr('id');
        var checkedState = opts.checkAllOnInit ? 'checked' : '';

        //VALIDACIONES PREVIAS
        //THEAD
        var $theadTr = $table.find('> thead > tr');
        if($theadTr.length != 1)
        {
            alert('La tabla para aplicar Checkable debe contener thead con una linea de tr');
            return;
        }

        //agrego una celda al principio del colsgruop si existe
        var $colgroup = $table.find('> colgroup');
        if($colgroup.length > 0)
        {
            $colgroup.prepend('<col style="width: 17px;">');
        }

        //THEAD  (ya esta validado que exista y sea correcto)
        $theadTr.prepend('<th style="text-align: center; padding:2px; width: 17px;" data-sortable="false"><input type="checkbox" id="'+opts.checkAllControlId+'" '+checkedState+'></th>');

        //los rows
        var rowsSelector = ' > tr' + (opts.noResultTrSelector ? ':not('+opts.noResultTrSelector+')' : '');
        var rowsWithTBodySelector = '> tbody > tr' + (opts.noResultTrSelector ? ':not('+opts.noResultTrSelector+')' : '');
        var $rows = $table.find(rowsSelector);

        $rows = $rows.length > 0 ? $rows : $table.find(rowsWithTBodySelector);

        $rows.each( function() {
            var $tr = $(this);
            var id = $tr.attr(opts.trIdSelector);
            $tr.prepend('<td style="text-align: center; padding:2px; width: 17px;"><input type="checkbox" class="'+opts.checkItemClass+' " name="'+opts.checkItemName+'" value="'+id+'" '+checkedState+'></td>');
        });


        //TFOOT (si existe, le agrega una celda)
        $table.find('> tfoot > tr').prepend('<th></th>');


        //eventos y callbacks
        //checkAll click
        $table.parent().on('click','#'+opts.checkAllControlId, function(){

            var $checkControls =  $table.find('td input.'+opts.checkItemClass);
            $checkControls.prop('checked', $('#'+opts.checkAllControlId).prop('checked'));
            $checkControls.each(function(){
                toogleSelectedClass(this);
            });
            if($.isFunction(opts.onCheckAllEach)){
                $checkControls.each(opts.onCheckAllEach);
            }
        });
        if($.isFunction(opts.onCheckAll)){
            $table.parent().on('click','#'+opts.checkAllControlId, opts.onCheckAll);
        }

        //onCheckAllEach click
        $table.parent().on('click','#'+opts.checkAllControlId, function(){
            $table.find('td input.'+opts.checkItemClass).prop('checked', $('#'+opts.checkAllControlId).prop('checked'));
        });
        if($.isFunction(opts.onCheckAll)){
            $table.parent().on('click','#'+opts.checkAllControlId,opts.onCheckAll);
        }

        //itemCheck click
        $table.parent().on('click','#'+tableId + ' .'+opts.checkItemClass, function(){
            toogleSelectedClass(this);
            $table.find('#'+opts.checkAllControlId).prop('checked', $table.find("."+opts.checkItemClass+":checked").length == $table.find("."+opts.checkItemClass).length);
        });
        if($.isFunction(opts.onItemCheckClick)){
            $table.parent().on('click','#'+tableId + ' .'+opts.checkItemClass, opts.onItemCheckClick);
        }

        //itemCheck change
        $table.parent().on('change','#'+tableId + ' .'+opts.checkItemClass, function(){
            toogleSelectedClass(this);
            $table.find('#'+opts.checkAllControlId).prop('checked', $table.find("."+opts.checkItemClass+":checked").length == $table.find("."+opts.checkItemClass).length);
        });
        if($.isFunction(opts.onItemCheckChange)){
            $table.parent().on('change','#'+tableId + ' .'+opts.checkItemClass, opts.onItemCheckChange);
        }

        //onInitializeEach
        $table.find("td input."+opts.checkItemClass).each(function(){
            toogleSelectedClass(this);
        });
        if($.isFunction(opts.onInitializeEach)){
            $table.find("td input."+opts.checkItemClass).each(opts.onInitializeEach);
        }
    }
    
    function toogleSelectedClass(target)
    {
        var $target = $(target);
        if($target.prop('checked'))
        {
            $target.closest('tr').addClass('seleccionada');
        }
        else
        {
            $target.closest('tr').removeClass('seleccionada');
        }
    }

}(jQuery));



