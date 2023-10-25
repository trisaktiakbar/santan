document.getElementById("btn-log-out").addEventListener("click", () => {
  auth.signOut().then(() => {
    window.location.replace("/login");
  });
});
