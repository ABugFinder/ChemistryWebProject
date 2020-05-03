const gameOverAlert = () => Swal.fire({
    title: '¡Error!',
    text: "¡No tienes suficiente dinero para comprar este artículo!",
    icon: 'error',
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Entendido',
}).then((result) => {
    if (result.value) {
        window.location.href="/myStore";
    }
});

gameOverAlert();