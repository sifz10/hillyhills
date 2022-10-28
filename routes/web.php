<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
  LangController,
  HomeController,
  FrontEndController,
  HomePageController,
  AboutUsController,
  AboutTimelineController,
  BlogController,
  CareersController,
  ContactInfoController,
  FooterAboutController,
  OurBusinessesController,
  ChairmanMessageController,
  BoardOfDirectorsController,
  LeadershipTeamController,
  OrganizationController,
  FinancialCalenderController,
  QuarterlyReportController,
  AnnualReportController,
  EarningsAnnouncementsController,
  CorporateGovernanceController,
  ReportsPresentationsController,
  InvestorContactController,
  FactSheetController,
  ShareSeriesController,
  ShareGraphController,
  ShareGraphTableController,
  AboutHilyController,
  AboutVisionSectionController,
  AboutAcomplishmentsController,
  AboutTakeCloserController,
  CareersPageController,
  ContactUsController,
  ContactAddressesController,
  CareersApplication,
  UserController,
};
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [FrontEndController::class, 'FrontIndex'])->name('frontend.index');
Route::get('/our-businesses/', [FrontEndController::class, 'OurBusinesses'])->name('frontend.our-businesses');
Route::get('/media/', [FrontEndController::class, 'Media'])->name('frontend.media');
Route::get('/careers/', [FrontEndController::class, 'Careers'])->name('frontend.careers');
Route::post('/careers/submit', [FrontEndController::class, 'ApplicationSubmit'])->name('careers.submit');
Route::get('/contact-us/', [FrontEndController::class, 'ContactUs'])->name('frontend.contact-us');
Route::get('/investors-relations/fact-sheet/', [FrontEndController::class, 'FactSheet'])->name('frontend.fact-sheet');
Route::get('/investors-relations/share-information/', [FrontEndController::class, 'shareInformation'])->name('frontend.share-information');
Route::get('/investors-relations/share-information-graph/', [FrontEndController::class, 'shareInformationGraph'])->name('frontend.share-information-graph');
Route::get('/our-businesses-detail/{slug}', [FrontEndController::class, 'OurBusinessesDetail'])->name('frontend.our-businesses-detail');
Route::get('/who-we-are/chairman-profile', [FrontEndController::class, 'ChairmanProfile'])->name('frontend.who-we-are.chairman-profile');
Route::get('/who-we-are/organization-chart', [FrontEndController::class, 'organizationchart'])->name('frontend.who-we-are.organization-chart');
Route::get('/who-we-are/about-us', [FrontEndController::class, 'AboutUs'])->name('frontend.who-we-are.about-us');
Route::get('/who-we-are/board-of-directors', [FrontEndController::class, 'BoardOfDirectors'])->name('frontend.who-we-are.board-of-directors');
Route::get('/who-we-are/leadership-team', [FrontEndController::class, 'LeadershipTeam'])->name('frontend.who-we-are.leadership-team');

Route::get('/investors-relations/investors-relation', [FrontEndController::class, 'InvestorsRelation'])->name('frontend.investors-relations.investors-relation');
Route::get('/investors-relations/annual-report', [FrontEndController::class, 'AnnualReport'])->name('frontend.investors-relations.annual-report');
Route::get('/investors-relations/earnings-announcements', [FrontEndController::class, 'EarningsAnnouncements'])->name('frontend.investors-relations.earnings-announcements');
Route::get('/investors-relations/corporate-governance', [FrontEndController::class, 'CorporateGovernance'])->name('frontend.investors-relations.corporate-governance');
Route::get('/investors-relations/financial-calender', [FrontEndController::class, 'FinancialCalender'])->name('frontend.investors-relations.financial-calender');
Route::get('/investors-relations/reports-presentations', [FrontEndController::class, 'ReportsPresentations'])->name('frontend.investors-relations.reports-presentations');
Route::get('/investors-relations/investor-contact', [FrontEndController::class, 'InvestorContact'])->name('frontend.investors-relations.investor-contact');

