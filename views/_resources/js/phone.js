let maksBehavior = function(val) {
    return val.replace(/\D/g, '').length === 11 ? '(00) 00000 - 0000' : '(00) 00000 - 0009';
},

options = {onKeyPress: function(val, e, field, options) {
    field.maks(maksBehavior.apply({}, arguments), options)
}}

$('.phone').mask(maksBehavior, options)