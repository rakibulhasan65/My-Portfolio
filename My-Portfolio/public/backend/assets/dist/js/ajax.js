jQuery(document).ready(function () {
    // Banners Us Start
    jQuery("#BannerSave").on("submit", function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url: "/banners",
            type: "POST",
            data: formData,
            dataType: "JSON",
            contentType: false,
            processData: false,
            success: function (response) {
                if (response.name == "success") {
                    alert("OK Data Saved!");
                } else {
                    alert("Data Not Saved!");
                }
            },
        });
    });
    // Banners Us End

    // About Us Start
    jQuery("#AboutData").on("submit", function (e) {
        e.preventDefault();
        var AboutData = new FormData(this);
        $.ajax({
            url: "/about",
            type: "POST",
            data: AboutData,
            dataType: "JSON",
            contentType: false,
            processData: false,
            success: function (response) {
                if (response.status == "success") {
                    alert("OK Data Saved!");
                } else {
                    alert("Data Not Saved!");
                }
            },
        });
    });
    // About Us End

    // Age Calculate start
    jQuery("#birth").on("change", function () {
        var birthCalculate = jQuery(this).val();
        var dateOfBirth = new Date(birthCalculate);
        var birthDate = dateOfBirth.getDate();
        var birthMonth = dateOfBirth.getMonth();
        var birthYear = dateOfBirth.getFullYear();

        var toDay = new Date();
        var toDate = toDay.getDate();
        var toMonth = toDay.getMonth();
        var toYear = toDay.getFullYear();

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
                toDate = toDate - birthDate;
                toMonth = toMonth - birthMonth;
                toYear = toYear - birthYear;
            }
        }
        jQuery("#dateOfBirth").val(toDate + "-" + toMonth + "-" + toYear);
    });
    // Age Calculate End


});
