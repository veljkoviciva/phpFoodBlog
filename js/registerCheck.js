//RADI!!!

function checkData() {
    var testName = /^[A-Z]{1}[a-z]{2,10}$/;
    var textName = document.registerForm.name.value;
    var resultName = textName.match(testName);
    if (!resultName) {
        alert("Ime nije dobro. Procitajte jos jednom pravila");
        return false;
    }
    else {
        var testSurname = /^[A-Z]{1}[a-z]{2,20}$/;
        var textSurname = document.registerForm.surname.value;
        var resultSurname = textSurname.match(testSurname);
        if (!resultSurname) {
            alert("Prezime nije dobro. Pročitajte jos jednom pravila");
            return false;
        }
        else {
            var testEmail = /^[a-z]{3,15}[0-9]{0,4}@(gmail|outlook)\.com$/;
            var mail = document.registerForm.emailAddress.value;
            var resultEmail = mail.match(testEmail);
            if (!resultEmail) {
                alert("Email nije dobar. Moguće je prijaviti se sa gmail ili outlook naloga");
                return false;
            }
            else {
                var testUsername = /^[a-z]{1,10}[0-9]{0,4}$/;
                var textUsername = document.registerForm.username.value;
                var resultUsername = textUsername.match(testUsername);
                if (!resultUsername) {
                    alert("Nije dobar username, pročitajte pravila ponovo");
                    return false;
                }
                else {
                    var testPassword = /^[a-zA-Z0-9]{7,14}$/;
                    var textPassword = document.registerForm.userPassword.value;
                    var resultPassword = textPassword.match(testPassword);
                    if (!resultPassword) {
                        alert("Nije dobra lozinka, pročitajte pravila ponovo");
                        return false;
                    }
                }
            }
        }
    }
}
