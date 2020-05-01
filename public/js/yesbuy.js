const gameOverAlert = () => Swal.fire({
    title: '¡Completado!',
    text: "¡Has comprado el artículo!",
    icon: 'success',
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: '¡Genial!',
}).then((result) => {
    if (result.value) {
        window.location.href="/myStore";
    }
});

gameOverAlert();