  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script src="tailwind.config.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.usebootstrap.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.usebootstrap.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script>
 function generate_password(pid) {
    window.location.href = 'generate_password.php?pid=' + pid;
  }
</script>
<script>
function logout() {
    window.location.href = 'logout.php';
  }
</script>
<script>
$(document).ready(function(){
  $("input[type=checkbox]").click(function () {
      $.ajax({
          type: "POST",
          url: "toggle.php",
          data: {
              value: $(this).prop("checked") ? 1 : 0
          },
          success: function(data) {
              $('.check').html(data);
          }
      });
  });
});
</script>
  </body>
</html>