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
        var toDay = new Date();
        var toDate = toDay.getDate();
        var toMonth = toDay.getMonth();
        var toYear = toDay.getFullYear();

        var birthCalculate = jQuery(this).val();

        var dateOfBirth = new Date(birthCalculate);
        var birthDate = dateOfBirth.getDate();
        var birthMonth = dateOfBirth.getMonth();
        var birthYear = dateOfBirth.getFullYear();

        if (toDate < birthDate) {
            toDate = toDate + 30;
            toDate = toDate - birthDate;
            toMonth = toMonth - 1;
            if (toMonth < birthMonth) {
                toMonth = toMonth + 12;
                toMonth = toMonth - birthMonth;
                toYear = toYear + 1;
                toYear = toYear - birthYear;
            } else {
                toMonth = toMonth - birthMonth;
                toYear = toYear - birthYear;
            }
        }
        // console.log(typeof toMonth);
        jQuery("#dateOfBirth").val(toYear);
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
    var i = 0;
    jQuery("#addMore_btn").on("click", function () {
        ++i;
        jQuery("#dynamicAddRemove").append(
            '<tr><td><input class="form-control" type="text" name="categoryAddMoreInputField[' +
                i +
                '][catTitleDetails]" id="catTitle_input" placeholder="Enter Category Type.."></td>\
            <td><button type="button" id="addRemoveField_btn" class="btn btn-outline-danger ">Remove Field</button></td></tr>'
        );
        jQuery("#addRemoveField_btn").on("click", function () {
            jQuery(this).parents("tr").remove();
        });
    });
    // Contact Mail Data Delete For Ajax End
});
