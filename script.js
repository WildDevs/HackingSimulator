function nextLevel(level, pass) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = () => {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      if (xhttp.responseText != "incorrect") {
        window.location.href = xhttp.responseText;
      } else {
        alert("Password incorrect, please try again.");
      }
    }
  };

  xhttp.open("POST", "check.php?level=" + level + "&pass=" + pass, false);
  xhttp.send();
}
