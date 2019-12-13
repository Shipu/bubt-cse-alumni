<section class="download-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7">
                <h2>For Registration</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <div class="col-md-5 text-right">
                <a href="{{ backpack_url('register') }}" class="btn btn-primary btn-lg">Join Now</a>
            </div>
        </div>
    </div>
</section>

<section class="before-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card long-shadow">
                    <div class="card-body d-flex p-45">
                        <div class="card-icon bg-primary text-white">
                            <i class="far fa-file"></i>
                        </div>
                        <div>
                            <h5>Saifur Rahman Dipu</h5>
                            <p class="lh-sm">Find out how to use Stisla, find out how to make Cards, Navbar, Tables, Maps and so on. Find out everything in the documentation.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card long-shadow">
                    <div class="card-body p-45 d-flex">
                        <div class="card-icon bg-primary text-white">
                            <i class="far fa-life-ring"></i>
                        </div>
                        <div>
                            <h5>Ashraful Islam</h5>
                            <p class="lh-sm">Lifetime support as long as you use Stisla. Get support for Stisla bugs or request features through the Stisla community on the GitHub issue.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h3 class="text-capitalize">BUBT CSE ALUMNI</h3>
                <div class="pr-lg-5">
                    <p>
                        Bangladesh University of Business and Technology <a href="https://bubt.edu.bd" target="_blank">( BUBT )</a>
                        Rupnagar, Dhaka - 1216
                    </p>
                    <p>© With <i class="fas fa-heart text-danger"></i> handcrafted by <a href="http://fb.me/to.shipu" target="_blank">Shipu Ahamed </a></p>
                    <div class="mt-4 social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-4">
                        <h4>Committees</h4>
                        <ul>
                            <li><a href="{{ route('members') }}">Executive Members</a></li>
                            <li><a href="{{ route('members') }}">Advisory Committee</a></li>
                            <li><a href="{{ route('members') }}">Adhoc Committee</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h4>Our Partner</h4>
                        <ul>
                            <li><a href="#">Deligram</a></li>
                            <li><a href="#">Company 1</a></li>
                            <li><a href="#">Company 2</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h4>Alumni</h4>
                        <ul>
                            <li><a href="#">Job Opportunity</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
@include('partials.footer_js')