Route::get('/api-request', [FrontEndController::class, 'Api'])->name('api-request');
Route::get('lang/home', [LangController::class, 'index']);

Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/home-sliders', [HomePageController::class, 'index'])->name('dashboard.home-sliders.index');
Route::get('/home-sliders-list', [HomePageController::class, 'listing'])->name('dashboard.home-sliders.list');
Route::post('/home_sliders_save', [HomePageController::class, 'store'])->name('home_sliders_save');
Route::get('/home-sliders/edit/{id}', [HomePageController::class, 'edit'])->name('home-sliders.edit');
Route::post('/home_sliders_update', [HomePageController::class, 'update'])->name('home_sliders_update');
Route::get('/home-sliders/delete/{id}', [HomePageController::class, 'delete'])->name('home-sliders.delete');

Route::get('dashboard/about-us', [AboutUsController::class, 'index'])->name('dashboard.about-us.index');
Route::post('dashboard/about-us/save', [AboutUsController::class, 'store'])->name('dashboard.about-us.save');
Route::post('dashboard/about-us/update', [AboutUsController::class, 'update'])->name('dashboard.about-us.update');

Route::get('dashboard/about-timeline', [AboutTimelineController::class, 'index'])->name('dashboard.about-timeline.index');
Route::get('/dashboard/about-timeline/list', [AboutTimelineController::class, 'listing'])->name('dashboard.about-timeline.list');
Route::post('dashboard/about-timeline/save', [AboutTimelineController::class, 'store'])->name('dashboard.about-timeline.save');
Route::get('dashboard/about-timeline/edit/{id}', [AboutTimelineController::class, 'edit'])->name('dashboard.about-timeline.edit');
Route::post('about-timeline-update', [AboutTimelineController::class, 'update'])->name('about-timeline-update');
Route::get('dashboard/about-timeline/delete/{id}', [AboutTimelineController::class, 'delete'])->name('dashboard.about-timeline.delete');

Route::get('/blogs', [BlogController::class, 'index'])->name('dashboard.blogs.index');
Route::get('/blogs-list', [BlogController::class, 'listing'])->name('dashboard.blogs.list');
Route::post('/blogs_save', [BlogController::class, 'store'])->name('blogs_save');
Route::get('/blogs/edit/{id}', [BlogController::class, 'edit'])->name('blogs.edit');
Route::post('/blogs_update', [BlogController::class, 'update'])->name('blogs_update');
Route::get('/blogs/delete/{id}', [BlogController::class, 'delete'])->name('blogs.delete');

Route::get('dashboard/careers', [CareersController::class, 'index'])->name('dashboard.careers.index');
Route::get('dashboard/careers-applications', [CareersController::class, 'GetApplications'])->name('dashboard.careers-applications');
Route::post('dashboard/careers/update', [CareersController::class, 'update'])->name('dashboard.careers.update');

Route::get('dashboard/contact-info', [ContactInfoController::class, 'index'])->name('dashboard.contact-info.index');
Route::post('dashboard/contact-info/update', [ContactInfoController::class, 'update'])->name('dashboard.contact-info.update');

Route::get('dashboard/footer', [FooterAboutController::class, 'index'])->name('dashboard.footer.index');
Route::post('dashboard/footer/update', [FooterAboutController::class, 'update'])->name('dashboard.footer.update');

Route::get('dashboard/our-businesses', [OurBusinessesController::class, 'index'])->name('dashboard.our-businesses.index');
Route::get('/dashboard/our-businesses/list', [OurBusinessesController::class, 'listing'])->name('dashboard.our-businesses.list');
Route::post('dashboard/our-businesses/save', [OurBusinessesController::class, 'store'])->name('dashboard.our-businesses.save');
Route::get('dashboard/our-businesses/edit/{id}', [OurBusinessesController::class, 'edit'])->name('dashboard.our-businesses.edit');
Route::post('our-businesses-update', [OurBusinessesController::class, 'update'])->name('our-businesses-update');
Route::get('dashboard/our-businesses/delete/{id}', [OurBusinessesController::class, 'delete'])->name('dashboard.our-businesses.delete');

Route::get('dashboard/who-we-are/chairman', [ChairmanMessageController::class, 'index'])->name('dashboard.who-we-are.chairman.index');
Route::post('dashboard/who-we-are/chairman/update', [ChairmanMessageController::class, 'update'])->name('dashboard.who-we-are.chairman.update');

