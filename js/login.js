document.getElementById("btn-login").addEventListener("click", function (event) {
  event.preventDefault();
  login();
});

document.body.style.display = "block";

function login() {
  input_email = document.querySelector("#email");
  input_password = document.querySelector("#password");
  alert_error = document.querySelector("#modal-body");

  email = document.getElementById("email").value;
  password = document.getElementById("password").value;

  auth
    .signInWithEmailAndPassword(email, password)
    .then(function () {
      var user = auth.currentUser;

      window.location = "..";
      console.log("Login Sukses");
    })
    .catch(function (error) {
      var error_code = error.code;
      var error_message = error.message;

      if (error_code == "auth/user-not-found") {
        alert_error.innerText = "Email anda tidak terdaftar di sistem";
      } else if (error_code == "auth/wrong-password") {
        alert_error.innerText = "Password yang anda masukkan tidak valid";
      } else if (error_code == "auth/network-request-failed") {
        alert_error.innerText = "Gagal login. Periksa kembali jaringan anda";
      } else {
        alert_error.innerText = error_message;
      }

      $("#modal").modal("show");
    });
}
