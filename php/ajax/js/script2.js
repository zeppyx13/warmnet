$(document).ready(function () {
  $("#keyword").on("keyup", function () {
    $("#container").load("../php/ajax/dex.php?keyword=" + $("#keyword").val());
  });
});
