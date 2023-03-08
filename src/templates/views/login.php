
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login | Bank</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />

  <!-- Bootstrap CSS v5.2.1 -->
  <link rel="stylesheet" href="../../assets/css/login.css" />
</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <div class="container-fluid ps-md-0">
      <div class="row g-0">
        <div class="bgImage col-md-4 col-lg-6 d-none d-md-flex">
          <div>
            <img src="../../assets/images/payment-successful.png" alt="card" class="img-fluid">
          </div>
        </div>
        <div class="col-md-8 col-lg-6">
          <div class="container">
            <div class="row">
              <div class="col-5 text-start">
                <a class="small" href="../../../src">Volver</a>
              </div>
              <div class="col-7 text-end">
                <span class="small text-secondary" href="#">Esta ventana se cerrara en <span id=txtSeconds></span> segundos</span>
              </div>
            </div>
          </div>
          <div class="login d-flex align-items-center">
            <div class="container">
              <div class="row">
                <div class="col-md-9 col-lg-8 mx-auto">
                  <h3 class="login-heading mb-4">Banca por internet</h3>

                  <!-- Sign In Form -->
                  <form>

                    <div class="form-floating mb-3">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                          value="">
                        <label class="form-check-label" for="inlineRadio1">Persona</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                          value="">
                        <label class="form-check-label" for="inlineRadio2">Empresa</label>
                      </div>
                    </div>

                    <div class="form-floating input-group mb-3">
                      <select class="btn btn-outline-secondary">
                        <option value="">DNI</option>
                        <option value="">CE</option>
                        <option value="">PAS</option>
                      </select>
                      <div class="form-floating">
                        <input type="text" class="form-control" id="floatingNro-documnet" placeholder="Nro-document">
                        <label for="floatingNro-documnet">Nro de documento</label>
                      </div>
                    </div>

                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="floatingPassword" placeholder="Password">
                      <label for="floatingPassword">Número de tarjeta</label>
                    </div>

                    <div class="form-check mb-3">
                      <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                      <label class="form-check-label" for="rememberPasswordCheck">
                        Recordar datos
                      </label>
                    </div>

                    <div class="form-floating mb-3">
                      <input type="password" class="form-control" id="floatingInput" placeholder="Usuario">
                      <label for="floatingInput">Clave de internet de 6 dígitos</label>
                      <div class="row">
                        <div class="col-6">
                          <a class="small" href="#">No tengo clave</a>
                        </div>
                        <div class="col-6 text-end">
                          <a class="small" href="#">Olvide mi clave</a>
                        </div>
                      </div>
                    </div>

                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="floatingPassword" placeholder="Password">
                      <label for="floatingPassword">Código</label>
                      <div class="text-start">
                        <a class="small" href="#">Cambiar código</a>
                      </div>
                    </div>

                    <div class="d-grid">
                      <button class="btn btn-lg btn-success btn-login text-uppercase fw-bold mb-2"
                        type="submit">Continuar</button>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer>
  <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
    crossorigin="anonymous"></script>

  <script src="../../assets/js/timer.js"></script>
</body>

</html>