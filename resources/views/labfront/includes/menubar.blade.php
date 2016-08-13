<div id="k-head" class="container"><!-- container + head wrapper -->

    <div class="row" ><!-- row -->

        <div class="col-lg-12" >


            <div id="k-site-logo" class="pull-left"><!-- site logo -->

                <h1 class="k-logo">
                    <a href="{!! route('labfront.index') !!}" title="Home Page">

                        <img src="{!! asset('labfront/img/front.png') !!}" alt="Site Logo" class="img-responsive" />
                    </a>
                </h1>

                <a id="mobile-nav-switch" href="#drop-down-left"><span class="alter-menu-icon"></span></a><!-- alternative menu button -->
            </div><!-- site logo end -->



            <nav id="k-menu" class="k-main-navig"><!-- main navig -->

                <ul id="drop-down-left" class="k-dropdown-menu">


                 <!-- Home -->
                    <li>
                        <a href="{!!  route('labfront.index') !!}" title="home">Home</a>
                    </li>





                 <!-- People -->

                    <li>
                        <a href="#" class="Pages Collection" title="People">People</a>
                        <ul class="sub-menu">
                            <li><a href="{!! route('labfront.supervisor') !!}">Faculty</a></li>
                            {{--<li><a href="{!! route('labfront.student') !!}">Members</a></li>--}}

                            <li>
                                <a href="{!! route('labfront.student') !!}" class="Pages Collection" title="People">Members</a>
                                <ul class="sub-menu">
                                    <li><a href="{!! route('labfront.supervisor') !!}">Under Graduate</a></li>
                                    <li><a href="{!! route('labfront.student') !!}">Phd</a></li>
                                    <li><a href="{!! route('labfront.alumni') !!}">MS</a></li>
                                    <li><a href="{!! route('labfront.alumni') !!}">Visiting Scholar</a></li>
                                    <li><a href="{!! route('labfront.alumni') !!}">Industry Affiliates</a></li>
                                </ul>
                            </li>

                            <li><a href="{!! route('labfront.alumni') !!}">Alumni</a></li>
                        </ul>
                    </li>






                 <!-- Research -->
                    <li>
                        <a href="#" class="Pages Collection" title="Research">Research</a>
                        <ul class="sub-menu">

                            <li>
                                <a href="#" class="Pages Collection" title="Research Area">Research Area</a>
                                <ul class="sub-menu">
                                    <li><a href="{!! route('labfront.runningProject') !!}">Current Projects</a></li>
                                    <li><a href="{!! route('labfront.completeProject') !!}">Previous Projects</a></li>
                                </ul>
                            </li>


                            <li>
                                <a href="{!! route('labfront.publication') !!}" class="Pages Collection" title="Publication">Publication</a>
                                <ul class="sub-menu">
                                    <li><a href="{!! route('labfront.journal') !!}">Journal</a></li>
                                    <li><a href="{!! route('labfront.conference') !!}">Conference</a></li>
                                    <li><a href="{!! route('labfront.books') !!}">Books</a></li>
                                </ul>
                            </li>


                            {{--<li><a href="{!! route('labfront.paper') !!}">Papers</a></li>--}}
                            <li><a href="{!! route('labfront.award') !!}">Awards</a></li>
                        </ul>
                    </li>




                    <!-- Resource -->
                    <li>
                        <a href="#" class="Pages Collection" title="Resource">Resource</a>
                        <ul class="sub-menu">
                            <li><a href="{!! route('labfront.news') !!}" title="News">Publication</a></li>
                            <li><a href="{!! route('labfront.events') !!}" title="Events">Software</a></li>
                            <li><a href="{!! route('labfront.events') !!}" title="Events">Tutorial</a></li>
                            <li><a href="{!! route('labfront.events') !!}" title="Events">Presentation</a></li>
                            <li><a href="{!! route('labfront.events') !!}" title="Events">Books</a></li>
                        </ul>
                    </li>





                    <!-- News & Events -->
                    <li>
                        <a href="#" class="Pages Collection" title="News & event">News & Event</a>
                        <ul class="sub-menu">
                            <li><a href="{!! route('labfront.news') !!}" title="News">News</a></li>
                            <li><a href="{!! route('labfront.events') !!}" title="Events">Events</a></li>
                        </ul>
                    </li>





                <!-- Blog Section -->
                    <li>
                        <a href="{!! route('labfront.blog') !!}" title="Blog">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="{!! route('labfront.blog') !!}">Blogs</a></li>
                            <li><a href="{!! route('labfront.archive_blog') !!}">Archive</a></li>

                        </ul>
                    </li>





                <!-- Join Us -->
                    @if(Auth::user())
                        <li>
                            <a href="{!!  route('dashboard') !!}"  title="Dashboard" style=" color: salmon;">Dashboard</a>
                        </li>
                    @else
                        <li>
                            <a href="#" title="Account">Join Us</a>
                            <ul class="sub-menu">
                                <li><a href="{!! route('login') !!}">Login</a></li>
                                <li><a href="{!! route('user.create') !!}">Sign Up</a></li>
                                <li><a href="{!! route('labfront.contact') !!}">Contact</a></li>

                            </ul>
                        </li>

                    @endif










                </ul>

            </nav><!-- main navig end -->

        </div>

    </div><!-- row end -->

</div><!-- container + head wrapper end -->

