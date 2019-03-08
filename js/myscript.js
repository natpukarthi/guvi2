$('#password, #confirm_password').on('keyup', function () {
if ($('#password').val() == $('#confirm_password').val()) {
$('#message').html('Matching').css('color', 'green');
$("#enter").removeAttr("disabled");
}
else {
$('#message').html('Not matching').css('color', 'red');
$("#enter").prop("disabled", true);
}
});