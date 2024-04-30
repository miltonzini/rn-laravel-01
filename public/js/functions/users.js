// alert('users.js called');
// console.log('Users.js called');

function createUser(action, method, data) {
    console.log('a');
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
                Swal.fire({
                    title: "Mensaje",
                    text: response.message,
                    icon: "success"
                });
                
                $('#create-user-form')[0].reset();
            }
        },
        error: function(xhr) {
            console.log('b');
            $.each(xhr.responseJSON.errors, function(index, value) {
                Swal.fire({
                    title: "Error",
                    text: value,
                    icon: "warning"
                });
                console.log('swal fired');
            });
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