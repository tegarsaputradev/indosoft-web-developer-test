// get_random_quote
function load_data() {
  let xhttp = new XMLHttpRequest();
  xhttp.onload = function () {
    document.getElementById("isi").innerHTML += xhttp.responseText;
  };
  xhttp.open("GET", "php/get_random_quote.php");
  xhttp.send();
}

function post_data() {
  var data = new FormData();
  data.append("by", document.getElementById("by").value);
  data.append("quote", document.getElementById("quote").value);
  zhttp = new XMLHttpRequest();
  zhttp.open("POST", "php/post_quote.php");
  zhttp.onload = function () {
    let res = zhttp.responseText;
    if (res != "a") {
      document.getElementById("isi").innerHTML += zhttp.responseText;
      swal("Success!", "Anda berhasil menyimpan Quote!", "success");
    } else {
      swal("Gagal Menyimpan", "Login terlebih dahulu untuk menyimpan!");
    }
  };
  zhttp.send(data);
  return false;
}
