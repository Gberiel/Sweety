document.addEventListener('DOMContentLoaded', () => {
    cargarProductos();

    document.getElementById('lista-productos').addEventListener('click', agregarProducto);
});

function cargarProductos() {
    const xhr = new XMLHttpRequest();
    xhr.open('GET', 'productos.php', true);

    xhr.onload = function() {
        if (xhr.status === 200) {
            const productos = JSON.parse(xhr.responseText);
            const listaProductos = document.getElementById('lista-productos');

            productos.forEach(producto => {
                const li = document.createElement('li');
                li.innerHTML = `${producto.nombre} - ${producto.precio}€ <button class="btn" data-id="${producto.id}">Agregar</button>`;
                listaProductos.appendChild(li);
            });
        }
    };

    xhr.send();
}

function agregarProducto(e) {
    if (e.target.classList.contains('btn')) {
        const productoId = e.target.getAttribute('data-id');
        const xhr = new XMLHttpRequest();
        xhr.open('GET', `agregar_producto.php?id=${productoId}`, true);

        xhr.onload = function() {
            if (xhr.status === 200) {
                const carrito = document.getElementById('lista-carrito');
                const li = document.createElement('li');
                li.innerHTML = xhr.responseText;
                carrito.appendChild(li);

                calcularTotal();
            }
        };

        xhr.send();
    }
}

function calcularTotal() {
    const precios = Array.from(document.querySelectorAll('#lista-carrito li span'));
    const total = precios.reduce((acc, precio) => acc + parseFloat(precio.textContent), 0).toFixed(2);
    document.getElementById('total').textContent = total;
}
