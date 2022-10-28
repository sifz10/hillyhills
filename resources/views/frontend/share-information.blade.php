@extends('layouts.frontend')

@section('content')
<style type="text/css">
.custom-chart-space {
    height: 25px;
}
</style>
<section class="splash investor">
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
                                <li><a class="dropdown-item text-white this" href="{!! route('frontend.share-information',[app()->getLocale()]) !!}">Share Series</a></li>
                                <li><a class="dropdown-item text-white" href="{!! route('frontend.share-information-graph',[app()->getLocale()]) !!}">Share Graph</a></li>
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
            <div class="col-lg-9 col-md-9 col-sm-12 bg-ligit-yell p-5" id="printableArea">
                    <h2 class="share-title">Share Series</h2>
                    <div class="mt-5 px-3">
                        <div class="d-flex justify-content-between align-items-center table-title">
                            <h4>
                                Share Series
                            </h4>
                            <h6>
                                International Holding Company P.J.S.C.
                            </h6>
                        </div>
                        <div class="col-12">
                        <table class="w-100 tabel-styleing">
                            <tr>
                                <td class="py-2">Time</td>
                                <td class="text-end">{{ $ApiResponse->LastTradeTime }}</td>
                            </tr>
                            <tr>
                                <td class="py-2">Currency</td>
                                <td class="text-end">AED</td>
                            </tr>
                            <tr>
                                <td class="py-2">Market</td>
                                <td class="text-end">
                                    @if($ApiResponse->MarketId == 510)
                                    Regular
                                    @elseif($ApiResponse->MarketId == 511)
                                    Bonds and SUKUKOTC
                                    @elseif($ApiResponse->MarketId == 512)
                                    Debt Market
                                    @elseif($ApiResponse->MarketId == 515)
                                    ETF Market
                                    @elseif($ApiResponse->MarketId == 516)
                                    Big Blocks
                                    @elseif($ApiResponse->MarketId == 517)
                                    Private Companies
                                    @elseif($ApiResponse->MarketId == 610)
                                    SPACS-Shares
                                    @elseif($ApiResponse->MarketId == 611)
                                    SPACS-Warrants
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td  class="py-2">ISIN</td>
                                <td class="text-end">{{ $ApiResponse->ISIN }}</td>
                            </tr>
                            <tr>
                                <td  class="py-2">Symbol</td>
                                <td class="text-end">IHC</td>
                            </tr>
                            <tr>
                                <td  class="py-2">Bid</td>
                                <td class="text-end">{{ $ApiResponse->BidPrice }}</td>
                            </tr>
                            <tr>
                                <td  class="py-2">Ask</td>
                                <td class="text-end">{{ $ApiResponse->AskPrice }}</td>
                            </tr>
                            <tr>
                                <td  class="py-2">Open</td>
                                <td class="text-end">{{ $ApiResponse->OpenPrice }}</td>
                            </tr>
                            <tr>
                                <td  class="py-2">Last</td>
                                <td class="text-end">{{ $ApiResponse->ClosePrice }}</td>
                            </tr>
                            <tr>
                                <td  class="py-2">Change +/-</td>
                                <td class="text-end">{{ $ApiResponse->Change }}</td>
                            </tr>
                            <tr>
                                <td  class="py-2">Change %</td>
                                <td class="text-end">{{ $ApiResponse->ChangePercentage }}</td>
                            </tr>
                            <tr>
                                <td  class="py-2">High</td>
                                <td class="text-end">{{ $ApiResponse->High }}</td>
                            </tr>
                        </table>
                    </div>
                        <a href="javascript:void(0);" onclick="printDiv('printableArea')" class="doc-down mt-4 mx-auto">Print this page</a>
                    </div>
                </div>
        </div>
    </div>
</section>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script>
    function printDiv(printableArea) {
     var printContents = document.getElementById(printableArea).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
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
