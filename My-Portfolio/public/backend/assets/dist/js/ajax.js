jQuery(document).ready(function () {
    // About Us Start
    // jQuery("#AboutData").on("submit", function (e) {
    //     e.preventDefault();
    //     var AboutData = new FormData(this);
    //     $.ajax({
    //         url: "/about",
    //         type: "POST",
    //         data: AboutData,
    //         dataType: "JSON",
    //         contentType: false,
    //         processData: false,
    //         success: function (response) {
    //             if (response.status == "success") {
    //                 alert("OK Data Saved!");
    //             } else {
    //                 alert("Data Not Saved!");
    //             }
    //         },
    //     });
    // });
    // About Us End

    // Age Calculate start
    jQuery("#birth").on("change", function () {
        var birthCalculate = jQuery(this).val();
        var dateOfBirth = new Date(birthCalculate);
        var month = Date.now() - dateOfBirth.getTime();
        var age = new Date(month);
        var years = age.getUTCFullYear();
        var totalAge = Math.abs(years - 1970);

        // console.log(typeof toMonth);
        jQuery("#dateOfBirth").val(totalAge);
    });
    // Age Calculate End

    // Delete Skills Item Start
    // jQuery("#devImgDelete").on("click", function () {
    //     var id = jQuery(this).data("id");
    //     var _token = jQuery(this).data("token");
    //     $.ajax({
    //         url: "/gallery/devImgDelete/" + id,
    //         type: "POST",
    //         dataType: "JSON",
    //         data: {
    //             id: id,
    //             _token: _token,
    //         },
    //         success: function (response) {
    //             if (response.success == "success") {
    //                 console.log("OK Data Saved!");
    //             } else {
    //                 console.log("Data Not Saved!");
    //             }
    //         },
    //     });
    // });
    // Delete Skills Item end

    // Education active inactive button switch start
    // jQuery("#eduSwitch").on("click", function () {
    //     var id = jQuery(this).data("id");
    //     var checked = jQuery(this).prop("checked");
    //     $.ajax({
    //         url: "/eduSwitchButton/" + id,
    //         type: "POST",
    //         dataType: "JSON",
    //         data: {
    //             id: id,
    //             checked: checked,
    //         },
    //         success: function (response) {
    //             if (response.message == "200") {
    //                 console.log("Active!");
    //             } else {
    //                 console.log("Inactive!");
    //             }
    //         },
    //     });
    // });
    // Education active inactive button switch End

    // Contact Mail Data Delete For Ajax Start
    jQuery("#allCheck_delete_id").on("click", function () {
        jQuery(".single_id_select").prop(
            "checked",
            jQuery(this).prop("checked")
        );
        $("#allSelect_itemDelete_btn").on("click", function (e) {
            e.preventDefault();
            var all_ids = [];
            jQuery("input:checkbox[name=contact_deleteIds]:checked").each(
                function () {
                    all_ids.push($(this).val());
                }
            );
            $.ajax({
                url: "{{route('contact_itemDelete')}}",
                type: "DELETE",
                data: {
                    all_ids: all_ids,
                    _token: "{{csrf_token() }}",
                },
                success: function (response) {
                    $.each(all_ids, function (key, val) {
                        $("#contact_ids" + val).remove();
                    });
                },
            });
        });
    });
    // Contact Mail Data Delete For Ajax End
});
