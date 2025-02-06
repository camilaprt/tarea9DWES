<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bibliotecas de Madrid</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <h2>Bibiotecas de Madrid</h2>
    <h2>Edificios de carácter monumental del Ayto. de Madrid</h2>

    <div class="container mt-5">
      <div class="row">
        <div class="col-sm">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">ID</th>

                <th scope="col">Nombre</th>

                <th scope="col">Barrio</th>

                <th scope="col">Dirección</th>
              </tr>
            </thead>

            <tbody>
              <?php
                $url = "https://datos.madrid.es/egob/catalogo/201747-0-bibliobuses-bibliotecas.json";
                $result = file_get_contents($url);
                $datos = json_decode($result,true);
                var_dump($datos);

                                   
              ?>
              <tr>
                <th scope="row"><?=$dato["id"]?></th>

                <td><?=$dato["title"]?></td>

                <td><?=$barrio?></td>

                <td><?=$dato["address"]["street-address"]?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
