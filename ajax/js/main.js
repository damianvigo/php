const $btn_cargar = document.getElementById("btn_cargar_usuarios"),
  $error_box = document.getElementById("error_box"),
  $tabla = document.getElementById("tabla"),
  $loader = document.getElementById("loader"),
  $formulario = document.getElementById("formulario");

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

function agregarUsuarios(e) {
  e.preventDefault();

  const peticion = new XMLHttpRequest();
  peticion.open("POST", "php/insertar-usuario.php");

  usuario_nombre = $formulario.nombre.value.trim();
  usuario_telefono = parseInt($formulario.telefono.value.trim());
  usuario_sitio_web = $formulario.sitio_web.value.trim();
  usuario_correo = $formulario.correo.value.trim();
  console.log(
    usuario_nombre,
    usuario_telefono,
    usuario_sitio_web,
    usuario_correo
  );

  if (formulario_valido()) {
    $error_box.classList.remove("active");
    const parametros = `nombre=${usuario_nombre}&telefono=${usuario_telefono}&sitio_web=${usuario_sitio_web}&correo=${usuario_correo}`;

    peticion.setRequestHeader(
      "Content-Type",
      "application/x-www-form-urlencoded"
    );

    $loader.classList.add("active");

    peticion.onload = () => {
      cargarUsuarios();
      $formulario.nombre.value = "";
      $formulario.telefono.value = "";
      $formulario.sitio_web.value = "";
      $formulario.correo.value = "";
    };

    peticion.onreadystatechange = () => {
      if (peticion.readyState == 4 && peticion.status == 200) {
        $loader.classList.remove("active");
      }
    };

    peticion.send(parametros);
  } else {
    $error_box.classList.add("active");
    $error_box.innerHTML = "Por favor completa el formulario correctamente";
  }
}

$btn_cargar.addEventListener("click", () => {
  cargarUsuarios();
});

$formulario.addEventListener("submit", (e) => {
  agregarUsuarios(e);
});

function formulario_valido() {
  if (!usuario_nombre) {
    return false;
  } else if (isNaN(usuario_telefono)) {
    return false;
  } else if (usuario_sitio_web == "") {
    return false;
  } else if (usuario_correo == "") {
    return false;
  }

  return true;
}
