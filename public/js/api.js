
// url
const url_arahAngin = 'http://127.0.0.1:8000/api/arah_angin';
const url_intensitasCahaya = 'http://127.0.0.1:8000/api/intensitas_cahaya';
const url_kelembaban = 'http://127.0.0.1:8000/api/kelembaban';
const url_ketinggian = 'http://127.0.0.1:8000/api/ketinggian';
const url_kondisiCuaca = 'http://127.0.0.1:8000/api/kondisi_cuaca';
const url_kualitasUdara = 'http://127.0.0.1:8000/api/kualitas_udara';
const url_tekananUdara = 'http://127.0.0.1:8000/api/tekanan_udara';
const url_suhu = 'http://127.0.0.1:8000/api/suhu';

// async function getKecepatanAngin() {}
let firstTime1 = true;
async function getArahAngin() {
    const response1 = await fetch(url_arahAngin);
    const data1 = await response1.json();

    document.getElementById('uniq1').textContent = data1.latest;

    if(firstTime1){
      for (var i = 0; i < 5; i++) {
          x1.push(data1.array[i].tanggal);
          y1.push(data1.array[i].nilai);
      }
      firstTime1 = false;
    } else{
      x1.push(data1.array[0].tanggal);
      y1.push(data1.array[0].nilai);
      if (x1.length > 5) {
            x1.shift();
            y1.shift();
      }
    }

    myChart1.update();
}
let firstTime2 = true;
async function getSuhu() {
    const response2 = await fetch(url_suhu);
    const data2 = await response2.json();

    document.getElementById('uniq2').textContent = data2.latest;

    if(firstTime2){
      for (var i = 0; i < 5; i++) {
          x2.push(data2.array[i].tanggal);
          y2.push(data2.array[i].nilai);
      }
      firstTime2 = false;
    } else{
      x2.push(data2.array[0].tanggal);
      y2.push(data2.array[0].nilai);
      if (x2.length > 5) {
            x2.shift();
            y2.shift();
      }
    }
    myChart2.update();
}
let firstTime3 = true;
async function getKelembaban() {
    const response3 = await fetch(url_kelembaban);
    const data3 = await response3.json();

    document.getElementById('uniq3').textContent = data3.latest;

    if(firstTime3){
      for (var i = 0; i < 5; i++) {
          x3.push(data3.array[i].tanggal);
          y3.push(data3.array[i].nilai);
      }
      firstTime3 = false;
    } else{
      x3.push(data3.array[0].tanggal);
      y3.push(data3.array[0].nilai);
      if (x3.length > 5) {
            x3.shift();
            y3.shift();
      }
    }

    myChart3.update();
}
let firstTime4 = true;
async function getTekananUdara() {
    const response4 = await fetch(url_tekananUdara);
    const data4 = await response4.json();

    document.getElementById('uniq4').textContent = data4.latest;

    if(firstTime4){
      for (var i = 0; i < 5; i++) {
          x4.push(data4.array[i].tanggal);
          y4.push(data4.array[i].nilai);
      }
      firstTime4 = false;
    } else{
      x4.push(data4.array[0].tanggal);
      y4.push(data4.array[0].nilai);
      if (x4.length > 5) {
            x4.shift();
            y4.shift();
      }
    }

    myChart4.update();
}
let firstTime5 = true;
async function getIntensitasCahaya() {
    const response5 = await fetch(url_intensitasCahaya);
    const data5 = await response5.json();

    document.getElementById('uniq5').textContent = data5.latest;

    if(firstTime5){
      for (var i = 0; i < 5; i++) {
          x5.push(data5.array[i].tanggal);
          y5.push(data5.array[i].nilai);
      }
      firstTime5 = false;
    } else{
      x5.push(data5.array[0].tanggal);
      y5.push(data5.array[0].nilai);
      if (x5.length > 5) {
            x5.shift();
            y5.shift();
      }
    }

    myChart5.update();
}

async function getKualitasUdara() {
    const response6 = await fetch(url_kualitasUdara);
    const data6 = await response6.json();

    document.getElementById('uniq6').textContent = data6.latest;
    const card6 = document.getElementsByClassName("card7")[0];
    if (data6.latest == 'sehat') {
        card6.style.background = "#5ae657";
    }
    if (data6.latest == 'normal') {
        card6.style.background = "#d5e354";
    }
    if (data6.latest == 'tidak sehat') {
        card6.style.background = "#e39e54";
    }
    if (data6.latest == 'bahaya') {
        card6.style.background = "#e35459";
    }
    //
    // document.getElementById('uniq1').textContent = data.latest;
    //
    // for (var i = 0; i < 5; i++) {
    //     xl.push(data.array[i].tanggal);
    //     yl.push(data.array[i].nilai);
    // }
    //
    // if (xl.length > 5) {
    //     for (var i = 0; i < 5; i++) {
    //         xl.shift();
    //         yl.shift();
    //     }
    // }
    // myChart.update();
}
async function getKondisi() {
    const response7 = await fetch(url_kondisiCuaca);
    const data7 = await response7.json();

    document.getElementById('uniq7').textContent = data7.latest;
    const card7 = document.getElementsByClassName("card8")[0];
    if (data7.latest == 'basah') {
        card7.style.background = "#0374ff";
    } else {
        card7.style.background = "#ffcd03";
    }
    //
    // document.getElementById('uniq1').textContent = data.latest;
    //
    // for (var i = 0; i < 5; i++) {
    //     xl.push(data.array[i].tanggal);
    //     yl.push(data.array[i].nilai);
    // }
    //
    // if (xl.length > 5) {
    //     for (var i = 0; i < 5; i++) {
    //         xl.shift();
    //         yl.shift();
    //     }
    // }
    // myChart.update();
}
async function getKetinggianAlat() {
    const response = await fetch(url_ketinggian);
    const data = await response.json();
    //
    // document.getElementById('uniq1').textContent = data.latest;
    //
    // for (var i = 0; i < 5; i++) {
    //     xl.push(data.array[i].tanggal);
    //     yl.push(data.array[i].nilai);
    // }
    //
    // if (xl.length > 5) {
    //     for (var i = 0; i < 5; i++) {
    //         xl.shift();
    //         yl.shift();
    //     }
    // }
    // myChart.update();
}

function getAll() {
    getArahAngin();
    getSuhu();
    getKelembaban();
    getTekananUdara();
    getIntensitasCahaya();
    getKualitasUdara();
    getKondisi();
}

getAll();
setInterval(getAll, 30000);
