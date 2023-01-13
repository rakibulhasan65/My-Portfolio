jQuery(document).ready(function () {
    jQuery(document).on("click", "#bannerButton", function () {
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        var bannerImage = jQuery("#bannerImage").val();
        var developerName = jQuery("#developerName").val();
        var skills = jQuery("#skills").val();
        var resume = jQuery("#resume").val();
        var resumeVideo = jQuery("#resumeVideo").val();
        $.ajax({
            url: "banners.store",
            type: "POST",
            contentType: false,
            processData: false,
            data: {
                bannerImage: bannerImage,
                developerName: developerName,
                skills: skills,
                resume: resume,
                resumeVideo: resumeVideo,
            },
            success: function (response) {
                alert(response.success);
            },
            error: function () {
                alert("Data Error");
            },
        });
    });
});
