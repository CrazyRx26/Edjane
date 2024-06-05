import Swal from 'sweetalert2'

// or via CommonJS
const Swal = require('sweetalert2')

function alerta() {

    Swal.fire({
        position: "top-end",
        icon: "success",
        title: "Seu formulário foi enviado com sucesso!",
        showConfirmButton: false,
        timer: 1500
    });
}