<?php include_once "Layouts/Header.php"; ?>
<div class="flex-1 p-10 text-2xl font-bold">
  <button id="login-facebook" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Đăng nhập facebook</button>
</div>
</div>
</body>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    if (window.location.hash && window.location.hash === '#_=_') {
      window.history.replaceState("", document.title, window.location.pathname + window.location.search);
    }
  });
  var loginFacebook = document.getElementById('login-facebook');
  loginFacebook.addEventListener('click', function(e) {
    checkToken().then((result) => {
      if (result) {
        alert('Chu Cha Mạ ơi')
      } else {
        window.location = "/auth/face";
      }
    });
  })
</script>