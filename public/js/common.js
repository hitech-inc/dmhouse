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
        var ltype = form.find('[name=ltype]').val();
        
        if (ltype === 'Рассчитать стоимость') {
            data += '&' + options.serialize();
        }

        $.ajax({
        	url: "js/mail.php",
        	type: "post",
        	data: data,
        	success: function() {
                dataLayer.push({'event': 'formSubmit'});
                leadCollect(data);
                if (ltype === 'Скачать прайс') {
                    $.ajax({
                        url: 'download.php',
                        type: 'POST',
                        success: function() {
                            window.location = 'download.php';
                        }
                    });
                }

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
		center: [59.939095, 30.315868],
		zoom: 10,
		controls: ["zoomControl"],
		behaviors: ["drag"]
	});

	placemark = new ymaps.Placemark([59.913144, 30.449996], {
		hintContent: "Ул. Коллонтай",
		balloonContent: "ЖК Аврора"
	});
    map.geoObjects.add(placemark);

    placemark = new ymaps.Placemark([59.902149, 30.475472], {
        hintContent: "Ул. Дыбенко",
        balloonContent: "ЖК Дом на Дыбенко"
    });
	map.geoObjects.add(placemark);

    placemark = new ymaps.Placemark([59.909224, 30.458494], {
        hintContent: "Ул. Подвойского",
        balloonContent: "ЖК Невский эталон"
    });
    map.geoObjects.add(placemark);

    placemark = new ymaps.Placemark([59.904708, 30.313685], {
        hintContent: "Московский пр.",
        balloonContent: "ЖК Времена года"
    });
    map.geoObjects.add(placemark);

    placemark = new ymaps.Placemark([60.075263, 30.336170], {
        hintContent: "ул. Михаила Дудина",
        balloonContent: "ЖК Северная долина"
    });
    map.geoObjects.add(placemark);

    placemark = new ymaps.Placemark([60.031553, 30.142947], {
        hintContent: "Юнтоловский пр.",
        balloonContent: "ЖК Юнтолово"
    });
    map.geoObjects.add(placemark);

    placemark = new ymaps.Placemark([59.842599, 30.305906], {
        hintContent: "1-й Предпортовый пр.",
        balloonContent: "ЖК Перемена"
    });
    map.geoObjects.add(placemark);

    placemark = new ymaps.Placemark([59.861905, 30.453724], {
        hintContent: "пр. Александровской Фермы",
        balloonContent: "ЖК Green City"
    });
    map.geoObjects.add(placemark);

    placemark = new ymaps.Placemark([60.004303, 30.402969], {
        hintContent: "ул. Бутлерова",
        balloonContent: "ЖК Академ-Парк"
    });
    map.geoObjects.add(placemark);

    placemark = new ymaps.Placemark([60.043808, 30.370764], {
        hintContent: "Актёрский пр.",
        balloonContent: "ЖК Актёрский Олимп"
    });
    map.geoObjects.add(placemark);
};

function setCID() {
        if(ga!=undefined){
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
                url: "js/lead-collect.php",
                data: data,
                success: function() {}
        });
        return false;
}