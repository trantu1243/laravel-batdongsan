$(document).ready(function () {


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $("#select-tinh-thanh").on("change", function () {
        var city_id = $(this).val();
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

            // lay duong theo tinh
            $.ajax({
                url: "/getDuongTheoTinh",
                type: "POST",
                data: {id: city_id},
                dataType: "json",
                cache: false,
                success: function (data) {
                    $('#select-duong').empty();
                    $.each(data.data, function (key, value) {
                        const option = document.createElement("option");
                        option.innerText = value._prefix + " " + value._name;
                        option.value = value.id;


                        document.getElementById("select-duong").append(option);
                    });

                    $("#select-duong").selectpicker('refresh');

                }
            });


            // lay duong của tỉnh đó
            // $.ajax({
            //     url: "/getDuongTheoXa",
            //     type: "POST",
            //     data: {city_id: city_id},
            //     dataType: "json",
            //     cache: false,
            //     success: function (data) {
            //         $('.append-duong').html("");
            //         $.each(data.data, function (key, value) {
            //             $('#select-duong').empty();
            //             $.each(data.data, function (key, value) {
            //                 const option = document.createElement("option");
            //                 option.innerText = value._name;
            //                 option.value = value.id;
            //                 document.getElementById("select-duong").append(option);
            //
            //             });
            //             $("#select-duong").selectpicker('refresh');
            //         });
            //
            //     }
            // });

        }

    });

    $("#select-huyen").change(function () {
        var id_quan = $(this).val();
        $.ajax({
            url: "/getXaTheoHUyen",
            type: "POST",
            data: {id_quan: id_quan},
            dataType: "json",
            cache: false,
            success: function (data) {
                console.log(data);
                $('#select-phuong-xa').empty();
                $.each(data.data, function (key, value) {
                    const option = document.createElement("option");
                    option.innerText = value._prefix + " " + value._name;
                    option.value = value.id;
                    document.getElementById("select-phuong-xa").append(option);
                });

                $("#select-phuong-xa").selectpicker('refresh');
            }
        });

        // lay duong theo huyen
        $.ajax({
            url: "/getDuongTheoHuyen",
            type: "POST",
            data: {id_quan: id_quan},
            dataType: "json",
            cache: false,
            success: function (data) {
                $('#select-duong').empty();
                $.each(data.data, function (key, value) {
                    const option = document.createElement("option");
                    option.innerText = value._prefix + " " + value._name;
                    option.value = value.id;

                    document.getElementById("select-duong").append(option);
                });

                $("#select-duong").selectpicker('refresh');

            }
        });
    });
});
