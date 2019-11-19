<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
</head>

<body onload="startTime()">

<div class="container">
    <div class="topbar">
        <div class="left">
            <h1>Automatic Weather<br>Station Report</h1>
            <p>by Dramaga Dynamics </p>
        </div>
        <div class="right">
            <h1 id="tggl" class="tggl">Kamis/20-10-2019</h1>
            <h1 id="times">15.20</h1>
        </div>
    </div>
    <div class="content">
        <div class="content-card">
            <!-- card -->
            <div class="card1" id="myBtn">
                <div class="containers">
                    <div class="icons">
                        <img src="{{ asset('img/wind.png') }}">
                    </div>
                    <div class="textnya">
                        <h4>Kecepatan Angin</h4>
                        <p><span id="uniq" class="uniq">Coming </span>Soon</p>
                    </div>
                </div>

            </div>
            <div class="card2" id="myBtn1">
                <div class="containers">
                    <div class="icons">
                        <img src="{{ asset('img/map.png') }}">
                    </div>
                    <div class="textnya">
                        <h4>Arah Angin</h4>
                        <p><span id="uniq1" class="uniq">Coming </span>Soon</p>
                    </div>
                </div>
            </div>
            <div class="card3" id="myBtn2">
                <div class="containers">
                    <div class="icons">
                        <img src="{{ asset('img/thermometer.png') }}">
                    </div>
                    <div class="textnya">
                        <h4>Suhu</h4>
                        <p><span class="uniq" id="uniq2">wait..</span>°C</p>
                    </div>
                </div>
            </div>
            <div class="card4" id="myBtn3">
                <div class="containers">
                    <div class="icons">
                        <img src="{{ asset('img/raindrop.png') }}">
                    </div>
                    <div class="textnya">
                        <h4>Kelembaban</h4>
                        <p><span class="uniq" id="uniq3">wait..</span>RH</p>
                    </div>
                </div>
            </div>
            <div class="card5" id="myBtn4">
                <div class="containers">
                    <div class="icons">
                        <img src="{{ asset('img/pressure.png') }}">
                    </div>
                    <div class="textnya">
                        <h4>Tekanan Udara</h4>
                        <p><span class="uniq" id="uniq4">wait..</span>mmHg</p>
                    </div>
                </div>
            </div>
            <div class="card6" id="myBtn5">
                <div class="containers">
                    <div class="icons">
                        <img src="{{ asset('img/sun.png') }}">
                    </div>
                    <div class="textnya">
                        <h4>Intensitas Cahaya</h4>
                        <p><span class="uniq" id="uniq5">wait..</span>Cd</p>
                    </div>
                </div>
            </div>
            <div class="card7" id="myBtn6">
                <div class="containers">
                    <div class="icons">
                        <img src="{{ asset('img/smoke.png') }}">
                    </div>
                    <div class="textnya">
                        <h4>Kualitas Udara</h4>
                        <p><span class="uniq" id="uniq6">wait..</span></p>
                    </div>
                </div>
            </div>
            <div class="card8" id="myBtn7">
                <div class="containers">
                    <div class="icons">
                        <img src="{{ asset('img/rainsdrops.png') }}">
                    </div>
                    <div class="textnya">
                        <h4>Kondisi</h4>
                        <p><span class="uniq" id="uniq7">wait..</span></p>
                    </div>
                </div>
            </div>
            <div class="card9" id="myBtn8">
                <div class="containers">
                    <div class="icons">
                        <img src="{{ asset('img/height.png') }}">
                    </div>
                    <div class="textnya">
                        <h4>Ketinggian Alat</h4>
                        <p><span class="uniq" id="uniq8">wait..</span>m</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- The Modal -->
<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times;</span>
            <h2>Grafik Kecepatan Angin</h2>
        </div>
        <div class="modal-body">
            <canvas id="chart" height="80px"></canvas>
            <div class="historiClass">
              <h1>Coming Soon</h1>
            </div>
        </div>
    </div>
