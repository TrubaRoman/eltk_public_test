<script>
$(document).ready(function () {
$('#ttm-contactform').on('submit', function (e) {
e.preventDefault();
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});

$.ajax({
type: 'POST',
url: '{{route('sendmail',app()->getLocale())}}',
data: $('#ttm-contactform').serialize(),

success: function (response) {
$('#throttle').hide('slow');
$('#flash-messages').show('slow');
document.getElementById('flash-messages').scrollIntoView({behavior:'smooth',block: 'center'});
$('div.text-success').html(response.success);

$('.text-danger').hide('slow');
document.getElementById('ttm-contactform').reset();
},

error: function (error) {

$('#throttle').hide('slow');

if(error.status === 429){
$('#throttle').show('slow');
document.getElementById('throttle').scrollIntoView({behavior:'smooth',block: 'center'});
$('div.text-warning').html(error.responseJSON.message);
}
else{
$('#flash-messages').hide('slow');
const errors = error.responseJSON.errors;
const firstItem = Object.keys(errors)[0]
const firstItemDOM = document.getElementById(firstItem)
const firstErrorMessage = errors[firstItem][0]

//scroll to the error message
firstItemDOM.scrollIntoView({behavior:'smooth',block: 'center'})

//remove all errors messages
const errorMessages = document.querySelectorAll('.text-danger')
errorMessages.forEach((element) => element.textContent = '')

//show is the error message
firstItemDOM.insertAdjacentHTML('afterend',`<div class = "text-danger">${firstErrorMessage}</div>`)
}

$('.text-success').hide('slow');
}

})

setTimeout(function () {
$('#flash-messages').hide('slow');
$('.text-danger').hide('slow');
//
},5000);
})
})
</script>