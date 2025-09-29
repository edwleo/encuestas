<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Encuestas</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

  <style>
    .bd-callout {
      background-color: #f0f0f0;

      padding: 1rem;
    }

    .bd-callout-danger {
      border-left: 5px solid #bc1a01ff;
      /* 007bff */
    }

    .bd-callout-primary {
      border-left: 5px solid #007bff;
      /* 007bff */
    }

    /* max-width */
    .mw {
      width: 100%;
    }

    .bg-header {
      background-color: #BEDBFF;
    }

    .bg-selected {
      background-color: #DCFCE7;
    }
  </style>

  <div class="container my-3">
    <div class="card">
      <div class="card-header bg-primary text-light">
        <h4>Identificación de necesidades de formación y capacitación</h4>
        <h6 class="mb-0">Sector agroindustria</h6>
      </div>
      <div class="card-body">
        <div class="bd-callout bd-callout-primary">
          <h6>Recomendaciones previas</h6>
          <p class="mb-0">
            Estimado participante, la siguiente encuesta es para identificar las principales necesidades de formación y
            capacitación que requiere el sector Agroindustria.
          </p>
        </div>

        <p class="mt-2">
          La encuesta tiene 4 secciones:
        </p>
        <ul class="fst-italic">
          <li>Información de la empresa</li>
          <li>Información de puestos del área agrícola</li>
          <li>Información de puestos del área industrial</li>
          <li>Información de puestos transversales</li>
        </ul>

        <p class="mb-0">
          <strong>Nota: </strong>En cada una de ellas deberá:
        </p>
        <ol type="a" class="mb-0">
          <li>Seleccionar el puesto requerido.</li>
          <li>Escribir el número de trabajadores requeridos.</li>
          <li>Seleccionar la disponibilidad del puesto en el mercado con una de las 3 alternativas: Crítico, Muy
            crítico, Altamente crítico.</li>
        </ol>

      </div>
    </div> <!-- .card -->

    <div class="card my-3">
      <div class="card-header bg-header p-3">
        <h5 class="mb-0">I. Información de la empresa</h5>
        <!--         <p class="mb-0 fst-italic">En esta sección deberá escribir el nombre de su empresa, Zona(s) donde opera y
          principal(es) cultivos.
        </p> -->
      </div>
      <div class="card-body">
        <div class="bd-callout bd-callout-primary mb-3">
          <p class="mb-0">
            En esta sección deberá escribir el nombre de su empresa, Zona(s) donde opera y principal(es) cultivos.
          </p>
        </div>
        <div class="row g-2">
          <div class="col-md-3">
            <div class="input-group">
              <div class="form-floating">
                <input type="text" id="ruc" name="ruc" class="form-control" placeholder="RUC" minlength="11"
                  maxlength="11" pattern="[0-9]+" autofocus>
                <label for="ruc">RUC</label>
              </div>
              <button class="btn btn-outline-success"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-floating">
              <input type="text" id="razonsocial" class="form-control">
              <label for="razonsocial">Razon social</label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-floating">
              <input type="text" id="nombrecomercial" class="form-control">
              <label for="nombrecomercial">Nombre comercial</label>
            </div>
          </div>
        </div> <!-- .row -->
        <div class="row g-3 my-2">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header bg-secondary text-light">Zona de operación</div>
              <div class="card-body">
                <ul class="list-group">

                  <li class="list-group-item">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="a">
                      <label for="a" class="form-check-label mw">Arequipa</label>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="b">
                      <label for="b" class="form-check-label mw">Ica</label>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="c">
                      <label for="c" class="form-check-label mw">Junin</label>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="d">
                      <label for="d" class="form-check-label mw">La Libertad</label>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="e">
                      <label for="e" class="form-check-label mw">Lambayeque</label>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="f">
                      <label for="f" class="form-check-label mw">Piura</label>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="g">
                      <label for="g" class="form-check-label mw">San Martín</label>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="h">
                      <label for="h" class="form-check-label mw">Tumbes</label>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="i">
                      <label for="i" class="form-check-label mw">Otro</label>
                    </div>
                  </li>
                </ul>
              </div> <!-- .card-body -->
            </div> <!-- .card -->
          </div> <!-- .col-md-6 -->
          <div class="col-md-6">
            <div class="card">
              <div class="card-header bg-secondary text-light">Principal(es) cultivos</div>
              <div class="card-body">
                <ul class="list-group">
                  <li class="list-group-item">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="chkA">
                      <label for="chkA" class="form-check-label mw">Arándano</label>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="chkB">
                      <label for="chkB" class="form-check-label mw">Palta</label>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="chkC">
                      <label for="chkC" class="form-check-label mw">Espárrago</label>
                    </div>
                  </li>
                  <li class="list-group-item bg-selected">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="chkD">
                      <label for="chkD" class="form-check-label mw">Uva</label>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="chkE">
                      <label for="chkE" class="form-check-label mw">Mango</label>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- .card-body -->
    </div> <!-- .card -->

    <!-- Área agrícola -->
    <div class="card my-3">
      <div class="card-header bg-header p-3">
        <h5 class="mb-0">II. Información del puesto en el área agrícola</h5>
        <!-- <p class="mb-0 fst-italic">Grupo ocupacional - Operario calificado</p> -->
      </div>
      <div class="card-body">
        <div class="bd-callout bd-callout-primary mb-2">
          <p class="mb-0">Grupo ocupacional - <strong>Operario calificado</strong></p>
          <p class="mb-0 fst-italic">Puesto requerido (Disponibilidad en el mercado: Crítico, Muy crítico y Altamente
            crítico)</p>
        </div>

        <div class="table-responsive mt-2">
          <table class="table table-bordered">
            <colspan>
              <col width="33%">
              <col width="34%">
              <col width="33%">
            </colspan>
            <thead>
              <tr class="table-primary">
                <th>Puestos</th>
                <th>Disponibilidad en el mercado</th>
                <th>N° de puestos requeridos</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="align-middle">Regador</td>
                <td>
                  <select name="" id="" class="form-select rounded-0">
                    <option value="">Crítico</option>
                    <option value="">Muy crítico</option>
                    <option value="">Altamente crítico</option>
                  </select>
                </td>
                <td><input type="number" class="form-control rounded-0 text-end" min="0" maxlength="100" step="1"
                    value="0"></td>
              </tr>
              <tr>
                <td class="align-middle">Operador de sistemas de riego</td>
                <td>
                  <select name="" id="" class="form-select rounded-0">
                    <option value="">Crítico</option>
                    <option value="">Muy crítico</option>
                    <option value="">Altamente crítico</option>
                  </select>
                </td>
                <td><input type="number" class="form-control text-end rounded-0" min="0" maxlength="100" step="1"
                    value="0"></td>
              </tr>
              <tr>
                <td class="align-middle">Evaluador fitosanitario</td>
                <td>
                  <select name="" id="" class="form-select rounded-0">
                    <option value="">Crítico</option>
                    <option value="">Muy crítico</option>
                    <option value="">Altamente crítico</option>
                  </select>
                </td>
                <td><input type="number" class="form-control rounded-0 text-end" min="0" maxlength="100" step="1"
                    value="0"></td>
              </tr>
              <tr>
                <td class="align-middle">Aplicador fitosanitario</td>
                <td>
                  <select name="" id="" class="form-select rounded-0">
                    <option value="">Crítico</option>
                    <option value="">Muy crítico</option>
                    <option value="">Altamente crítico</option>
                  </select>
                </td>
                <td><input type="number" class="form-control text-end rounded-0" min="0" maxlength="100" step="1"
                    value="0"></td>
              </tr>
              <tr>
                <td class="align-middle">Líderes de cosecha</td>
                <td>
                  <select name="" id="" class="form-select rounded-0">
                    <option value="">Crítico</option>
                    <option value="">Muy crítico</option>
                    <option value="">Altamente crítico</option>
                  </select>
                </td>
                <td><input type="number" class="form-control text-end rounded-0" min="0" maxlength="100" step="1"
                    value="0"></td>
              </tr>
              <tr>
                <td class="align-middle">
                  <input type="text" class="form-control rounded-0" placeholder="Otros, especificar:">
                </td>
                <td>
                  <select name="" id="" class="form-select rounded-0">
                    <option value="">Crítico</option>
                    <option value="">Muy crítico</option>
                    <option value="">Altamente crítico</option>
                  </select>
                </td>
                <td><input type="number" class="form-control text-end rounded-0" min="0" maxlength="100" step="1"
                    value="0"></td>
              </tr>
            </tbody>
          </table>
        </div><!-- .table-responsive -->

        <div class="bd-callout bd-callout-primary mb-2">
          <p class="mb-0">Grupo ocupacional - <strong>Técnico calificado</strong></p>
          <p class="mb-0 fst-italic">Puesto requerido (Disponibilidad en el mercado: Crítico, Muy crítico y Altamente
            crítico)</p>
        </div>

        <table class="table table-bordered">
          <colspan>
            <col width="33%">
            <col width="34%">
            <col width="33%">
          </colspan>
          <thead>
            <tr class="table-primary">
              <th>Tipo de operario</th>
              <th>Estado</th>
              <th>Participantes</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="align-middle">Operador de maquinaria agrícola</td>
              <td>
                <select name="" id="" class="form-select rounded-0">
                  <option value="">Crítico</option>
                  <option value="">Muy crítico</option>
                  <option value="">Altamente crítico</option>
                </select>
              </td>
              <td><input type="number" class="form-control rounded-0 text-end" min="0" maxlength="100" step="1"
                  value="0"></td>
            </tr>
            <tr>
              <td class="align-middle">Inspector de calidad de sistemas de riego</td>
              <td>
                <select name="" id="" class="form-select rounded-0">
                  <option value="">Crítico</option>
                  <option value="">Muy crítico</option>
                  <option value="">Altamente crítico</option>
                </select>
              </td>
              <td><input type="number" class="form-control text-end rounded-0" min="0" maxlength="100" step="1"
                  value="0"></td>
            </tr>
            <tr>
              <td class="align-middle">
                <input type="text" class="form-control rounded-0">
              </td>
              <td>
                <select name="" id="" class="form-select rounded-0">
                  <option value="">Crítico</option>
                  <option value="">Muy crítico</option>
                  <option value="">Altamente crítico</option>
                </select>
              </td>
              <td><input type="number" class="form-control rounded-0 text-end" min="0" maxlength="100" step="1"
                  value="0"></td>
            </tr>
          </tbody>
        </table>

      </div> <!-- ./card-body -->
    </div> <!-- /.card área agrícola -->

    <div class="card">
      <div class="card-header bg-header p-3">
        <h5 class="mb-0">III. Información del puesto en el área industrial</h5>
      </div>
      <div class="card-body">
        <div class="bd-callout bd-callout-primary mb-2">
          <p class="mb-0">Grupo ocupacional - <strong>Operario calificado</strong></p>
          <p class="mb-0 fst-italic">Puesto requerido (Disponibilidad en el mercado: Crítico, Muy crítico y Altamente
            crítico)</p>
        </div>

        <table class="table table-bordered">
          <colspan>
            <col width="33%">
            <col width="34%">
            <col width="33%">
          </colspan>
          <thead>
            <tr class="table-primary">
              <th>Puestos</th>
              <th>Disponibilidad en el mercado</th>
              <th>N° puestos requeridos</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="align-middle">Operadores de montacarga</td>
              <td>
                <select name="" id="" class="form-select rounded-0">
                  <option value="">Crítico</option>
                  <option value="">Muy crítico</option>
                  <option value="">Altamente crítico</option>
                </select>
              </td>
              <td><input type="number" class="form-control rounded-0 text-end" min="0" maxlength="100" step="1"
                  value="0"></td>
            </tr>
            <tr>
              <td class="align-middle">Operador de sistemas de riego</td>
              <td>
                <select name="" id="" class="form-select rounded-0">
                  <option value="">Crítico</option>
                  <option value="">Muy crítico</option>
                  <option value="">Altamente crítico</option>
                </select>
              </td>
              <td><input type="number" class="form-control text-end rounded-0" min="0" maxlength="100" step="1"
                  value="0"></td>
            </tr>
            <tr>
              <td class="align-middle">
                <input type="text" class="form-control rounded-0">
              </td>
              <td>
                <select name="" id="" class="form-select rounded-0">
                  <option value="">Crítico</option>
                  <option value="">Muy crítico</option>
                  <option value="">Altamente crítico</option>
                </select>
              </td>
              <td><input type="number" class="form-control rounded-0 text-end" min="0" maxlength="100" step="1"
                  value="0"></td>
            </tr>
          </tbody>
        </table>

        <div class="bd-callout bd-callout-primary mb-2">
          <p class="mb-0">Grupo ocupacional - <strong>Técnico calificado</strong></p>
          <p class="mb-0 fst-italic">Puesto requerido (Disponibilidad en el mercado: Crítico, Muy crítico y Altamente
            crítico)</p>
        </div>

        <table class="table table-bordered">
          <colspan>
            <col width="33%">
            <col width="34%">
            <col width="33%">
          </colspan>
          <thead>
            <tr class="table-primary">
              <th>Puestos</th>
              <th>Disponibilidad en el mercado</th>
              <th>N° puestos requeridos</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="align-middle">Frigoristas</td>
              <td>
                <select name="" id="" class="form-select rounded-0">
                  <option value="">Crítico</option>
                  <option value="">Muy crítico</option>
                  <option value="">Altamente crítico</option>
                </select>
              </td>
              <td><input type="number" class="form-control rounded-0 text-end" min="0" maxlength="100" step="1"
                  value="0"></td>
            </tr>
            <tr>
              <td class="align-middle">Calderista</td>
              <td>
                <select name="" id="" class="form-select rounded-0">
                  <option value="">Crítico</option>
                  <option value="">Muy crítico</option>
                  <option value="">Altamente crítico</option>
                </select>
              </td>
              <td><input type="number" class="form-control text-end rounded-0" min="0" maxlength="100" step="1"
                  value="0"></td>
            </tr>
            <tr>
              <td class="align-middle">Auxiliar de producción</td>
              <td>
                <select name="" id="" class="form-select rounded-0">
                  <option value="">Crítico</option>
                  <option value="">Muy crítico</option>
                  <option value="">Altamente crítico</option>
                </select>
              </td>
              <td><input type="number" class="form-control rounded-0 text-end" min="0" maxlength="100" step="1"
                  value="0"></td>
            </tr>
            <tr>
              <td class="align-middle">Inspector de calidad</td>
              <td>
                <select name="" id="" class="form-select rounded-0">
                  <option value="">Crítico</option>
                  <option value="">Muy crítico</option>
                  <option value="">Altamente crítico</option>
                </select>
              </td>
              <td><input type="number" class="form-control rounded-0 text-end" min="0" maxlength="100" step="1"
                  value="0"></td>
            </tr>
            <tr>
              <td class="align-middle">
                <input type="text" class="form-control rounded-0">
              </td>
              <td>
                <select name="" id="" class="form-select rounded-0">
                  <option value="">Crítico</option>
                  <option value="">Muy crítico</option>
                  <option value="">Altamente crítico</option>
                </select>
              </td>
              <td><input type="number" class="form-control rounded-0 text-end" min="0" maxlength="100" step="1"
                  value="0"></td>
            </tr>
          </tbody>
        </table>

      </div> <!-- ./card-body -->
    </div> <!-- ./card -->

    <div class="card">
      <div class="card-header bg-header p-3">
        <h5 class="mb-0">IV. Información de puestos transversales</h5>
      </div>
      <div class="card-body">
        <div class="bd-callout bd-callout-primary mb-2">
          <p class="mb-0">Grupo ocupacional - <strong>Operario calificado</strong></p>
          <p class="mb-0 fst-italic">Puesto requerido (Disponibilidad en el mercado: Crítico, Muy crítico y Altamente
            crítico)</p>
        </div>
        
        <table class="table table-bordered">
          <colspan>
            <col width="33%">
            <col width="34%">
            <col width="33%">
          </colspan>
          <thead>
            <tr class="table-primary">
              <th>Puestos</th>
              <th>Disponibilidad en el mercado</th>
              <th>N° puestos requeridos</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="align-middle">Digitador</td>
              <td>
                <select name="" id="" class="form-select rounded-0">
                  <option value="">Crítico</option>
                  <option value="">Muy crítico</option>
                  <option value="">Altamente crítico</option>
                </select>
              </td>
              <td><input type="number" class="form-control rounded-0 text-end" min="0" maxlength="100" step="1"
                  value="0"></td>
            </tr>
            <tr>
              <td class="align-middle">Operario de aplicaciones</td>
              <td>
                <select name="" id="" class="form-select rounded-0">
                  <option value="">Crítico</option>
                  <option value="">Muy crítico</option>
                  <option value="">Altamente crítico</option>
                </select>
              </td>
              <td><input type="number" class="form-control text-end rounded-0" min="0" maxlength="100" step="1"
                  value="0"></td>
            </tr>
            <tr>
              <td class="align-middle">
                <input type="text" class="form-control rounded-0">
              </td>
              <td>
                <select name="" id="" class="form-select rounded-0">
                  <option value="">Crítico</option>
                  <option value="">Muy crítico</option>
                  <option value="">Altamente crítico</option>
                </select>
              </td>
              <td><input type="number" class="form-control rounded-0 text-end" min="0" maxlength="100" step="1"
                  value="0"></td>
            </tr>
          </tbody>
        </table>

        <div class="bd-callout bd-callout-primary mb-2">
          <p class="mb-0">Grupo ocupacional - <strong>Técnico calificado</strong></p>
          <p class="mb-0 fst-italic">Puesto requerido (Disponibilidad en el mercado: Crítico, Muy crítico y Altamente
            crítico)</p>
        </div>

        <table class="table table-bordered">
          <colspan>
            <col width="33%">
            <col width="34%">
            <col width="33%">
          </colspan>
          <thead>
            <tr class="table-primary">
              <th>Puestos</th>
              <th>Disponibilidad en el mercado</th>
              <th>N° puestos requeridos</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="align-middle">Auxiliar administrativo</td>
              <td>
                <select name="" id="" class="form-select rounded-0">
                  <option value="">Crítico</option>
                  <option value="">Muy crítico</option>
                  <option value="">Altamente crítico</option>
                </select>
              </td>
              <td><input type="number" class="form-control rounded-0 text-end" min="0" maxlength="100" step="1"
                  value="0"></td>
            </tr>
            <tr>
              <td class="align-middle">
                <input type="text" class="form-control rounded-0">
              </td>
              <td>
                <select name="" id="" class="form-select rounded-0">
                  <option value="">Crítico</option>
                  <option value="">Muy crítico</option>
                  <option value="">Altamente crítico</option>
                </select>
              </td>
              <td><input type="number" class="form-control text-end rounded-0" min="0" maxlength="100" step="1"
                  value="0"></td>
            </tr>
          </tbody>
        </table>

      </div> <!-- ./card-body -->
      <div class="card-footer mb-3 text-end">
        <button class="btn btn-outline-secondary" type="reset">Reiniciar</button>
        <button class="btn btn-primary" type="reset">Guardar</button>
      </div>
    </div> <!-- ./card -->

  </div> <!-- .container -->

</body>

</html>