</div>
<div id="myModal1" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close1">&times;</span>
            <h2>Grafik Arah Angin</h2>
        </div>
        <div class="modal-body">
            <canvas id="chart1" height="80px"></canvas>
            <div class="historiClass">
              <!-- <h1>Histori</h1> -->
              <!-- <div class="historiClass-inner">
                <div class="histori-card">
                  <h3><span class="histori-span" id="histori1">32</span>km/h</h3>
                  <p id="tgglHistori1">20/10/2019</p>
                </div>
            </div> -->
            </div>
        </div>
    </div>
</div>
<div id="myModal2" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close2">&times;</span>
            <h2>Grafik Suhu</h2>
        </div>
        <div class="modal-body">
            <canvas id="chart2" height="80px"></canvas>
            <div class="histori">
              <h1>Histori</h1>
              <table id="myTable2">
                <tr class="headTab">
                  <th>Nilai</th>
                  <th>Waktu</th>
                </tr>
                <tr>
                </tr>
              </table>
            </div>
        </div>
    </div>
</div>
<div id="myModal3" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close3">&times;</span>
            <h2>Grafik Kelembaban</h2>
        </div>
        <div class="modal-body">
            <canvas id="chart3" height="80px"></canvas>
            <div class="histori">
              <h1>Histori</h1>
              <table id="myTable3">
                <tr class="headTab">
                  <th>Nilai</th>
                  <th>Waktu</th>
                </tr>
                <tr>
                </tr>
              </table>
            </div>
        </div>
    </div>
</div>
<div id="myModal4" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close4">&times;</span>
            <h2>Grafik Tekanan Udara</h2>
        </div>
        <div class="modal-body">
            <canvas id="chart4" height="80px"></canvas>
            <div class="histori">
              <h1>Histori</h1>
              <table id="myTable4">
                <tr class="headTab">
                  <th>Nilai</th>
                  <th>Waktu</th>
                </tr>
                <tr>
                </tr>
              </table>
            </div>
        </div>
    </div>
</div>
<div id="myModal5" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close5">&times;</span>
            <h2>Grafik Intensitas Cahaya</h2>
        </div>
        <div class="modal-body">
            <canvas id="chart5" height="80px"></canvas>
            <div class="histori">
              <h1>Histori</h1>
              <table id="myTable5">
                <tr class="headTab">
                  <th>Nilai</th>
                  <th>Waktu</th>
                </tr>
                <tr>
                </tr>
              </table>
            </div>
        </div>
    </div>
</div>
<div id="myModal6" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close6">&times;</span>
            <h2>Table Kualitas Udara</h2>
        </div>
        <div class="modal-body">
          <table id="myTable">
            <tr class="headTab">
              <th>Nilai</th>
              <th>Jam</th>
              <th>Warna</th>
            </tr>
            <tr>
            </tr>
          </table>
        </div>
    </div>
</div>

<div id="myModal7" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close7">&times;</span>
            <h2>Grafik Kondisi</h2>
        </div>
        <div class="modal-body">
          <table id="myTable1">
            <tr class="headTab">
              <th>Nilai</th>
              <th>Jam</th>
              <th>Warna</th>
            </tr>
            <tr>
            </tr>
          </table>
        </div>
    </div>
</div>
<div id="myModal8" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close8">&times;</span>
            <h2>Grafik Ketinggian</h2>
        </div>
        <div class="modal-body">
            <canvas id="chart8" height="80px"></canvas>
        </div>
    </div>
</div>
</body>

</html>

