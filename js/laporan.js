document.querySelector("#nav-laporan").classList.add("active");

const tableBody = document.querySelector("#table-body");

database.ref("logData").on("value", function (snapshot) {
  let data = snapshot.val();
  let lastHour = getLastHour();
  lastHour.forEach((datetime) => {
    let row = document.createElement("tr");
    row.classList.add("text-center");
    let tanggal = document.createElement("td");
    let waktu = document.createElement("td");
    let pHTanah = document.createElement("td");
    let kelembabanTanah = document.createElement("td");
    let kelembabanUdara = document.createElement("td");
    let suhu = document.createElement("td");
    let curahHujan = document.createElement("td");
    let cuaca = document.createElement("td");
    let intensitasCahaya = document.createElement("td");

    tanggal.appendChild(document.createTextNode(getDateFromDateTime(datetime)));
    waktu.appendChild(document.createTextNode(getTimeFromDateTime(datetime)));
    pHTanah.appendChild(document.createTextNode(getDataLaporan(data, datetime, "pHTanah", " pH")));
    kelembabanTanah.appendChild(document.createTextNode(getDataLaporan(data, datetime, "kelembabanTanah", "%")));
    kelembabanUdara.appendChild(document.createTextNode(getDataLaporan(data, datetime, "kelembabanUdara", "%")));
    suhu.appendChild(document.createTextNode(getDataLaporan(data, datetime, "suhu", "°C")));
    curahHujan.appendChild(document.createTextNode(getDataLaporan(data, datetime, "curahHujan", " mm")));
    cuaca.appendChild(document.createTextNode(getDataLaporan(data, datetime, "cuaca", "")));
    intensitasCahaya.appendChild(document.createTextNode(getDataLaporan(data, datetime, "intensitasCahaya", "%")));

    row.appendChild(tanggal);
    row.appendChild(waktu);
    row.appendChild(pHTanah);
    row.appendChild(kelembabanTanah);
    row.appendChild(kelembabanUdara);
    row.appendChild(suhu);
    row.appendChild(curahHujan);
    row.appendChild(cuaca);
    row.appendChild(intensitasCahaya);

    tableBody.appendChild(row);

    $(document).ready(function () {
      $("#dataTable").DataTable();
    });
  });
});
