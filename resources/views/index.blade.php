@extends('layouts.home')

@section('content') 
{{$data = ""}}
<div class="header header-auto-show header-fixed header-logo-center">
    <a href="#" class="header-title">Garage Burger</a>
    <a href="#" data-menu="menu-main" class="header-icon header-icon-1"><i class="fas fa-bars"></i></a>
    <a href="#" data-toggle-theme class="header-icon header-icon-4 show-on-theme-dark"><i class="fas fa-sun"></i></a>
    <a href="#" data-toggle-theme class="header-icon header-icon-4 show-on-theme-light"><i class="fas fa-moon"></i></a>
    <a href="#" data-menu="menu-share" class="header-icon header-icon-3"><i class="fas fa-share-alt"></i></a>
</div>

<div id="footer-bar" class="footer-bar-6">
    <a href="#"><i class="fa fa-user"></i><span>Профиль</span></a>
    <a href="#"><i class="fa fa-heart"></i><span>Избранные</span></a>
    <a href="#" class="circle-nav active-nav"><i class="fa fa-home"></i><span>Главная</span></a>
    <a href="#"><i class="fa fa-shopping-cart"></i><span>Корзина</span></a>
    <a href="#" data-menu="menu-main"><i class="fa fa-bars"></i><span>Меню</span></a>
</div>

<div class="page-title page-title-fixed">
    <h3 class="ml-3 mr-auto mt-2">Garage Burger</h3>
    <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-share"><i class="fa fa-share-alt"></i></a>
    <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-light" data-toggle-theme><i class="fa fa-moon"></i></a>
    <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-dark" data-toggle-theme><i class="fa fa-lightbulb color-yellow-dark"></i></a>
    <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-main"><i class="fa fa-bars"></i></a>
</div>
<div class="page-title-clear"></div>

<div class="page-content">
    <div class="double-slider owl-carousel owl-no-dots mb-4">
        @foreach ($category as $item)
        <a href="#" class="getproduct" data-id="{{ $item->id }}"> {{-- pitsa.html --}}
            <div class="card m-0 card-style pitsa" data-card-height="120">
                <div class="card-center">
                    <h3 class="color-white font-800 pl-3">{{ $item->name }}</h3>
                </div>
                <div class="card-overlay bg-gradient"></div>
            </div>
        </a>
        @endforeach
    </div>
    
    <!--MENU-->
    <div id="menu-content">
        @foreach($all_products as $product)
        <div class="card card-style burger" data-card-height="180">
            <div class="card-top">
                <a href="#" class="bg-white  rounded-sm btn btn-xs float-right font-700 font-12 mt-3 mr-3 color-red-dark">Скидка</a>
                <a href="#" data-menu="menu-heart" class="icon icon-s bg-white color-red-dark rounded-xl mt-3 ml-3 float-left"><i class="fa fa-heart"></i></a>
            </div>
            <div class="card-bottom mb-3 ml-3 mr-3">
                <h2 class="color-white font-800 mb-1">{{ $product->name }}</h2>
                <p class="color-white font-14 mb-1 opacity-60">{{$product->summa}}</p>
            </div>
            <div class="card-overlay bg-black opacity-60"></div>
        </div>
        @endforeach
    </div>

</div>

<div id="menu-main" class="menu menu-box-left rounded-0" data-menu-width="280" data-menu-active="nav-welcome">
    <div class="card rounded-0 bg-6" style="height:150px">
        <div class="card-top">
            <a href="#" class="close-menu float-right mr-2 text-center mt-3 icon-40 notch-clear"><i class="fa fa-times color-white"></i></a>
        </div>
        <div class="card-bottom">
            <h2 class="color-white pl-3 mb-1 font-28">Гараж Бургер</h2>
            <p class="mb-2 pl-3 font-12 color-white opacity-50">Доставка бургеров 24 часа</p>
        </div>
        <div class="card-overlay bg-gradient"></div>
    </div>
    <div class="mt-4"></div>
    <h6 class="menu-divider">Меню</h6>
    <div class="list-group list-custom-small list-menu">
       <a id="nav-components" href="#">
            <i class="fa fa-home bg-mail color-white"></i>
            <span>Главная</span>
            <i class="fa fa-angle-right"></i>
        </a>
       <a id="nav-components" href="#">
            <i class="fa fa-shopping-cart bg-yellow-light color-white"></i>
            <span>Корзина</span>
            <i class="fa fa-angle-right"></i>
        </a>
        <a id="nav-welcome" href="#">
            <i class="fa fa-heart gradient-red color-white"></i>
            <span>Избранные</span>
            <i class="fa fa-angle-right"></i>
        </a>
        <a id="nav-homepages" href="#">
            <i class="fa fa-align-justify gradient-green color-white"></i>
            <span>История</span>
            <i class="fa fa-angle-right"></i>
        </a>
        <a id="nav-media" href="#">
            <i class="fa fa-map-marker-alt gradient-magenta color-white"></i>
            <span>Адреса</span>
            <i class="fa fa-angle-right"></i>
        </a>
        <a id="nav-media" href="#">
            <i class="fa fa-user bg-linkedin color-white"></i>
            <span>Профиль</span>
            <i class="fa fa-angle-right"></i>
        </a>
        <a id="nav-contact" href="#">
            <i class="fa fa-envelope gradient-teal color-white"></i>
            <span>Контакты</span>
            <i class="fa fa-angle-right"></i>
        </a>
    </div>
    <h6 class="menu-divider mt-4">Настройка</h6>
    <div class="list-group list-custom-small list-menu">
        <a href="#" data-toggle-theme data-trigger-switch="switch-dark-mode">
            <i class="fa fa-moon gradient-dark color-white"></i>
            <span>Ночной режим</span>
            <div class="custom-control scale-switch ios-switch highlight-switch switch-s">
                <input type="checkbox" class="ios-input" id="switch-22">
                <label class="custom-control-label" for="switch-1"></label>
            </div>
        </a>
        <a href="#" data-menu="menu-colors">
            <i class="fa fa-brush gradient-highlight color-white"></i>
            <span>Настройка цвета</span>
            <i class="fa fa-angle-right"></i>
        </a>
    </div>
    <h6 class="menu-divider font-10 mt-4">Проект создан в <i class="fa fa-coffee color-red-dark pl-1 pr-1"></i> ecafe.uz </h6>