<script>
    const x = []; const y = [];
    // terisi
    const x1 = []; const y1 = [];
    const x2 = []; const y2 = [];
    const x3 = []; const y3 = [];
    const x4 = []; const y4 = [];
    const x5 = []; const y5 = [];
    const x6 = []; const y6 = [];

    const x7 = []; const y7 = [];
    const x8 = []; const y8 = [];

    // chart
    const ctx1 = document.getElementById('chart1').getContext('2d');
    const myChart1 = new Chart(ctx1, {
        type: 'line',
        data: {
            // BEFORE labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            labels: x1,
            datasets: [{
                label: 'Global Average Temperature in C°',
                data: y1,
                backgroundColor: '#06789e',
                borderColor: '#06789e',
                borderWidth: 1,
                fill: false,
                options: {
                    maintainAspectRatio: false,
                }
            }]
        }
    });
    const ctx2 = document.getElementById('chart2').getContext('2d');
    const myChart2 = new Chart(ctx2, {
        type: 'line',
        data: {
            // BEFORE labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            labels: x2,
            datasets: [{
                label: 'Temperature in C°',
                data: y2,
                backgroundColor: '#06789e',
                borderColor: '#06789e',
                borderWidth: 1,
                fill: false,
                options: {
                    maintainAspectRatio: false,
                }
            }]
        }
    });
    const ctx3 = document.getElementById('chart3').getContext('2d');
    const myChart3 = new Chart(ctx3, {
        type: 'line',
        data: {
            // BEFORE labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            labels: x3,
            datasets: [{
                label: 'Kelembaban (RH)',
                data: y3,
                backgroundColor: '#06789e',
                borderColor: '#06789e',
                borderWidth: 1,
                fill: false,
                options: {
                    maintainAspectRatio: false,
                }
            }]
        }
    });
    const ctx4 = document.getElementById('chart4').getContext('2d');
    const myChart4 = new Chart(ctx4, {
        type: 'line',
        data: {
            // BEFORE labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            labels: x4,
            datasets: [{
                label: 'Tekanan Udara (mmHg)',
                data: y4,
                backgroundColor: '#06789e',
                borderColor: '#06789e',
                borderWidth: 1,
                fill: false,
                options: {
                    maintainAspectRatio: false,
                }
            }]
        }
    });
    const ctx5 = document.getElementById('chart5').getContext('2d');
    const myChart5 = new Chart(ctx5, {
        type: 'line',
        data: {
            // BEFORE labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            labels: x5,
            datasets: [{
                label: 'Intensitas Cahaya (Cd)',
                data: y5,
                backgroundColor: '#06789e',
                borderColor: '#06789e',
                borderWidth: 1,
                fill: false,
                options: {
                    maintainAspectRatio: false,
                }
            }]
        }
    });
    //
    // const ctx6 = document.getElementById('chart6').getContext('2d');
    // const myChart6 = new Chart(ctx6, {
    //     type: 'line',
    //     data: {
    //         // BEFORE labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
    //         labels: x6,
    //         datasets: [{
    //             label: 'Global Average Temperature in C°',
    //             data: y6,
    //             backgroundColor: '#06789e',
    //             borderColor: '#06789e',
    //             borderWidth: 1,
    //             fill: true,
    //             options: {
    //                 maintainAspectRatio: false
    //             }
    //         }]
    //     }
    // });

</script>

<!-- api -->
<script type="text/javascript" src="{{ asset('js/api.js') }}"></script>

<!-- calendar and time -->
<script>
    function startTime() {
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();

        if (h < 10) {
            h = "0" + h;
        }
        if (m < 10) {
            m = "0" + m;
        }
        if (s < 10) {
            s = "0" + s;
        }

        document.getElementById('times').textContent =
            h + ":" + m + ":" + s;

        var weekday = new Array(7);
        weekday[0] = "Minggu";
        weekday[1] = "Senin";
        weekday[2] = "Selasa";
        weekday[3] = "Rabu";
        weekday[4] = "Kamis";
        weekday[5] = "Jum'at";
        weekday[6] = "Sabtu";

        var date = weekday[today.getDay()] + '/' + today.getDate() + '-' + (today.getMonth() + 1) + '-' + today.getFullYear();
        document.getElementById('tggl').textContent = date;
        var t = setTimeout(startTime, 500);
    }

</script>

<!-- modals -->
<script>
    // Get the modal
    var modal = document.getElementById("myModal");
    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    // When the user clicks the button, open the modal
    btn.onclick = function () {
        modal.style.display = "block";
    }
    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
