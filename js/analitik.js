document.querySelector("#nav-analitik").classList.add("active");

let chartSuhu = document.getElementById("chartSuhu");
let chartCurahHujan = document.getElementById("chartCurahHujan");
let chartPHTanah = document.getElementById("chartPHTanah");
let chartKelembabanTanah = document.getElementById("chartKelembabanTanah");
let chartKelembabanUdara = document.getElementById("chartKelembabanUdara");
let chartTekananUdara = document.getElementById("chartTekananUdara");
let chartPenyinaranMatahari = document.getElementById("chartPenyinaranMatahari");

database.ref("logData").on("value", function (snapshot) {
  let lastHour = getLastHour();
  let data = snapshot.val();

  let pHTanahLastHour = [];
  let kelembabanTanahLastHour = [];
  let suhuLastHour = [];
  let kelembabanUdaraLastHour = [];
  let tekananUdaraLastHour = [];
  let curahHujanLastHour = [];
  let penyinaranMatahariLastHour = [];

  lastHour.forEach((datetime) => {
    suhuLastHour.push(getLogData(data, datetime, "suhu"));
    curahHujanLastHour.push(getLogData(data, datetime, "curahHujan"));
    pHTanahLastHour.push(getLogData(data, datetime, "pHTanah"));
    kelembabanTanahLastHour.push(getLogData(data, datetime, "kelembabanTanah"));
    kelembabanUdaraLastHour.push(getLogData(data, datetime, "kelembabanUdara"));
    tekananUdaraLastHour.push(getLogData(data, datetime, "tekananUdara"));
    penyinaranMatahariLastHour.push(getLogData(data, datetime, "penyinaranMatahari"));
  });

  console.log(suhuLastHour);
  createLineChart(chartSuhu, getArrayTimeFromDateTime(lastHour), suhuLastHour, "Suhu", "°C");
  createLineChart(chartCurahHujan, getArrayTimeFromDateTime(lastHour), curahHujanLastHour, "Curah Hujan", " mm");
  createLineChart(chartPHTanah, getArrayTimeFromDateTime(lastHour), pHTanahLastHour, "pH Tanah", " pH");
  createLineChart(chartKelembabanTanah, getArrayTimeFromDateTime(lastHour), kelembabanTanahLastHour, "Kelembaban Tanah", "%");
  createLineChart(chartKelembabanUdara, getArrayTimeFromDateTime(lastHour), kelembabanUdaraLastHour, "Kelembaban Udara", "%");
  createLineChart(chartTekananUdara, getArrayTimeFromDateTime(lastHour), tekananUdaraLastHour, "Tekanan Udara", "%");
  createLineChart(chartPenyinaranMatahari, getArrayTimeFromDateTime(lastHour), penyinaranMatahariLastHour, "Penyinaran Matahari", " jam");
});
