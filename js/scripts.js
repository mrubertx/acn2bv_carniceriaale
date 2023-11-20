// Obtén una referencia al pie de página
const footer = document.querySelector('.footer');

// Función para verificar la posición de desplazamiento y mostrar u ocultar el pie de página
function toggleFooter() {
    if (window.scrollY > 100) { // Cambia este valor según la cantidad de desplazamiento que desees
        footer.style.display = 'flex';
    } else {
        footer.style.display = 'none';
    }
}

// Asigna la función al evento de desplazamiento
window.addEventListener('scroll', toggleFooter);

// Llama a la función una vez al inicio para establecer el estado inicial
toggleFooter();
