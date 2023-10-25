auth.onAuthStateChanged((user) => {
  if (user) {
    document.body.style.display = "block";
  } else {
    window.location.replace("/santan/login");
  }
});
