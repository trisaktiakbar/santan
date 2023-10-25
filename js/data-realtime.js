document.querySelector("#nav-data-realtime").classList.add("active");

database.ref("realtimeData").on("value", function (snapshot) {
  let data = snapshot.val();

  setText("text-ph-tanah", data["pHTanah"] + " pH");
  setBar("bar-ph-tanah", (data["pHTanah"] / 14) * 100 + "%");

  setText("text-kelembaban-tanah", data["kelembabanTanah"] + "%");
  setBar("bar-kelembaban-tanah", data["kelembabanTanah"] + "%");

  setText("text-kelembaban-udara", data["kelembabanUdara"] + "%");
  setBar("bar-kelembaban-udara", data["kelembabanUdara"] + "%");

  setText("text-suhu", data["suhu"] + "°C");
  setText("text-intensitas-cahaya", data["intensitasCahaya"] + "%");

  setText("text-cuaca", data["cuaca"]);
  if (data["cuaca"] === "Cerah") {
    document.getElementById("icon-cuaca").innerHTML = '<i class="fas fa-sun"></i>';
  } else if (data["cuaca"] === "Cerah Berawan") {
    document.getElementById("icon-cuaca").innerHTML = '<i class="fas fa-cloud-sun"></i>';
  } else if (data["cuaca"] === "Berawan") {
    document.getElementById("icon-cuaca").innerHTML = '<i class="fas fa-cloud"></i>';
  } else {
    document.getElementById("icon-cuaca").innerHTML = '<i class="fas fa-cloud-rain"></i>';
  }
});
