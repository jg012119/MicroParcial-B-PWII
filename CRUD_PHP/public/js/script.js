function mostrarInformacion(nombre, cantidad, precio, estado) {
    var infoProducto = "Nombre: " + nombre + "<br>";
    infoProducto += "Cantidad: " + cantidad + "<br>";
    infoProducto += "Precio: $" + precio + "<br>";
    infoProducto += "Estado: " + estado;

    var ventana = window.open("", "Información del Producto", "width=400,height=300");
    ventana.document.write("<html><head><title>Información del Producto</title><style>body{font-family: Arial, sans-serif;padding: 20px;}h1{margin-bottom: 20px;}p{margin-bottom: 10px;}</style></head><body>");
    ventana.document.write("<h1>Información del Producto</h1>");
    ventana.document.write("<p>" + infoProducto + "</p>");
    ventana.document.write("</body></html>");
}