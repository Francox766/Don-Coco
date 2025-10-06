document.getElementById('cantidad').addEventListener('input', calcularMonto);
document.getElementById('precio_unitario').addEventListener('input', calcularMonto);

function calcularMonto() {
    const cantidad = document.getElementById('cantidad').value;
    const precioUnitario = document.getElementById('precio_unitario').value;
    const monto = document.getElementById('monto');

    if (cantidad && precioUnitario) {
        monto.value = cantidad * precioUnitario;
    } else {
        monto.value = '';
    }
}