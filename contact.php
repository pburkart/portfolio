<?php
    require('includes/init.php');
    require('includes/sidebar.php');
?>
<div class="container">
  <h2>Send me a message</h2>

  <div class='contact-container'>
    <form class='contact-form'>
      <label for='name'>Name</label>
      <input type='text' id='name' name='name' placeholder=' Name'>

      <label for='email'>E-Mail Address</label>
      <input type='text' id='email' name='email' placeholder='E-Mail Address'>

      <label for='message'>Message</label>
      <textarea id="message" name="message" placeholder="Write something.." style="height:175px"></textarea>

      <input type='submit' value='Submit'>
    </form>
  </div>
</div>
<?php
  require('includes/footer.php');
?>
