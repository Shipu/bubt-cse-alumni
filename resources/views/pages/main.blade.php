@extends('layout.app')

@section('content')
    <div class="hero-wrapper" id="top">
        <div class="hero">
            <div class="container">
                <div class="text text-center text-lg-left">
                    <a href="https://getstisla.com/blog/open-source" class="headline">
                        <div class="badge badge-danger">Join</div>
                        BUBT CSE Alumni Community &nbsp; <i class="fas fa-chevron-right"></i>
                    </a>
                    <h1>Welcome to BUBT CSE Alumni Community</h1>
                    <p class="lead">
                        If you clim you are a ex-bubtian of cse department then please join us for build strong community in bubt cse alumni.
                    </p>
                    <div class="cta">
                        <a class="btn btn-lg btn-warning btn-icon icon-right" href="{{ backpack_url('register') }}">Registration <i class="fas fa-chevron-right"></i></a> &nbsp;
                        {{--                    <div class="mt-3 text-job">--}}
                        {{--                        MIT License &nbsp;&nbsp;•&nbsp;&nbsp; Version: 2.2.0--}}
                        {{--                    </div>--}}
                    </div>
                </div>
                <div class="image d-none d-lg-block">
                    <img src="https://getstisla.com/landing/ill.svg" alt="img">
                </div>
            </div>
        </div>
    </div>

    <div class="callout container">
        <div class="row">
            <div class="col-md-6 col-12 mb-4 mb-lg-0">
                <div class="text-job text-muted text-14">bubt cse alumni</div>
                <div class="h1 mb-0 font-weight-bold"><span class="font-weight-500">active </span>members</div>
            </div>
            <div class="col-4 col-md-2 text-center">
                <div class="h2 font-weight-bold">5+</div>
                <div class="text-uppercase font-weight-bold ls-2 text-primary">faculties</div>
            </div>
            <div class="col-4 col-md-2 text-center">
                <div class="h2 font-weight-bold">25+</div>
                <div class="text-uppercase font-weight-bold ls-2 text-primary">executives</div>
            </div>
            <div class="col-4 col-md-2 text-center">
                <div class="h2 font-weight-bold">60+</div>
                <div class="text-uppercase font-weight-bold ls-2 text-primary">members</div>
            </div>
        </div>
    </div>

    <section id="features">
        <div class="container">
            <div class="row mb-5 text-center">
                <div class="col-lg-10 offset-lg-1">
                    <h2>Why you <span class="text-primary">join</span> us ?</h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="features">
                        <div class="feature">
                            <div class="feature-icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <h5>Career Opportunity</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci aliquam!</p>
                        </div>
                        <div class="feature">
                            <div class="feature-icon">
                                <i class="fab fa-html5"></i>
                            </div>
                            <h5>Scholarship</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci aliquam!</p>
                        </div>
                        <div class="feature">
                            <div class="feature-icon">
                                <i class="fas fa-fire"></i>
                            </div>
                            <h5>Skill Development</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci aliquam!</p>
                        </div>
                        <div class="feature">
                            <div class="feature-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <h5>Community</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci aliquam!</p>
                        </div>
                        <div class="feature">
                            <div class="feature-icon">
                                <i class="fas fa-columns"></i>
                            </div>
                            <h5>Charity</h5>
                            <p>Based on Bootstrap 4, one of the popular flexbox frameworks.</p>
                        </div>
                        <div class="feature">
                            <div class="feature-icon">
                                <i class="fas fa-chevron-right"></i>
                            </div>
                            <h5>And Others</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci aliquam!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="design" class="section-design">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block">
                    <img src="https://getstisla.com/landing/undraw_processing_qj6a.svg" alt="user flow" class="img-fluid">
                </div>
                <div class="col-lg-7 pl-lg-5 col-md-12">
                    <div class="badge badge-primary mb-3">Vision</div>
                    <h2> Lorem ipsum dolor sit amet <span class="text-primary">consectetur adipisicing</span>, Dolorem <span class="text-primary">doloribus</span> doloribus</h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, doloribus eos in laboriosam doloribus qui saepe. Cupiditate distinctio doloremque earum facere ipsum molestia.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="dashboard" class="section-skew">
        <div class="container">
            <div class="row mb-5 text-center">
                <div class="col-lg-10 offset-lg-1">
                    <h2>Upcoming <span class="text-primary">Events</span></h2>
                    <p class="lead"></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="pre-block">
                    <pre class="language-js code-toolbar" data-name="index.php">
                        <code class=" language-php">
<span><</span>?php

    echo "Welcome to BUBT CSE ALUMNI";

?>
                        </code>
                    </pre>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="browser-container">
                        <div class="browser-row">
                            <div class="browser-column browser-left">
                                <span class="browser-dot" style="background:#fc544b;"></span>
                                <span class="browser-dot" style="background:#ffa426;"></span>
                                <span class="browser-dot" style="background:#63ed7a;"></span>
                            </div>
                            <div class="browser-column browser-middle">
                                <input type="text" readonly="" value="about:blank">
                            </div>
                            <div class="browser-column browser-right">
                                <div class="float-right">
                                    <span class="browser-bar"></span>
                                    <span class="browser-bar"></span>
                                    <span class="browser-bar"></span>
                                </div>
                            </div>
                        </div>

                        <div class="browser-content d-flex align-items-center justify-content-center flex-column" style="height: 190px !important;">
                            <p class="mb-2">13 December Meeting, Room-517</p>
                            <a href="#" class="btn btn-primary trigger--fire-modal-1" id="my-button">Join</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section id="components" class="section-design section-design-right">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 pr-lg-5 pr-0">
                    <div class="badge badge-primary mb-3">About</div>

                    <h2><span class="text-primary">BUBT CSE Alumni</span></h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A amet asperiores, atque cupiditate et explicabo itaque maiores modi, neque nihil perspiciatis, similique?</p>
                </div>
                <div class="col-lg-5 d-none d-lg-block">
                    <div class="abs-images">
                        <img src="https://getstisla.com/landing/components/countries.png" alt="user flow" class="img-fluid rounded dark-shadow">
                        <img src="https://getstisla.com/landing/components/ticket.png" alt="user flow" class="img-fluid rounded dark-shadow">
                        <img src="https://getstisla.com/landing/components/user.png" alt="user flow" class="img-fluid rounded dark-shadow">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="try" class="section-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <h2>Latest News</h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad commodi dolorum hic nobis voluptatum? Explicabo non quam repellat sequi veniam! Autem magni nesciunt optio</p>
                    {{--                <div class="mt-4">--}}
                    {{--                    <a href="https://demo.getstisla.com" class="btn">Go to the Demo Page</a>--}}
                    {{--                </div>--}}
                </div>
            </div>
        </div>
    </section>
@endsection
