function checkPassword() {
    var testPassword1 = /^[a-zA-Z0-9]{7,14}$/;
    var textPassword1 = document.formUpdatePass.resetPassword1.value;
    var resultPassword1 = textPassword1.match(testPassword1);
    if (!resultPassword1) {
        alert("Prvi upis lozinke nije dobar");
        return false;
    }
    else {
        var testPassword2 = /^[a-zA-Z0-9]{7,14}$/;
        var textPassword2 = document.formUpdatePass.resetPassword2.value;
        var resultPassword2 = textPassword2.match(testPassword2);
        if (!resultPassword2) {
            alert("Ponovljena lozinka nije dobra");
            return false;
        }
    }
}