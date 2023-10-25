document.querySelector("#nav-dashboard").classList.add("active");

let chartSuhu = document.getElementById("chartSuhu");
let chartCurahHujan = document.getElementById("chartCurahHujan");

database.ref("logData").on("value", function (snapshot) {
  let lastHour = getLastHour();
  let data = snapshot.val();

  let suhuLastHour = [];
  let curahHujanLastHour = [];

  lastHour.forEach((datetime) => {
    suhuLastHour.push(getLogData(data, datetime, "suhu"));
    curahHujanLastHour.push(getLogData(data, datetime, "curahHujan"));
  });
  console.log(suhuLastHour);
  createLineChart(chartSuhu, getArrayTimeFromDateTime(lastHour), suhuLastHour, "Suhu", "°C");
  createLineChart(chartCurahHujan, getArrayTimeFromDateTime(lastHour), curahHujanLastHour, "Curah Hujan", " mm");
});

database.ref("realtimeData").on("value", function (snapshot) {
  let data = snapshot.val();

  setText("text-kelembaban-tanah", data["kelembabanTanah"] + "%");
  setBar("bar-kelembaban-tanah", data["kelembabanTanah"] + "%");

  setText("text-ph-tanah", data["pHTanah"] + " pH");
  setBar("bar-ph-tanah", data["pHTanah"] + "%");

  setText("text-kelembaban-udara", data["kelembabanUdara"] + "%");
  setBar("bar-kelembaban-udara", data["kelembabanUdara"] + "%");
});
