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
    <h1 class = "headin">KONTAKTAI</h1>
    <div class="row">
  <div class="column" style="background-color:#aaa;">
    <h2>Eglė Šatūnaitė</h2>
    <p>eglsat@ktu.lt</p>
  </div>
  <div class="column" style="background-color:#bbb;">
    <h2>Mantas Klevinskas</h2>
    <p>mankle1@ktu.lt</p>
  </div>
  <div class="column" style="background-color:#ccc;">
    <h2>Aidas Bieliauskas</h2>
    <p>aidbie@ktu.lt</p>
  </div>
  <div class="column" style="background-color:#ddd;">
    <h2>Augustas Talačka</h2>
    <p>augtal@ktu.lt</p>
  </div>
</div>
</div>
@endsection
