
const submit = document.getElementById('proxima');
const feliz = document.getElementById('feliz');
const neutro = document.getElementById('neutro');
const triste = document.getElementById('triste');

submit.addEventListener('click', stop);

function stop(e) {
    if (feliz.checked === false && neutro.checked === false && triste.checked === false) {
        e.preventDefault();
        Swal.fire({
            icon: 'warning',
            title: 'OPS',
            text: 'Responda antes de ir para proxima pergunta. ',
            showConfirmButton: false,
            timer: 2000
        });
    }
}