function getLastHour() {
  // Dapatkan waktu saat ini
  let now = new Date();

  // Hitung waktu satu jam yang lalu
  let satuJamLalu = new Date(now.getTime() - 60 * 60 * 1000);

  // Buat array untuk menyimpan hasil
  let hasil = [];

  // Mulai dari satu jam yang lalu, tambahkan setiap menit ke dalam array hasil
  while (satuJamLalu < now) {
    let tanggal = satuJamLalu.getDate();
    let bulan = satuJamLalu.getMonth() + 1;
    let tahun = satuJamLalu.getFullYear();
    let jam = satuJamLalu.getHours();
    let menit = satuJamLalu.getMinutes();

    let waktu = `${tahun}-${bulan < 10 ? "0" + bulan : bulan}-${tanggal < 10 ? "0" + tanggal : tanggal} ${jam < 10 ? "0" + jam : jam}:${menit < 10 ? "0" + menit : menit}`;

    // Menggunakan unshift untuk memasukkan waktu yang paling baru terlebih dahulu
    hasil.unshift(waktu);

    satuJamLalu.setTime(satuJamLalu.getTime() + 60 * 1000);
  }

  return hasil;
}

function getArrayTimeFromDateTime(arrayWaktu) {
  var hasil = [];

  arrayWaktu.forEach(function (waktu) {
    var jamMenit = waktu.split(" ")[1];
    hasil.push(jamMenit);
  });

  return hasil;
}

function getTimeFromDateTime(datetime) {
  return datetime.split(" ")[1];
}

function getDateFromDateTime(datetime) {
  datetime = datetime.split(" ")[0];
  datetime = datetime.split("-");

  let day = datetime[2];
  let month = datetime[1];
  let year = datetime[0];

  switch (month) {
    case "01":
      month = "Januari";
      break;
    case "02":
      month = "Februari";
      break;
    case "03":
      month = "Maret";
      break;
    case "04":
      month = "April";
      break;
    case "05":
      month = "Mei";
      break;
    case "06":
      month = "Juni";
      break;
    case "07":
      month = "Juli";
      break;
    case "08":
      month = "Agustus";
      break;
    case "09":
      month = "September";
      break;
    case "10":
      month = "Oktober";
      break;
    case "11":
      month = "November";
      break;
    default:
      month = "Desember";
  }
  return day + " " + month + " " + year;
}
