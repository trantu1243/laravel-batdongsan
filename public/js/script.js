
function load(img) {
    const url = img.getAttribute('lazy-src');
    img.setAttribute('src', url);
    img.removeAttribute('lazy-src');
}

function ready() {
    if ('IntersectionObserver' in window) {
        var lazyImgs = document.querySelectorAll('[lazy-src]');
        let observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    load(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        });

        lazyImgs.forEach(img => {
            observer.observe(img);
        })
    } else {

    }
}

document.addEventListener('DOMContentLoaded', ready());

function handleSelect(elm) {
    window.location = elm.value;
}

$(".form-submit").click(function () {
    $( "#submit-search" ).submit();

})

$(".btn-ban").click(function () {
    window.location.href = "ban-nha-dat";
});
$(".btn-chothue").click(function () {
    window.location.href = "cho-thue-nha-dat";
});


$('button[data-id="select-huyen"]').click(function () {

    var gia_tri_tinh_chon = $('select[name="gia_tri_tinh_chon"]').val();
    if (gia_tri_tinh_chon.length != 0) {
        var city_id = gia_tri_tinh_chon;
        if (city_id) {
            $.ajax({
                url: "/getDistrictsProject",
                type: "POST",
                data: {'id': city_id},
                dataType: "json",
                cache: false,
                success: function (data) {
                    $('#select-huyen').empty();
                    $.each(data.data, function (key, value) {

                        const option = document.createElement("option");
                        option.innerText = value._name;
                        option.value = value.id;
                        // if (value.id == 28) {
                        //     option.setAttribute("selected","selected");
                        // }

                        document.getElementById("select-huyen").appendChild(option);


                    });
                    $("#select-huyen").selectpicker('refresh');

                }
            });



            // lay du an cua tinh do
            $.ajax({
                url: "/getDuanTheoTinh",
                type: "POST",
                data: {'id': city_id},
                dataType: "json",
                cache: false,
                success: function (data) {
                    $('#select-duan').empty();
                    $.each(data.data, function (key, value) {
                        const option = document.createElement("option");
                        option.innerText = value.name;
                        option.value = value.id;


                        document.getElementById("select-duan").append(option);


                    });
                    $("#select-duan").selectpicker('refresh');

                }
            });
        }
    }

});
