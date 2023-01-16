jQuery(document).ready(function () {
    jQuery("#FormData").on("submit", function (e) {
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
});
