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
    // jQuery("#contact_delete").on("click", function () {});
    // Contact Mail Data Delete For Ajax End
});