</div>

<div id="menu-share" class="menu menu-box-bottom rounded-m" data-menu-height="370">
    <div class="menu-title">
        <p class="color-highlight"></p>
        <h1>Контакты</h1>
        <a href="#" class="close-menu"><i class="fa fa-times-circle"></i></a>
    </div>
    <div class="divider divider-margins mt-3 mb-0"></div>
    <div class="content mt-0">
        <div class="list-group list-custom-small list-icon-0">
           <a href="https://www.instagram.com/garageburgerr/" class="shareToInstagram">
                <i class="fab fa-instagram font-12 bg-instagram color-white shadow-l rounded-s"></i>
                <span>Instagram</span>
                <i class="fa fa-angle-right pr-1"></i>
            </a>
            
            <a href="https://t.me/garageburger_bot" class="shareToTelegram">
                <i class="fab fa-telegram font-12 bg-twitter color-white shadow-l rounded-s"></i>
                <span>Telegram Bot</span>
                <i class="fa fa-angle-right pr-1"></i>
            </a>
       <a href="https://www.facebook.com/Garage-Burger-107852080895441/" class="">
                <i class="fab fa-facebook-f font-12 bg-facebook color-white shadow-l rounded-s"></i>
                <span>Facebook</span>
                <i class="fa fa-angle-right pr-1"></i>
            </a>
            <a href="tel:+998975159999" class="">
                <i class="fa fa-phone font-12 bg-whatsapp color-white shadow-l rounded-s"></i>
                <span>Звонить на Call center</span>
                <i class="fa fa-angle-right pr-1"></i>
            </a>
            <a href="#" class="shareToEmail border-0">
                <i class="fa fa-map-marker font-12 bg-mail color-white shadow-l rounded-s"></i>
                <span>Наш адрес</span>
                <i class="fa fa-angle-right pr-1"></i>
            </a>
        </div>
    </div>
</div>

<div id="menu-colors" class="menu menu-box-bottom rounded-m" data-menu-height="480">
    <div class="menu-title">
        <p class="color-highlight font-600">Choose your Favorite</p>
        <h1>Highlight</h1>
        <a href="#" class="close-menu"><i class="fa fa-times-circle"></i></a>
    </div>
    <div class="divider divider-margins mt-3 mb-2"></div>
    <div class="content mt-0 ml-0 mr-0">
        <div class="row mb-0">
            <div class="col-6">
                <div class="highlight-changer list-group list-custom-small list-menu">
                    <a href="#" class="menu-active" data-highlight-style="/frontend/styles/highlights/highlight-blue.css">
                        <i class="gradient-blue color-white"></i>
                        <span>Blue</span>
                    </a>
                    <a href="#" data-highlight-style="/frontend/styles/highlights/highlight-red.css">
                        <i class="gradient-red color-white"></i>
                        <span>Red</span>
                    </a>
                    <a href="#" data-highlight-style="/frontend/styles/highlights/highlight-orange.css">
                        <i class="gradient-orange color-white"></i>
                        <span>Orange</span>
                    </a>
                    <a href="#" data-highlight-style="/frontend/styles/highlights/highlight-green.css">
                        <i class="gradient-green color-white"></i>
                        <span>Green</span>
                    </a>
                    <a href="#" data-highlight-style="/frontend/styles/highlights/highlight-yellow.css">
                        <i class="gradient-yellow color-white"></i>
                        <span>Yellow</span>
                    </a>
                </div>
            </div>
            <div class="col-6">
                <div class="highlight-changer list-group list-custom-small list-menu">
                    <a href="#" data-highlight-style="/frontend/styles/highlights/highlight-dark.css">
                        <i class="gradient-dark color-white"></i>
                        <span>Dark</span>
                    </a>
                    <a href="#" data-highlight-style="/frontend/styles/highlights/highlight-gray.css">
                        <i class="gradient-gray color-white"></i>
                        <span>Gray</span>
                    </a>
                    <a href="#" data-highlight-style="/frontend/styles/highlights/highlight-teal.css">
                        <i class="gradient-teal color-white"></i>
                        <span>Teal</span>
                    </a>
                    <a href="#" data-highlight-style="/frontend/styles/highlights/highlight-magenta.css">
                        <i class="gradient-magenta color-white"></i>
                        <span>Plum</span>
                    </a>
                    <a href="#" data-highlight-style="/frontend/styles/highlights/highlight-brown.css">
                        <i class="gradient-brown color-white"></i>
                        <span>Brown</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="divider divider-margins mt-2"></div>
    <a href="#" class="close-menu btn btn-margins btn-m font-13 rounded-s shadow-xl btn-full gradient-highlight border-0 font-700 text-uppercase">Awesome</a>