Route::get('dashboard/who-we-are/board-of-directors', [BoardOfDirectorsController::class, 'index'])->name('dashboard.who-we-are.board-of-directors.index');
Route::get('dashboard/who-we-are/board-of-directors/add', [BoardOfDirectorsController::class, 'add'])->name('dashboard.who-we-are.board-of-directors.add');
Route::post('dashboard/who-we-are/board-of-directors/save', [BoardOfDirectorsController::class, 'store'])->name('dashboard.who-we-are.board-of-directors.save');
Route::get('dashboard/who-we-are/board-of-directors/edit/{id}', [BoardOfDirectorsController::class, 'edit'])->name('dashboard.who-we-are.board-of-directors.edit');
Route::post('dashboard/who-we-are/board-of-directors/update', [BoardOfDirectorsController::class, 'update'])->name('dashboard.who-we-are.board-of-directors.update');
Route::get('dashboard/who-we-are/board-of-directors/delete/{id}', [BoardOfDirectorsController::class, 'delete'])->name('dashboard.who-we-are.board-of-directors.delete');

Route::get('dashboard/who-we-are/leadership-team', [LeadershipTeamController::class, 'index'])->name('dashboard.who-we-are.leadership-team.index');
Route::get('dashboard/who-we-are/leadership-team/add', [LeadershipTeamController::class, 'add'])->name('dashboard.who-we-are.leadership-team.add');
Route::post('dashboard/who-we-are/leadership-team/save', [LeadershipTeamController::class, 'store'])->name('dashboard.who-we-are.leadership-team.save');
Route::get('dashboard/who-we-are/leadership-team/edit/{id}', [LeadershipTeamController::class, 'edit'])->name('dashboard.who-we-are.leadership-team.edit');
Route::post('dashboard/who-we-are/leadership-team/update', [LeadershipTeamController::class, 'update'])->name('dashboard.who-we-are.leadership-team.update');
Route::get('dashboard/who-we-are/leadership-team/delete/{id}', [LeadershipTeamController::class, 'delete'])->name('dashboard.who-we-are.leadership-team.delete');

Route::get('dashboard/who-we-are/organization-chart', [OrganizationController::class, 'index'])->name('dashboard.who-we-are.organization-chart.index');
Route::post('dashboard/who-we-are/organization-chart/update', [OrganizationController::class, 'update'])->name('dashboard.who-we-are.organization-chart.update');

Route::get('/financial-calender', [FinancialCalenderController::class, 'index'])->name('dashboard.financial-calender.index');
Route::get('/financial-calender-list', [FinancialCalenderController::class, 'listing'])->name('dashboard.financial-calender.list');
Route::post('/financial_calender_save', [FinancialCalenderController::class, 'store'])->name('financial_calender_save');
Route::get('/financial-calender/edit/{id}', [FinancialCalenderController::class, 'edit'])->name('financial-calender.edit');
Route::post('/financial_calender_update', [FinancialCalenderController::class, 'update'])->name('financial_calender_update');
Route::get('/financial-calender/delete/{id}', [FinancialCalenderController::class, 'delete'])->name('financial-calender.delete');

Route::get('dashboard/quarterly-report', [QuarterlyReportController::class, 'index'])->name('dashboard.quarterly-report.index');
Route::get('dashboard/quarterly-report/add', [QuarterlyReportController::class, 'add'])->name('dashboard.quarterly-report.add');
Route::post('dashboard/quarterly-report/save', [QuarterlyReportController::class, 'store'])->name('dashboard.quarterly-report.save');
Route::get('dashboard/quarterly-report/edit/{id}', [QuarterlyReportController::class, 'edit'])->name('dashboard.quarterly-report.edit');
Route::post('dashboard/quarterly-report/update', [QuarterlyReportController::class, 'update'])->name('dashboard.quarterly-report.update');
Route::get('dashboard/quarterly-report/delete/{id}', [QuarterlyReportController::class, 'delete'])->name('dashboard.quarterly-report.delete');

Route::get('dashboard/annual-report', [AnnualReportController::class, 'index'])->name('dashboard.annual-report.index');
Route::get('dashboard/annual-report/add', [AnnualReportController::class, 'add'])->name('dashboard.annual-report.add');
Route::post('dashboard/annual-report/save', [AnnualReportController::class, 'store'])->name('dashboard.annual-report.save');
Route::get('dashboard/annual-report/edit/{id}', [AnnualReportController::class, 'edit'])->name('dashboard.annual-report.edit');
Route::post('dashboard/annual-report/update', [AnnualReportController::class, 'update'])->name('dashboard.annual-report.update');
Route::get('dashboard/annual-report/delete/{id}', [AnnualReportController::class, 'delete'])->name('dashboard.annual-report.delete');

