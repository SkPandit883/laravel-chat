<div class="site-top-banner">
    <div class="header-info">
        <img src="/assets/img/xagents-image.png.pagespeed.ic.6Ybu3mDyll.png" alt="Travel Deals">
        <span>Want to become a partner?<a href="https://travelquoter.com/register-travel-agents">Join Us
                Now</a></span>
    </div>
</div>


<nav class="top-navigation">
    <div class="nav-wrapper">
        <a href="https://travelquoter.com/" class="brand-logo">
            <img src="/assets/img/xlogo.png.pagespeed.ic.3XmXFEiZxX.png" alt="TravelQuoter" class="responsive-img">
        </a>
        <ul id="nav-mobile" class="right">

            <li>
                <a href="https://travelquoter.com/login" class="login-register">
                    <i class="fa fa-users"></i>
                    <span>{{ Auth::user()->name }}</span>
                </a>
            <li>
                <form action="{{ route('logout') }}" method="post" class="mr-3 mt-3">
                    @csrf
                    <button type="submit"><img
                            src="https://img.icons8.com/ios-filled/25/000000/logout-rounded-up.png" />

                    </button>
                </form>

            </li>

            </li>

        </ul>
        <div id="slide-out" class="side-nav">
            <ul class="sidenav-inner">
                <a href="https://travelquoter.com/">
                    <li><i class="fa fa-home"></i>Home</li>
                </a>
                <a href="https://travelquoter.com/list-travel-special">
                    <li><i class="fa fa-money-check-alt"></i>Hot Deals</li>
                </a>
                <a href="https://travelquoter.com/page/about-us">
                    <li><i class="fa fa-users"></i>About Us</li>
                </a>
                <a href="https://travelquoter.com/contact">
                    <li><i class="fa fa-envelope"></i>Contact Us</li>
                </a>
                <a href="https://travelquoter.com/career">
                    <li><i class="fa fa-briefcase"></i>Career</li>
                </a>
                <a href="https://travelquoter.com/tq-news">
                    <li><i class="far fa-newspaper"></i>TQ News</li>
                </a>
                <a href="https://travelquoter.com/blogs">
                    <li><i class="fa fa-globe-asia"></i>Travel Stories</li>
                </a>
                <a href="https://travelquoter.com/faqs">
                    <li><i class="far fa-question-circle"></i>FAQ</li>
                </a>
            </ul>
            <div class="center-align">
                <a href="https://travelquoter.com/login"><button class="login-register">Login/Register</button></a>

            </div>
        </div>
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"
                style="margin-top: 5px;"></i></a>
    </div>
</nav>

<div class="navigation1">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <ul>
                    <a href="https://travelquoter.com/">
                        <li class="">Home</li>
                    </a>
                    <a href="https://travelquoter.com/page/about-us">
                        <li class="">About Us</li>
                    </a>
                    <a href="https://travelquoter.com/smart_traveller">
                        <li class="">Travel Alerts</li>
                    </a>
                    <a class="modal-trigger" href="#travelItinery">
                        <li style="position: relative;"><span class="badge-new"><img
                                    src="/assets/updates/img/new.gif.pagespeed.ce.gzb0oGmsfS.gif"
                                    alt=""></span>Plan & Share</li>
                    </a>
                    <a href="https://travelquoter.com/list-travel-special">
                        <li class="">Offers</li>
                    </a>
                    <a href="https://travelquoter.com/contact">
                        <li class="">Contact Us</li>
                    </a>
                </ul>
            </div>
        </div>
    </div>
</div>
