<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
    <div class="container">

         <div class="navbar-header">
              <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                   <span class="icon icon-bar"></span>
                   <span class="icon icon-bar"></span>
                   <span class="icon icon-bar"></span>
              </button>

              <!-- lOGO TEXT HERE -->
              <a href="#" class="navbar-brand">PhoneBook</a>
         </div>

         <!-- MENU LINKS -->
         <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav navbar-nav-first">
                   
                   
                       
              </ul>

              <ul class="nav navbar-nav navbar-right">
                   {{-- <li><a href="#"><i class="fa fa-phone"></i> +65 2244 1100</a></li> --}}
                   <li><a href="#top" class="smoothScroll">Home</a></li>                
                   <li><a href="#courses" class="smoothScroll">PhonneBook</a></li>
                   <li><a href="#testimonial" class="smoothScroll">Reviews</a></li>
                   @if (Route::has('login'))
                   @auth
                   {{-- <x-app-layout>                  
                   <x-app-layout>                --}}
                    <li><a href="{{ route('logout') }}"  class="smoothScroll">logout</a></li>
                   @else
                   <li><a href="{{ route('login') }}"  class="smoothScroll">SignIn</a></li>
                   <li><a href="{{ route('register') }}"  class="smoothScroll">SignUp</a></li>
                       @endauth
                       @endif
              </ul>
         </div>

    </div>
</section>