Route::get('dashboard/earnings-announcements', [EarningsAnnouncementsController::class, 'index'])->name('dashboard.earnings-announcements.index');
Route::get('dashboard/earnings-announcements/add', [EarningsAnnouncementsController::class, 'add'])->name('dashboard.earnings-announcements.add');
Route::post('dashboard/earnings-announcements/save', [EarningsAnnouncementsController::class, 'store'])->name('dashboard.earnings-announcements.save');
Route::get('dashboard/earnings-announcements/edit/{id}', [EarningsAnnouncementsController::class, 'edit'])->name('dashboard.earnings-announcements.edit');
Route::post('dashboard/earnings-announcements/update', [EarningsAnnouncementsController::class, 'update'])->name('dashboard.earnings-announcements.update');
Route::get('dashboard/earnings-announcements/delete/{id}', [EarningsAnnouncementsController::class, 'delete'])->name('dashboard.earnings-announcements.delete');

Route::get('dashboard/corporate-governance', [CorporateGovernanceController::class, 'index'])->name('dashboard.corporate-governance.index');
Route::get('dashboard/corporate-governance/add', [CorporateGovernanceController::class, 'add'])->name('dashboard.corporate-governance.add');
Route::post('dashboard/corporate-governance/save', [CorporateGovernanceController::class, 'store'])->name('dashboard.corporate-governance.save');
Route::get('dashboard/corporate-governance/edit/{id}', [CorporateGovernanceController::class, 'edit'])->name('dashboard.corporate-governance.edit');
Route::post('dashboard/corporate-governance/update', [CorporateGovernanceController::class, 'update'])->name('dashboard.corporate-governance.update');
Route::get('dashboard/corporate-governance/delete/{id}', [CorporateGovernanceController::class, 'delete'])->name('dashboard.corporate-governance.delete');

Route::get('dashboard/reports-presentations', [ReportsPresentationsController::class, 'index'])->name('dashboard.reports-presentations.index');
Route::get('dashboard/reports-presentations/add', [ReportsPresentationsController::class, 'add'])->name('dashboard.reports-presentations.add');
Route::post('dashboard/reports-presentations/save', [ReportsPresentationsController::class, 'store'])->name('dashboard.reports-presentations.save');
Route::get('dashboard/reports-presentations/edit/{id}', [ReportsPresentationsController::class, 'edit'])->name('dashboard.reports-presentations.edit');
Route::post('dashboard/reports-presentations/update', [ReportsPresentationsController::class, 'update'])->name('dashboard.reports-presentations.update');
Route::get('dashboard/reports-presentations/delete/{id}', [ReportsPresentationsController::class, 'delete'])->name('dashboard.reports-presentations.delete');

Route::get('dashboard/investor-contact', [InvestorContactController::class, 'index'])->name('dashboard.investor-contact.index');
Route::post('dashboard/investor-contact/update', [InvestorContactController::class, 'update'])->name('dashboard.investor-contact.update');

Route::get('dashboard/share-series', [ShareSeriesController::class, 'index'])->name('dashboard.share-series.index');
Route::post('dashboard/share-series/update', [ShareSeriesController::class, 'update'])->name('dashboard.share-series.update');

Route::get('dashboard/share-graph', [ShareGraphController::class, 'index'])->name('dashboard.share-graph.index');
Route::post('dashboard/share-graph/update', [ShareGraphController::class, 'update'])->name('dashboard.share-graph.update');

Route::get('dashboard/about-hily', [AboutHilyController::class, 'index'])->name('dashboard.about-hily.index');
Route::post('dashboard/about-hily/update', [AboutHilyController::class, 'update'])->name('dashboard.about-hily.update');

Route::get('dashboard/about-vision-section', [AboutVisionSectionController::class, 'index'])->name('dashboard.about-vision-section.index');
Route::get('dashboard/about-vision-section/edit/{id}', [AboutVisionSectionController::class, 'edit'])->name('dashboard.about-vision-section.edit');
Route::post('dashboard/about-vision-section/update', [AboutVisionSectionController::class, 'update'])->name('dashboard.about-vision-section.update');

