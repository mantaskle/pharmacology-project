@extends('layouts.app')
<style>
    * {
  box-sizing: border-box;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  padding: 10px;
  background-color: rgb(255,255,255);background-color: rgba(255,255,255,0.4);
}
.maincolumn {
  float: left;
  width: 100%;
  padding: 10px;
  background-color: rgb(255,255,255);background-color: rgba(255,255,255,0.6);
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the four columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
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
         .bg-text-vadovas {
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
             margin-bottom: 60px;
             color: #ffffff;
             font-weight: 60px;
         }
         .para
         {
             color: #ffffff;
             font-weight: 15;
         }
         .vadovas
         {
            margin-bottom: 90px;
             color: #f2f2f2;
             font-weight: 15;
         }
</style>
@section('content')
<div class="bg-text">
    <h1 class = "headin">KONTAKTAI</h1>
    <div class="vadovas">
        <h2>Projekto vadovas - Darius Naujokaitis</h2>
        <p>darius.naujokaitis@ktu.lt</p>
  </div>
    <div class="row">
  <div class="maincolumn">
    <h2>Komandos nariai</h2>
  </div>
  <div class="column">
    <h2>Eglė Šatūnaitė</h2>
    <p>eglsat@ktu.lt</p>
  </div>
  <div class="column" style="background-color: rgb(255,255,255);background-color: rgba(255,255,255,0.5);">
    <h2>Mantas Klevinskas</h2>
    <p>mankle1@ktu.lt</p>
  </div>
  <div class="column" >
    <h2>Aidas Bieliauskas</h2>
    <p>aidbie@ktu.lt</p>
  </div>
  <div class="column" style="background-color: rgb(255,255,255);background-color: rgba(255,255,255,0.5);">
    <h2>Augustas Talačka</h2>
    <p>augtal@ktu.lt</p>
  </div>
</div>
</div>
@endsection
