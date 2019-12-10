<?php
      require "template/header.php";
 ?>
        <!-- =============================================start of main====================================== -->
        <div id="clearThis"></div>
        <h2 class="darkP text-white text-center" id="slogan"><i class="fas fa-envelope"></i>Me laisser un message</h2>
          <hr>
        <div class="container">
            <form action="contact.php" method="POST">
              <div class="machin">
                <label for="name">Nom :</label>
                <input type="text" id="name" name="user_name">
              </div>
              <div class="machin">
                <label for="mail">Mail :</label>
                <input type="email" id="mail" name="user_mail">
              </div>
              <div class="machin">
                <label for="adress">Adresse :</label>
                <input type="text" id="name" name="user_adress">
              </div>
              <div class="machin">
                <label for="phone">Tél :</label>
                <input type="email" id="mail" name="user_phone">
              </div>
              <div class="machin">
                <label for="msg">Message :</label>
                <textarea id="msg" name="user_message"></textarea>
              </div>
              <div class="machin button">
                <button type="submit">Envoyer</button>
              </div>
            </form>
            </div> 
              </main>
              <!-- =================================================end of main====================================== -->
              <?php
                    require "template/footer.php";
               ?>
