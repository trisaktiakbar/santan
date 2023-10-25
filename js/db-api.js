// Your web app's Firebase configuration
const firebaseConfig = {
  apiKey: "AIzaSyBimbNVKffFr0SUOPzgWgLrAt4rEcF184E",
  authDomain: "sistem-analisis-tanaman.firebaseapp.com",
  databaseURL: "https://sistem-analisis-tanaman-default-rtdb.firebaseio.com",
  projectId: "sistem-analisis-tanaman",
  storageBucket: "sistem-analisis-tanaman.appspot.com",
  messagingSenderId: "1077680293982",
  appId: "1:1077680293982:web:94d77cfbea08cd2a684ccf",
};

// Initialize Firebase
firebase.initializeApp(firebaseConfig);
const auth = firebase.auth();
const database = firebase.database();

function getLogData(arrayOfData, datetime, data) {
  if (arrayOfData?.[datetime]?.[data]) {
    return arrayOfData[datetime][data];
  } else {
    return null;
  }
}

function setText(id, value) {
  document.getElementById(id).innerText = value;
}

function setBar(id, value) {
  document.getElementById(id).style.width = value;
}

function getDataLaporan(arrayOfData, datetime, data, satuan) {
  if (arrayOfData?.[datetime]?.[data]) {
    return arrayOfData[datetime][data] + satuan;
  } else {
    return "Tidak Ada Data";
  }
}
