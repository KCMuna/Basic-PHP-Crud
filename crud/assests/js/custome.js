$(document).ready(function () {
    setTimeout(function () {
        $('.alert').hide('slow');
    }, 3000);


    $('#search_students').keyup(function () {
        let getData = $(this).val();
        let sendData = {
            search: getData
        }
        $.ajax({
            type: "POST",
            url: 'search.php',
            data: sendData,
            success: function (response) {
                console.log(response)
                $('#studentResult').html(response);
            }
        })
    });


});