<script>
    let products = [];
    let total = 0;

    function add(product, price) {
        console.log(product, price);
        products.push(product);
        total = total + price;
        document.getElementById("checkout").innerHTML = `Pagar $${total}`
    }

    function pay() {
        // event.preventDefault();
        window.alert(products.join(", \n"));
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "/simulador/pay");
        xhr.setRequestHeader("Content-Type", "application/json");
        xhr.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').content);
        xhr.send(JSON.stringify({
            total: total,
            _token: document.querySelector('[name="_token"]').value // Access CSRF token from hidden field
        }));
        window.alert(xhr);
        console.log(xhr);
        xhr.onload = function() {
            if (xhr.status === 200) {
                // La solicitud se ha realizado correctamente
                console.log("Pago exitoso");
                location.href = "simulador/result";
            } else {
                // La solicitud ha fallado
                console.error("Error al realizar el pago:", xhr.responseText);
            }
        };
    }
</script>
