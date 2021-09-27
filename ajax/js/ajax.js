let btn = document.getElementById("btn_cargar_usuarios");
let loader = document.getElementById("loader");

btn.addEventListener("click", () => {
  let peticion = new XMLHttpRequest();
  // peticion.open("GET", "https://jsonplaceholder.typicode.com/users");
  peticion.open("GET", "php/usuarios.php");

  loader.classList.add("active");

  peticion.onload = () => {
    const datos = JSON.parse(peticion.responseText);
    // console.log(datos);

    for (let i = 0; i < datos.length; i++) {
      let elemento = document.createElement("tr");
      elemento.innerHTML += `<td> ${datos[i].id} </td>`;
      elemento.innerHTML += `<td> ${datos[i].name} </td>`;
      elemento.innerHTML += `<td> ${datos[i].phone} </td>`;
      elemento.innerHTML += `<td> ${datos[i].website} </td>`;
      elemento.innerHTML += `<td> ${datos[i].email} </td>`;
      document.getElementById("tabla").appendChild(elemento);
    }

    /*     datos.forEach((persona) => {
      let elemento = document.createElement("tr");
      elemento.innerHTML += `<td> ${persona.id} </td>`;
      elemento.innerHTML += `<td> ${persona.name} </td>`;
      elemento.innerHTML += `<td> ${persona.phone} </td>`;
      elemento.innerHTML += `<td> ${persona.website} </td>`;
      elemento.innerHTML += `<td> ${persona.email} </td>`;
      document.getElementById("tabla").appendChild(elemento);
    }); */
  };

  peticion.onreadystatechange = () => {
    if (peticion.readyState == 4 && peticion.status == 200) {
      loader.classList.remove("active");
    }
  };

  peticion.send();
});
