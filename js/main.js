function getCookie(cname) {
    let name = cname + "=";
    let ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function checkCookie() {
    let error_n = getCookie("error");
    if (error_n != "") {
        fetch('../includes/errors.php?error=' + error_n)
            .then(response => response.text())
            .then(data => {
                alert("Error " + error_n + ": " + data);
            })
            .catch(error => console.error('Error:', error));
    }
}
