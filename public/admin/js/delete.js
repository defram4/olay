//@desc sweetAlert to delete
//@usage to enable sweetAlert delete popup add class form-delete to button type submit from form
// for deleting resource and include main sweetalert.min.js file and this script in blade file

jQuery(document).ready(function () {
    jQuery('.form-delete').on('click', function (e) {
        e.preventDefault()
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                e.currentTarget.form.submit();
            }
        })

    })
});