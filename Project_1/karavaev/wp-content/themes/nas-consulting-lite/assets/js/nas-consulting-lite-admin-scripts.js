(function ($) {
  "use strict";
  $("#nas-consulting-lite-dismiss-notice").on("click", ".notice-dismiss", function () {
    $.ajax({
      url: nusacons_consulting_admin_localize.ajax_url,
      method: "POST",
      data: {
        action: "nusacons_consulting_dismissble_notice",
        nonce: nusacons_consulting_admin_localize.nonce,
      },
      success: function (response) {
        if (response.success) {
          console.log("Notice dismissed successfully.");
          $("#nas-consulting-lite-dismiss-notice").fadeOut(); // Hide the notice
        } else {
          console.log("Failed to dismiss notice:", response.data.message);
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.log("Error:", textStatus, errorThrown);
      },
    });
  });
  $("#nas-consulting-lite-dashboard-tabs-nav li:first-child").addClass("active");
  $(".tab-content").hide();
  $(".tab-content:first").show();
  $("#nas-consulting-lite-dashboard-tabs-nav li").click(function () {
    $("#nas-consulting-lite-dashboard-tabs-nav li").removeClass("active");
    $(this).addClass("active");
    $(".tab-content").hide();
    var activeTab = $(this).find("a").attr("href");
    $(activeTab).fadeIn();
    return false;
  });
})(jQuery);
