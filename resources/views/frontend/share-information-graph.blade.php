@extends('layouts.frontend')

@section('content')
<style type="text/css">
.custom-chart-space {
    height: 25px;
}
</style>
<section class="share-info-graph">
    <div class="container container-xxl">
        <h1>Share Information</h1>
    </div>
</section>
<section class="chairman_message">
    <div class="container-xxl p-0">
        <div class="row m-0">
            <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                    <div class="sidebar h-100">
                        <a href="{!! route('frontend.fact-sheet',[app()->getLocale()]) !!}">Fact Sheet</a>
                        <div class="dropdown">
                            <button class="dropdown-toggle text-white p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Financial Information
                            </button>
                            <ul class="dropdown-menu ">
                            <li><a class="dropdown-item text-white" href="{!! route('frontend.investors-relations.investors-relation',[app()->getLocale()]) !!}">Quarter Reports</a></li>
                            <li><a class="dropdown-item text-white " href="{!! route('frontend.investors-relations.annual-report',[app()->getLocale()]) !!}">Annual Reports</a></li>
                            <li><a class="dropdown-item text-white " href="{!! route('frontend.investors-relations.earnings-announcements',[app()->getLocale()]) !!}">Earnings Announcements</a></li>
                            </ul>
                        </div>
                        <div class="dropdown">
                            <button class="dropdown-toggle text-white p-0 show" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Share Information
                            </button>
                            <ul class="dropdown-menu show">
                                <li><a class="dropdown-item text-white " href="{!! route('frontend.share-information',[app()->getLocale()]) !!}">Share Series</a></li>
                                <li><a class="dropdown-item text-white this" href="{!! route('frontend.share-information-graph',[app()->getLocale()]) !!}">Share Graph</a></li>
                            </ul>
                        </div>
                        <a href="{!! route('frontend.investors-relations.corporate-governance',[app()->getLocale()]) !!}">Corporate Governance</a>
                        <a href="{!! route('frontend.investors-relations.financial-calender',[app()->getLocale()]) !!}">Financial Calendar</a>
                        <a href="{!! route('frontend.investors-relations.reports-presentations',[app()->getLocale()]) !!}">Reports & Presentations</a>
                        <a href="{!! route('frontend.investors-relations.investor-contact',[app()->getLocale()]) !!}">Investor Contact</a>
                        <div class="dropdown">
                            <button class="dropdown-toggle text-white p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Others
                            </button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-white" href="#">Corporate Governance</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            <div class="col-lg-9 col-md-9 col-sm-12 bg-ligit-yell p-5">
                    <h2 class="share-title">Share Graph</h2>
                    <div class="mt-5 px-3">
                        <div class="d-flex justify-content-between align-items-center table-title">
                            <p>
                                Date & Time: {{ $ApiResponse->LastTradeTime }}
                            </p>
                        </div>
                        <table class="w-100 tabel-styleing mt-4">
                            <tr>
                                <th class="py-2">Share</th>
                                <th class="py-2">Last</th>
                                <th class="py-2">High</th>
                                <th class="py-2">Low</th>
                                <th class="py-2">(+/-)</th>
                                <th class="py-2">%</th>
                                <th class="py-2">Bid</th>
                                <th class="py-2">Ask</th>
                                <th class="py-2">Volume</th>

                            </tr>
                            <tr>
                                <td class="py-2 text-start">{{ $ApiResponse->EngName }}</td>
                                <td class="py-2 text-start">{{ $ApiResponse->LastTradePrice }}</td>
                                <td class="py-2 text-start">{{ $ApiResponse->High }}</td>
                                <td class="py-2 text-start">{{ $ApiResponse->Low }}</td>
                                <td class="py-2 text-start">{{ $ApiResponse->Change }}</td>
                                <td class="py-2 text-start">{{ $ApiResponse->ChangePercentage }}</td>
                                <td class="py-2 text-start">{{ $ApiResponse->BidPrice }}</td>
                                <td class="py-2 text-start">{{ $ApiResponse->AskPrice }}</td>
                                <td class="py-2 text-start">{{ $ApiResponse->Value }}</td>
                            </tr>
                        </table>
                        <ul class="nav nav-tabs mt-5" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="nav-link custom-tab active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Share Graph</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link custom-tab" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Share Data</button>
                            </li>
                          </ul>
                          <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                <div class="d-flex day-filter gap-3 mt-4">
                                    <div class="d-flex gap-1">
                                        <div class="position-relative">
                                            <input type="radio" name="days" id="" value="D-1">
                                            <span class="custom-radio"></span>
                                        </div>
                                        <label for="Day">1 day</label>
                                    </div>
                                    <div class="d-flex gap-1">
                                        <div class="position-relative">
                                            <input type="radio" name="days" id="" value="D-5">
                                            <span class="custom-radio"></span>
                                        </div>
                                        <label for="Day">5 day</label>
                                    </div>
                                    <div class="d-flex gap-1">
                                        <div class="position-relative">
                                            <input type="radio" name="days" id="" value="M-1">
                                            <span class="custom-radio"></span>
                                        </div>
                                        <label for="Day">1 Month</label>
                                    </div>
                                    <div class="d-flex gap-1">
                                        <div class="position-relative">
                                            <input type="radio" name="days" id="" value="M-3">
                                            <span class="custom-radio"></span>
                                        </div>
                                        <label for="Day">3 Month</label>
                                    </div>
                                    <div class="d-flex gap-1">
                                        <div class="position-relative">
                                            <input type="radio" name="days" id="" value="M-6">
                                            <span class="custom-radio"></span>
                                        </div>
                                        <label for="Day">6 Month</label>
                                    </div>
                                    <div class="d-flex gap-1">
                                        <div class="position-relative">
                                            <input type="radio" name="days" id="" value="Y-1">
                                            <span class="custom-radio"></span>
                                        </div>
                                        <label for="Day">1 Year</label>
                                    </div>
                                    <div class="d-flex gap-1">
                                        <div class="position-relative">
                                            <input type="radio" name="days" id="" value="Y-3">
                                            <span class="custom-radio"></span>
                                        </div>
                                        <label for="Day">3 Year</label>
                                    </div>
                                    <div class="d-flex gap-1">
                                        <div class="position-relative">
                                            <input type="radio" name="days" id="" value="C-R">
                                            <span class="custom-radio"></span>
                                        </div>
                                        <label for="Day">Custom Range</label>
                                    </div>
                                </div>
                                <img src="{{ asset('frontend/asset/img/fileGraph6.png')}}" alt="" class="w-100" srcset="">
                                <img src="{{ asset('frontend/asset/img/fileGraph7.png')}}" alt="" class="w-100 mt-4" srcset="">
                            </div>
                            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">dfdslkfjdklg</div>
                          </div>
                          <div class="d-flex justify-content-center mt-4">
                            <div class="me-2">
                                <a href="#" class="doc-down">
                                    Download this page
                                </a>
                            </div>
                            <div class="ms-2">
                                <a href="#" class="doc-down">
                                    Print this page
                                </a>
                            </div>
                          </div>
                    </div>
                </div>
        </div>
    </div>
