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

function createDialog(currentTalkerIndex, currentDialogIndex, chars, talker, story) {
  $('#talker').text(talker.name);
  $('#talker').prepend('<img src="'+ talker.image +'" />');
  for(i = 0; i < chars.length; i++) {
    (function(i) {
      setTimeout(() => {
        $('#dialog').text($('#dialog').text() + chars[i]);
        if (i == chars.length-1 && (talker.dialogs[currentDialogIndex+1] || story[currentTalkerIndex+1])){
          $('#dialog').prepend('<div id="arrow"></div>');
          $('#dialog').one('click', () => {
            if (talker.dialogs[currentDialogIndex+1]) {
              $('#dialog').text('');
              chars = talker.dialogs[++currentDialogIndex].split('');
            } else {
              if(story[currentTalkerIndex+1]){
                $('#dialog').text('');
                $('#talker').text('');
                talker = story[++currentTalkerIndex];
                currentDialogIndex = 0;
                chars = talker.dialogs[currentDialogIndex].split('');
              }
            }
            createDialog(currentTalkerIndex, currentDialogIndex, chars, talker, story);
          });
        }
      }, 50*i);
    }(i));
  }
}

function startDialog(story){
	let startTalkerIndex = 0;
  let startDialogIndex = 0;
  let talker = story[startTalkerIndex];
	let chars = talker.dialogs[startDialogIndex].split('');
	createDialog(startTalkerIndex, startDialogIndex, chars, talker, story);
}