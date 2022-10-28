@extends('layouts.frontend')

@section('content')
<style type="text/css">
.custom-chart-space {
    height: 25px;
}
</style>
<section class="splash investor">
    <div class="container container-xxl">
        <h1>Fact Sheet</h1>
    </div>
</section>
<section class="chairman_message">
    <div class="container-xxl p-0">
        <div class="row m-0">
            <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                <div class="sidebar h-100">
                    <a href="{!! route('frontend.fact-sheet') !!}" class="this">Fact Sheet</a>
                    <div class="dropdown">
                        <button class="dropdown-toggle text-white p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Financial Information
                        </button>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item text-white" href="{!! route('frontend.investors-relations.investors-relation',[app()->getLocale()]) !!}">Quarter Reports</a></li>
                            <li><a class="dropdown-item text-white " href="{!! route('frontend.investors-relations.annual-report',[app()->getLocale()]) !!}">Annual Reports</a></li>
                            <li><a class="dropdown-item text-white" href="{!! route('frontend.investors-relations.earnings-announcements',[app()->getLocale()]) !!}">Earnings Announcements</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="dropdown-toggle text-white p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Share Information
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-white" href="{!! route('frontend.share-information') !!}">Share Series</a></li>
                            <li><a class="dropdown-item text-white" href="{!! route('frontend.share-information-graph') !!}">Share Graph</a></li>
                        </ul>
                    </div>
                    <a href="{!! route('frontend.investors-relations.corporate-governance',[app()->getLocale()]) !!}">Corporate Governance</a>
                        <a href="{!! route('frontend.investors-relations.financial-calender',[app()->getLocale()]) !!}"  >Financial Calendar</a>
                        <a href="{!! route('frontend.investors-relations.reports-presentations',[app()->getLocale()]) !!}">Reports & Presentations</a>
                        <a href="{!! route('frontend.investors-relations.investor-contact',[app()->getLocale()]) !!}">Investor Contact</a>
                    <div class="dropdown">
                        <button class="dropdown-toggle text-white p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Others
                        </button>
                        <ul class="dropdown-menu"></ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 bg-ligit-yell p-5">
                <h2 class="report-title">Fact Sheet</h2>
                <a href="#" class="doc-down mt-3">Download PDF</a>
                <div class="row justify-content-around list-title mt-4">
                    <div><h5>Market: Abu Dhabi</h5></div>
                    <div><h5>Symbol: IHC</h5></div>
                    <div><h5>ISIN: AEI000201014</h5></div>
                    <div><h5>Industry: Financials</h5></div>
                </div>
                <hr class="report-border"/>
                <div class="row my-4 fact-text">
                    <div class="col-12">
                        <p>Hili was founded in 1998, as part of an initiative to diversify and
                            grow non-oil business sectors in the UAE.</p><br>
                        <p>Listed on the Abu Dhabi Stock Exchange (ADX), Hili is now one of the
                            region’s foremost investment holding companies with a global presence
                            extending across the Middle East, Europe and the Americas. Recently,
                            Hili entered the Forbes’ 2020 list of ‘The Middle East’s Top 100
                            Companies’.</p><br>
                        <p>Hili has a clear objective of enhancing its portfolio through
                            acquisitions, strategic investments, and business combinations.
                            Comprising more than 100 entities, Hili is continually seeking to
                            expand and diversify its holdings across a growing number of
                            sectors, including Healthcare, Real Estate, Agriculture, Food and
                            Beverage, Utilities, Industries, IT and Communications, Retail and
                            Leisure, and Capital.</p><br>
                        <p>With a core strategy to enhance shareholder value and achieve growth,
                            Hili drives operational synergies and maximizes cost efficiencies
                            across all verticals – it also continues to evaluate exciting
                            investment opportunities through direct ownership and entering
                            partnerships in the UAE and abroad.</p><br>
                        <p>As the world changes, and new opportunities arise, Hili remains
                            focused on resilience, innovation and redefining the marketplace
                            for our ourselves, our clients and our partners.</p><br>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-12">
                        <h4 class="year">Our Global Presence</h4>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29038.79840052273!2d54.35341466349326!3d24.525279180815037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e66de29cbaa17%3A0x9830676b298225a5!2sAl%20Mina%20-%20Mina%20Zayed%20-%20Abu%20Dhabi%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2sin!4v1664341132299!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <img src="{{ asset('frontend/asset/img') }}/filegraph.png" alt="" srcset="" class="w-100 mt-3">
                            <!-- <div id="chartContainer_5" style="height: 400px; width: 100%;"></div>  -->  
                        </div>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="year m-0">Share data</h4>
                            <h6 class="date-data m-0">{{ $ApiResponse->LastTradeTime }}</h6>
                        </div>
                        <hr class="report-border"/>
                    </div>
                    <div class="col-12">
                        <table class="w-100 tabel-styleing">
                            <tr>
                                <td class="py-2">Currency</td>
                                <td class="text-end">AED</td>
                            </tr>
                            <tr>
                                <td class="py-2">Previous Close</td>
                                <td class="text-end">{{ $ApiResponse->PrevClose }}</td>
                            </tr>
                            <tr>
                                <td class="py-2">Change (%)</td>
                                <td class="text-end">{{ $ApiResponse->ChangePercentage }}</td>
                            </tr>
                            <tr>
                                <td  class="py-2">Volume</td>
                                <td class="text-end">{{ $ApiResponse->Volume }}</td>
                            </tr>
                            <tr>
                                <td  class="py-2">Number of Shares (mn)</td>
                                <td class="text-end"></td>
                            </tr>
                            <tr>
                                <td  class="py-2">Market Cap (mn)</td>
                                <td class="text-end">{{ $ApiResponse->MarketCap }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-12">
                        <table class="w-100 tabel-styleing">
                            <tr class="report-border-tabel">
                                <th>KEY FIGURES (AED Mn)</th>
                                <th class="text-end">2019</th>
                                <th class="text-end">2020</th>
                                <th class="text-end">2021</th>
                            </tr>
                            <tr>
                                <td class="py-2"><b>Income statement</b></td>
                            </tr>
                            <tr>
                                <td class="py-2 text-start" width="70%">Revenue</td>
                                <td class="py-2 text-end" width="10%">1,259</td>
                                <td class="py-2 text-end" width="10%">7,047</td>
                                <td class="py-2 text-end" width="10%">7,047</td>
                            </tr>
                            <tr>
                                <td class="py-2 text-start" width="70%">Gross profit</td>
                                <td class="py-2 text-end" width="10%">339</td>
                                <td class="py-2 text-end" width="10%">2,431</td>
                                <td class="py-2 text-end" width="10%">10,167</td>
                            </tr>
                            <tr>
                                <td class="py-2 text-start" width="70%">Profit for the year</td>
                                <td class="py-2 text-end" width="10%">506</td>
                                <td class="py-2 text-end" width="10%">3,015</td>
                                <td class="py-2 text-end" width="10%">11,577</td>
                            </tr>
                            <tr>
                                <td class="py-2 text-start" width="70%">Profit for the year attributable to equity holders of the parent company</td>
                                <td class="py-2 text-end" width="10%">506</td>
                                <td class="py-2 text-end" width="10%">2,869</td>
                                <td class="py-2 text-end" width="10%">7,339</td>
                            </tr>
                        </table>
                        <table class="w-100 tabel-styleing mt-4">
                            <tr>
                                <th class="py-2">Balance sheet</th>
                            </tr>
                            <tr>
                                <td class="py-2 text-start" width="70%">Total assets</td>
                                <td class="py-2 text-end" width="10%">3,978</td>
                                <td class="py-2 text-end" width="10%">14,012</td>
                                <td class="py-2 text-end" width="10%">88,980</td>
                            </tr>
                            <tr>
                                <td class="py-2 text-start" width="70%">Total liabilities</td>
                                <td class="py-2 text-end" width="10%">1,783</td>
                                <td class="py-2 text-end" width="10%">6,190</td>
                                <td class="py-2 text-end" width="10%">32,948</td>
                            </tr>
                            <tr>
                                <td class="py-2 text-start" width="70%">Total equity</td>
                                <td class="py-2 text-end" width="10%">2,195</td>
                                <td class="py-2 text-end" width="10%">7,822</td>
                                <td class="py-2 text-end" width="10%">56,032</td>
                            </tr>
                        </table>
                        <table class="w-100 tabel-styleing mt-4">
                            <tr>
                                <th class="py-2">Cash flow</th>
                            </tr>
                            <tr>
                                <td class="py-2 text-start" width="70%">Net cash generated from operating activities</td>
                                <td class="py-2 text-end" width="10%">322</td>
                                <td class="py-2 text-end" width="10%">2,348</td>
                                <td class="py-2 text-end" width="10%">12,703</td>
                            </tr>
                            <tr>
                                <td class="py-2 text-start" width="70%">Net cash (used in) generated from investing activities  </td>
                                <td class="py-2 text-end" width="10%">886</td>
                                <td class="py-2 text-end" width="10%">(57)</td>
                                <td class="py-2 text-end" width="10%">2,499</td>
                            </tr>
                            <tr>
                                <td class="py-2 text-start" width="70%">Net cash used in financing activities</td>
                                <td class="py-2 text-end" width="10%">(14)</td>
                                <td class="py-2 text-end" width="10%">(110)</td>
                                <td class="py-2 text-end" width="10%">358</td>
                            </tr>
                            <tr>
                                <td class="py-2 text-start" width="70%">Cash and cash equivalents at the end of the year</td>
                                <td class="py-2 text-end" width="10%">1,285</td>
                                <td class="py-2 text-end" width="10%">3,460</td>
                                <td class="py-2 text-end" width="10%">19,015</td>
                            </tr>
                        </table>
                        <table class="w-100 tabel-styleing mt-4">
                            <tr>
                                <th class="py-2">Key indicators</th>
                            </tr>
                            <tr>
                                <td class="py-2 text-start" width="70%">Earnings per share (AED)</td>
                                <td class="py-2 text-end" width="10%">0.43</td>
                                <td class="py-2 text-end" width="10%">1.58</td>
                                <td class="py-2 text-end" width="10%">4.03</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-12 col-md-6">
                        <!-- <img src="./asset/img/fileGraph2.png" alt="" class="w-100" srcset=""><br> -->
                        <div id="chartContainer" style="height: 400px; width: 100%;"></div>
                    </div>
                    <div class="col-12 col-md-6">
                        <!-- <img src="./asset/img/fileGraph3.png" alt="" class="w-100" srcset=""> -->
                        <div id="chartContainer_2" style="height: 400px; width: 100%;"></div>
                    </div>
                    <div class="col-12 col-md-12 custom-chart-space"></div>
                    <div class="col-12 col-md-6">
                        <!-- <img src="./asset/img/fileGraph4.png" alt="" class="w-100 mt-4" srcset=""> -->
                        <div id="chartContainer_3" style="height: 400px; width: 100%;"></div>
                    </div>
                    <div class="col-12 col-md-6">
                        <!-- <img src="./asset/img/fileGraph5.png" alt="" class="w-100 mt-4" srcset=""> -->
                        <div id="chartContainer_4" style="height: 400px; width: 100%;"></div>
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
