@extends('layouts.master')
@section('content')
    <div class="main-panel">
      
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper">
                <!--Statistics cards Starts-->
                <?php
                use App\Models\Amr;
                use App\Models\GantiMeter;
                use App\Models\Lbkb;
                use App\Models\TigaPhasa;
                $amrCount = App\Models\Amr::count();
                $gantimeterCount = App\Models\GantiMeter::count();
                $lbkbCount = App\Models\Lbkb::count();
                $tigaphasaCount = App\Models\Tigaphasa::count();

                $amrComplete = Amr::where('status', 'selesai')->count();
                $gantimeterComplete = GantiMeter::where('status', 'selesai')->count();
                $lbkbComplete = Lbkb::where('status', 'selesai')->count();
                $tigaphasaComplete = Tigaphasa::where('status', 'selesai')->count();

                $tigaphasaBelum = Tigaphasa::where('status', 'belum')->count();
                $gantimeterBelum = GantiMeter::where('status', 'belum')->count();
                $lbkbBelum = Lbkb::where('status', 'belum')->count();
                $amrBelum = Amr::where('status', 'belum')->count();

                $tigaphasaTunda = Tigaphasa::where('status', 'tunda')->count();
                $gantimeterTunda = GantiMeter::where('status', 'tunda')->count();
                $lbkbTunda = Lbkb::where('status', 'tunda')->count();
                $amrTunda = Amr::where('status', 'tunda')->count();


                ?>
               <div class="row" matchHeight="card">
                <div class="col-xl-3 col-lg-6 col-12">
                  <div class="card">
                    <div class="card-content">
                      <div class="px-3 py-3">
                        <div class="media">
                          <div class="media-body text-left">
                                  <h3 class="countdown-number" data-target="{{ $amrCount }}">0</h3>
                                  <span>Total TO AMR</span>
                                  <h3 class="countdown-number" data-target="{{ $amrComplete }}">0</h3>
                                  <span>Total TO Selesai</span>
                                  {{-- <h3 class="countdown-number" data-target="{{ $amrBelum }}">0</h3>
                                  <span>Total TO Belum</span>
                                  <h3 class="countdown-number" data-target="{{ $amrTunda }}">0</h3>
                                  <span>Total TO Tunda</span> --}}
                          </div>
                          <div class="media-right align-self-center">
                            <i class="ft-file-text danger font-large-2 float-right"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card">
                      <div class="card-content">
                        <div class="px-3 py-3">
                          <div class="media">
                            <div class="media-body text-left">
                              <h3 class="countdown-number" data-target="{{ $gantimeterCount }}">0</h3>
                              <span>Total TO Ganti Meter</span>
                              <h3 class="countdown-number" data-target="{{ $gantimeterComplete }}">0</h3>
                              <span>Total TO Selesai</span>
                              {{-- <h3 class="countdown-number" data-target="{{ $gantimeterBelum }}">0</h3>
                              <span>Total TO belum selesai</span> --}}
                            </div>
                            <div class="media-right align-self-center">
                              <i class="icon-speedometer success font-large-2 float-right"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card">
                      <div class="card-content">
                        <div class="px-3 py-3">
                          <div class="media">
                            <div class="media-body text-left">
                              <h3 class="countdown-number" data-target="{{ $lbkbCount }}">0</h3>
                              <span>Total TO LBKB</span>
                              <h3 class="countdown-number" data-target="{{ $lbkbComplete }}">0</h3>
                              <span>Total TO Selesai</span>
                            </div>
                            <div class="media-right align-self-center">
                              <i class="icon-layers warning font-large-2 float-right"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card">
                      <div class="card-content">
                        <div class="px-3 py-3">
                          <div class="media">
                            <div class="media-body text-left">
                              <h3 class="countdown-number" data-target="{{ $tigaphasaCount }}"></h3>
                              <span>Total TO Tigaphasa</span>
                              <h3 class="countdown-number" data-target="{{ $tigaphasaComplete }}">0</h3>
                              <span>Total TO Selesai</span>
                            </div>
                            <div class="media-right align-self-center">
                              <i class="icon-graph primary font-large-2 float-right"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                {{-- JS Animasi Count Number --}}
                <script>
                  const countdownNumbers = document.querySelectorAll(".countdown-number");
              
                  countdownNumbers.forEach((numberElement) => {
                      const target = parseInt(numberElement.getAttribute("data-target"));
                      const increment = Math.ceil(target / 100);
                      let current = 0;
              
                      function updateNumber() {
                          if (current < target) {
                              current += increment;
                              numberElement.textContent = current;
                              requestAnimationFrame(updateNumber);
                          } else {
                              numberElement.textContent = target;
                          }
                      }
                      updateNumber();
                  });
              </script>   
              {{-- End js --}}

<!--Statistics cards Ends-->

             {{-- Tampilan Chart --}}
