let keyword = document.getElementById("keyword");
let isi = document.getElementById("container");

keyword.addEventListener("keyup", function () {
  let ajax = new XMLHttpRequest();
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4 && ajax.status == 200) {
      isi.innerHTML = ajax.responseText;
    }
  };

  ajax.open("GET", "../assets/ajax/coba.php?keyword=" + keyword.value, true);
  ajax.send();
});
