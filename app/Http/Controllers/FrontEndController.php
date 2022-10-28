<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeSliders;
use App\Models\AboutUs;
use App\Models\AboutTimeline;
use App\Models\Blogs;
use App\Models\Careers;
use App\Models\OurBusinesses;
use App\Models\ChairmanMessage;
use App\Models\OrganizationChart;
use App\Models\CareersApplication;

class FrontEndController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function FrontIndex()
    {
        $get_slider = HomeSliders::orderBy('title', 'ASC')->get();
        $about = AboutUs::where('id', 1)->first();
        $about_timeline = AboutTimeline::orderBy('id', 'ASC')->get();
        $blogs = Blogs::take(5)->orderBy('id', 'ASC')->get();
        $career = Careers::where('id', 1)->first();
        $Our_Businesses = OurBusinesses::take(6)->orderBy('id', 'ASC')->get();
        //print_r($blogs[0]->toArray());die();
        return view('frontend.index', ['get_slider'=> $get_slider,'about'=> $about, 'about_timeline' => $about_timeline, 'blogs' => $blogs, 'career' => $career, 'Our_Businesses'=> $Our_Businesses]);
    }
    public function OurBusinesses()
    {
        $Our_Businesses = OurBusinesses::orderBy('id', 'ASC')->get();
        return view('frontend.our-businesses', ['Our_Businesses'=> $Our_Businesses]);
    }
    public function OurBusinessesDetail($slug)
    {
        $Businesses = OurBusinesses::where('slug', $slug)->first();
        return view('frontend.our-businesses-detail',['Businesses' => $Businesses]);
    }
    public function ChairmanProfile()
    {
        $ChairmanMessage = ChairmanMessage::where('id', 1)->first();
        return view('frontend.chairman', ['ChairmanMessage'=> $ChairmanMessage]);
    }
    public function organizationchart()
    {
        $OrganizationChart = OrganizationChart::where('id', 1)->first();
        return view('frontend.organization-chart', ['OrganizationChart'=> $OrganizationChart]);
    }
    public function AboutUs()
    {
        $AboutUs = OrganizationChart::where('id', 1)->first();
        return view('frontend.about-us', ['AboutUs'=> $AboutUs]);
    }
    public function BoardOfDirectors()
    {
        $BoardOfDirectors = OrganizationChart::where('id', 1)->first();
        return view('frontend.board-of-directors', ['BoardOfDirectors'=> $BoardOfDirectors]);
    }
    public function LeadershipTeam()
    {
        $LeadershipTeam = OrganizationChart::where('id', 1)->first();
        return view('frontend.leadership-team', ['LeadershipTeam'=> $LeadershipTeam]);
    }
    public function InvestorsRelation()
    {
        $InvestorsRelation = OrganizationChart::where('id', 1)->first();
        return view('frontend.investors-relation', ['InvestorsRelation'=> $InvestorsRelation]);
    }
    public function AnnualReport()
    {
        $AnnualReport = OrganizationChart::where('id', 1)->first();
        return view('frontend.annual-report', ['AnnualReport'=> $AnnualReport]);
    }
    public function EarningsAnnouncements()
    {
        $EarningsAnnouncements = OrganizationChart::where('id', 1)->first();
        return view('frontend.earnings-announcements', ['EarningsAnnouncements'=> $EarningsAnnouncements]);
    }
    public function CorporateGovernance()
    {
        $CorporateGovernance = OrganizationChart::where('id', 1)->first();
        return view('frontend.corporate-governance', ['CorporateGovernance'=> $CorporateGovernance]);
    }
    public function FinancialCalender()
    {
        $FinancialCalender = OrganizationChart::where('id', 1)->first();
        return view('frontend.financial-calender', ['FinancialCalender'=> $FinancialCalender]);
    }
    public function ReportsPresentations()
    {
        $ReportsPresentations = OrganizationChart::where('id', 1)->first();
        return view('frontend.reports-presentations', ['ReportsPresentations'=> $ReportsPresentations]);
    }
    public function InvestorContact()
    {
        $InvestorContact = OrganizationChart::where('id', 1)->first();
        return view('frontend.investor-contact', ['InvestorContact'=> $InvestorContact]);
    }
    public function Media()
    {
        $Media = OrganizationChart::where('id', 1)->first();
        return view('frontend.media', ['Media'=> $Media]);
    }
    public function Careers()
    {
        $Careers = OrganizationChart::where('id', 1)->first();
        return view('frontend.careers', ['Careers'=> $Careers]);
    }
    public function ContactUs()
    {
        $Careers = OrganizationChart::where('id', 1)->first();
        return view('frontend.contact-us', ['Careers'=> $Careers]);
    }
    public function FactSheet()
    {
        $cheaders = array('Content-Type: application/json',
                  'Adx-Subscription-Key: caec91302e124c28b318c5ef372844dc');
        $ch = curl_init('https://sdbazadxservices.adx.ae/ds-public/symbols');
        curl_setopt($ch, CURLOPT_HTTPHEADER, $cheaders);
        curl_setopt($ch, CURLOPT_PUT, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        $data =  json_decode($response);
        $ApiResponse = $data->symbols['91'];
        
        return view('frontend.fact-sheet', ['ApiResponse'=> $ApiResponse]);
    }
    public function Api()
    {
        $cheaders = array('Content-Type: application/json',
                  'Adx-Subscription-Key: caec91302e124c28b318c5ef372844dc');
        $ch = curl_init('https://sdbazadxservices.adx.ae/ds-public/symbols');
        curl_setopt($ch, CURLOPT_HTTPHEADER, $cheaders);
        curl_setopt($ch, CURLOPT_PUT, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        $data =  json_decode($response);
        echo "<pre>";
        print_r($data->symbols);die;
    }
    public function shareInformation()
    {
        $cheaders = array('Content-Type: application/json',
                  'Adx-Subscription-Key: caec91302e124c28b318c5ef372844dc');
        $ch = curl_init('https://sdbazadxservices.adx.ae/ds-public/symbols');
        curl_setopt($ch, CURLOPT_HTTPHEADER, $cheaders);
        curl_setopt($ch, CURLOPT_PUT, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        $data =  json_decode($response);
        $ApiResponse = $data->symbols['91'];
        return view('frontend.share-information', ['ApiResponse'=> $ApiResponse]);
    }
    public function shareInformationGraph()
    {
        $cheaders = array('Content-Type: application/json',
                  'Adx-Subscription-Key: caec91302e124c28b318c5ef372844dc');
        $ch = curl_init('https://sdbazadxservices.adx.ae/ds-public/symbols');
        curl_setopt($ch, CURLOPT_HTTPHEADER, $cheaders);
        curl_setopt($ch, CURLOPT_PUT, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        $data =  json_decode($response);
        $ApiResponse = $data->symbols['91'];
        return view('frontend.share-information-graph', ['ApiResponse'=> $ApiResponse]);
    }
    public function ApplicationSubmit(Request $request)
    {
        $new = CareersApplication::create([
            'full_name' => $request['full_name'],
            'email' => $request['email'],
            'mobile' => $request['mobile'],
            'country' => $request['country'],
            'department' => $request['department'],
            'experience' => $request['experience'],
            'message' => $request['message'],
        ]);
        if(!empty($request->resume)) {
            $file = $request->file('resume');
            $file->getClientOriginalName();
            $file->getClientOriginalExtension();
            $file->getRealPath();
            $file->getSize();
            $file->getMimeType();
            $destinationPath = 'uploads';
            $file->move($destinationPath,$file->getClientOriginalName());
            $url = $destinationPath.'/'.$file->getClientOriginalName();
            CareersApplication::where('id', '=' ,$new->id)->update(['resume' => $url]);
        }
        if(!empty($request->cover_letter)) {
            $file1 = $request->file('cover_letter');
            $file1->getClientOriginalName();
            $file1->getClientOriginalExtension();
            $file1->getRealPath();
            $file1->getSize();
            $file1->getMimeType();
            $destinationPath1 = 'uploads';
            $file1->move($destinationPath1,$file1->getClientOriginalName());
            $url1 = $destinationPath1.'/'.$file1->getClientOriginalName();
            CareersApplication::where('id', '=' ,$new->id)->update(['cover_letter' => $url1]);
        }
        return back()->with("status", "Submitted Successfully.!!");
    }
}
