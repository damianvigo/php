const $btn_cargar = document.getElementById("btn_cargar_usuarios"),
  $error_box = document.getElementById("error_box"),
  $tabla = document.getElementById("tabla"),
  $loader = document.getElementById("loader");

let usuario_nombre, usuario_telefono, usuario_sitio_web, usuario_correo;

function cargarUsuarios() {
  $tabla.innerHTML = `<tr>
  <th>ID</th>
  <th>Nombre</th>
  <th>Telefono</th>
  <th>Sitio Web</th>
  <th>Correo</th>
</tr>`;

  const peticion = new XMLHttpRequest();
  peticion.open("GET", "php/leer-datos.php");

  $loader.classList.add("active");

  peticion.onload = function () {
    const datos = JSON.parse(peticion.responseText);
    // console.log(datos);
    if (datos.error) {
      $error_box.classList.add("active");
    } else {
      for (let i = 0; i < datos.length; i++) {
        const elemento = document.createElement("tr");
        elemento.innerHTML += `<td> ${datos[i].id} </td>`;
        elemento.innerHTML += `<td> ${datos[i].name} </td>`;
        elemento.innerHTML += `<td> ${datos[i].phone} </td>`;
        elemento.innerHTML += `<td> ${datos[i].website} </td>`;
        elemento.innerHTML += `<td> ${datos[i].email} </td>`;
        $tabla.appendChild(elemento);
      }
    }
  };

  peticion.onreadystatechange = function () {
    if (peticion.readyState == 4 && peticion.status == 200) {
      $loader.classList.remove("active");
    }
  };

  peticion.send();
}

$btn_cargar.addEventListener("click", () => {
  cargarUsuarios();
});
