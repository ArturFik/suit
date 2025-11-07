/**
 * @package     OpenCart\One Click Checkout
 * @author      OCProfi <ocprofi@gmail.com>
 * @copyright   Copyright © 2018, OCProfi.com
 * @license http://ocprofi.com/eula/
 */

function ocpoc_popup(product_id) {
    $.magnificPopupOCP.open({
        tLoading: '<img src="catalog/view/javascript/ocp_oneclick/loading.gif" alt="Loading..." />',
        items: {
            src: 'index.php?route=extension/module/ocp_oneclick&product_id='+product_id,
            type: 'ajax'
        },
        callbacks: {
            ajaxContentAdded: function() {
                $('.ocpoc input[name="quantity"]').on('input', function(){
                    if($(this).val() > 0){
                        ocpoc_update();
                    }
                });
                if($('.ocpoc').hasClass('ocpoc-hor') && $('.ocpoc-images').length && $('.ocpoc-right').length){
                    if($('.ocpoc-images').height() > $('.ocpoc-right').height()){
                        $('.ocpoc-images').addClass('ocpoc-bordered');
                    }else{
                        $('.ocpoc-right').addClass('ocpoc-bordered');
                    }
                }
            },
        }
    });
}
function ocpoc_submit(){
    $.ajax({
        async: true,
        cache: false,
        url: 'index.php?route=extension/module/ocp_oneclick/confirm',
        type: 'post',
        data: $('.ocpoc-body input[type=\'hidden\'], .ocpoc-body input[type=\'text\'], .ocpoc-body input[type=\'radio\']:checked, .ocpoc-body input[type=\'checkbox\']:checked, .ocpoc-body select, .ocpoc-body textarea, .ocpoc-footer input[type=\'checkbox\']:checked'),
        dataType: 'json',
        beforeSend: function() {
            $('#ocpoc_submit').text(ocpoc_params['order_button_text_loading']);
        },
        success: function(json) {
            $('.ocpoc-form-group').removeClass('has-error');
            $('.ocpoc-error').remove();
            if(json['error']){
                if(json['error']['firstname']){
                    ocpoc_error('firstname', json['error']['firstname']);
                }
                if(json['error']['lastname']){
                    ocpoc_error('lastname', json['error']['lastname']);
                }
                if(json['error']['telephone']){
                    ocpoc_error('telephone', json['error']['telephone']);
                }
                if(json['error']['email']){
                    ocpoc_error('email', json['error']['email']);
                }
                if(json['error']['address_1']){
                    ocpoc_error('address_1', json['error']['address_1']);
                }
                if(json['error']['comment']){
                    ocpoc_error('comment', json['error']['comment']);
                }
                if(json['error']['agree']){
                    $('.ocpoc-footer p label, .ocpoc-btn-under-fields p label').after('<br /><span class="ocpoc-error">'+json['error']['agree']+'</span>');
                }
                if (json['error']['option']) {
                    for (i in json['error']['option']) {
                        var element = $('#ocpoc-option-' + i.replace('_', '-'));

                        if (element.parent().hasClass('input-group')) {
                            element.parent().after('<div class="ocpoc-error">' + json['error']['option'][i] + '</div>');
                        } else {
                            element.after('<div class="ocpoc-error">' + json['error']['option'][i] + '</div>');
                        }
                    }
                }
            }
            if(json['success']){
                $('.ocpoc-body').html(json['success']);
                $('#ocpoc_submit').replaceWith('<button class="btn btn-danger btn-block" onclick="$.magnificPopupOCP.close(); return true;">'+ocpoc_params['close_button_text']+'</button>');

            }else{
                $('#ocpoc_submit').text(ocpoc_params['order_button_text']);
            }
        }
    });
}
function ocpoc_error(field, error){
    $('.ocpoc-' + field).addClass('has-error');
    $('.ocpoc-' + field + ' input,.ocpoc-' + field + ' textarea').after('<span class="ocpoc-error">'+error+'</span>');
}
function ocpoc_update(){
    $.ajax({
        async: true,
        cache: false,
        url: 'index.php?route=extension/module/ocp_oneclick/update',
        type: 'post',
        data: $('.ocpoc-body input[type=\'hidden\'], .ocpoc-body input[type=\'text\'], .ocpoc-body input[type=\'radio\']:checked, .ocpoc-body input[type=\'checkbox\']:checked, .ocpoc-body select, .ocpoc-body textarea'),
        dataType: 'json',
        success: function(json) {
            if(json['total']){
                $('.ocpoc-total span').text(json['total']);
            }
            if(json['special'] && json['price']){
                $('.ocpoc-price span, .ocpoc-special').remove();
                $('.ocpoc-price-wrap').before('<div class="ocpoc-special">' + json['price'] + '</div>');
                $('.ocpoc-price').prepend('<span>' + json['special'] + '</span>');
            }else if(json['price']){
                $('.ocpoc-price span, .ocpoc-special').remove();
                $('.ocpoc-price').prepend('<span>' + json['price'] + '</span>');
            }
        }
    });
}
function ocpoc_descr(){
    if($('.ocpoc-show-descr').hasClass('ocpoc-hide')){
        $('.ocpoc-description').slideUp('fast', function(){
            $('.ocpoc-show-descr').text(ocpoc_params['descr_show_text']).removeClass('ocpoc-hide');
        });
    }else{
        $('.ocpoc-description').slideDown('fast', function(){
            $('.ocpoc-show-descr').text(ocpoc_params['descr_hide_text']).addClass('ocpoc-hide');
        });
    }
}
function ocpoc_set_main_image(src, obj){
    $('.ocpoc-main-image img').attr('src', src);
    $('.ocpoc-thumbs img').removeClass('active');
    obj.addClass('active');
}
function ocpoc_update_qty(ac){
    var qty_obj = $('.ocpoc-qty input');

    var qty = parseInt(qty_obj.val());

    if(ac == '+'){
        qty_obj.val(qty + 1);
    }else{
        if(qty > 1){
            qty_obj.val(qty - 1);
        }
    }
    ocpoc_update();
}
$(function() {
    if(typeof(ocpoc_params) != 'undefined'){
        if(ocpoc_params['show_in_cat']){
            $.each(ocpoc_params['list_btns'], function(key, btn_params){
                if(typeof($(btn_params['list_product_block'])) !== 'undefined'){
                    if(btn_params['list_position'] == 1){
                        $.each($(btn_params['list_product_block']+" [onclick^='"+ocpoc_params['list_selector']+"']"), function() {
                            var product_id = $(this).attr('onclick').match(/[0-9]+/);
                            $(this).closest(btn_params['list_product_block']).find(btn_params['list_element']).before('<div class="'+btn_params['list_btn_block_class']+'"><button class="'+btn_params['list_btn_class']+'">'+ocpoc_params['button_text']+'</button></div>').prev().attr('onclick', 'ocpoc_popup(\'' + product_id + '\');');
                        });
                    }else if(btn_params['list_position'] == 2){
                        $.each($(btn_params['list_product_block']+" [onclick^='"+ocpoc_params['list_selector']+"']"), function() {
                            var product_id = $(this).attr('onclick').match(/[0-9]+/);
                            $(this).closest(btn_params['list_product_block']).find(btn_params['list_element']).after('<div class="'+btn_params['list_btn_block_class']+'"><button class="'+btn_params['list_btn_class']+'">'+ocpoc_params['button_text']+'</button></div>').next().attr('onclick', 'ocpoc_popup(\'' + product_id + '\');');
                        });
                    }
                }
            });
        }
        if(ocpoc_params['show_in_prod']){
            if(typeof($('input[name=\'product_id\']')) !== 'undefined'){
                if(ocpoc_params['product_position'] == 1){
                    $(ocpoc_params['product_element']).before('<div class="'+ocpoc_params['product_btn_block_class']+'"><button class="'+ocpoc_params['product_btn_class']+'">'+ocpoc_params['button_text']+'</button></div>').prev().attr('onclick', 'ocpoc_popup(\'' + $('input[name=\'product_id\']').val() + '\');');
                }else{
                    $(ocpoc_params['product_element']).after('<div class="'+ocpoc_params['product_btn_block_class']+'"><button class="'+ocpoc_params['product_btn_class']+'">'+ocpoc_params['button_text']+'</button></div>').next().attr('onclick', 'ocpoc_popup(\'' + $('input[name=\'product_id\']').val() + '\');');
                }
            }
        }
    }
});
/**
 * jquery.placeholder http://matoilic.github.com/jquery.placeholder
 *
 * @version v0.2.4
 * @author Mato Ilic <info@matoilic.ch>
 * @copyright 2013 Mato Ilic
 *
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 */
(function(b,f,i){function l(){b(this).find(c).each(j)}function m(a){for(var a=a.attributes,b={},c=/^jQuery\d+/,e=0;e<a.length;e++)if(a[e].specified&&!c.test(a[e].name))b[a[e].name]=a[e].value;return b}function j(){var a=b(this),d;a.is(":password")||(a.data("password")?(d=a.next().show().focus(),b("label[for="+a.attr("id")+"]").attr("for",d.attr("id")),a.remove()):a.realVal()==a.attr("placeholder")&&(a.val(""),a.removeClass("placeholder")))}function k(){var a=b(this),d,c;placeholder=a.attr("placeholder");
    b.trim(a.val()).length>0||(a.is(":password")?(c=a.attr("id")+"-clone",d=b("<input/>").attr(b.extend(m(this),{type:"text",value:placeholder,"data-password":1,id:c})).addClass("placeholder"),a.before(d).hide(),b("label[for="+a.attr("id")+"]").attr("for",c)):(a.val(placeholder),a.addClass("placeholder")))}var g="placeholder"in f.createElement("input"),h="placeholder"in f.createElement("textarea"),c=":input[placeholder]";b.placeholder={input:g,textarea:h};!i&&g&&h?b.fn.placeholder=function(){}:(!i&&g&&
!h&&(c="textarea[placeholder]"),b.fn.realVal=b.fn.val,b.fn.val=function(){var a=b(this),d;if(arguments.length>0)return a.realVal.apply(this,arguments);d=a.realVal();a=a.attr("placeholder");return d==a?"":d},b.fn.placeholder=function(){this.filter(c).each(k);return this},b(function(a){var b=a(f);b.on("submit","form",l);b.on("focus",c,j);b.on("blur",c,k);a(c).placeholder()}))})(jQuery,document,window.debug);