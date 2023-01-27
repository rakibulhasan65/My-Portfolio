jQuery(document).ready(function () {
    // Banners Us Start
    // jQuery("#BannerSave").on("submit", function (e) {
    //     e.preventDefault();
    //     var formData = new FormData(this);
    //     $.ajax({
    //         url: "/banners/{id}",
    //         type: "POST",
    //         data: formData,
    //         dataType: "JSON",
    //         contentType: false,
    //         processData: false,
    //         success: function (response) {
    //             if (response.name == "success") {
    //                 alert("OK Data Saved!");
    //             } else {
    //                 alert("Data Not Saved!");
    //             }
    //         },
    //     });
    // });
    // Banners Us End

    // // About Us Start
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
        function birthOfDay() {
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
        }
        jQuery("#dateOfBirth").val(toMonth);
    });
    // Age Calculate End

    // Contact Us Start
    // jQuery("#contactMailForm").on("submit", function (event) {
    //     event.preventDefault();
    //     var ContactMail = new FormData(this);
    // $.ajax({
    //     url: "/sendMessage",
    //     type: "POST",
    //     data: ContactMail,
    //     dataType: "JSON",
    //     success: function (response) {
    //         if (response.success == "success") {
    //             alert("Message Sended!");
    //         } else {
    //             alert("Message Not Send!");
    //         }
    //     },
    // });
    //     alert(ContactMail);
    // });
    // Contact Us End
});
