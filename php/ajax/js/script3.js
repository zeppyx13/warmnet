$(document).ready(function () {
  $("#keyword").on("keyup", function () {
    $("#container").load("../../php/ajax/billing.php?keyword=" + $("#keyword").val());
  });
});
