document.addEventListener('DOMContentLoaded', function () {
    var form = document.getElementById('cadastro-cliente-form');

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        var formData = new FormData(this);

        axios.post('/clientes/store', formData)
            .then(function (response) {
                if (response.data.message === 'Cliente cadastrado com sucesso!') {
                    Swal.fire(
                        'Excelente!',
                        response.data.message,
                        'success'
                    )
                    form.reset();
                } else {
                    Swal.fire(
                        'Oops...',
                        response.data.message,
                        'error'
                    )
                }
            })
    });
});
