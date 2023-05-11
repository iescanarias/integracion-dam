var cb = document.getElementById("crearButton");
cb.onclick = (e) => {
    var t = document.getElementById("titulo");
    if (t.value) {
        window.location.assign("/tareas/crear/" + t.value);
    }
}
var formulario = document.getElementById("formFiltro");
var fb = document.getElementById("filtroButton");
fb.onclick = (e) => {
    e.preventDefault();
    formulario.submit();
}
