// alert('users.js called');
// console.log('Users.js called');

function createUser(action, method, data) {
    $.ajax({
        url: action, 
        type: method,
        data: data,
        dataType: 'json',
        cache: false,
    	contentType: false,
    	processData: false,
        success: function(response) {
            if (response.success) {
                alert(response.message);
                
                $('#create-user-form')[0].reset();
            }
        },
        error: function(xhr) {
            // console.log("hubo error");
        }
    })
}

$(document).on('submit', '#create-user-form', function(event) {
    event.preventDefault();
    let action = $(this).attr('action'),
    method = $(this).attr('method'),
    data = new FormData(this);

    createUser(action, method, data);
})