<!-- modal2 -->
<script>
    // Get the modal
    var modal1 = document.getElementById("myModal1");
    // Get the button that opens the modal
    var btn1 = document.getElementById("myBtn1");
    // Get the <span> element that closes the modal
    var span1 = document.getElementsByClassName("close1")[0];
    // When the user clicks the button, open the modal
    btn1.onclick = function () {
        modal1.style.display = "block";
    }
    // When the user clicks on <span> (x), close the modal
    span1.onclick = function () {
        modal1.style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal1) {
            modal1.style.display = "none";
        }
    }
</script>
<!-- modal3 -->
<script>
    // Get the modal
    var modal2 = document.getElementById("myModal2");
    // Get the button that opens the modal
    var btn2 = document.getElementById("myBtn2");
    // Get the <span> element that closes the modal
    var span2 = document.getElementsByClassName("close2")[0];
    // When the user clicks the button, open the modal
    btn2.onclick = function () {
        modal2.style.display = "block";
    }
    // When the user clicks on <span> (x), close the modal
    span2.onclick = function () {
        modal2.style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal1) {
            modal2.style.display = "none";
        }
    }
</script>
<!-- modal4 -->
<script>
    // Get the modal
    var modal3 = document.getElementById("myModal3");
    var btn3 = document.getElementById("myBtn3");
    var span3 = document.getElementsByClassName("close3")[0];

    btn3.onclick = function () {
        modal3.style.display = "block";
    }
    span3.onclick = function () {
        modal3.style.display = "none";
    }
    window.onclick = function (event) {
        if (event.target == modal1) {
            modal3.style.display = "none";
        }
    }
</script>
<!-- modal5 -->
<script>
    // Get the modal
    var modal4 = document.getElementById("myModal4");
    var btn4 = document.getElementById("myBtn4");
    var span4 = document.getElementsByClassName("close4")[0];

    btn4.onclick = function () {
        modal4.style.display = "block";
    }
    span4.onclick = function () {
        modal4.style.display = "none";
    }
    window.onclick = function (event) {
        if (event.target == modal1) {
            modal4.style.display = "none";
        }
    }
</script>
<!-- modal6 -->
<script>
    // Get the modal
    var modal5 = document.getElementById("myModal5");
    var btn5 = document.getElementById("myBtn5");
    var span5 = document.getElementsByClassName("close5")[0];

    btn5.onclick = function () {
        modal5.style.display = "block";
    }
    span5.onclick = function () {
        modal5.style.display = "none";
    }
    window.onclick = function (event) {
        if (event.target == modal1) {
            modal5.style.display = "none";
        }
    }
</script>
<!-- modal7 -->
<script>
    // Get the modal
    var modal6 = document.getElementById("myModal6");
    var btn6 = document.getElementById("myBtn6");
    var span6 = document.getElementsByClassName("close6")[0];

    btn6.onclick = function () {
        modal6.style.display = "block";
    }
    span6.onclick = function () {
        modal6.style.display = "none";
    }
    window.onclick = function (event) {
        if (event.target == modal1) {
            modal6.style.display = "none";
        }
    }
</script>
<!-- modal8 -->
<script>
    // Get the modal
    var modal7 = document.getElementById("myModal7");
    var btn7 = document.getElementById("myBtn7");
    var span7 = document.getElementsByClassName("close7")[0];

    btn7.onclick = function () {
        modal7.style.display = "block";
    }
    span7.onclick = function () {
        modal7.style.display = "none";
    }
    window.onclick = function (event) {
        if (event.target == modal1) {
            modal7.style.display = "none";
        }
    }
</script>
<!-- modal9 -->
<script>
    // Get the modal
    var modal8 = document.getElementById("myModal8");
    var btn8 = document.getElementById("myBtn8");
    var span8 = document.getElementsByClassName("close8")[0];

    btn8.onclick = function () {
        modal8.style.display = "block";
    }
    span8.onclick = function () {
        modal8.style.display = "none";
    }
    window.onclick = function (event) {
        if (event.target == modal) {
            modal8.style.display = "none";
        }
    }
</script>