</div>

<div id="menu-install-pwa-android" class="menu menu-box-bottom rounded-m" data-menu-height="400" data-menu-effect="menu-parallax">
    <img class="mx-auto mt-4 rounded-m" src="/frontend/app/icons/icon-128x128.png" alt="img" width="90">
    <h4 class="text-center mt-4 mb-2">Appkit on your Home Screen</h4>
    <p class="text-center boxed-text-xl">
        Install Appkit on your home screen, and access it just like a regular app. It really is that simple!
    </p>
    <div class="boxed-text-l">
        <a href="#" class="pwa-install btn-center-l btn btn-m font-600 gradient-highlight rounded-sm">Add to Home Screen</a>
        <a href="#" class="pwa-dismiss close-menu btn-full mt-3 pt-2 text-center text-uppercase font-600 color-red-light font-12">Maybe later</a>
    </div>
</div>

<div id="menu-install-pwa-ios" class="menu menu-box-bottom rounded-m" data-menu-height="360" data-menu-effect="menu-parallax">
    <div class="boxed-text-xl top-25">
        <img class="mx-auto mt-4 rounded-m" src="/frontend/app/icons/icon-128x128.png" alt="img" width="90">
        <h4 class="text-center mt-4 mb-2">Appkit on your Home Screen</h4>
        <p class="text-center ml-3 mr-3">
            Install Appkit on your home screen, and access it just like a regular app. Open your Safari menu and tap "Add to Home Screen".
        </p>
        <a href="#" class="pwa-dismiss close-menu btn-full mt-3 text-center text-uppercase font-900 color-red-light opacity-90 font-110">Maybe later</a>
    </div>
</div>
@endsection
{{-- classjquery INSIDE OF SIDE--}}

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
   <script type="text/javascript"> 
       $(function(){ 
         $(".getproduct").on('click', function(){ 
             console.log($(this).data('id'))
         $.ajax({ 
           method: "GET",       
           url: "/datacategory/"+$(this).data('id'),  
           dataType: 'json',
             
           success: function(data){
               console.log(data);
               
              $("#menu-content").html('');
               for (var item of data){
               var html = '<div class="card card-style-m burger" data-card-height="180">'; 
                html +='<div class="card-top">';
                html +='<a href="#" class="bg-white  rounded-sm btn btn-xs float-right font-700 font-12 mt-3 mr-3 color-red-dark">Скидка</a>';
                html +='<a href="#" data-menu="menu-heart" class="icon icon-s bg-white color-red-dark rounded-xl mt-3 ml-3 float-left"><i class="fa fa-heart"></i></a>';
                html +='</div>';
                html +='<div class="card-bottom mb-3 ml-3 mr-3">';
                html +='<h2 class="color-white font-800 mb-1">' + item.name + '</h2>';
                html +='<p class="color-white font-14 mb-1 opacity-60">' + item.summa + '</p>';
                html +='</div>';   
                html +='<div class="card-overlay bg-black opacity-60"></div>';  
                html +='</div>';
            
                $("#menu-content").append(html);
            }
                

        //         @if($data)
        // @foreach ($data as $item)
        //     <div class="card card-style burger" data-card-height="180">
        //         <div class="card-top">
        //             <a href="#" class="bg-white  rounded-sm btn btn-xs float-right font-700 font-12 mt-3 mr-3 color-red-dark">Скидка</a>
        //             <a href="#" data-menu="menu-heart" class="icon icon-s bg-white color-red-dark rounded-xl mt-3 ml-3 float-left"><i class="fa fa-heart"></i></a>
        //         </div>
        //         <div class="card-bottom mb-3 ml-3 mr-3">
        //             <h2 class="color-white font-800 mb-1">{{ $item->name }}</h2>
        //             <p class="color-white font-14 mb-1 opacity-60">
        //                 {{$item->summa}}
        //             </p>
        //         </div>
        //         <div class="card-overlay bg-black opacity-60"></div>
        //     </div>
        // @endforeach
        // @endif
                    


            } 
         });
       }); 
   }); 
   </script> 
   