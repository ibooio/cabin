<div class="container">
  <div class="title">CONTACTO</div>
  <div id="contact-list" class="row">
    <div class="col s12 m6 l4 center">
      <i class="small material-icons">phone</i><br>(297) 406-1411
    </div>
    <div class="col s12 m6 l4 center">
      <i class="small material-icons">phone</i><br>(297) 406-1412
    </div>
    <div class="col s12 m6 l4 center">
      <i class="small material-icons">room</i><br>R. Sáenz Peña Y Democracia
    </div>
  </div>
  <div class="row">
    <form id="contact-form"  method="post" action="mail_contact.php" class="col s12">
      <div class="row">
        <div class="col l6 m6 s12">
          <div class="row input-field">
            <label for="contact_name">SU NOMBRE</label><br>
            <input id="contact_name" name="contact_name" type="text" class="validate" required>
          </div>
          <div class="row input-field">
            <label for="contact_email">SU E-MAIL</label><br>
            <input id="contact_email" name="contact_email" type="email" class="validate" required>
          </div>
        </div>
        <div class="input-field col l6 m6 s12">
          <label for="contact_message">SU MENSAJE</label><br>
          <textarea id="contact_message" name="contact_message" class="materialize-textarea" required></textarea>
        </div>
      </div>
      <div class="row center">
        <button class="btn waves-effect waves-light bg-blue" type="submit" name="action">ENVIAR
          <i class="material-icons right">send</i>
        </button>
      </div>
    </form>
  </div>
</div>
<div class="footer-copyright center">
  <div class="container">
    <b>Cabin <?php echo date('Y'); ?></b>
  </div>
</div>
