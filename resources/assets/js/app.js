var Siges = angular.module('Siges', ['angular-loading-bar', 'ngAnimate', 'as.sortable', 'tableSort', 'ng-sortable', 'flow'])
    .config(['cfpLoadingBarProvider', function (cfpLoadingBarProvider) {
        cfpLoadingBarProvider.includeSpinner = false;
    }]);
/** Compile directive to bring html from backend and have Angular evaluate it **/
Siges.directive('compile', ['$compile', function ($compile) {
    return function (scope, element, attrs) {
        scope.$watch(
            function (scope) {
                return scope.$eval(attrs.compile);
            },
            function (value) {
                element.html(value);
                $compile(element.contents())(scope);
            }
        );
    };
}]);

function HandleErrorResponse(data, code) {
    $('button').button('reset');
    if (code === 422) {
        swal({
            title: "Hay un problema.",
            text: "Problema de Validación<br />" + parseValidationErrors(data.errors),
            type: "error",
            confirmButtonText: "Ok",
            html: true
        });
        return false;
    }
    if (code === 401) {
        swal({
            title: "Hay un problema.",
            text: "Problema de Autorización. Posiblemente no tienes permisos para esta acción o tu session expiro.",
            type: "error",
            confirmButtonText: "Ok",
            html: true
        });
        return false;
    }
    if (code === 404) {
        swal({
            title: "Elemento no encontrado",
            text: "No hemos encontrado lo que buscas, por favor intenta de nuevo.",
            type: "error",
            confirmButtonText: "Ok",
            html: true
        });
        return false;
    }
    swal({
        title: "Hay un problema?",
        text: "Al parecer ocurrio un problema al procesar la solicitud. Intente de nuevo",
        type: "error",
        confirmButtonText: "Ok",
        html: true
    });
    return false;
}
function parseValidationErrors(errors) {
    var str = '';
    $.each(errors, function(x, t){
        $.each(errors[x], function(y){
            str += errors[x][y] + '<br />';
        });
    });
    return str;
};
/** Datatables **/
$.extend(true, $.fn.dataTable.defaults, {
    language: {
        "url": GLOBALS.datablesLang
    }
});
$(function () {
    /** select bootstrap **/
    $('.selectBootstrap').selectpicker();
    /** SlugAble **/
    if ($('.slugable').length > 0) {
        var $target = $('.slugable').find('.slug-target');
        var $source = $('.slugable').find('.slug-source');
        $target.slugify($source);
    }
    /** select2 **/
    $('.select2').select2({
        language: 'es',
        allowClear: true,
        placeholder: "Seleccione una opción"
    });
    $(".wysihtml5").wysihtml5();
    window.dateRangeLocale = {
        "format": "MM/DD/YYYY",
        "separator": " - ",
        "applyLabel": "Aplicar",
        "cancelLabel": "Cancelar",
        "fromLabel": "Desde",
        "toLabel": "Hasta",
        "customRangeLabel": "Rango Personalizado",
        "daysOfWeek": [
            "Dom",
            "Lun",
            "Mar",
            "Mie",
            "Jue",
            "Vie",
            "Sab"
        ],
        "monthNames": [
            "Enero",
            "Febrero",
            "Marzo",
            "Abril",
            "Mayo",
            "Junio",
            "Julio",
            "Agosto",
            "Septiembre",
            "Octubre",
            "Noviembre",
            "Deciembre"
        ],
        "firstDay": 1
    };
    $(".datepicker").daterangepicker({
        singleDatePicker: true,
        format: 'MM/DD/YYYY',
        locale : window.dateRangeLocale
    });
    $('.daterange-left').daterangepicker({
        ranges: {
            'Hoy': [moment(), moment()],
            'Ayer': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Este mes': [moment().startOf('month'), moment().endOf('month')],
            'Último mes': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        opens : "left",
        format: 'MM/DD/YYYY',
        locale : window.dateRangeLocale
    });
    $('.daterange-right').daterangepicker({
        ranges: {
            'Hoy': [moment(), moment()],
            'Ayer': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Este mes': [moment().startOf('month'), moment().endOf('month')],
            'Último mes': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        opens : "right",
        format: 'MM/DD/YYYY',
        locale : window.dateRangeLocale
    });
    /** delete dialog **/
    $(document).on('click', '.confirm-delete', function (e) {
        e.preventDefault();
        var $this = $(this);
        swal({
                title: "Esta seguro de eliminar esto?",
                text: "Tenga en cuenta que esto no se puede revertir",
                type: "warning",
                showCancelButton: true,
                confirmButtonText: "Si, estoy seguro",
                cancelButtonText: "No, cancelar acción!",
                closeOnConfirm: true,
                closeOnCancel: true
            },
            function (isConfirm) {
                if (isConfirm) {
                    $('#deleteForm').attr('action', $this.attr('href')).submit();
                }
            });
    });
    /** jquery number **/
    $('.number').number( true, 0 );
});