@extends('layouts.app')
<style>
html, body {
                background-image: url("/css/img/background.jpg");
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                color: #c4c4c4;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
.bg-text {
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
                border: 3px solid #f1f1f1;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                z-index: 2;
                width: 90%;
                height: 84%;
                padding: 40px;
                text-align: center;
         }
         .headin
         {
             color: #ffffff;
             font-weight: 60;
         }
         .para
         {
             color: #ffffff;
             font-weight: 15;
         }
</style>
@section('content')
<div class="bg-text">
    <h1 class = "headin">APIE MUS</h1>
    <p class = "para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis, quam ac fermentum convallis, justo mauris accumsan nibh, nec scelerisque justo massa quis lorem. Nullam dignissim non felis eget faucibus. Donec at nibh nec ligula tempus dapibus. Donec eros lacus, pharetra quis justo id, ultrices vulputate purus. Maecenas sodales, tortor sit amet tincidunt bibendum, mauris felis vehicula lacus, vitae tristique ex elit efficitur massa. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
    <p class = "para">Donec vehicula elit non egestas fringilla. Proin orci ante, pellentesque ut massa nec, molestie ultrices turpis. Sed accumsan dignissim sapien, sit amet vehicula nulla auctor sed. Proin quis metus id mauris ornare eleifend ut at enim. Aenean libero tellus, condimentum eget diam id, imperdiet ultrices augue. Vestibulum pellentesque porta dui. Integer congue placerat sem, nec consequat odio ultricies nec. Maecenas in volutpat elit. Curabitur aliquam vel lorem vel tempus.</p>
    <p class = "para">Quisque rhoncus diam nec metus euismod, id dapibus odio faucibus. Sed euismod risus vitae magna laoreet, vel ultricies felis laoreet. Mauris et ultricies metus. Sed malesuada neque purus, in bibendum lacus gravida ut. Nam massa eros, molestie in dictum quis, fringilla at risus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut id risus vel dolor faucibus laoreet id commodo tortor. Proin vitae odio ultrices, tristique purus luctus, sagittis erat. Pellentesque dignissim nibh at aliquam accumsan. Vestibulum metus nibh, varius vel bibendum vel, condimentum at nulla. Nam tortor metus, fringilla a orci et, sollicitudin efficitur nibh. Proin in euismod odio. Etiam mattis felis id imperdiet posuere.</p>
</div>
@endsection
