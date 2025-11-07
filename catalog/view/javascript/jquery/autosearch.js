//<![CDATA[
function asrSearch(ev, keywords) {

	if (ev.keyCode == 38 || ev.keyCode == 40) {
		return false;
	}

	asrRemove();
	updown = -1;

	keywords = keywords.replace(/[ ]+/g, ' ');
	if (keywords == '' || keywords.length < 2) {
		return false;
	}

	keywords = encodeURIComponent(keywords);

	$.ajax({url: $('base').attr('href') + 'index.php?route=extension/module/autosearch/adw&keyword=' + keywords, dataType: 'json', success: function(result) {
	if( (result['pro']&&result['pro'].length) || (result['cat']&&result['cat'].length) || (result['man']&&result['man'].length) ) {

	var eDiv = document.createElement('div');
	eDiv.id = 'autosearch_search_results';

	var eListElem;
	var eLink;
	var eImage;

	cat = result['cat'];
	man = result['man'];
	set = result['set'];
	result = result['pro'];

	if (cat.length > 0) {

		eListElem = document.createElement('div');
		eListElem.className = 'asr';
		var textNode = document.createTextNode(set['catname']);
		eListElem.appendChild(textNode);
		eDiv.appendChild(eListElem);

	var eList = document.createElement('ul');

		for( var c in cat ) {
			eListElem = document.createElement('li');
			eLink = document.createElement('a');

	var el_span = document.createElement('name');
    var textNode = document.createTextNode(cat[c].name);
    eLink.appendChild(el_span);
    el_span.appendChild(textNode);

			if( typeof(cat[c].href) != 'undefined' ) {
				eLink.href = cat[c].href;
			} else {
				eLink.href = $('base').attr('href') + 'index.php?route=product/category&path=' + cat[c].product_id;
			}

			eListElem.appendChild(eLink);
			eList.appendChild(eListElem);
		}

	eDiv.appendChild(eList);
	}

	if (man.length > 0) {

		var eListElemc = document.createElement('div');
		eListElemc.className = 'asr';
		var textNode = document.createTextNode(set['manname']);
		eListElemc.appendChild(textNode);
		eDiv.appendChild(eListElemc);

	var eList = document.createElement('ul');

		for( var m in man ) {
			eListElem = document.createElement('li');
			eLink = document.createElement('a');

	var el_span = document.createElement('name');
    var textNode = document.createTextNode(man[m].name);
    eLink.appendChild(el_span);
    el_span.appendChild(textNode);

			if( typeof(man[m].href) != 'undefined' ) {
				eLink.href = man[m].href;
			} else {
				eLink.href = $('base').attr('href') + 'index.php?route=product/manufacturer/info&manufacturer_id=' + man[m].product_id;
			}

			eListElem.appendChild(eLink);
			eList.appendChild(eListElem);
		}
	eDiv.appendChild(eList);
	}

	if( result.length > 0 ) {

		if( cat.length > 0 || man.length > 0 ) {
			eListElem = document.createElement('div');
			eListElem.className = 'asr';
			var textNode = document.createTextNode(set['proname']);
			eListElem.appendChild(textNode);
			eDiv.appendChild(eListElem);
		}

	var eList = document.createElement('ul');

		for( var i in result ) {
			eListElem = document.createElement('li');
			eLink = document.createElement('a');

			if ((result[i].thumb) != '') {
				var eIm = document.createElement('div');
				eIm.className = 'divasr';
				eImage = document.createElement('img');
				eImage.src = result[i].thumb;
				eIm.appendChild(eImage);
				eLink.appendChild(eIm);
			}

	var eDim = document.createElement('div');
	eDim.className = 'div2asr';

	var el_span = document.createElement('name');
    var textNode = document.createTextNode(result[i].name);
    eDim.appendChild(el_span);
    el_span.appendChild(textNode);
	eLink.appendChild(eDim);

		if ((result[i].model) != '') {
			var el_span = document.createElement('model');
			var textNode = document.createTextNode(result[i].model);
			eDim.appendChild(el_span);
			el_span.appendChild(textNode);
			eLink.appendChild(eDim);
		}

		if (typeof(result[i].href) != 'undefined') {
			eLink.href = result[i].href;
		} else {
			eLink.href = $('base').attr('href') + 'index.php?route=product/product&product_id=' + result[i].product_id + '&keyword=' + keywords;
		}
			eListElem.appendChild(eLink);

		if ((result[i].price) != '') {
			var br = document.createElement("br");
			eDim.appendChild(br);

			if ((result[i].special) != '') {
				var el_span = document.createElement('special-price');
				var textNode = document.createTextNode(result[i].special);
				eDim.appendChild(el_span);
				el_span.appendChild(textNode);
				eLink.appendChild(eDim);
			}

			var el_span = document.createElement('price');
			var textNode = document.createTextNode(result[i].price);
			eDim.appendChild(el_span);
			el_span.appendChild(textNode);
			eLink.appendChild(eDim);
		}

		if ((result[i].stock) != '') {
			var br = document.createElement("br");
			eDim.appendChild(br);
			var el_span = document.createElement('stock');
			var textNode = document.createTextNode(result[i].stock);
			eDim.appendChild(el_span);
			el_span.appendChild(textNode);
			eLink.appendChild(eDim);
		}

		eList.appendChild(eListElem);
		}

		if ($('#autosearch_search_results').length > 0) {
			asrRemove();
		}

		if (set['vallname'] != '') {
			eListElem = document.createElement('li');
			eLink = document.createElement('a');
			var el_span = document.createElement('viewall');
			var textNode = document.createTextNode(set['vallname']);
			el_span.appendChild(textNode);
			eLink.appendChild(el_span);

			eLink.href = $('base').attr('href') + 'index.php?route=product/search&search=' + keywords;
			eListElem.appendChild(eLink);
			eList.appendChild(eListElem);
		}

		eDiv.appendChild(eList);
	}

$('#search').append(eDiv);
$('#autosearch_search_results').css('maxHeight', set['size'] + 'px');

			$('#autosearch_search_results').mCustomScrollbar({
				theme:"dark",
				scrollbarPosition: "inside",
				mouseWheel:{
					preventDefault: !0,
				},
				callbacks:{
					onInit:function(){
					$('#autosearch_search_results .mCSB_container').css('margin-right','12px');
					}
				}
			});
		}
	}});

	return true;
}

function asrRemove() {
	var target = $('#autosearch_search_results');
	target.each(function() {
		$(this).remove();
	});
	updown=0; stimer=0;
}

var updown = -1;
var stimer;

function asrInit() {
	$('#search').find('[name=search]').attr('autocomplete', 'off');
	$('#search').find('[name=search]').first().keyup(function(ev){
		clearTimeout(stimer);
		var key = this.value;
		stimer = setTimeout(function () {
			asrSearch(ev, key);
		}, 300);

	}).focus(function(ev){
		asrSearch(ev, this.value);
	}).blur(function(){
		window.setTimeout(asrRemove, 1500);
	});
}

$(document).ready(function(){
	asrInit();
});
//]]>