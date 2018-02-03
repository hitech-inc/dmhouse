$(document).ready(function() {
    window.addEventListener('scroll',function(event){
        var topDistance = window.pageYOffset;
        var layers = $('.coins');

        for(var i = 0; i < layers.length; i++){
            var depth = layers.eq(i).data('depth'),
                movement = -(topDistance/2 * depth),
                // translate3dStyle = 'translate3d(0, ' + movement + 'px, 0)';
                translate3dStyle = 'translateY(' + movement + 'px)';

            layers.eq(i).css('transform', translate3dStyle);

        }
    });
});

setTimeout(setCID,10000);
$("form").append("<input type='hidden' name='cid' class='cid' value='cid' />");
//Создаем скрытые поля в форме
$("form").append("<input type='hidden' name='utm_source' class='utm_source' value='none' />");
$("form").append("<input type='hidden' name='utm_campaign' class='utm_campaign' value='none' />");
$("form").append("<input type='hidden' name='utm_content' class='utm_content' value='none' />");
$("form").append("<input type='hidden' name='utm_term' class='utm_term' value='none' />");
setTimeout(utm_form,10000); 

$(document).ready(function () {

    $('[name=object_type]').select2({
        placeholder: 'Тип объекта',
        minimumResultsForSearch: -1,
        width: '100%'
    });

    $('[name=object_area]').select2({
        placeholder: 'Площадь объекта',
        minimumResultsForSearch: -1,
        width: '100%'
    });

    $('[name=repair_type]').select2({
        placeholder: 'Тип ремонта',
        minimumResultsForSearch: -1,
        width: '100%'
    });

    $('.reviews__carousel').owlCarousel({
        loop: true,
        margin: 35
    });

    $('.reviews__vk').owlCarousel({
        items: 1,
        loop: true
    });

    $('.zoom').fancybox({
        afterShow : function( instance, current ) {
            instance.update();
        }
    });

    $('.quality__more').click(function (event) {
        event.preventDefault();
        $('.quality__box').slideToggle()

        $(this).text() === "Больше наших ремонтов" ? $(this).text("Меньше наших ремонтов") : $(this).text("Больше наших ремонтов");
    });

    $("input[type=tel]").mask("+9 (999) 999-99-99");

    $(".popup-link").click(function (event) {
        event.preventDefault();
        var id = $(this).attr("href");
        openPopup(id);
    });

    $(".close").click(function (event) {
        event.preventDefault();
        closePopup();
    });

    $(document).mouseup(function (event) {
        var div = $(".popup");
        if (!div.is(event.target) && div.has(event.target).length === 0) {
            closePopup();
        }
    });

    $("form").submit(function () {
        var form = $(this).closest("form");
        var options = $('.home__calc');
        var phone = form.find("[type=tel]").val();

        if (phone.indexOf("_") !== -1 || !!phone === false) return false;

        var data = form.serialize();
        var rtype = form.find('[name=rtype]').val();
        var ltype = form.find('[name=ltype]').val();
        
        if (ltype === 'Рассчитать стоимость') {
            data += '&' + options.serialize();
        }

        $.ajax({
        	url: "/request",
        	type: "post",
        	data: data,
        	success: function(result) {
                console.log(result)

                //dataLayer.push({'event': 'formSubmit'});
                //leadCollect(data);

                // if (ltype === 'Скачать прайс') {
                //     $.ajax({
                //         url: 'download.php',
                //         type: 'POST',
                //         success: function() {
                //             window.location = 'download.php';
                //         }
                //     });
                // }

                closePopup();
                setTimeout(openPopup, 400, form.find('[name=thx]').val());
                form[0].reset();
                options[0].reset();
        	}
        });
        return false;
    });

    //map init

    ymaps.ready(mapInit);
    var map;

});

function openPopup(id) {
    $(".popup-wrapper, " + id).fadeIn();
    $("html body").css("overflow", "hidden");
}

function closePopup() {
    $(".popup-wrapper, .popup").fadeOut();
    $("html body").css("overflow", "auto");
}

function mapInit() {
	map = new ymaps.Map("map", {
		center: [42.323798, 69.596060],
		zoom: 12,
		controls: ["zoomControl"],
		behaviors: ["drag"]
	});

	placemark = new ymaps.Placemark([42.317966, 69.600276], {
		hintContent: "пр. Тауке хана, 33А",
		balloonContent: ""
	});
    map.geoObjects.add(placemark);

    placemark = new ymaps.Placemark([42.323141, 69.602121], {
        hintContent: "ул. Желтоксан, 47",
        balloonContent: ""
    });
	map.geoObjects.add(placemark);

    placemark = new ymaps.Placemark([42.317265, 69.614674], {
        hintContent: "ул. Иляева, 111",
        balloonContent: ""
    });
    map.geoObjects.add(placemark);

    placemark = new ymaps.Placemark([42.316612, 69.580213], {
        hintContent: "пр. Республика, 10",
        balloonContent: ""
    });
    map.geoObjects.add(placemark);

    placemark = new ymaps.Placemark([42.329325, 69.601828], {
        hintContent: "пр. Кунаева, 10",
        balloonContent: ""
    });
    map.geoObjects.add(placemark);

    placemark = new ymaps.Placemark([42.360851, 69.612940], {
        hintContent: "ул. Корикты, 9",
        balloonContent: ""
    });
    map.geoObjects.add(placemark);

    placemark = new ymaps.Placemark([42.357837, 69.623251], {
        hintContent: "микрорайон Нурсат-1, 125",
        balloonContent: ""
    });
    map.geoObjects.add(placemark);

    placemark = new ymaps.Placemark([42.355180, 69.635008], {
        hintContent: "ул. Аргынбекова",
        balloonContent: ""
    });
    map.geoObjects.add(placemark);

    placemark = new ymaps.Placemark([42.367585, 69.591073], {
        hintContent: "микрорайон Самал-2",
        balloonContent: ""
    });
    map.geoObjects.add(placemark);

    placemark = new ymaps.Placemark([42.363368, 69.572666], {
        hintContent: "микрорайон Шугыла",
        balloonContent: ""
    });
    map.geoObjects.add(placemark);
};

function setCID() {
    if(ga!=undefined) {
        var tracker = ga.getAll()[0];
        var cid = tracker.get('clientId');
        $('.cid').each(function(index, el) {
            $(el).val(cid);
        });
    }
}

function getUrlVars() {
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}


function utm_form(){
    var utm_source = getUrlVars()["utm_source"];
    var utm_campaign = getUrlVars()["utm_campaign"];
    var utm_content = window.decodeURIComponent(getUrlVars()["utm_content"]);
    var utm_term = window.decodeURIComponent(getUrlVars()["utm_term"]);

    $('.utm_source').val(utm_source);
    $('.utm_campaign').val(utm_campaign);
    $('.utm_content').val(utm_content);
    $('.utm_term').val(utm_term);
}

function leadCollect(data) {
    //var data = $(form).serialize();
    $.ajax({
        type: "post",
        url: "/lead-collect",
        data: data,
        success: function() {}
    });
    return false;
}