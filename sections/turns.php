<div class="container">
  <div class="title" data-wow-duration="1s">TURNOS</div>
  <p class="center">Solicite su turno y nos comunicaremos con usted a la brevedad</p>
  <div class="row">
    <form id="turn-form" method="post" action="mail_turn.php" class="col s12"  enctype="multipart/form-data">
      <div class="row">
        <div class="input-field col s12 m12 l8">
          <label for="full_name">NOMBRE Y APELLIDO</label>
          <input id="full_name" name="full_name" type="text" class="validate" required>
        </div>
        <div class="input-field col s12 m12 l4">
          <label for="dni">DNI</label>
          <input id="dni" name="dni" type="number" class="validate" required>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m12 l8">
          <label for="secure">OBRA SOCIAL</label>
          <input id="secure" name="secure" type="text" class="validate" required>
        </div>
        <div class="input-field col s12 m12 l4">
          <label for="age">EDAD</label>
          <input id="age" name="age" type="number" class="validate" required>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m12 l6">
          <label for="telephone">TELÉFONO</label>
          <input id="telephone" name="telephone" type="number" class="validate" required>
        </div>
        <div class="input-field col s12 m12 l6">
          <label for="email">E-MAIL</label>
          <input id="email" name="email" type="email" class="validate" required>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m12 l8">
          <label for="description">DESCRIPCIÓN</label>
          <textarea id="description" name="description" class="materialize-textarea" required></textarea>
        </div>
      </div>
      <div class="row">
        <div class="file-field input-field col s12 m12 l8">
          <div>Si lo desea puede adjuntar un archivo</div>
          <div class="btn">
            <i class="material-icons right">attachment</i>
            <span>Seleccionar...</span>
            <input id="file" type="file" name="file">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
          </div>
        </div>
      </div>
      <div class="row center">
        <button class="btn waves-effect waves-light bg-blue" type="submit" name="action">SOLICITAR
          <i class="material-icons right">send</i>
        </button>
      </div>
    </form>
  </div>
</div>
