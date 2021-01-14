$(document).ready(function() {
    $('#formRegistroAutos').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST", // metodo por el cual se envian los datos
            data: $("#formRegistroAutos").serialize(), // Se toman todos los datos del formulario
            url: "./registrarAutos.php", // A donde se dirige para hacer el registro en la BD
            success: function(res) {
                if (res == 1) {
                    alert("Registrado");
                } else {
                    alert("No Registrado");
                }
            },
            error: function() {
                alert("No se ha podido obtener la informacion");
            },
            beforeSend: function() {
                alert("Enviando");
            }
        });
    });
});

$(document).ready(function() {
    $('#editarRegistroAutos').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST", // metodo por el cual se envian los datos
            data: $("#editarRegistroAutos").serialize(), // Se toman todos los datos del formulario
            url: "./actualizaAutos.php", // A donde se dirige para hacer el registro en la BD
            success: function(res) {
                if (res == 1 ) {
                    alert("Registrado");
                } else {
                    alert("No Registrado");
                }
            },
            error: function() {
                alert("No se ha podido obtener la informacion");
            },
            beforeSend: function() {
                alert("");
            }
        });
    });
});

$(document).ready(function() {
    $('#eliminarAutos').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST", // metodo por el cual se envian los datos
            data: $("#eliminarAutos").serialize(), // Se toman todos los datos del formulario
            url: "./eliminarAutos.php", // A donde se dirige para hacer el registro en la BD
            success: function(res) {
                if (res == 1 ) {
                    alert("Registrado");
                } else {
                    alert("No Registrado");
                }
            },
            error: function() {
                alert("No se ha podido obtener la informacion");
            },
            beforeSend: function() {
                alert("");
            }
        });
    });
});



$(document).ready(function() {
    $('#formRegistroAlquiler').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST", // metodo por el cual se envian los datos
            data: $("#formRegistroAlquiler").serialize(), // Se toman todos los datos del formulario
            url: "./registrarAlquiler.php", // A donde se dirige para hacer el registro en la BD
            success: function(res) {
                if (res == 1) {
                    alert("Registrado");
                } else {
                    alert("No Registrado");
                }
            },
            error: function() {
                alert("No se ha podido obtener la informacion");
            },
            beforeSend: function() {
                alert("Enviando");
            }
        });
    });
});



$(document).ready(function() {
    $('#editarRegistroAlquiler').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST", // metodo por el cual se envian los datos
            data: $("#editarRegistroAlquiler").serialize(), // Se toman todos los datos del formulario
            url: "./actualizaAlquiler.php", // A donde se dirige para hacer el registro en la BD
            success: function(res) {
                if (res == 1 ) {
                    alert("Registrado");
                } else {
                    alert("No Registrado");
                }
            },
            error: function() {
                alert("No se ha podido obtener la informacion");
            },
            beforeSend: function() {
                alert("");
            }
        });
    });
});




