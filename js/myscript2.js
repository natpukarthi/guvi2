function myFunction() {
var email = document.getElementById("email").value;
var password1 = document.getElementById("password").value;
// Returns successful data submission message when the entered information is stored in database.
var dataString = '&email1=' + email + '&password1=' + password1;
if (email == '' || password1 == '') {
alert("Please Fill All Fields");
} else {
    $.ajax({
        url: 'process.php',
        type: 'POST',
        dataType: "json",
        data: {
            name: $('#name').val(),
            password1: $('#password').val()
        }
    }).done(function(data){
            alert(JSON.stringify(data));
    });
}
}