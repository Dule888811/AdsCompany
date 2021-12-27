
    var xmlHttp = new XMLHttpRequest();
    var freeUsername = document.getElementById('freeUsername');

    var username = document.getElementById('username').value;
  consolw.log(username);
    function ajaxSearch() {


        xmlHttp.open('GET', 'usernames.php?username' + username, true);
        xmlHttp.send();
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState === 4) {
                var r = xmlHttp.responseText;
                if(r === 'true'){
                    freeUsername.innerHTML = 'Username already exists';
                    freeUsername.style.color = 'red';
                }else {
                    freeUsername.innerHTML = 'Free username';
                }
            }
        }
    }

