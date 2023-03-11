function setDNI() {
    const dni = document.getElementById("txtNrodocument").value;
    const token ="723dc03bc2245982360509bd1896d386d423a74ba2b8473dd11fd8b89732125a";
    const resultElement = document.getElementById("result");
  
    fetch(`https://apiperu.dev/api/dni/${dni}`, {
      headers: {
        Authorization: `Bearer ${token}`,
      },
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.success) {
          const fullName = `${data.data.nombres} ${data.data.apellido_paterno} ${data.data.apellido_materno}`;
          // resultElement.textContent = `Nombre: ${fullName}`;
          console.log(`Nombre: ${fullName}`);
        } else {
          //resultElement.textContent = `Error: ${data.message}`;
          console.log(`Error: ${data.message}`);
        }
      })
      .catch((error) => {
        //resultElement.textContent = `Error: ${error}`;
        console.log(`Error: ${error}`);
      });
  }
