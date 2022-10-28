<style>
    #sidebar ul.menu-categories ul.submenu > li a:hover:before{
        display:none;
    }
</style>
<!--  BEGIN SIDEBAR  -->
<div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">
        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu">
                <a href="{!! route('dashboard') !!}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <!--svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-target"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg-->
                        <span>Dashboard</span>
                    </div>
                </a>
            </li>
            <li class="menu">
                <a href="#Faqs" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                      <!--svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg-->
                      <span>Home</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>

                <ul class="collapse submenu list-unstyled" id="Faqs" data-parent="#accordionExample">                    
                    <ul class="collapse submenu list-unstyled" id="Faqs" data-parent="#accordionExample">
                        <li>
                            <a href="{!! route('dashboard.home-sliders.index',[app()->getLocale()]) !!}">Add Sliders</a>
                        </li>
                        <li>
                            <a href="{!! route('dashboard.home-sliders.list',[app()->getLocale()]) !!}">All Sliders </a>
                        </li>
                        <li>
                            <a href="{!! route('dashboard.about-us.index',[app()->getLocale()]) !!}">About Us</a>
                        </li>
                        <li>
                            <a href="{!! route('dashboard.about-timeline.index',[app()->getLocale()]) !!}">Add Timeline</a>
                        </li>
                        <li>
                            <a href="{!! route('dashboard.about-timeline.list',[app()->getLocale()]) !!}"> Timeline List </a>
                        </li>
                        <li>
                            <a href="{!! route('dashboard.blogs.index',[app()->getLocale()]) !!}">Add Media</a>
                        </li>
                        <li>
                            <a href="{!! route('dashboard.blogs.list',[app()->getLocale()]) !!}">Media List</a>
                        </li>
                        <li>
                            <a href="{!! route('dashboard.footer.index',[app()->getLocale()]) !!}">About Footer</a>
                        </li>
                        <li>
                            <a href="{!! route('dashboard.contact-info.index',[app()->getLocale()]) !!}">Contact Info</a>
                        </li>
                    </ul>
                </ul>
            </li>
            <li class="menu">
                <a href="#our-businesses" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">

                        <!--svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-codesandbox"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="7.5 4.21 12 6.81 16.5 4.21"></polyline><polyline points="7.5 19.79 7.5 14.6 3 12"></polyline><polyline points="21 12 16.5 14.6 16.5 19.79"></polyline><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg-->
                        <span>Our Businesses</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="our-businesses" data-parent="#accordionExample">
                    <li>
                        <a href="{!! route('dashboard.our-businesses.index',[app()->getLocale()]) !!}">Add Businesses</a>
                    </li>
                    <li>
                        <a href="{!! route('dashboard.our-businesses.list',[app()->getLocale()]) !!}">List Businesses</a>
                    </li>
                </ul>
            </li>
            <li class="menu">
                <a href="#chairman" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">

                        <!--svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-codesandbox"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="7.5 4.21 12 6.81 16.5 4.21"></polyline><polyline points="7.5 19.79 7.5 14.6 3 12"></polyline><polyline points="21 12 16.5 14.6 16.5 19.79"></polyline><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg!-->
                        <span>Who We Are</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="chairman" data-parent="#accordionExample">
                    <li>
                        <a href="{!! route('dashboard.who-we-are.chairman.index',[app()->getLocale()]) !!}"> Chairman Profile</a>
                    </li>
                    <li>
                        <a href="{!! route('dashboard.who-we-are.board-of-directors.index',[app()->getLocale()]) !!}">Board Of Directors</a>
                    </li>
                    <li>
                        <a href="{!! route('dashboard.who-we-are.leadership-team.index',[app()->getLocale()]) !!}">Leadership Team</a>
                    </li>
                    <li>
                        <a href="{!! route('dashboard.who-we-are.organization-chart.index',[app()->getLocale()]) !!}">Organization Chart</a>
                    </li>
                </ul>
            </li>
            <li class="menu">
                <a href="#Sectors_about" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">

                        <!--svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-codesandbox"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="7.5 4.21 12 6.81 16.5 4.21"></polyline><polyline points="7.5 19.79 7.5 14.6 3 12"></polyline><polyline points="21 12 16.5 14.6 16.5 19.79"></polyline><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg-->
                        <span>About Us Page</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="Sectors_about" data-parent="#accordionExample">
                    <li>
                        <a href="{!! route('dashboard.about-hily.index',[app()->getLocale()]) !!}">About Hily</a>
                    </li>
                    <li>
                        <a href="{!! route('dashboard.about-vision-section.index',[app()->getLocale()]) !!}">About Version Section</a>
                    </li>
                    <li>
                        <a href="{!! route('dashboard.about-acomplishments.index',[app()->getLocale()]) !!}">About Acomplishments</a>
                    </li>
                    <li>
                        <a href="{!! route('dashboard.about-take-closer.index',[app()->getLocale()]) !!}">About Take Closer</a>
                    </li>
                </ul>
            </li>
            <li class="menu">
                <a href="#InvestorsRelations" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <!--svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg!-->
                        <span>Investors Relations</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="InvestorsRelations" data-parent="#accordionExample">
                      <li>
                        <a href="{!! route('dashboard.financial-calender.list',[app()->getLocale()]) !!}">Financial Calendar</a>
                      </li>
                      <li>
                        <a href="{!! route('dashboard.quarterly-report.index',[app()->getLocale()]) !!}">Quarterly Report</a>
                      </li>
                      <li>
                        <a href="{!! route('dashboard.annual-report.index',[app()->getLocale()]) !!}">Annual Report</a>
                      </li>
                      <li>
                        <a href="{!! route('dashboard.reports-presentations.index',[app()->getLocale()]) !!}">Reports Presentations</a>
                      </li> 
                      <li>
                        <a href="{!! route('dashboard.earnings-announcements.index',[app()->getLocale()]) !!}">Earning Announcements</a>
                      </li>
                      <li>
                        <a href="{!! route('dashboard.corporate-governance.index',[app()->getLocale()]) !!}">Corporate Governance</a>
                      </li>
                      <li>
                        <a href="{!! route('dashboard.investor-contact.index',[app()->getLocale()]) !!}">Investor Contact</a>
                      </li>
                      <li>
                        <a href="{!! route('dashboard.share-series.index',[app()->getLocale()]) !!}">Share Series</a>
                      </li>
                      <li>
                        <a href="{!! route('dashboard.share-graph.index',[app()->getLocale()]) !!}">Share Graph</a>
                      </li>
                      <li>
                        <a href="{!! route('dashboard.fact-sheet.index',[app()->getLocale()]) !!}">Fact Sheet</a>
                      </li>
                </ul>
            </li>
            <li class="menu">
                <a href="#Footer1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">

                        <!--svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-codesandbox"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="7.5 4.21 12 6.81 16.5 4.21"></polyline><polyline points="7.5 19.79 7.5 14.6 3 12"></polyline><polyline points="21 12 16.5 14.6 16.5 19.79"></polyline><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg-->
                        <span>Contact Us Page</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="Footer1" data-parent="#accordionExample">
                    <li>
                        <a href="{!! route('dashboard.contact-us.index',[app()->getLocale()]) !!}">Contact Us</a>
                    </li>
                    <li>
                        <a href="{!! route('dashboard.contact-addresses.index',[app()->getLocale()]) !!}">Contact Addresses</a>
                    </li>
                </ul>
            </li>
            <li class="menu">
                <a href="#servicedd" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <!--svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg-->
                        <span>Careers Page</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="servicedd" data-parent="#accordionExample">
                      <li>
                        <a href="{!! route('dashboard.careers-page.index',[app()->getLocale()]) !!}">Careers</a>
                      </li>
                </ul>
            </li>
            <li class="menu">
                <a href="{!! route('dashboard.careers-applications') !!}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <!--svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-target"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg-->
                        <span>Career Applications</span>
                    </div>
                </a>
            </li>
        </ul>
        
         <div class="shadow-bottom"></div>

    </nav>

</div>
<!--  END SIDEBAR  -->
