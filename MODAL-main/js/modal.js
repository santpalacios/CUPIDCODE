document.addEventListener('DOMContentLoaded', function() {
    const open = document.getElementById('open');
    const modal_container = document.getElementById('modal_container');
    const close = document.getElementById('close');

    open.addEventListener('click', () => {
        modal_container.classList.add('show');
    });

    close.addEventListener('click', () => {
        modal_container.classList.remove('show');
    });
});



// document.addEventListener('DOMContentLoaded', function() {
//     const open = document.getElementById('open');
//     const modal_container = document.getElementById('modal_container');
//     const close = document.getElementById('close');

//     open.addEventListener('click', () => {
//         modal_container.classList.add('show');
//         // Espera 5 segundos y redirige a otra página
//         setTimeout(() => {
//             window.location.href = 'index.html';
//         },2000);
//     });

// });


