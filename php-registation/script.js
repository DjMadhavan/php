function validateForm() {
    var firstName = document.getElementById("firstname").value;
    var lastName = document.getElementById("lastname").value;
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var dob = document.getElementById("dob").value;
    var language = document.getElementById("language").value;
    var country = document.getElementById("country").value;
    var state = document.getElementById("state").value;
    var city = document.getElementById("city").value;

    // Check if all required fields are filled
    if (firstName === "" || lastName === "" || username === "" || email === "" || dob === "" || language.length === 0 || country === "" || state === "" || city === "") {
        alert("Please fill in all required fields");
        return false;
    }

    // Check if email format is valid
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert("Please enter a valid email address");
        return false;
    }

    return true;
}
