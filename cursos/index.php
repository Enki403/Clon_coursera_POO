<?php include("header.php") ?>
<div class="row">
  <div class="col-3" style="height:100vh;overflow-y:scroll;background-color:#F0F0F0;">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <div class="image-container"><img src="../img/CourseraBrowse/ASUlogo.jpg"></div>
      <a class="nav-link active" id="v-pills-general-tab" data-toggle="pill" href="#v-pills-general" role="tab" aria-controls="v-pills-general" aria-selected="true">General</a>
      <a class="nav-link" id="v-pills-programacion-tab" data-toggle="pill" href="#v-pills-programacion" role="tab" aria-controls="v-pills-programacion" aria-selected="false">Programacion</a>
      <a class="nav-link" id="v-pills-extra-tab" data-toggle="pill" href="#v-pills-extra" role="tab" aria-controls="v-pills-extra" aria-selected="false">Extra</a>
      
    </div>
  </div>
  <div class="col-9" style="height:100vh;overflow-y:scroll;">
    <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-general" role="tabpanel" aria-labelledby="v-pills-general-tab">
            <h2 class="titulo">Titulo de Curso</h2>
            <div class="descripcion">
              <h5>descripcion breve</h5>
              <p>
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum quos at odio vel odit dolorem consequatur natus. Voluptates ipsa fugit vitae doloremque ab recusandae molestiae obcaecati illum ut reprehenderit sint nisi ea sit dolor expedita asperiores esse omnis, beatae porro nam quia eius amet molestias explicabo! Sequi deleniti fugiat sit.
              </p>
            </div>
        </div>
        <div class="tab-pane fade" id="v-pills-extra" role="tabpanel" aria-labelledby="v-pills-extra-tab">
            <h4>Libros de interes y demas enlaces</h4>
            <table class="table table-bordered table-striped">
            <thead>
              <th>Enlaces</th>
            </thead>
            <tbody class="table table-striped">
              <tr><td><a href="https://openlibra.com/es/collection/search/category/desarrollo_web_css">Open Libra: CSS</a></td></tr>
            </tbody>
          </table>
        </div>  
        <div class="tab-pane fade" id="v-pills-programacion" role="tabpanel" aria-labelledby="v-pills-programacion-tab">
            <div class="semanas">
              <h4>Semana 1</h4>
              <table class="content-table table table-bordered table-striped">
                <thead><tr><th>Recurso</th></tr></thead>
                <tbody>
                  <tr>
                    <td onclick="$(this).children().toggleClass('d-none d-block')" data-toggle="tooltip" data-placement="right" title="Haga click para visualizar contenido.">
                    articulo.pdf<br>
                    <iframe class="d-none" src="data/basico/articulos/prueba.pdf" width="900" height="520"></iframe>
                  </td>
                  </tr>
                  <tr>
                    <td onclick="$(this).children().toggleClass('d-none d-block')" data-toggle="tooltip" data-placement="right" title="Haga click para visualizar contenido.">
                      video.mp4<br>
                      <video class="d-none" width="320" height="240" controls>
                        <source src="data/basico/videos/intro.mp4" type="video/mp4">
                      </video>
                    </td>
                  </tr>
                  <tr>
                    <td onclick="$(this).children().toggleClass('d-none d-block')" data-toggle="tooltip" data-placement="right" title="Haga click para visualizar contenido.">
                    articulo2.pdf<br>
                    <iframe class="d-none" src="data/basico/articulos/prueba.pdf" width="900" height="520"></iframe>
                  </td>
                  </tr>
                  <tr>
                    <td onclick="$(this).children().toggleClass('d-none d-block')" data-toggle="tooltip" data-placement="right" title="Haga click para visualizar contenido.">
                      video2.mp4<br>
                      <video class="d-none" width="320" height="240" controls>
                        <source src="data/basico/videos/intro.mp4" type="video/mp4">
                      </video>
                    </td>
                  </tr>
                </tbody>
              </table>
            <div>
            <br>
            <div class="semanas">
              <h4>Semana 2</h4>
              <table class="content-table table table-bordered table-striped">
                <thead><tr><th>Recurso</th></tr></thead>
                <tbody>
                  <tr>
                    <td onclick="$(this).children().toggleClass('d-none d-block')" data-toggle="tooltip" data-placement="right" title="Haga click para visualizar contenido.">
                    articulo.pdf<br>
                    <iframe class="d-none" src="data/basico/articulos/prueba.pdf" width="900" height="520"></iframe>
                  </td>
                  </tr>
                  <tr>
                    <td onclick="$(this).children().toggleClass('d-none d-block')" data-toggle="tooltip" data-placement="right" title="Haga click para visualizar contenido.">
                      video.mp4<br>
                      <video class="d-none" width="320" height="240" controls>
                        <source src="data/basico/videos/intro.mp4" type="video/mp4">
                      </video>
                    </td>
                  </tr>
                  <tr>
                    <td onclick="$(this).children().toggleClass('d-none d-block')" data-toggle="tooltip" data-placement="right" title="Haga click para visualizar contenido.">
                    articulo2.pdf<br>
                    <iframe class="d-none" src="data/basico/articulos/prueba.pdf" width="900" height="520"></iframe>
                  </td>
                  </tr>
                  <tr>
                    <td onclick="$(this).children().toggleClass('d-none d-block')" data-toggle="tooltip" data-placement="right" title="Haga click para visualizar contenido.">
                      video2.mp4<br>
                      <video class="d-none" width="320" height="240" controls>
                        <source src="data/basico/videos/intro.mp4" type="video/mp4">
                      </video>
                    </td>
                  </tr>
                </tbody>
              </table>
            <div>
            <br>
            <div class="semanas">
              <h4>Semana 3</h4>
              <table class="content-table table table-bordered table-striped">
                <thead><tr><th>Recurso</th></tr></thead>
                <tbody>
                  <tr>
                    <td onclick="$(this).children().toggleClass('d-none d-block')" data-toggle="tooltip" data-placement="right" title="Haga click para visualizar contenido.">
                    articulo.pdf<br>
                    <iframe class="d-none" src="data/basico/articulos/prueba.pdf" width="900" height="520"></iframe>
                  </td>
                  </tr>
                  <tr>
                    <td onclick="$(this).children().toggleClass('d-none d-block')" data-toggle="tooltip" data-placement="right" title="Haga click para visualizar contenido.">
                      video.mp4<br>
                      <video class="d-none" width="320" height="240" controls>
                        <source src="data/basico/videos/intro.mp4" type="video/mp4">
                      </video>
                    </td>
                  </tr>
                  <tr>
                    <td onclick="$(this).children().toggleClass('d-none d-block')" data-toggle="tooltip" data-placement="right" title="Haga click para visualizar contenido.">
                    articulo2.pdf<br>
                    <iframe class="d-none" src="data/basico/articulos/prueba.pdf" width="900" height="520"></iframe>
                  </td>
                  </tr>
                  <tr>
                    <td onclick="$(this).children().toggleClass('d-none d-block')" data-toggle="tooltip" data-placement="right" title="Haga click para visualizar contenido.">
                      video2.mp4<br>
                      <video class="d-none" width="320" height="240" controls>
                        <source src="data/basico/videos/intro.mp4" type="video/mp4">
                      </video>
                    </td>
                  </tr>
                </tbody>
              </table>
            <div>
            <br>
            <div class="semanas">
              <h4>Semana 4</h4>
              <table class="content-table table table-bordered table-striped">
                <thead><tr><th>Recurso</th></tr></thead>
                <tbody>
                  <tr>
                    <td onclick="$(this).children().toggleClass('d-none d-block')" data-toggle="tooltip" data-placement="right" title="Haga click para visualizar contenido.">
                    articulo.pdf<br>
                    <iframe class="d-none" src="data/basico/articulos/prueba.pdf" width="900" height="520"></iframe>
                  </td>
                  </tr>
                  <tr>
                    <td onclick="$(this).children().toggleClass('d-none d-block')" data-toggle="tooltip" data-placement="right" title="Haga click para visualizar contenido.">
                      video.mp4<br>
                      <video class="d-none" width="320" height="240" controls>
                        <source src="data/basico/videos/intro.mp4" type="video/mp4">
                      </video>
                    </td>
                  </tr>
                  <tr>
                    <td onclick="$(this).children().toggleClass('d-none d-block')" data-toggle="tooltip" data-placement="right" title="Haga click para visualizar contenido.">
                    articulo2.pdf<br>
                    <iframe class="d-none" src="data/basico/articulos/prueba.pdf" width="900" height="520"></iframe>
                  </td>
                  </tr>
                  <tr>
                    <td onclick="$(this).children().toggleClass('d-none d-block')" data-toggle="tooltip" data-placement="right" title="Haga click para visualizar contenido.">
                      video2.mp4<br>
                      <video class="d-none" width="320" height="240" controls>
                        <source src="data/basico/videos/intro.mp4" type="video/mp4">
                      </video>
                    </td>
                  </tr>
                </tbody>
              </table>
            <div>
            <br>
        </div>
          
    </div>
  </div>
</div>
<?php include("footer.php") ?>