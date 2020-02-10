<?php
    include "header.php";
?>


    <div class="container bg-white">
        <h2 class="page-head-title">Support us</h2>
        

        <div class="page-inner-wrap">
            <form action="/controller/feedback.php" id="email" method="POST">
                <input type="email" placeholder="Your Email" name="email" autocomplete="off">
                <textarea name="message" id="" rows="5" placeholder="Your Suggestions"></textarea>
                <input id="submit-feedback" type="submit" value="Send">
            </form>
        </div>
    </div>  

    <script>

      $(document).ready(function(){
          $('#submit-feedback').click(function(){
              var userContact = $(this).val();
              var ajaxurl = 'ajax.php',
              data =  {'action': userContact};
              $.post(ajaxurl, data, function (response) {
                  // Response div goes here.
                  alert("action performed successfully");
              });
          });
      });
    
    </script>

<?php
    include "footer.php"
?>