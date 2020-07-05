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

//Delete Task - Ok
// Hiện tại e phải redirect lại. E muốn nó trả về view ngay luôn chứ không load
$("button#delete").click(function () {
  var id_del = $(this).val();
  _this = $("#div-task-" + id_del + "");
  $.post("./task/delete", { id: id_del }, function (data) {
    //$("#result").html(data);
    // neu delete thanh cong => remove row tren view la du
    _this.remove();
  }).fail(function (res) {
    console.log(res);
    alert("Cannot delete!");
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

//Save-task(Edit feature)
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

// Task-complete
$("input.custom-control-input").click(function () {
  var get_id = $(this).attr("id").trim();
  var id = get_id.substring(11, 14);
  _this = $(this);
  $.post("./task/task_complete", { id: id }, function () {
    // $("#text" + id).css("text-decoration", "line-through");
    _this
      .parent("div")
      .find("span.label-text")
      .css("text-decoration", "line-through");
  });
});

$("#cat-1").click(function () {
  $("#result").load("./category/mytask");
});