</section>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    theme: "light2", // "light1", "light2", "dark1", "dark2"
    title:{
        fontSize: 16,
        text: "Revenue"
    },
    axisY: {
        titleFontSize: 16,
        title: "AED Mn"
    },
    dataPointWidth: 30,
    data: [{        
        type: "column",
        color: "#554588",  
        showInLegend: true,
        indexLabelFontSize: 16,
        indexLabelPlacement: "outside", 
        dataPoints: [      
            { y: 1259, label: "2019", indexLabel: "1259" },
            { y: 7047,  label: "2020", indexLabel: "7047" },
            { y: 28562,  label: "2021", indexLabel: "28562" }
        ]
    }]
});

var chart_2 = new CanvasJS.Chart("chartContainer_2", {
    animationEnabled: true,
    theme: "light2", // "light1", "light2", "dark1", "dark2"
    title:{
        fontSize: 16,
        text: "Total assets"
    },
    axisY: {
        titleFontSize: 16,
        title: "AED Mn"
    },
    dataPointWidth: 30,
    data: [{        
        type: "column",
        color: "#554588",  
        showInLegend: true,
        indexLabelFontSize: 16,
        indexLabelPlacement: "outside", 
        dataPoints: [      
            { y: 3978, label: "2019", indexLabel: "3978" },
            { y: 14012,  label: "2020", indexLabel: "14012" },
            { y: 88980,  label: "2021", indexLabel: "88980" }
        ]
    }]
});

var chart_3 = new CanvasJS.Chart("chartContainer_3", {
    animationEnabled: true,
    theme: "light2", // "light1", "light2", "dark1", "dark2"
    title:{
        fontSize: 16,
        text: "Earnings per share"
    },
    axisY: {
        titleFontSize: 16,
        title: "AED Mn"
    },
    dataPointWidth: 30,
    data: [{        
        type: "column",
        color: "#554588",  
        showInLegend: true,
        indexLabelFontSize: 16,
        indexLabelPlacement: "outside", 
        dataPoints: [      
            { y: 0.43, label: "2019", indexLabel: "0.43" },
            { y: 1.58,  label: "2020", indexLabel: "1.58" },
            { y: 4.03,  label: "2021", indexLabel: "4.03" }
        ]
    }]
});
var chart_4 = new CanvasJS.Chart("chartContainer_4", {
    animationEnabled: true,
    title:{
        fontSize: 16,
        text: "Segment revenue 2021"
    },
    data: [{
        type: "doughnut",
        startAngle: 60,
        //innerRadius: 60,
        indexLabelFontSize: 17,
        indexLabel: "{label} - #percent%",
        toolTipContent: "<b>{label}:</b> {y} (#percent%)",
        dataPoints: [
            { y: 40.17, label: "Healthcare" },
            { y: 7.8, label: "Capital" },
            { y: 8.1, label: "Food" },
            { y: 22.8, label: "Industrial"},
            { y: 4.6, label: "Digital"},
            { y: 14.7, label: "Real estate"},
            { y: 1.2, label: "Utilities"}
        ]
    }]
});
/*var chart_5 = new CanvasJS.Chart("chartContainer_5",
    {
      title:{
        text: "A Multi-series Column Chart"
      
      },   
      data: [{        
        type: "column",
        dataPoints: [
        { x: 10, y: 171 },
        { x: 20, y: 155},
        { x: 30, y: 150 },
        { x: 40, y: 165 },
        { x: 50, y: 195 },
        { x: 60, y: 168 },
        { x: 70, y: 128 },
        { x: 80, y: 134 },
        { x: 90, y: 114}
        ]
      },
      {        
        type: "column",
        dataPoints: [
        { x: 10, y: 71 },
        { x: 20, y: 55},
        { x: 30, y: 50 },
        { x: 40, y: 65 },
        { x: 50, y: 95 },
        { x: 60, y: 68 },
        { x: 70, y: 28 },
        { x: 80, y: 34 },
        { x: 90, y: 14}
        ]
      }        
      ]
    });*/
chart.render();
chart_2.render();
chart_3.render();
chart_4.render();
/*chart_5.render();*/

}
</script>
@endsection
