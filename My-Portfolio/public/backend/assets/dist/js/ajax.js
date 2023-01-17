jQuery(document).ready(function () {
    // Banners Us Start
    jQuery("#BannerData").on("submit", function (e) {
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
        var AboutData = new AboutData(this);
        $.ajax({
            url: "/about",
            type: "POST",
            data: AboutData,
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
    // About Us End
});
