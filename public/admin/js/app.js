"use strict";

const ERROR_GLOBAL = "Oops! Something went wrong. Let's try that again";

function bootstrapNotify(message, type)
{
    $.notify({
        message: message
    }, {
        type: type
    });
}

function bootstrapAlert($message, $type)
{
    if($type === undefined) $type = 'danger';

    return '<div class="alert alert-'+ $type+ ' alert-rounded">'+ $message+ '<button type="button" class="close"' +
        ' data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button></div>';
}


function checkAll(a)
{
    $('.chk:visible').prop('checked', $(a).is(':checked')).change();
}


function submitForm(form_id, callback, auto_alert)
{
    if(auto_alert === undefined) auto_alert = true;

    var form = $(form_id);
    var form_data = form.serializeArray();

    // Show the loader! This line can be changed...
    // Depending on where the loader is, the class name or the id.
    var loader = $('.preloader');

    if(auto_alert) loader.css('opacity', '0.5').show();

    // Disable the form submit button
    form.find('button[type=submit]').prop('disabled', true);

    return $.post(form.attr('action'), form_data, function (result) {

        if(auto_alert) bootstrapNotify(result.message, result.status ? 'success' : 'danger');

        // Additional callback function to run
        if(callback) callback(result);

    }, 'json').fail(function () {

        if(auto_alert) bootstrapNotify(ERROR_GLOBAL, 'danger');
    }).always(function(){

        // Reset the defaults
        loader.hide();
        form.find('button[type=submit]').prop('disabled', false);
    });
}


function submitFormMultipart(form_id, callback, auto_alert)
{
    if(auto_alert === undefined) auto_alert = true;

    var form  = $(form_id);
    var form_data = new FormData(form[0]);

    // Show the loader! This line can be changed...
    // Depending on where the loader is, the class name or the id.
    var loader = $('.preloader');

    if(auto_alert) loader.css('opacity', '0.5').show();

    // Disable the form submit button
    form.find('button[type=submit]').prop('disabled', true);

    return $.ajax({
        url:		form.attr('action'),
        type:		'POST',
        data:		form_data,
        contentType: false,
        processData: false,
        dataType:	'json',
        cache:		false,
        success: function (result, status) {

            if(auto_alert) bootstrapNotify(result.message, result.status ? 'success' : 'danger');

            // Additional callback function to run
            if(callback) callback(result);
        },
        error: function () {
            if(auto_alert) bootstrapNotify(ERROR_GLOBAL, 'danger');
        },
        complete: function(){

            // Reset the defaults
            loader.hide();
            form.find('button[type=submit]').prop('disabled', false);
        }
    });
}


function getRequest(url, callback, auto_alert)
{
    if(auto_alert === undefined) auto_alert = true;

    // If an anchor element object was passed instead, then use the href attribute as target URL.
    url = (typeof(url) === "object") ? $(url).attr('href') : url;

    // Show the loader! This line can be changed...
    // Depending on where the loader is, the class name or the id.
    var loader = $('.preloader');

    if(auto_alert) loader.css('opacity', '0.5').show();

    return $.get(url, function (result) {
        if(auto_alert) bootstrapNotify(result.message, result.status ? 'success' : 'danger');

        // Additional callback function to run
        if(callback) callback(result);

    }, 'json').fail(function (result) {
        bootstrapNotify(ERROR_GLOBAL, 'danger');

    }).always(function(){

        loader.hide();
    });
}


function number_format (number, decimals, decPoint, thousandsSep) {

    number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
    var n = !isFinite(+number) ? 0 : +number;
    var prec = !isFinite(+decimals) ? 0 : Math.abs(decimals);
    var sep = (typeof thousandsSep === 'undefined') ? ',' : thousandsSep;
    var dec = (typeof decPoint === 'undefined') ? '.' : decPoint;
    var s = '';

    var toFixedFix = function (n, prec) {
        if (('' + n).indexOf('e') === -1) {
            return +(Math.round(n + 'e+' + prec) + 'e-' + prec)
        } else {
            var arr = ('' + n).split('e');
            var sig = ''
            if (+arr[1] + prec > 0) {
                sig = '+'
            }
            return (+(Math.round(+arr[0] + 'e' + sig + (+arr[1] + prec)) + 'e-' + prec)).toFixed(prec)
        }
    };

    // @todo: for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec).toString() : '' + Math.round(n)).split('.');
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep)
    }
    if ((s[1] || '').length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1).join('0')
    }

    return s.join(dec)
}