<div class="row">
  <div class="col-md-6">
      <div class="card">
          <div class="card-header">
              Data Counts Line Chart
          </div>
          <div class="card-body">
              <div class="chart-container">
                  <canvas id="dataCountLineChart"></canvas>
              </div>
          </div>
      </div>
  </div>
  <div class="col-md-6">
      <div class="card">
          <div class="card-header">
              Data Counts Bar Chart
          </div>
          <div class="card-body">
              <div class="chart-container">
                  <canvas id="dataCountBarChart"></canvas>
              </div>
          </div>
      </div>
  </div>
  {{-- <div class="col-md-4" >
    <div class="card">
        <div class="card-header">
            Data Distribution Pie Chart
        </div>
        <div class="card-body">
            <div class="chart-container">
                <canvas id="dataDistributionPieChart"></canvas>
            </div>
        </div>
    </div>
</div> --}}
</div>
{{-- End Tampilan Chart --}}

{{-- JS Chart --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  // Data for the line chart
  const lineChartData = [
      { label: "Total TO AMR", count: {{ $amrCount }}, complete: {{ $amrComplete }}, tunda: {{ $amrTunda }} },
      { label: "Total TO Ganti Meter", count: {{ $gantimeterCount }}, complete: {{ $gantimeterComplete }}, tunda: {{ $gantimeterTunda }} },
      { label: "Total TO LBKB", count: {{ $lbkbCount }}, complete: {{ $lbkbComplete }}, tunda: {{ $lbkbTunda }} },
      { label: "Total TO Tigaphasa", count: {{ $tigaphasaCount }}, complete: {{ $tigaphasaComplete }}, tunda: {{ $tigaphasaTunda }} }
  ];

  // Data for the bar chart
  const barChartData = [
      { label: "Total TO AMR", count: {{ $amrCount }}, complete: {{ $amrComplete }}, tunda: {{ $amrTunda }}},
      { label: "Total TO Ganti Meter", count: {{ $gantimeterCount }}, complete: {{ $gantimeterComplete }}, tunda: {{ $gantimeterTunda }} },
      { label: "Total TO LBKB", count: {{ $lbkbCount }}, complete: {{ $lbkbComplete }}, tunda: {{ $lbkbTunda }} },
      { label: "Total TO Tigaphasa", count: {{ $tigaphasaCount }}, complete: {{ $tigaphasaComplete }}, tunda: {{ $tigaphasaTunda }} }
  ];

   // Data for the pie chart
   const pieChartData = [
        { label: "AMR", count: {{ $amrCount }} },
        { label: "Ganti Meter", count: {{ $gantimeterCount }} },
        { label: "LBKB", count: {{ $lbkbCount }} },
        { label: "Tigaphasa", count: {{ $tigaphasaCount }} }
    ];

  // Get references to the canvas elements
  const lineCanvas = document.getElementById("dataCountLineChart");
  const barCanvas = document.getElementById("dataCountBarChart");
  const pieCanvas = document.getElementById("dataDistributionPieChart");

  // Create a line chart using Chart.js
  const lineCtx = lineCanvas.getContext("2d");
  new Chart(lineCtx, {
      type: "line",
      data: {
          labels: lineChartData.map(item => item.label),
          datasets: [
              {
                  label: "Total Data",
                  data: lineChartData.map(item => item.count),
                  borderColor: "#FF5733",
                  fill: false
              },
              {
                  label: "Total Completed",
                  data: lineChartData.map(item => item.complete),
                  borderColor: "#36A2EB",
                  fill: false,
                  // hidden: true
              },
              {
                  label: "Total Tunda",
                  data: lineChartData.map(item => item.tunda),
                  borderColor: "#22C688",
                  fill: false,
                  // hidden: true
              }
          ]
      },
      options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
              legend: {
                  display: true,
                  position: 'top'
              }
          }
      }
  });

  // Create a bar chart using Chart.js
  const barCtx = barCanvas.getContext("2d");
  new Chart(barCtx, {
      type: "bar",
      data: {
          labels: barChartData.map(item => item.label),
          datasets: [
              {
                  label: "Total Data",
                  data: barChartData.map(item => item.count),
                  backgroundColor: "#FF5733"
              },
              {
                  label: "Total Completed",
                  data: barChartData.map(item => item.complete),
                  backgroundColor: "#36A2EB",
                  // hidden: true
              },
              {
                  label: "Total Tunda",
                  data: barChartData.map(item => item.tunda),
                  backgroundColor: "#22C688",
                  // hidden: true
              }
          ]
      },
      options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
              legend: {
                  display: true,
                  position: 'top'
              }
          }
      }
  });
   // Create a pie chart using Chart.js
   const pieCtx = pieCanvas.getContext("2d");
    new Chart(pieCtx, {
        type: "pie",
        data: {
            labels: pieChartData.map(item => item.label),
            datasets: [
                {
                    data: pieChartData.map(item => item.count),
                    backgroundColor: ["#FF5733", "#36A2EB", "#FFCE56", "#4CAF50"]
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: true,
                    position: 'top'
                }
            }
        }
    });
</script>
{{-- End JS CHART --}}
             
            </div>
        </div>
        <!-- END : End Main Content-->
    </div>
@endsection
