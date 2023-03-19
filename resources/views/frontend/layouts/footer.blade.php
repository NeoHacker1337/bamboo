
 
@php
use App\Models\Profile;
@endphp
@php
$profile = Profile::first();
@endphp

 

<a href="https://api.whatsapp.com/send?phone=+91{{$profile->whatsapp_number}}&amp;text={{  str_replace(' ', '%20', $profile->whatspp_message) }}" class="float" target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>

<a href="tel:+91{{$profile->calling_number}}" class="float" target="_blank" style="bottom: 120px;">
    <i class="fas fa-phone"></i>
</a>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 order2">
                <div class="item address">
                    
                    <p> {{ $profile->address }}, {{ $profile->city }}, {{ ucwords(str_replace('_', ' ', $profile->state)) }}
                        {{ $profile->pin_code }}. </p>
                </div>
                
            </div>
            <div class="col-lg-4 order1 md-mb50">
                <!-- Logo -->
                <a class="" href="{{ url('/') }}">
                    <img src="{{ asset('frontend/logo_white.png') }}" alt="logo">
                </a>
                <div class="item social">
                    <a href="{{$profile->facebook}}" class="icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="{{$profile->twitter}}" class="icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    
                    <a href="{{$profile->linkedin}}" class="icon">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="{{$profile->youtube}}" class="icon">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="{{$profile->instagram}}" class="icon">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 order2">
                <div class="item info">
                    
                    <ul>
                        <li><span>Email : </span> {{ $profile->email }}</li>
                        <li><span>Phone : </span> {{ $profile->calling_number }}</li>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>

    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="copy">© <?php echo date("Y"); ?>, Made with passion by <a href="https://leetshield.com/">LeetShield Pvt. Ltd.</a>.</p>
                </div>
                <div class="col-md-6 text-right">
                    <a href="#0" class="links">Careers</a>
                    <a href="#0" class="links">Term & Condutions</a>
                    <a href="#0" class="links">Privacy Policy</a>
                </div>
            </div>
        </div>
    </div>
</footer>
