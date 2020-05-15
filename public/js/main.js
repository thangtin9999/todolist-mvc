(function ($) {
  "use strict";

  var fullHeight = function () {
    $(".js-fullheight").css("height", $(window).height());
    $(window).resize(function () {
      $(".js-fullheight").css("height", $(window).height());
    });
  };
  fullHeight();

  $("#sidebarCollapse").on("click", function () {
    $("#sidebar").toggleClass("active");
  });
})(jQuery);

//Delete Task

$("button#delete").click(function () {
  var id_del = $(this).val();
  $.post("./task/delete", { id: id_del }, function Redirect() {
    window.location = "./";
  });
});
//Edit task
$("button#edit").click(function () {
  var id_edit = $(this).val();
  $.post("./task/modal_edit", { id: id_edit }, function (data) {
    // $("#save_task").val() = id_edit;
    // $("#content_edit").html(data);
    document.getElementById("content_edit").value = data;
    document.getElementById("save_task").value = id_edit;
    //$("#test").html(data);
  });
});
//
$("button#save_task").click(function () {
  var id_save = $(this).val();
  var content_save = $("#content_edit").val();
  $.post(
    "./task/update",
    { id: id_save, content: content_save },
    function Redirect() {
      window.location = "./";
    }
  );
});