Route::get('dashboard/about-acomplishments', [AboutAcomplishmentsController::class, 'index'])->name('dashboard.about-acomplishments.index');
Route::get('dashboard/about-acomplishments/add', [AboutAcomplishmentsController::class, 'add'])->name('dashboard.about-acomplishments.add');
Route::post('dashboard/about-acomplishments/save', [AboutAcomplishmentsController::class, 'store'])->name('dashboard.about-acomplishments.save');
Route::get('dashboard/about-acomplishments/edit/{id}', [AboutAcomplishmentsController::class, 'edit'])->name('dashboard.about-acomplishments.edit');
Route::post('dashboard/about-acomplishments/update', [AboutAcomplishmentsController::class, 'update'])->name('dashboard.about-acomplishments.update');
Route::get('dashboard/about-acomplishments/delete/{id}', [AboutAcomplishmentsController::class, 'delete'])->name('dashboard.about-acomplishments.delete');
Route::post('dashboard/about-acomplishments-title/update', [AboutAcomplishmentsController::class, 'AcomplishmentsTitle'])->name('dashboard.about-acomplishments-title.update');

Route::get('dashboard/about-take-closer', [AboutTakeCloserController::class, 'index'])->name('dashboard.about-take-closer.index');
Route::post('dashboard/about-take-closer/update', [AboutTakeCloserController::class, 'update'])->name('dashboard.about-take-closer.update');

Route::get('dashboard/careers-page', [CareersPageController::class, 'index'])->name('dashboard.careers-page.index');
Route::post('dashboard/careers-page/update', [CareersPageController::class, 'update'])->name('dashboard.careers-page.update');

Route::get('dashboard/fact-sheet', [FactSheetController::class, 'index'])->name('dashboard.fact-sheet.index');
Route::post('dashboard/fact-sheet/update', [FactSheetController::class, 'update'])->name('dashboard.fact-sheet.update');

Route::get('dashboard/contact-us', [ContactUsController::class, 'index'])->name('dashboard.contact-us.index');
Route::post('dashboard/contact-us/update', [ContactUsController::class, 'update'])->name('dashboard.contact-us.update');

Route::get('dashboard/contact-addresses', [ContactAddressesController::class, 'index'])->name('dashboard.contact-addresses.index');
Route::get('dashboard/contact-addresses/add', [ContactAddressesController::class, 'add'])->name('dashboard.contact-addresses.add');
Route::post('dashboard/contact-addresses/save', [ContactAddressesController::class, 'store'])->name('dashboard.contact-addresses.save');
Route::get('dashboard/contact-addresses/edit/{id}', [ContactAddressesController::class, 'edit'])->name('dashboard.contact-addresses.edit');
Route::post('dashboard/contact-addresses/update', [ContactAddressesController::class, 'update'])->name('dashboard.contact-addresses.update');
Route::get('dashboard/contact-addresses/delete/{id}', [ContactAddressesController::class, 'delete'])->name('dashboard.contact-addresses.delete');

Route::get('dashboard/share-graph-table', [ShareGraphTableController::class, 'index'])->name('dashboard.share-graph-table.index');
Route::get('/dashboard/share-graph-table/list', [ShareGraphTableController::class, 'listing'])->name('dashboard.share-graph-table.list');
Route::post('dashboard/share-graph-table/save', [ShareGraphTableController::class, 'store'])->name('dashboard.share-graph-table.save');
Route::get('dashboard/share-graph-table/edit/{id}', [ShareGraphTableController::class, 'edit'])->name('dashboard.share-graph-table.edit');
Route::post('dashboard/share-graph-table/update', [ShareGraphTableController::class, 'update'])->name('dashboard.share-graph-table.update');
Route::get('dashboard/share-graph-table/delete/{id}', [ShareGraphTableController::class, 'delete'])->name('dashboard.share-graph-table.delete');

Route::get('profile/settings', [UserController::class, 'profile_settings'])->name('dashboard.user.settings');
Route::post('profile/settings/save/', [UserController::class, 'profile_settings_save'])->name('dashboard.user.settings.save');
Route::get('/logout', function () {
  Auth::logout();
  return redirect()->route('login')->with('success', 'Successfully Logged Out.');
})->name('logout');
require __DIR__.'/auth.php';
