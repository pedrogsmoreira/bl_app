@php
$name = ucwords($product->abreviatura);
$category = ucwords($product->sub_category->descricao);
$id = $product->id;

$description = $product->obs;
$features = "Polished stainless steel. Wood structure. Feets: Polished casted brass.";
$techniques = "Wood hand-carving and joinery, gold leaf application.";
$materials = "Glass, Gold Plated Brass, Casted Brass, Marble, Wood";
$dimensions = "W ". $product->comprimento ."CM | ". round($product->comprimento * .3937, 1) ."IN D ". $product->profundidade ."CM | ". round($product->profundidade * .3937, 1) ."IN H ". $product->altura ."CM | ". round($product->altura * .3937, 1) ."IN";
$customization = "Custom sizes and colors are available with an upcharge.";
$cleancare = "Dry cloth.";

$meta_description = mb_strimwidth($product->obs, 0, 157, "...");

$meta_keywords= "coffee table, gold table, center table, table for living room, table base, design coffee table";

$url="https://www.bocadolobo.com/en/limited-edition/coffee-and-side-tables/diamond-center-table/";
$zip="https://www.bocadolobo.com/press/download/product-packs/le/diamond-center-table.zip";

$imgnumber = 4;

$finishnumber = 1;

$finish_name[1] = "Black Lacquer";
$finish_url[1] = "https://www.bocadolobo.com/en/limited-edition/coffee-and-side-tables/diamond-black-center-table/";
$finish_img[1] = "https://www.bocadolobo.com/images/finishes/black-lacquer-with-gloss-finish-boca-do-lobo.jpg";



$perfectmatch='<div class="col-xs-6 col-sm-4">
    <a href="/en/limited-edition/seating-others/imperfectio-sofa/">
        <img data-src="https://www.bocadolobo.com/images/all-products/imperfectio-sofa-boca-do-lobo.jpg"
            srcset="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt="" class="img-responsive"
            style="margin:0 auto;">
    </a>
    <div class="product-info text-center">
        <a href="/en/limited-edition/seating-others/imperfectio-sofa/">
            <h1>Imperfectio</h1>
            <h2>Sofa</h2>
        </a>
    </div>

    <div class="btn-price-allproducts text-center">
        <button type="button" data-toggle="modal" data-title="Boca do Lobo - GET PRICE PERFECT MATCH Product Page"
            data-id="287" data-name="Imperfectio Sofa" href="#get_price_allproducts"
            class="open-product btn get_price_allproducts">Get Price</button>
    </div>
</div>

<div class="col-xs-6 col-sm-4">
    <a href="/en/limited-edition/mirrors/ring-filigree/">
        <img data-src="https://www.bocadolobo.com/images/all-products/ring-filigree-mirror-boca-do-lobo.jpg"
            srcset="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt="" class="img-responsive"
            style="margin:0 auto;">
    </a>
    <div class="product-info text-center">
        <a href="/en/limited-edition/mirrors/ring-filigree/">
            <h1>Ring Filigree</h1>
            <h2>Mirror</h2>
        </a>
    </div>

    <div class="btn-price-allproducts text-center">
        <button type="button" data-toggle="modal" data-title="Boca do Lobo - GET PRICE PERFECT MATCH Product Page"
            data-id="329" data-name="Ring Filigree Mirror" href="#get_price_allproducts"
            class="open-product btn get_price_allproducts">Get Price</button>
    </div>
</div>

<div class="col-xs-6 col-sm-4">
    <a href="/en/limited-edition/lamps/supernova-sconces/">
        <img data-src="https://www.bocadolobo.com/images/all-products/supernova-sconce-wall-lamp-boca-do-lobo.jpg"
            srcset="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt="" class="img-responsive"
            style="margin:0 auto;">
    </a>
    <div class="product-info text-center">
        <a href="/en/limited-edition/lamps/supernova-sconces/">
            <h1>Supernova</h1>
            <h2>Wall Lamp</h2>
        </a>
    </div>

    <div class="btn-price-allproducts text-center">
        <button type="button" data-toggle="modal" data-title="Boca do Lobo - GET PRICE PERFECT MATCH Product Page"
            data-id="294" data-name="Supernova Wall Lamp" href="#get_price_allproducts"
            class="open-product btn get_price_allproducts">Get Price</button>
    </div>
</div>

<div class="col-xs-6 col-sm-4 hidden-sm hidden-md hidden-lg">
    <a href="/en/limited-edition/tables-and-desks/metamorphosis/">
        <img data-src="https://www.bocadolobo.com/images/all-products/metamorphosis-dining-table-boca-do-lobo.jpg"
            srcset="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt="" class="img-responsive"
            style="margin:0 auto;">
    </a>
    <div class="product-info text-center">
        <a href="/en/limited-edition/tables-and-desks/metamorphosis/">
            <h1>Metamorphosis</h1>
            <h2>Dining Table</h2>
        </a>
    </div>

    <div class="btn-price-allproducts text-center">
        <button type="button" data-toggle="modal" data-title="Boca do Lobo - GET PRICE PERFECT MATCH Product Page"
            data-id="283" data-name="Metamorphosis Dining Table" href="#get_price_allproducts"
            class="open-product btn get_price_allproducts">Get Price</button>
    </div>
</div>';




$youmayalsolike='
<div class="col-xs-6 col-sm-4">
    <a href="/en/limited-edition/sideboards/diamond-pyrite/">
        <img data-src="https://www.bocadolobo.com/images/all-products/diamond-pyrite-sideboard-boca-do-lobo.jpg"
            srcset="https://www.bocadolobo.com/images/all-products/diamond-pyrite-sideboard-boca-do-lobo.jpg" alt="" class="img-responsive"
            style="margin:0 auto;">
    </a>
    <div class="product-info text-center">
        <a href="/en/limited-edition/sideboards/diamond-pyrite/">
            <h1>Diamond Pyrite</h1>
            <h2>Sideboard</h2>
        </a>
    </div>

    <div class="btn-price-allproducts text-center">
        <button type="button" data-toggle="modal" data-id="302" data-name="Diamond Pyrite Sideboard"
            href="#get_price_allproducts" class="open-product btn get_price_allproducts"
            data-title="Boca do Lobo - GET PRICE YOU MAY ALSO LIKE Product Page">Get Price</button>
    </div>
</div>
<div class="col-xs-6 col-sm-4">
    <a href="/en/coolors-collection/coffee-and-side-tables/lapiaz/">
        <img data-src="https://www.bocadolobo.com/images/all-products/lapiaz-center-table-boca-do-lobo.jpg"
            srcset="https://www.bocadolobo.com/images/all-products/lapiaz-center-table-boca-do-lobo.jpg" alt="" class="img-responsive"
            style="margin:0 auto;">
    </a>
    <div class="product-info text-center">
        <a href="/en/coolors-collection/coffee-and-side-tables/lapiaz/">
            <h1>Lapiaz</h1>
            <h2>Center Table</h2>
        </a>
    </div>

    <div class="btn-price-allproducts text-center">
        <button type="button" data-toggle="modal" data-id="1" data-name="Lapiaz Center Table"
            href="#get_price_allproducts" class="open-product btn get_price_allproducts"
            data-title="Boca do Lobo - GET PRICE YOU MAY ALSO LIKE Product Page">Get Price</button>
    </div>
</div>
<div class="col-xs-6 col-sm-4">
    <a href="/en/limited-edition/coffee-and-side-tables/monet-silver-center-table/">
        <img data-src="https://www.bocadolobo.com/images/all-products/monet-silver-center-table-boca-do-lobo.jpg"
            srcset="https://www.bocadolobo.com/images/all-products/monet-silver-center-table-boca-do-lobo.jpg" alt="" class="img-responsive"
            style="margin:0 auto;">
    </a>
    <div class="product-info text-center">
        <a href="/en/limited-edition/coffee-and-side-tables/monet-silver-center-table/">
            <h1>Monet Silver</h1>
            <h2>Center Table</h2>
        </a>
    </div>

    <div class="btn-price-allproducts text-center">
        <button type="button" data-toggle="modal" data-id="26" data-name="Monet Silver Center Table"
            href="#get_price_allproducts" class="open-product btn get_price_allproducts"
            data-title="Boca do Lobo - GET PRICE YOU MAY ALSO LIKE Product Page">Get Price</button>
    </div>
</div>
<div class="col-xs-6 col-sm-4 visible-xs">
    <a href="/en/bathrooms/freestandings/lapiaz/">
        <img data-src="https://www.bocadolobo.com/images/all-products/lapiaz-freestand-boca-do-lobo.jpg"
            srcset="https://www.bocadolobo.com/images/all-products/lapiaz-freestand-boca-do-lobo.jpg" alt="" class="img-responsive"
            style="margin:0 auto;">
    </a>
    <div class="product-info text-center">
        <a href="/en/bathrooms/freestandings/lapiaz/">
            <h1>Lapiaz</h1>
            <h2>Freestand</h2>
        </a>
    </div>

    <div class="btn-price-allproducts text-center">
        <button type="button" data-toggle="modal" data-id="278" data-name="Lapiaz Freestand"
            href="#get_price_allproducts" class="open-product btn get_price_allproducts"
            data-title="Boca do Lobo - GET PRICE YOU MAY ALSO LIKE Product Page">Get Price</button>
    </div>
</div>
';

$produto = strtolower($name); 
$categoria = strtolower($category); 
$fullname = $name . " " . $category;
$fullname_h = str_replace(" ", "-", $fullname);
$fullname_h = str_replace(".", "", $fullname_h);
$fullname_h = str_replace("º-", "", $fullname_h);
$fullname_h = strtolower($fullname_h);
@endphp


@extends('layouts.app') 

@section('meta-tags')
<!-- Primary Meta Tags -->
<title>Meta Tags — Preview, Edit and Generate</title>
<meta name="title" content="Meta Tags — Preview, Edit and Generate">
<meta name="description" content="With Meta Tags you can edit and experiment with your content then preview how your webpage will look on Google, Facebook, Twitter and more!">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://metatags.io/">
<meta property="og:title" content="Meta Tags — Preview, Edit and Generate">
<meta property="og:description" content="With Meta Tags you can edit and experiment with your content then preview how your webpage will look on Google, Facebook, Twitter and more!">
<meta property="og:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://metatags.io/">
<meta property="twitter:title" content="Meta Tags — Preview, Edit and Generate">
<meta property="twitter:description" content="With Meta Tags you can edit and experiment with your content then preview how your webpage will look on Google, Facebook, Twitter and more!">
<meta property="twitter:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">


@endsection

@section('content')
<style>
    .catalogue_tlt {
      font-size: 15px;
      font-family: proxi-regular;
      text-transform: uppercase;
      letter-spacing: 1px
    }

    .with-placeholder {
      -webkit-transition: margin .2s ease-out;
      -o-transition: margin .2s ease-out;
      transition: margin .2s ease-out;
      font-family: proxi-regular;
      letter-spacing: 1px
    }

    .with-placeholder label {
      color: #999;
      pointer-events: none;
      transform: translate(13px, 13px);
      transform-origin: left;
      z-index: 3;
      position: absolute;
      margin: 0;
      -webkit-transition: transform .2s ease-out;
      -o-transition: transform 3.2s ease-out;
      transition: transform .2s ease-out
    }

    .with-placeholder input.form-control,
    .with-placeholder select.form-control {
      z-index: 2;
      position: relative;
      height: 40px;
      margin-bottom: 6px;
      padding-top: 14px;
      -webkit-transition: border-color .5s ease;
      -o-transition: border-color .5s ease;
      transition: border-color .5s ease
    }

    .with-placeholder textarea.form-control {
      z-index: 2;
      position: relative;
      margin-bottom: 6px;
      padding-top: 18px;
      -webkit-transition: border-color .5s ease;
      -o-transition: border-color .5s ease;
      transition: border-color .5s ease;
      height: auto
    }

    .with-placeholder input.parsley-error,
    .with-placeholder select.parsley-error,
    .with-placeholder textarea.parsley-error {
      border-color: red
    }

    .with-placeholder input:focus,
    .with-placeholder select:focus,
    .with-placeholder textarea:focus {
      border-color: #000
    }

    .with-placeholder select.form-control {
      color: #999;
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      background-image: linear-gradient(45deg, transparent 50%, gray 50%), linear-gradient(135deg, gray 50%, transparent 50%);
      background-position: calc(100% - 17px) 50%, calc(100% - 12px) 50%;
      background-size: 5px 5px, 5px 5px;
      background-repeat: no-repeat
    }

    .with-placeholder select.form-control:focus {
      background-image: linear-gradient(45deg, #000 50%, transparent 50%), linear-gradient(135deg, transparent 50%, #000 50%);
      background-position: calc(100% - 12px) calc(50% - 2px), calc(100% - 17px) calc(50% - 2px)
    }

    .with-placeholder-shown {
      transform: translate(13px, 4px) scale(.8) !important
    }

    .fields_area .firstname,
    .form_customization .firstname,
    .form_press_requests .firstname {
      padding-right: 2.5px
    }

    .fields_area .lastname,
    .form_customization .lastname,
    .form_press_requests .lastname {
      padding-left: 2.5px
    }

    .fields_area .email_form,
    .form_customization .email_form,
    .form_press_requests .email_form {
      padding-right: 2.5px
    }


    .fields_area .phone_form,
    .form_customization .phone_form,
    .form_press_requests .phone_form {
      padding-left: 2.5px
    }

    .fields_area .occupation_form,
    .form_customization .occupation_form,
    .form_press_requests .occupation_form {
      padding-right: 2.5px
    }

    .fields_area .company_form,
    .form_customization .company_form,
    .form_press_requests .company_form {
      padding-left: 2.5px
    }

    .message_form {
      margin: 0
    }

    @media (min-width:768px) {
      .firstname {
        padding-right: 2.5px
      }

      .lastname {
        padding-left: 2.5px
      }

      .modal-dialog {
        width: 600px
      }
    }

    .get_price_allproducts {
      border-radius: 0;
      padding: 5px 20px;
      text-transform: uppercase;
      letter-spacing: 1px;
      font-family: proxi-regular;
      font-size: 12px;
      margin: 25px 0;
      border: 1px solid #e7e7e7;
      background: #e7e7e7
    }

    body {
      overflow-x: hidden
    }

    #tabs {
      text-align: center
    }

    .tabbable-panel {
      margin: 20px 0
    }

    .nav-tabs>li {
      float: none;
      font-family: proxi-regular;
      display: inline-block;
      font-size: 11px;
      letter-spacing: 1.7px;
      padding: 0 30px
    }

    .nav-tabs>li>a {
      text-transform: uppercase;
      color: #333;
      padding: 3px 15px
    }

    .nav-tabs>li.active>a,
    .nav-tabs>li.active>a:focus,
    .nav-tabs>li.active>a:hover {
      color: #a58a62;
      background-color: transparent;
      border: 0;
      border-bottom: 2px solid #a58a62;
      cursor: default;
      padding-bottom: 20px
    }

    .modal-open .modal {
      z-index: 9999999
    }

    .m_bottom_form {
      margin-bottom: 10px
    }

    .download_area_form li.parsley-required,
    li.parsley-type {
      display: none
    }

    .form_customization li.parsley-required,
    .form_press_requests li.parsley-required,
    li.parsley-type {
      display: none
    }

    input::placeholder,
    textarea::placeholder {
      color: #252525 !important
    }

    .btn-info:hover {
      background-color: transparent;
      border-color: transparent
    }

    .dropdown-menu {
      position: absolute;
      top: 100%;
      left: -93px;
      z-index: 1000;
      display: none;
      float: left;
      min-width: 160px;
      padding: 5px 0;
      margin: 4px 0 0;
      list-style: none;
      font-size: 14px;
      text-align: center;
      background-color: #fff;
      border: 0 solid #ccc;
      border: 0 solid transparent;
      border-radius: 0;
      -webkit-box-shadow: 0 0 0 transparent;
      box-shadow: 0 0 0 transparent;
      -webkit-background-clip: padding-box;
      background-clip: padding-box;
      z-index: 1
    }

    .dropdown-menu li {
      display: inline-block
    }

    .dropdown-menu>li>a {
      padding: 3px 10px
    }

    .nav-tabs>li>a:hover {
      color: #a58a62;
      border-color: transparent
    }

    .nav>li>a:focus,
    .nav>li>a:hover {
      background-color: transparent
    }

    .tab-content {
      padding: 20px 40px 0 40px
    }

    @media (min-width:1200px) {
        .tab-content {
            padding: 20px 120px 0 120px
        }
    }

    .breadcrumb {
      margin-bottom: 0;
      padding: 14px 18px 14px 18px
    }

    .breadcrumb>li {
      text-transform: uppercase;
      letter-spacing: 1px;
      font-size: 10px;
      font-family: proxi-regular
    }

    .breadcrumb-item a {
      color: #333
    }

    .load_more_tab:after {
      position: absolute;
      bottom: 0;
      height: 100%;
      width: 100%;
      content: "";
      background: linear-gradient(to top, rgba(255, 255, 255, 1) 10%, rgba(255, 255, 255, 0) 80%);
      pointer-events: none
    }

    .load_more_tab {
      height: 250px;
      overflow: hidden
    }

    .close_more_tab {
      display: none
    }

    .close_more_tab,
    .view_more_tab {
      cursor: pointer
    }

    h3.bnone:before {
      border-top: 0
    }

    .fancybox-toolbar {
      z-index: 2 !important
    }

    .finish5, .finish6, .finish7 {
      display: inline-block;
      margin-right: 5px
    }

    @media only screen and (min-width:320px) and (max-width:766px) {

      .name_finish_1,
      .name_finish_2,
      .name_finish_3,
      .name_finish_4,
      .name_finish_5,
      .name_finish_6,
      .name_finish_7
       {
        font-size: 11px
      }
    }

    .checkbox_d_area label::after {
      height: 15px;
      width: 27px;
      border-left: 2px solid;
      border-bottom: 2px solid;
      transform: rotate(-45deg);
      left: -33px;
      top: 8px;
      -webkit-transition: opacity .5s ease;
      -o-transition: opacity .5s ease;
      transition: opacity .5s ease
    }

    .checkbox_d_area input[type=checkbox]+label::before,
    .checkbox_d_area input[type=radio]+label::before {
      -webkit-transition: border-color .5s ease;
      -o-transition: border-color .5s ease;
      transition: border-color .5s ease
    }

    .checkbox_d_area input[type=checkbox]:focus+label::before,
    .checkbox_d_area input[type=radio]:focus+label::before {
      outline: 0;
      border-color: #000
    }

    .checkbox_d_area label::before {
      height: 40px;
      width: 40px;
      border: 1px solid #e9e9e9;
      left: -40px;
      background-color: #f6f5f5;
      top: 0
    }

    .checkbox_d_area input {
      height: 40px;
      width: 40px;
      margin: 0;
      -webkit-transition: border-color .5s ease;
      -o-transition: border-color .5s ease;
      transition: border-color .5s ease
    }

    .checkbox_d_area label {
      display: block;
      font-size: 11px;
      letter-spacing: 1.3px;
      padding-top: 0;
      padding-left: 8px;
      height: 40px;
      line-height: 40px;
      position: absolute;
      top: 0;
      left: 40px;
      margin: 0
    }

    .checkbox_d_area label span {
      display: inline-block;
      vertical-align: middle;
      line-height: normal;
      margin: 0;
      font-size: 11px
    }

    .download_area_form span {
      width: 100%;
      font-family: proxi-semi;
      font-size: 13px;
      line-height: 23px;
      letter-spacing: .7px;
      text-transform: uppercase;
      margin-bottom: 8px;
      display: inline-block
    }
    .download_area_form .col-xs-12.form-group.radio-form-group, .form_customization .col-xs-12.form-group.radio-form-group{
        margin-top: 10px;
    }
    .download_area_form .col-xs-12.form-group.radio-form-group.method-form-group, .form_customization .col-xs-12.form-group.radio-form-group.method-form-group{
        margin-top: 14px;
    }

    @media (min-width:768px) {
        .form_customization>span:first-of-type{
            margin-bottom:5px
        }
    
    .download_area_form .fields_area, .form_customization .fields_area{
        margin-top:0
    }
    .download_area_form .col-xs-12.form-group.radio-form-group, .form_customization .col-xs-12.form-group.radio-form-group{
        display: flex;
        justify-content: space-between;
        margin: 0;
    }
    .download_area_form .col-xs-12.form-group.radio-form-group.method-form-group, .form_customization .col-xs-12.form-group.radio-form-group.method-form-group{
        display: block;
        margin: unset;
        margin-top: 5px;
    }
    .download_area_form .col-xs-12.form-group.radio-form-group, .form_customization .col-xs-12.form-group.radio-form-group{
        display: flex;
        justify-content: space-between;
        margin: 0;
    }
    .download_area_form .form-group.radio-form-group label[for="professional"], .form_customization .form-group.radio-form-group label[for="professional"]{
        font-family: proxi-semi;
        line-height: 23px;
        display: inline-block;
        width: 50%;
        text-align: left;
    }
    .download_area_form .form-group.radio-form-group label[for="professional"]+div, .form_customization .form-group.radio-form-group label[for="professional"]+div{
        width: 80%;
        margin-top: 4px;
    }
    }

    .checkbox_d_area {
      margin-bottom: 0
    }

    .checkbox_d_area:nth-of-type(3) label,
    .checkbox_d_area:nth-of-type(5) label,
    .checkbox_d_area:nth-of-type(7) label {
      margin-left: 3px
    }

    .fields_area {
      margin-top: 5px
    }

    .checkbox .btn_form_new {
      right: 15px
    }

    .download_area_form .form_checkbox {
      margin-top: 0 !important
    }

    @media (min-width:768px) {
      .fields_area {
        margin-top: 30px
      }
    }

    @media (min-width:676px) {
      .download_area_form .form_checkbox {
        margin-top: 13px !important
      }
    }

    @media (min-width:677px) and (max-width:767px) {
      .form_customization .form_checkbox ,
      .form_press_requests .form_checkbox {
        margin-top: 13px !important
      }
    }

    .checkbox_d_area input[type=checkbox]:checked+label::after {
      content: "";
      opacity: 1
    }

    .checkbox_d_area input[type=checkbox]+label::after {
      content: "";
      opacity: 0
    }

    .get_price_produto{
      background-color: #a08862;
      border-color: #a08862;
    }
    .share-icons-hidden{
      display: inline;
    }

    .share_product>img{
      cursor: pointer
    }
    .eight-col {
                width: 25%;
                float: left;
            }
            @media (max-width:767px) {
              .border_right_services {
          border-right:none
        }
            }
    @media (min-width:768px) {
    .share-icons-hidden{
      pointer-events: none;
      opacity: 0;
      transition: opacity 250ms ease;
    }
    .share_product:hover .share-icons-hidden{
      pointer-events: all;
      opacity: 1;
    }
    .eight-col {
                width: 12.5%;
                float: left;
            }
    }

    
    .menu-visual{
            background: #eaeae8;
            padding-bottom: 20px
        }
        .menu-visual .nav_menu p{
            font-family: 'Radikal', sans-serif;
            margin-top: -10px;
            color: rgb(74, 74, 74);
        }


        @media only screen and (min-width:945px) and (max-width:990px) {}

  .content_video {
    position: absolute;
    top: 20%;
    text-align: center;
    width: 100%;
    left: unset;
    height: 80%;
  }

  .content_video button {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    bottom: 10%;
    font-size: 15px;
    letter-spacing: 2px;
    font-family: proxi-regular;
    background: transparent;
    border: 1px solid white;
    line-height: 20px;
    padding: 10px 25px;
  }

  .content_video.black h2,
  .content_video.black h3 {
    color: #4d5150;
    opacity: 1
  }

  .content_video.black button {
    border: 1px solid #4d5150;
    color: #4d5150;
    opacity: 1
  }

  .text_video {
    margin: 0;
    width: 100%;
    font-family: 'proxi-semi';
  }

  .content_frase {
    position: absolute;
    top: 39%;
    text-align: center;
    width: 29%;
    left: 36%;
  }

  .text_frase {
    width: 86%;
    opacity: .93;
    margin: 0 auto 120px auto;
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 36px;
    font-family: 'AdobeDevanagari-Regular';
    line-height: 36px;
  }

  .text_video h3 {
    font-size: 50px;
    letter-spacing: 2px;
    margin: 2.5px 0;
    line-height: 50px;
  }

  @media only screen and (min-width: 767px) {

    #summer-edition {
      top: 0;
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      background: rgba(0, 0, 0, 0.2);
    }

    #summer-edition h3 {
      opacity: 1;
      font-size: 50px;
      letter-spacing: 2px;
      margin: 2.5px 0;
      line-height: 50px;
    }

    #summer-edition button {
      opacity: 1;
      margin-top: 20px;
      position: relative;
      left: unset;
      transform: none;
      bottom: unset;
    }

  }


  @media only screen and (max-width: 766px) and (min-width: 320px) {
    .content_frase {
      width: 100%;
      left: 0;
      top: 45%;
    }

    .text_frase {
      font-size: 14px;
      line-height: 21px;
      margin: 0 auto 135px auto;
      width: 60%;
    }

    .text_video h3 {
      font-size: 20px;
      letter-spacing: 2px;
      margin: 2.5px 0;
      line-height: 30px;
    }

  }

  .text_video h2 {
    font-size: 35px;
    letter-spacing: 2px;
    margin: 2.5px 0;
  }

  .text_video h2.smaller {
    font-size: 30px;
  }

  .services-row {
    margin-top: 0px;
}

.slider-inside-page .mobile_padding{
  padding-top: 0!important;
}

</style>

<div class="container-fluid ppading_container">
    <div class="mobile_padding">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/en/">Home</a></li>
            <li class="breadcrumb-item"><a href="/en/products/">All Products</a></li>
            <li class="breadcrumb-item"><a href="/en/products/#{{ $categoria }}s">{{ $categoria }}s</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $produto }}</li>
          </ol>
        </nav>
    </div>
</div>

<div class="container-fluid ppading_container" style="background-color:#f6f5f5">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 nopadding">
          <div class="wrapper">
            <div class="thumbnail-nav hidden-xs hidden-sm hidden-md col-sm-2 col-md-2 col-lg-2">
             @for ($i = 1; $i <= $imgnumber; $i++)
                    <div>
                        @if ($i < 10)
                            <img src="https://www.bocadolobo.com/images/products/{{ $fullname_h }}-0{{ $i }}-small-boca-do-lobo.png" class="img-responsive" />
                        @else
                            <img src="https://www.bocadolobo.com/images/products/{{ $fullname_h }}-{{ $i }}-small-boca-do-lobo.png" class="img-responsive" />
                       @endif
                    </div>
                @endfor
              
              <!-- <div>
                <img src="https://www.bocadolobo.com/images/icons/video-icon.png" class="img-responsive" />
              </div> -->

            </div>

          <div class="main-image col-xs-12 col-sm-12 col-md-9 col-lg-9">
              
              @for ($i = 1; $i <= $imgnumber; $i++)
                    <div class="slide-image">
                            @if ($i < 10)
                                <a href="https://www.bocadolobo.com/images/products/{{ $fullname_h }}-0{{ $i }}-zoom-boca-do-lobo.png" data-caption="{{ $fullname }}" data-fancybox="{{ $fullname_h }}" alt="{{ $fullname }} by Boca do Lobo">
                                    <img data-lazy="https://www.bocadolobo.com/images/products/{{ $fullname_h }}-0{{ $i }}-boca-do-lobo.png" class="img-responsive image-entity" />
                                </a>
                            @else
                                <a href="https://www.bocadolobo.com/images/products/{{ $fullname_h }}-{{ $i }}-zoom-boca-do-lobo.png" data-caption="{{ $fullname }}" data-fancybox="{{ $fullname_h }}" alt="{{ $fullname }} by Boca do Lobo">
                                    <img data-lazy="https://www.bocadolobo.com/images/products/{{ $fullname_h }}-{{ $i }}-boca-do-lobo.png" class="img-responsive image-entity" />
                                </a>
                            @endif
                        </div>
                    @endfor

                </div>
            </div>
      
                <div class="maxmize_icon">
                  <a href="#{{ $fullname_h }}">
                    <img srcset="https://www.bocadolobo.com/images/icons/maximize.png" width="14px"/>
                  </a>
                </div>
      
              
      
                  <div id="socialShare" class="btn-group share-group hidden-sm hidden-md hidden-lg">
                      <a data-toggle="dropdown" class="btn btn-info">
                          <img srcset="https://www.bocadolobo.com/images/icons/share.png" width="14px" style="margin-right: 10px;" />
                      </a>
                      <button href="#" data-toggle="dropdown" class="btn btn-info dropdown-toggle share">
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu">
                        <li>
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($url) }}"  target="_blank">
                                <i class="fab fa-lg fa-facebook-f" style="font-size:13px;"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://pinterest.com/pin/create/button/?url={{ urlencode($url) }}&media=https%3A//www.bocadolobo.com/images/products/{{ $fullname_h }}-01-boca-do-lobo.png&description={{ urlencode($fullname) }}%20By%20Boca%20do%20Lobo" target="_blank">  
                                <i class="fab fa-lg fa-pinterest-p" style="font-size:13px;"></i>
                            </a>
                        </li>         
                        <li>
                            <a href="https://api.whatsapp.com/send?text={{ $fullname }} by Boca do Lobo %0D{{ urlencode($url) }}" target="_blank">
                              <i class="fab fa-whatsapp" style="padding-top: 2px;"></i>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:?subject={{ $fullname }} by Boca do Lobo&amp;body=Check out this product {{ $fullname }}%0D{{ urlencode($url) }}" target="_blank">
                              <img src="https://www.bocadolobo.com/images/icons/email.png" width="14px"/>
                            </a>
                        </li>
                      </ul>
                  </div> 
              </div>

              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 product_info" style="background-color:#fff;">
                @if ($product->artGen != 0)
                
        <span class="stock-available hidden-xs">&#9679; IN STOCK</span>
        
        
                    <div class="info_product col-xs-12 col-sm-12">
                      <h1>{{ $produto }}</h1>
                      <h2>{{ $categoria }}</h2>
                      <p class="stock-available visible-xs">&#9679; IN STOCK</p>
                    </div>
                    @else
                         <div class="info_product col-xs-12 col-sm-12">
                         <h1>{{ $produto }}</h1>
                         <h2>{{ $categoria }}</h2>
                       </div>
                    @endif

                    <div class="info_product_01 col-xs-6 col-sm-12 hidden-xs">
                        <div class="finishes_product">
                        <h1>Versions
                            @for($i=1; $i<=$finishnumber; $i++)
                            <span class="name_finish_{{ $i }}">- {{ $finish_name[$i] }}</span>
                            @endfor
                        </h1>
                        @for($i=1; $i<=$finishnumber; $i++)
                          <div class="finish{{ $i }}">
                          @if (($finish_url[$i] != "#") && ($finish_url[$i] != ""))
                            <a href="{{ $finish_url[$i] }}">
                                @endif
                            <img srcset="{{ $finish_img[$i] }}" alt="{{ $finish_name[$i] }}" width="35px" class="img-responsive">
                            @if (($finish_url[$i] != "#") && ($finish_url[$i] != ""))
                          </a>
                          @endif
                          </div>
                          @endfor
                        </div>
                    </div>
        
                    <div class="col-xs-12 col-sm-12 btn_products hidden-sm hidden-md hidden-lg">
        
                        <div class="info_product_02">
        
                           
        
                            <button type="button" data-toggle="modal" data-id="{{ $id }}" data-title="Boca do Lobo - GET PRICE Product Page - Main CTA" data-name="{{ $fullname }}" href="#get_price_allproducts" class="col-xs-12 col-sm-12 open-product btn get_price_produto">Get Price</button>
        
                            <a href="https://api.whatsapp.com/send?phone=351910010529&text=Hello, I'm interested in {{ $fullname }}. Can you help me?" target="_blank"><button type="button" class="col-xs-12 col-sm-12 open-info btn get_price_especialist">TALK WITH A DESIGNER</button></a>
        
                        </div>
        
                    </div>

                    <div class="col-xs-12 col-sm-12 btn_products hidden-xs">

                        <div class="info_product_02">
        
                            
        
                            <button type="button" data-toggle="modal" data-id="{{ $id }}" data-title="Boca do Lobo - GET PRICE Product Page - Main CTA" data-name="{{ $fullname }}" href="#get_price_allproducts" class="col-xs-12 col-sm-12 open-product btn get_price_produto" >Get Price</button>
        
                            <a href="https://api.whatsapp.com/send?phone=351910010529&text=Hello, I'm interested in {{ $fullname }}. Can you help me?" target="_blank"><button type="button" class="col-xs-12 col-sm-12 open-info btn get_price_especialist">TALK WITH A DESIGNER</button></a>
        
        
                             
                        </div>
        
                    </div>
        
                    <div class="col-xs-12 col-sm-12 btn_customization">
                      <button type="button" data-toggle="modal" data-type="Bespoke" data-facebookgeral="fbq('track', 'Lead BL');" data-facebook="fbq('track', 'Lead Custom');" data-tlt="Request Customization" data-title="Boca do Lobo - REQUEST CUSTOMIZATION Product Page - Main CTA" data-id="{{ $id }}" data-name="{{ $fullname }}" href="#get_info" data-cta="REQUEST" data-event="ga('send','event','Customization','Send');"  class="open-info btn btn_product_page custom_btn"><img src="https://www.bocadolobo.com/images/icons/customize.png" width="16px"/><span style="margin-left: 9px;">Request Customization</span></button>
                    </div>
        
                    <div class="col-xs-12 col-sm-12 btn_product_sheet">
                      <button type="button" data-toggle="modal" data-type="Product Sheet" data-facebookgeral="fbq('track', 'Lead BL');" data-facebook="fbq('track', 'Lead Info');" data-title="Boca do Lobo - Request Product Sheet Product Page - Main CTA" data-tlt="Request Product Sheet" data-id="{{ $id }}" data-name="{{ $fullname }}" href="#get_info" data-cta="DOWNLOAD" data-event="ga('send','event','Product Sheet','Download');" class="open-info btn btn_product_page btn_no_message"><img src="https://www.bocadolobo.com/images/icons/product-sheet.png" width="15px"/><span style="margin-left: 9px;vertical-align: sub;">Request Product Sheet</span></button>
                    </div>
        
                    <div class="col-xs-12 col-sm-12 btn_dwg_files">
                      <button type="button" data-toggle="modal" data-type="3D File" data-facebookgeral="fbq('track', 'Lead BL');" data-facebook="fbq('track', 'Lead Info');" data-title="Boca do Lobo - DOWNLOAD DWG FILE Product Page - Main CTA" data-tlt="Download DWG File" data-id="{{ $id }}" data-name="{{ $fullname }}" href="#get_info" data-cta="DOWNLOAD" data-event="ga('send','event','3D File','Download');" class="open-info btn btn_product_page btn_no_message"><span class="lnr lnr-download" style="font-size: 16px;color: #252525;"></span><span style="margin-left: 9px;">Download DWG Files</span></button>
                    </div>
        
                    <div class="info_product_01 col-xs-6 col-sm-12" style="margin-top:30px;padding-right: 20px;">
                        <h3>Details</h3>
                        <p>{{ $dimensions }}</p>
                    </div>

                    <div class="share_product col-xs-12 col-sm-12 hidden-xs">

                        <img srcset="https://www.bocadolobo.com/images/icons/share.png" width="14px" style="margin-right: 15px;" />
                        <div class="share-icons-hidden">
                          <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($url) }}"  target="_blank">
                              <i class="fab fa-lg fa-facebook-f" style="font-size:13px;"></i>
                          </a>
        
                          <a href="https://pinterest.com/pin/create/button/?url={{ urlencode($url) }}&media=https%3A//www.bocadolobo.com/images/products/{{ $fullname_h }}-01-boca-do-lobo.png&description={{ urlencode($fullname) }}%20By%20Boca%20do%20Lobo" target="_blank"> 
                            <i class="fab fa-lg fa-pinterest-p" style="font-size:13px;"></i>
                          </a>
        
                          <a href="https://api.whatsapp.com/send?text={{ $fullname }} by Boca do Lobo %0D{{ urlencode($url) }}" target="_blank">
                              <i class="fab fa-whatsapp" style="padding-top: 2px;"></i>
                          </a>

        
                          <a href="mailto:?subject={{ $fullname }} by Boca do Lobo&amp;body=Check out this product {{ $fullname }}%0D{{ urlencode($url) }}" target="_blank">
                              <img src="https://www.bocadolobo.com/images/icons/email.png" width="14px"/>
                          </a>
                        </div>
        
                    </div>
        
                    <div class="info_product_01 col-xs-6 col-sm-12 hidden-sm hidden-md hidden-lg" style="margin-top:30px;">
                        <div class="finishes_product">
                        <h1>Versions
                        @for ($i=1; $i<=$finishnumber; $i++)
                            <span class="name_finish_{{ $i }}">- {{ $finish_name[$i] }}</span>
                            @endfor
                        </h1>
                        @for ($i=1; $i<=$finishnumber; $i++)
                          <div class="finish{{ $i }}">
                                            @if (($finish_url[$i] != "#") && ($finish_url[$i] != ""))
                            <a href="{{ $finish_url[$i] }}">
                            @endif
                            <img srcset="{{ $finish_img[$i] }}" alt="{{ $finish_name[$i] }}" width="35px" class="img-responsive">
                            @if (($finish_url[$i] != "#") && ($finish_url[$i] != ""))
                          </a>
                          @endif 
                          </div>
                          @endfor
                        </div>
                    </div>
                </div>    
            </div>
        </div>

        <div class="container">
            <div class="tabbable-panel col-md-12 nopadding">
              <div class="tabbable-line">
        
                <ul class="nav nav-tabs text-center nav_produto">
        
                    <li class="active mobile_tab">
                      <a href="#adicional_information" data-toggle="tab" class="padding_mobile">
                     ADDITIONAL INFO</a>
                    </li>
                    <li class="mobile_tab">
                      <a href="#download_area" data-toggle="tab" class="padding_mobile">
                      Download Area</a>
                    </li>
                    <li class="mobile_tab">
                      <a href="#customization" data-toggle="tab" class="padding_mobile">
                      Customization </a>
                    </li>
                    @if ( isset($press_pack))
                    <li class="mobile_tab">
                      <a href="#press_requests" data-toggle="tab" class="padding_mobile">
                      Press Requests</a>
                    </li>
                    @endif
        
                </ul>
        
                    <div class="tab-content tab_produto">
                        <div class="tab-pane active load_more_tab" id="adicional_information">
                          <div class="row">
                              <div class="col-xs-12 col-sm-6 adicional_infomation_tab">
                                <p>{{ $description }}<br><br>
                                  @if ($features != "")
                                  <span>Product Features</span><br>
                                  {{ $features }}<br><br>
                                  @endif
                                  @if ($techniques != "")
                                  <span>Arts and Techniques</span><br>
                                  {{ $techniques }}<br><br>
                                  @endif
                                  @if ($materials != "")
                                  <span>Materials and Finishes</span><br>
                                  {{ $materials }}<br><br>
                                  @endif
                                </p>
                              </div>
                              <div class="col-xs-12 col-sm-6 adicional_infomation_tab">
                                <p>
                                  <span>Dimensions</span><br>
                                  {{ $dimensions }}<br><br>
        
                                  <span>Customization</span><br>
                                  {{ $customization }}<br><br>
                                  @if ($cleancare != "")
                                  <span>Clean and Care</span><br>
                                  {{ $cleancare }}
                                  @endif
                                </p>
                              </div>
                              <!-- <div class="col-xs-12 col-sm-4 adicional_infomation_tab">
                                <img src="https://www.bocadolobo.com/images/human-scale/human-scale-lapiaz-sideboard.png" class="img-responsive" style="width:220px">
                              </div> -->
                          </div>
                        </div>

                        <div class="tab-pane" id="download_area">
                            <div class="row">
                              <div class="col-xs-12  download_area_form">
                                  <form data-parsley-validate action="/en/actions/2020/choose-info.php" method="post" class="form_catalogue_header_home" style="padding:0; padding-bottom:20px">
                                    <div class="row">
                                      <p class="formword"><input type="text" name="url"></p>
                                      <div class="col-xs-12 col-sm-6 col-md-5">
                                        <span>Select Your Info</span>
                                        <div class="col-xs-6 col-md-6 checkbox_d_area">
                                          <input type="checkbox" id="checkbox_1" name="select_download" required  value="" data-event="ga('send','event','Product Sheet','Download');" data-facebookgeral="fbq('track', 'Lead BL');" data-facebook="fbq('track', 'Lead Info');" data-name="Boca do Lobo - DOWNLOAD AREA PRODUCT SHEET Product Page" data-type="Product Sheet" data-php=""  data-lead="Lead" class="p_sheet">
                                          <label for="checkbox_1"><span>Product Sheet</span></label>
                                        </div>
                                        <div class="col-xs-6 col-md-6 pricelist_usa checkbox_d_area">
                                          <input type="checkbox" id="checkbox_2" name="select_download" required  data-event="ga('send','event','PriceList','Download');" data-facebookgeral="fbq('track', 'Lead BL');" data-facebook="fbq('track', 'Lead Pricelist');" data-name="Boca do Lobo - DOWNLOAD AREA PRICELIST USA Product Page" data-type="Pricelist" data-php="//www.bocadolobo.com/pricelist/download-usa.php" data-lead="Lead" class="p_usa">
                                          <label for="checkbox_2"><span>Pricelist</span></label>
                                        </div>
                                        <div class="col-xs-6 col-md-6 pricelist_eu checkbox_d_area">
                                          <input type="checkbox" id="checkbox_3" data-event="ga('send','event','PriceList','Download');" name="select_download" required  data-facebookgeral="fbq('track', 'Lead BL');" data-facebook="fbq('track', 'Lead Pricelist');" data-name="Boca do Lobo - DOWNLOAD AREA PRICELIST WORLD Product Page" data-type="Pricelist" data-php="//www.bocadolobo.com/pricelist/download-world.php" data-lead="Lead" class="p_world">
                                          <label for="checkbox_3"><span>Pricelist</span></label>
                                        </div>
                                        <div class="col-xs-6 col-md-6 checkbox_d_area">
                                          <input type="checkbox" id="checkbox_4" name="select_download" required 
                                          data-event="ga('send','event','3D File','Download');" value="" data-facebookgeral="fbq('track', 'Lead BL');" data-facebook="fbq('track', 'Lead Info');" data-name="Boca do Lobo - DOWNLOAD AREA DWG FILE Product Page" data-type="3D file" data-php=""  data-lead="Lead" class="p_dwg">
                                          <label for="checkbox_4"><span>DWG Files</span></label>
                                        </div>
                                        <div class="col-xs-6 col-md-6 checkbox_d_area">
                                          <input type="checkbox" id="checkbox_5" name="select_download" required 
                                          data-event="ga('send','event','Catalogue','Download');" data-facebookgeral="fbq('track', 'Lead BL');" data-facebook="fbq('track', 'Lead Catalogue');" data-name="Boca do Lobo - DOWNLOAD AREA CATALOGUE Product Page" data-type="Catalogue" data-subtype="Brand Catalogue" data-php="//www.bocadolobo.com/catalogue/download-catalogue.php"  data-lead="Lead" class="p_catalogue" value="">
                                          <label for="checkbox_5"><span>Catalogue</span></label>
                                        </div>
                                        <div class="col-xs-6 col-md-6 checkbox_d_area">
                                          <input type="checkbox" id="checkbox_6" name="select_download" required 
                                          data-event="ga('send','event','HR Image','Download');" data-facebookgeral="fbq('track', 'Lead BL');" data-facebook="fbq('track', 'Lead Press');" data-name="Boca do Lobo - DOWNLOAD AREA HR IMAGES Product Page" data-type="HR Images" data-php="{{ $zip }}"  data-lead="Lead Press" class="p_hr" value="">
                                          <label for="checkbox_6"><span>HR Images</span></label>
                                        </div>
                                        <div class="col-xs-6 col-md-6 checkbox_d_area">
                                          <input type="checkbox" id="checkbox_7"
                                          data-event="ga('send','event','StockList','Download');" data-facebookgeral="fbq('track', 'Lead BL');" data-facebook="fbq('track', 'Lead Ready To Ship');" name="select_download" required  data-name="Boca do Lobo - DOWNLOAD AREA STOCKLIST Product Page" data-type="StockList" data-php="//www.bocadolobo.com/download/ready-to-ship/ready-to-ship-download.php" data-lead="Lead" class="p_stock" value="">
                                          <label for="checkbox_7"><span>Stocklist</span></label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-sm-6 col-md-7 nopadding fields_area">
                                      <div class="col-xs-12 form-group radio-form-group">
                                      <label for="professional" class="radio-label">Select Your Profile:</label>
                                      <div>
                                          <label class="radio-label-inside">Professional
                                          <input type="radio" data-parsley-required required data-parsley-errors-container=".radio-errors"
                                              data-parsley-trigger="change" class="professional" name="professional" value="Professional">
                                          <span class="checkmark"></span>
                                          </label>
                                          <label class="radio-label-inside">Private Client
                                          <input type="radio" data-parsley-trigger="change" class="professional" name="professional"
                                              value="Private Client">
                                          <span class="checkmark"></span>
                                          </label>
                                      </div>
                                      <div class="radio-errors"></div>
                                      </div>
                                      <div class="col-xs-6 firstname_form with-placeholder firstname">
                                          <label for="firstname">First Name</label>
                                          <input type="text" data-parsley-required data-parsley-trigger="change" required class="form-control" name="firstname" autocomplete="firstname">
                                      </div>
                                      <div class="col-xs-6 firstname_form with-placeholder lastname">
                                          <label for="lastname">Last Name</label>
                                          <input type="text" data-parsley-required data-parsley-trigger="change" required class="form-control" name="lastname" autocomplete="lastname">
                                      </div>
                                      <div class="col-xs-6 email_form with-placeholder">
                                          <label for="email">Email</label>
                                          <input type="email"  required data-parsley-type="email" data-parsley-trigger="change" required class="form-control" name="email" autocomplete="email">
                                      </div>
                                      <div class="col-xs-6 phone_form with-placeholder">
                                          <label for="country">Phone (optional)</label>
                                          <input type="tel" data-parsley-type="number" data-parsley-trigger="change" class="form-control" name="phone" autocomplete="tel">
                                      </div>
                                      <div class="col-xs-12 country_form with-placeholder">
                                          <label for="country">Country</label>
                                          <select data-parsley-trigger="change" data-parsley-required required class="form-control" name="country" autocomplete="country">
                                              {{-- include $_SERVER["DOCUMENT_ROOT"].'/en/includes/forms/selects/country-placeholder2.php'; --}}
                                          </select>
                                      </div>
          
                                      <div class="col-xs-12 state_form with-placeholder">
                                          <label for="state">State</label>
                                          <select data-parsley-trigger="change"  class="form-control" name="state" autocomplete="address-level1">
                                              {{-- include $_SERVER["DOCUMENT_ROOT"].'/en/includes/forms/selects/state-placeholder2.php'; --}}
                                          </select>
                                      </div>
                                      
                                      <div class="col-xs-12 province_form with-placeholder">
                                          <label for="state">Province</label>
                                          <select data-parsley-trigger="change" class="form-control" name="state" autocomplete="address-level1">
                                              {{-- include $_SERVER["DOCUMENT_ROOT"].'/en/includes/forms/selects/state-china2.php'; --}}
                                          </select>
                                      </div>
          
                                      <div class="professional-inside">
                        <div class="col-xs-6 occupation_form with-placeholder">
                          <label for="occupation">Profession</label>
                          <select data-parsley-trigger="change" data-parsley-required required class="form-control" name="occupation">
                              {{-- include $_SERVER["DOCUMENT_ROOT"].'/en/includes/forms/selects/job-placeholder2.php'; --}}
                          </select>
                        </div>
                        <div class="col-xs-6 company_form with-placeholder">
                          <label for="company">Company Name</label>
                          <input type="text" data-parsley-trigger="change" data-parsley-required class="form-control" name="company" required>
                        </div>
                        <div class="col-xs-12 website_form with-placeholder">
                          <label for="website">Website</label>
                          <input type="text" data-parsley-trigger="change" data-parsley-required class="form-control" name="website" required>
                        </div>
                        <div class="col-xs-12 form-group radio-form-group method-form-group">
                        <label for="contact-method" class="radio-label">PREFERRED CONTACT OR SCHEDULE A MEETING:</label>
                        <div>
                        <label class="radio-label-inside">
                        <i class="fas fa-lg fa-envelope"></i>      
                        Email
                            <input type="radio"
                          data-parsley-required required data-parsley-errors-container="#method-errors"
                            data-parsley-trigger="change" class="contact-method" name="contact-method" value="Email">
                            <span class="checkmark"></span>
                        </label>
                        <label class="radio-label-inside">
                        <i class="fab fa-lg fa-whatsapp-square"></i>    
                        Whatsapp
                            <input type="radio"
                            data-parsley-trigger="change" class="contact-method" name="contact-method" value="Whatsapp">
                            <span class="checkmark"></span>
                        </label>
                        
                        <label class="radio-label-inside">
                        <i class="fab fa-lg fa-weixin"></i>  
                        Wechat
                            <input type="radio"
                            data-parsley-trigger="change" class="contact-method" name="contact-method" value="Wechat">
                            <span class="checkmark"></span>
                        </label>
                        <label class="radio-label-inside">
                        <i class="fas fa-lg fa-phone"></i>
                        Call
                            <input type="radio"
                            data-parsley-trigger="change" class="contact-method" name="contact-method" value="Call">
                            <span class="checkmark"></span>
                        </label>
                        <label class="radio-label-inside">
                        <i class="fas fa-lg fa-video"></i>      
                        E-Meeting
                            <input type="radio"
                            data-parsley-trigger="change" class="contact-method" name="contact-method" value="E-Meeting">
                            <span class="checkmark"></span>
                        </label>
                        <label class="radio-label-inside">
                        <i class="fab fa-lg fa-skype"></i>      
                        Skype
                            <input type="radio"
                            data-parsley-trigger="change" class="contact-method" name="contact-method" value="Skype">
                            <span class="checkmark"></span>
                        </label>
                        </div>
                            <div id="method-errors"></div>   
                        </div>
                        </div>
                                      
          
                                      <input type="hidden" name="origin" class="origin"/>
                                      <input type="hidden" name="referrer" class="referrer"/>
                                      <input type="hidden" name="lead_path" class="lead_path"/>
          
                                      <input type="hidden" name="download_php" class="download_php" value=""/>
                                      <input type="hidden" name="title" class="name" value=""/>
                                      <input type="hidden" name="lead" class="lead" value=""/>
                                      <input type="hidden" name="subtype" class="subtype" value=""/>
                                      <input type="hidden" name="type" class="type" value=""/>
                                      <input type="hidden" name="viewport" id="viewport" class="viewport " value="" />
          
                                      <input type="hidden" name="facebookgeral" class="facebookgeral" value=""/>
                                      <input type="hidden" name="facebook" class="facebook" value=""/>
          
                                      <input type="hidden" name="id_product" id="product_id" value="{{ $id }}"/>
                                      <input type="hidden" name="product_name" id="product_name" value="{{ $fullname }}"/>
          
                                      </div>
                                      <div class="checkbox form_checkbox col-xs-12">
                                     <h4 class="message_form" style="margin-bottom: 0; margin-top: 10px; width: calc(100% - 140px); padding-right: 12px;">BY CLICKING SEND, YOU CONFIRM THAT YOU HAVE READ AND ACCEPTED OUR&nbsp;<a href="/en/costumer-service/privacy-policy/" target="_blank" class="gold_link">PRIVACY&nbsp;POLICY</a></h4>
                       <button type="submit" class="btn btn_send btn_form_new" name="btn_submit" style="width:140px!important">DOWNLOAD</button>
                                      </div>
                                    </div>
                                </form>
                              </div>
                            </div>
                          </div>
          
                          <div class="tab-pane" id="customization">
                            <div class="row">
                              <div class="col-xs-12 col-sm-6 col-md-5 customization">
                                <p>
                                  <span>Customization</span><br>
                                  Endless possibilities: choose from different materials, colors, finishes and fabrics, and play with dimensions and interior features.<br><br>
                                  <span>Bespoke</span><br>
                                  We are ready to craft the most demanding wishes into your own masterpiece, supported by haute craftsmanship and passion for innovation. <br><br>
                                </p>
                              </div>
                              <div class="col-xs-12 col-sm-6 col-md-7 form_customization">
                                  <span>REGISTER YOUR INTEREST</span>
                                  <form data-parsley-validate action="/en/actions/2020/get-info.php" method="post" class="form_catalogue_header_home" style="padding:0">
                                    <div class="row">
                                      <p class="formword"><input type="text" name="url"></p>
                                      <div class="col-xs-12 form-group radio-form-group">
                                          <label for="professional" class="radio-label">Select Your Profile:</label>
                                          <div>
                                              <label class="radio-label-inside">Professional
                                              <input type="radio" data-parsley-required required data-parsley-errors-container=".radio-errors"
                                                  data-parsley-trigger="change" class="professional" name="professional" value="Professional">
                                              <span class="checkmark"></span>
                                              </label>
                                              <label class="radio-label-inside">Private Client
                                              <input type="radio" data-parsley-trigger="change" class="professional" name="professional"
                                                  value="Private Client">
                                              <span class="checkmark"></span>
                                              </label>
                                          </div>
                                          <div class="radio-errors"></div>
                                          </div>
                                          <div class="col-xs-6 firstname_form with-placeholder firstname">
                                          <label for="firstname">First Name</label>
                                          <input type="text" data-parsley-required data-parsley-trigger="change" required class="form-control" name="firstname" autocomplete="firstname">
                                      </div>
                                      <div class="col-xs-6 firstname_form with-placeholder lastname">
                                          <label for="lastname">Last Name</label>
                                          <input type="text" data-parsley-required data-parsley-trigger="change" required class="form-control" name="lastname" autocomplete="lastname">
                                      </div>
                                      <div class="col-xs-6 email_form with-placeholder">
                                          <label for="email">Email</label>
                                          <input type="email"  required data-parsley-type="email" data-parsley-trigger="change" required class="form-control" name="email" autocomplete="email">
                                      </div>
                                      <div class="col-xs-6 phone_form with-placeholder">
                                          <label for="country">Phone (optional)</label>
                                          <input type="tel" data-parsley-type="number" data-parsley-trigger="change" class="form-control" name="phone" autocomplete="tel">
                                      </div>
                                      <div class="col-xs-12 country_form with-placeholder">
                                          <label for="country">Country</label>
                                          <select data-parsley-trigger="change" data-parsley-required required class="form-control" name="country" autocomplete="country">
                                              {{-- include $_SERVER["DOCUMENT_ROOT"].'/en/includes/forms/selects/country-placeholder2.php'; --}}
                                          </select>
                                      </div>
          
                                      <div class="col-xs-12 state_form with-placeholder">
                                          <label for="state">State</label>
                                          <select data-parsley-trigger="change"  class="form-control" name="state" autocomplete="address-level1">
                                              {{-- include $_SERVER["DOCUMENT_ROOT"].'/en/includes/forms/selects/state-placeholder2.php'; --}}
                                          </select>
                                      </div>
                                      
                                      <div class="col-xs-12 province_form with-placeholder">
                                          <label for="state">Province</label>
                                          <select data-parsley-trigger="change" class="form-control" name="state" autocomplete="address-level1">
                                              {{-- include $_SERVER["DOCUMENT_ROOT"].'/en/includes/forms/selects/state-china2.php'; --}}
                                          </select>
                                      </div>
                                      <div class="col-xs-12 message_form with-placeholder">
                                          <label for="company">Message (Optional)</label>
                                          <textarea data-parsley-trigger="change" class="form-control" name="message" rows="3" id="message"></textarea>
                                      </div>
                                      <div class="professional-inside">
                        <div class="col-xs-6 occupation_form with-placeholder">
                          <label for="occupation">Profession</label>
                          <select data-parsley-trigger="change" data-parsley-required required class="form-control"
                            name="occupation">
                            {{-- include $_SERVER["DOCUMENT_ROOT"].'/en/includes/forms/selects/job-placeholder2.php'; --}}
                          </select>
                        </div>
                        <div class="col-xs-6 company_form with-placeholder">
                          <label for="company">Company Name</label>
                          <input type="text" data-parsley-trigger="change" data-parsley-required class="form-control"
                            name="company" required>
                        </div>
                        <div class="col-xs-12 website_form with-placeholder">
                          <label for="website">Website</label>
                          <input type="text" data-parsley-trigger="change" data-parsley-required class="form-control"
                            name="website" required>
                        </div>
                        <div class="col-xs-12 form-group radio-form-group method-form-group">
                          <label for="contact-method" class="radio-label">PREFERRED CONTACT OR SCHEDULE A MEETING:</label>
                          <div>
                            <label class="radio-label-inside">
                              <i class="fas fa-lg fa-envelope"></i>
                              Email
                              <input type="radio" data-parsley-required required data-parsley-errors-container="#method-errors"
                                data-parsley-trigger="change" class="contact-method" name="contact-method" value="Email">
                              <span class="checkmark"></span>
                            </label>
                            <label class="radio-label-inside">
                              <i class="fab fa-lg fa-whatsapp-square"></i>
                              Whatsapp
                              <input type="radio" data-parsley-trigger="change" class="contact-method" name="contact-method"
                                value="Whatsapp">
                              <span class="checkmark"></span>
                            </label>
          
                            <label class="radio-label-inside">
                              <i class="fab fa-lg fa-weixin"></i>
                              Wechat
                              <input type="radio" data-parsley-trigger="change" class="contact-method" name="contact-method"
                                value="Wechat">
                              <span class="checkmark"></span>
                            </label>
                            <label class="radio-label-inside">
                              <i class="fas fa-lg fa-phone"></i>
                              Call
                              <input type="radio" data-parsley-trigger="change" class="contact-method" name="contact-method"
                                value="Call">
                              <span class="checkmark"></span>
                            </label>
                            <label class="radio-label-inside">
                              <i class="fas fa-lg fa-video"></i>
                              E-Meeting
                              <input type="radio" data-parsley-trigger="change" class="contact-method" name="contact-method"
                                value="E-Meeting">
                              <span class="checkmark"></span>
                            </label>
                            <label class="radio-label-inside">
                              <i class="fab fa-lg fa-skype"></i>
                              Skype
                              <input type="radio" data-parsley-trigger="change" class="contact-method" name="contact-method"
                                value="Skype">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                          <div id="method-errors"></div>
                        </div>
                      </div>
                                      <input type="hidden" name="origin" class="origin"/>
                                      <input type="hidden" name="referrer" class="referrer"/>
                                      <input type="hidden" name="lead_path" class="lead_path"/>
                                      <input type="hidden" name="download_php" class="download_php" value=""/>
                                      <input type="hidden" name="title" class="title" value="Boca do Lobo - CUSTOMIZATION AREA Product Page"/>
                                      <input type="hidden" name="type" class="type" value="Bespoke"/>
                                      <input type="hidden" name="facebookgeral" class="facebookgeral" value="fbq('track', 'Lead BL');"/>
                                      <input type="hidden" name="facebook" class="facebook" value="fbq('track', 'Lead Custom');"/>
                                      <input type="hidden" name="viewport" id="viewport" class="viewport " value="" />
                                      <input type="hidden" name="id_product" id="product_id" value="{{ $id }}"/>
                                      <input type="hidden" name="product_name" id="product_name" value="{{ $fullname }}"/>
                                      <div class="checkbox form_checkbox col-xs-12" style="display: inline-block;margin:0;">
                                        <h4 class="message_form" style="margin-bottom: 0; margin-top: 10px; width: calc(100% - 140px); padding-right: 12px;">BY CLICKING SEND, YOU CONFIRM THAT YOU HAVE READ AND ACCEPTED OUR&nbsp;<a href="/en/costumer-service/privacy-policy/" target="_blank" class="gold_link">PRIVACY&nbsp;POLICY</a></h4>
                                        <button type="submit" class="btn btn_send btn_form_new" name="btn_submit" style="width: 140px!important" onclick="ga('send','event','Customization','Request');">REQUEST</button>
                                      </div>
                                    </div>
                                </form>
                              </div>
                            </div>
                          </div>
                          @if ( isset($press_pack))
                          <div class="tab-pane" id="press_requests">
                            <div class="row">
                              <div class="col-xs-12 col-sm-6 col-md-5 press_requests">
                                <p style="text-align:center">
                                Boca do Lobo is happy to provide on request:<br>
                                <span>PR & PRESS RELATIONS</span><br>
                                <a href="tel:+351915204676" style="color:#a58a62">+351 915 204 676</a><br>
                                <a href="mailto:press@bocadolobo.com" style="color:#a58a62">press@bocadolobo.com</a><br><br>
                                </p>
                              </div>
                              <div class="col-xs-12 col-sm-6 col-md-7 form_press_requests">
                                  <span>REGISTER YOUR INTEREST</span>
                                  <form data-parsley-validate action="/en/actions/2020/download-files-press.php" method="post" class="form_catalogue_header_home" style="padding:0">
                                    <div class="row">
                                      <p class="formword"><input type="text" name="url"></p>
                                      <div class="col-xs-6 firstname_form with-placeholder firstname">
                                        <label for="firstname">First Name</label>
                                        <input type="text" data-parsley-required data-parsley-trigger="change" required class="form-control" name="firstname" autocomplete="firstname">
                                      </div>
                                      <div class="col-xs-6 firstname_form with-placeholder lastname">
                                        <label for="lastname">Last Name</label>
                                        <input type="text" data-parsley-required data-parsley-trigger="change" required class="form-control" name="lastname" autocomplete="lastname">
                                      </div>
                                      <div class="col-xs-6 email_form with-placeholder">
                                        <label for="email">Email</label>
                                        <input type="email"  required data-parsley-type="email" data-parsley-trigger="change" required class="form-control" name="email" autocomplete="email">
                                      </div>
                                      <div class="col-xs-6 phone_form with-placeholder">
                                        <label for="country">Phone (optional)</label>
                                        <input type="tel" data-parsley-type="number" data-parsley-trigger="change" class="form-control" name="phone" autocomplete="tel">
                                      </div>
                                      <div class="col-xs-12 country_form with-placeholder">
                                          <label for="country">Country</label>
                                          <select data-parsley-trigger="change" data-parsley-required required class="form-control" name="country" autocomplete="country">
                                              {{-- include $_SERVER["DOCUMENT_ROOT"].'/en/includes/forms/selects/country-placeholder2.php'; --}}
                                          </select>
                                      </div>
                                      <div class="col-xs-12 state_form with-placeholder">
                                          <label for="state">State</label>
                                          <select data-parsley-trigger="change"  class="form-control" name="state" autocomplete="address-level1">
                                              {{-- include $_SERVER["DOCUMENT_ROOT"].'/en/includes/forms/selects/state-placeholder2.php'; --}}
                                          </select>
                                      </div>
                                      <div class="col-xs-12 province_form with-placeholder">
                                          <label for="state">Province</label>
                                          <select data-parsley-trigger="change" class="form-control" name="state" autocomplete="address-level1">
                                              {{-- include $_SERVER["DOCUMENT_ROOT"].'/en/includes/forms/selects/state-china2.php'; --}}
                                          </select>
                                      </div>
                                      <div class="col-xs-6 occupation_form with-placeholder">
                                          <label for="occupation">Occupation</label>
                                          <select data-parsley-trigger="change" data-parsley-required required class="form-control" name="occupation">
                                              {{-- include $_SERVER["DOCUMENT_ROOT"].'/en/includes/forms/selects/job-placeholder2.php'; --}}
                                          </select>
                                      </div>
                                      <div class="col-xs-6 company_form with-placeholder">
                                          <label for="company">Company</label>
                                          <input type="text" data-parsley-trigger="change" data-parsley-required class="form-control" name="company" required>
                                      </div>
                                      <input type="hidden" name="origin" class="origin"/>
                                      <input type="hidden" name="referrer" class="referrer"/>
                                      <input type="hidden" name="lead_path" class="lead_path"/>
                                      <input type="hidden" name="viewport" id="viewport" class="viewport" value=""/>
          
                                      <input type="hidden" name="title" class="title" value="{{ $fullname }} Press Pack"/>
                                      <input type="hidden" name="type" class="type" value="Press Pack"/>
                                      <input type="hidden" name="title_material" class="title_material" value="{{ $fullname }} Press Pack - Product Page"/>
                                      <input type="hidden" name="download_php" class="download_php" value="https://www.bocadolobo.com/press/download/product-packs/{{ $press_pack }}-press-pack-boca-do-lobo.zip"/>
                                      <input type="hidden" name="facebookgeral" class="facebookgeral" value="fbq('track', 'Lead BL');"/>
                                      <input type="hidden" name="facebook" class="facebook" value="fbq('track', 'Lead Press');"/>
          
                                     
                                      <div class="checkbox form_checkbox col-xs-12" style="display: inline-block;margin:0;">
                                        <h4 class="message_form" style="margin-bottom: 0; margin-top: 10px; width: calc(100% - 140px); padding-right: 12px;">BY CLICKING SEND, YOU CONFIRM THAT YOU HAVE READ AND ACCEPTED OUR&nbsp;<a href="/en/costumer-service/privacy-policy/" target="_blank" class="gold_link">PRIVACY&nbsp;POLICY</a></h4>
                                        <button type="submit" class="btn btn_send btn_form_new" name="btn_submit" style="width: 140px!important" onclick="ga('send','event','Customization','Request');">REQUEST</button>
                                      </div>
                                    </div>
                                </form>
                              </div>
                            </div>
                          </div>
                          @endif
                          <div class="separator view_more_tab"><h3 class="background text-uppercase bnone" style="border-top:0"><span style="background-color:#fff;font-size: 12px;" class="view_tab">View more &ensp;<i class="fas fa-angle-down"></i></span></h3></div>
                          <div class="separator close_more_tab"><h3 class="background text-uppercase bnone"><span style="background-color:#fff;font-size: 12px;" class="view_tab">Close &ensp;<i class="fas fa-angle-up"></i></span></h3></div>
                      </div>
                  </div>
                </div>
            </div>
          </div>
          <div class="container">
 
        
            <div class="row" style="margin-bottom: 20px">
                <div class="separator col-xs-12 col-sm-12" id="most-wanted">
                  <h3 class="background text-uppercase">
                    <span style="background-color:#fff">YOU MAY ALSO LIKE</span>
                  </h3>
                </div>
                {!! $youmayalsolike !!}
            </div>
        </div>
        <div class="container-fluid">
            <div class="row services-row">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-4 services text-center border_right_services">
              <a href="#" data-target="#download_files" data-toggle="modal" data-facebookgeral="fbq('track', 'Lead BL');" data-facebook="fbq('track', 'Lead Stocklist');" data-type="Stocklist" data-php="https://www.bocadolobo.com/download/ready-to-ship/ready-to-ship-download.php" data-modal_tlt="Download Stocklist" data-tlt="Boca do Lobo" data-name="Stocklist - Product Page" href="#download_files" class="download-modal-trigger">
                    <img src="https://www.bocadolobo.com/images/home/en/icons/stocklist.png" srcset="https://www.bocadolobo.com/images/home/en/icons/stocklist-2x.png 2x" width="40px"/>
                    <button type="button" class="btn get_price_allproducts">Download Stocklist</button>
                  </a>
              </div>
              <div class="col-xs-12 col-sm-4 services text-center border_right_services">
              <a href="#" data-target="#download_files" data-toggle="modal" data-facebookgeral="fbq('track', 'Lead BL');" data-facebook="fbq('track', 'Lead Pricelist');" data-type="Pricelist" data-php="" data-modal_tlt="Download Pricelist" data-tlt="Boca do Lobo" data-name="Pricelist - Product Page" href="#download_files" class="download-modal-trigger">
                    <img src="https://www.bocadolobo.com/images/home/en/icons/pricelist.png" srcset="https://www.bocadolobo.com/images/home/en/icons/pricelist-2x.png 2x" width="40px"/>
                    <button type="button" class="btn get_price_allproducts">Download Pricelist</button>
                  </a>
              </div>
              <div class="col-xs-12 col-sm-4 services text-center">
                <a href="#" data-target="#download_files" data-toggle="modal" data-facebookgeral="fbq('track', 'Lead BL');" data-facebook="fbq('track', 'Lead Catalogue')" data-type="Catalogue" data-php="https://www.bocadolobo.com/catalogue/download-catalogue.php" data-modal_tlt="Download Brand Catalogue" data-tlt="Boca do Lobo" data-name="Brand Catalogue - Homepage" href="#download_files" class="download-modal-trigger">
                    <img src="https://www.bocadolobo.com/images/home/en/icons/catalogue.png" srcset="https://www.bocadolobo.com/images/home/en/icons/catalogue-2x.png 2x" width="40px"/>
                    <button type="button" class="btn get_price_allproducts">Download Catalogue</button>
                  </a>
              </div>
              </div>
              </div>
            </div>
        </div>

@endsection



@section('foot')
<script src="https://www.bocadolobo.com/js/slick.min.js"></script> 
<link rel="stylesheet" href="https://www.bocadolobo.com/css/slick.css" type="text/css">
<link rel="stylesheet" href="https://www.bocadolobo.com/css/jquery.fancybox.min.css" />
<script src="https://www.bocadolobo.com/js/fancybox.js"></script>
<script type="text/javascript">


    @php
    if( (isset($samepagefinishes)) && ($samepagefinishes === true)){
      $js_array = json_encode($finish_imgnumber);
      echo "var finish_imgnumber = ". $js_array . ";\n";
    }
       @endphp
    var finish = 1;
    
    
        
    
        $( ".with-placeholder select" ).change(function() {
            var $this = $(this);
            if ($this.prop('selectedIndex')!=0) {
                    $this.parent().find('label').addClass('with-placeholder-shown');
                    $this.css('color', '#000');
                } else{
                    $this.parent().find('label').removeClass('with-placeholder-shown');
                    $this.css('color', '#999');
                }
        });
    
    
        if( $(".with-placeholder input, .with-placeholder textarea").val() != "" ) {
                $(this).parent().find('label').addClass('with-placeholder-shown');
        }
    
    
        $(".with-placeholder input, .with-placeholder textarea").focus(function() {
            $(this).parent().find('label').addClass('with-placeholder-shown');
        });
        $(".with-placeholder select").focus(function() {
            if ($(this).prop('selectedIndex')!=0) {
            $(this).parent().find('label').addClass('with-placeholder-shown');
            }
        });
        $(".with-placeholder input, .with-placeholder textarea").focusout(function() {
            if( $(this).val() == "" ) {
            $(this).parent().find('label').removeClass('with-placeholder-shown');
            }
        });
        $(".with-placeholder select").focusout(function() {
            if($(this).val() == "" ) {
            $(this).parent().find('label').removeClass('with-placeholder-shown');
            }
        });
       
    
    
    function myFunction() {
      window.print();
    }
    
    $(document).on('click', '.checkbox_d_area input[type="checkbox"]', function() {      
        $('.checkbox_d_area input[type="checkbox"]').not(this).prop('checked', false);    
        $(".form_checkbox .btn_send").attr('onclick', $(this).data('event'));  
    });
    
    
    function setModals(){
      $( ".open-product" ).click(function() {
        $.fancybox.close();
         var product_id = $(this).data('id');
         var product_name = $(this).data('name');
         var product_title = $(this).data('title');
         var facebookgeral = $(this).data('facebookgeral');
         var facebook = $(this).data('facebook');
         $(".modal-body #product_id").val( product_id );
         $(".modal-body #product_name").val( product_name );
         $(".modal-body input[name='title']").val( product_title );
         $(".modal-body #facebookgeral").val( facebookgeral );
         $(".modal-body #facebook").val( facebook );
    });
    
    $( ".open-info" ).click(function() {
      $.fancybox.close();
         var product_id = $(this).data('id');
         var product_name = $(this).data('name');
         var product_title = $(this).data('title');
         var product_type = $(this).data('type');
         var product_cta = $(this).data('cta');
         var product_event = $(this).data('event');
         var tlt = $(this).data('tlt');
         var facebookgeral = $(this).data('facebookgeral');
         var facebook = $(this).data('facebook');
         $(".modal-body .type").val( product_type );
         $(".modal-body .product_id").val( product_id );
         $(".modal-body .product_name").val( product_name );
         $(".modal-body .title").val( product_title );
         $(".modal-body .facebookgeral").val( facebookgeral );
         $(".modal-body .facebook").val( facebook );
         $("#get_info .btn_send").html(product_cta).attr('onclick', product_event);
    
         $("#idHolder").html( tlt );
    });
    }
    setModals();
    
    
    $( ".p_sheet, .p_world, .p_usa, .p_catalogue, .p_dwg, .p_hr, .p_stock" ).click(function() {
         var product_name = $(this).data('name');
         var product_title = $(this).data('title');
         var product_url = $(this).data('url');
         var product_lead = $(this).data('lead');
         var product_subtype = $(this).data('subtype');
         var product_type = $(this).data('type');
         var product_php = $(this).data('php');
         var facebookgeral = $(this).data('facebookgeral');
         var facebook = $(this).data('facebook');
         $(".download_area_form .name").val( product_name );
         $(".download_area_form .title").val( product_title );
         $(".download_area_form .url").val( product_url );
         $(".download_area_form .type").val( product_type );
         $(".download_area_form .subtype").val( product_subtype );
         $(".download_area_form .lead").val( product_lead );
         $(".download_area_form .download_php").val( product_php );
         $(".download_area_form .facebookgeral").val( facebookgeral );
         $(".download_area_form .facebook").val( facebook );
    });
    
    $(".custom_btn").click(function(){
      $(".message_form_none").show();
    });
    
    $(".btn_no_message").click(function(){
      $(".message_form_none").hide();
    });
    
    
    
    
    
    function start_fancybox(){
    $( '[data-fancybox="{{ $fullname_h }}"]' ).fancybox({
      buttons: [
        // "share",
        // "slideShow",
        // "fullScreen",
        // "download",
        // "thumbs",
        "close"
      ],
      infobar: true,
      btnTpl: {
        close:
          '<button data-fancybox-close class="fancybox-button fancybox-button--close" title="close">' +
          '<span class="lnr lnr-cross"></span>' +
          "</button>",
    
        arrowLeft:
          '<button data-fancybox-prev class="fancybox-button fancybox-button--arrow_left" title="prev">' +
          '<div><span class="lnr lnr-chevron-left"></span></div>' +
          "</button>",
    
        arrowRight:
          '<button data-fancybox-next class="fancybox-button fancybox-button--arrow_right" title="next">' +
          '<div><span class="lnr lnr-chevron-right"></span></div>' +
          "</button>",
    
      },
    
       baseTpl:
        '<div class="fancybox-container" role="dialog" tabindex="-1">' +
        '<div class="fancybox-bg"></div>' +
        '<div class="fancybox-inner">' +
        '<div class="fancybox-toolbar"><div class="stock"> @if ($product->artGen != 0)<span class="coll-prod-stock_gallery"><span class="green-in-stock"></span>In Stock</span> @else <span class="coll-prod-out-of-stock"><span class="red-out-of-stock"></span></span> @endif </div>buttons</div>' +
        '<div class="fancybox-navigation">buttons</div>' +
        '<div class="fancybox-stage"></div>' +
        '<div class="fancybox-caption"></div>' +"</div>" +"</div>",
      thumbs: {
        autoStart: true, // Display thumbnails on opening
        hideOnClose: true, // Hide thumbnail grid when closing animation starts
        parentEl: ".fancybox-container", // Container is injected into this element
        axis: "y",
         // Vertical (y) or horizontal (x) scrolling
      }, 
      afterShow: function( instance, current ) {
          $(".origin").val(tracker.url_origin); 
          $(".referrer").val(tracker.referrer); 
          $(".lead_path").val(tracker.flow);
    
    
          setModals();
          
      },
      afterClose: function () {
        $('#get_price_allproducts_gallery').remove();
        $('#download_file').remove();
        $('body').removeClass('modal-open');
      $('.modal-backdrop').remove();
      },
      caption : function( instance, item ) {
        var caption = $(this).data('caption') || '';
    
        if ( item.type === 'image' ) {
          
          caption = (caption.length ? caption + '<br />' : '') + '<div class="col-md-3 col-sm-push-2 hidden-xs"><a data-toggle="modal" data-type="HR Image" data-facebookgeral="fbq(\'track\', \'Lead BL\');" data-facebook="fbq(\'track\', \'Lead Info\');" data-title="Boca do Lobo - DOWNLOAD HR IMAGES Product Page - Gallery CTA" data-tlt="Download HR Images" data-id="{{ $id }}" data-name="{{ $fullname }}" href="#get_info" data-cta="DOWNLOAD" data-event="ga(\'send\',\'event\',\'3D File\',\'Download\');" class="open-gallery open-product btn get_price_allproducts open-info ">Download HR Images</a></div><div class="col-md-2 col-sm-push-2"><a type="button" data-toggle="modal" data-id="{{ $id }}" data-name="{{ $fullname }}" href="#get_price_allproducts" data-title="Boca do Lobo - GET PRICE Product Page - Gallery CTA" class="open-gallery open-product btn get_price_allproducts" >Get Price</a></div><div class="col-md-3 col-sm-push-2 hidden-xs"><a data-toggle="modal" data-type="HR Image" data-facebookgeral="fbq(\'track\', \'Lead BL\');" data-facebook="fbq(\'track\', \'Lead Info\');" data-title="Boca do Lobo - Request Product Sheet Product Page - Gallery CTA" data-tlt="Request Product Sheet" data-id="{{ $id }}" data-name="{{ $fullname }}" href="#get_info" data-cta="DOWNLOAD" data-event="ga(\'send\',\'event\',\'Product Sheet\',\'Download\');" class="open-gallery open-product btn get_price_allproducts open-info ">Request Product Sheet</a></div>' 
    
          + '<div class="share_gallery hidden-xs col-md-12" style="padding: 0px 0px 20px 0;"> <img srcset="https://www.bocadolobo.com/images/icons/share.png" width="14px" style="margin-right: 15px;" /><a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($url) }}"  target="_blank"><i class="fab fa-lg fa-facebook-f" style="font-size:13px;"></i></a><a href="https://pinterest.com/pin/create/button/?url={{ urlencode($url) }}&media=https%3A//www.bocadolobo.com/images/products/{{ $fullname_h }}-01-boca-do-lobo.png&description={{ urlencode($fullname) }}%20By%20Boca%20do%20Lobo" target="_blank"><i class="fab fa-lg fa-pinterest-p" style="font-size:13px;"></i></a><a href="https://api.whatsapp.com/send?text={{ $fullname }} by Boca do Lobo %0D{{ urlencode($url) }}" target="_blank"><i class="fab fa-whatsapp" style="padding-top: 2px;"></i></a><a href="mailto:?subject={{ $fullname }} by Boca do Lobo&amp;body=Check out this product {{ $fullname }}%0D{{ urlencode($url) }}" target="_blank"><img src="https://www.bocadolobo.com/images/icons/email.png" width="14px"/></a></div>' ;
          
        }
    
        return caption;
      }
       // clickContent: false
    
     
    });
    }
    start_fancybox();
    
                       
 
    
    
    var slideWrapper = $(".main-image"),
        iframes = slideWrapper.find('.embed-player'),
        lazyImages = slideWrapper.find('.slide-image'),
        lazyCounter = 0;
    
    // POST commands to YouTube or Vimeo API
    function postMessageToPlayer(player, command){
      if (player == null || command == null) return;
      player.contentWindow.postMessage(JSON.stringify(command), "*");
    }
    
    // When the slide is changing
    function playPauseVideo(slick, control){
      var currentSlide, slideType, startTime, player, video;
    
      currentSlide = slick.find(".slick-current");
      slideType = currentSlide.attr("class").split(" ")[1];
      player = currentSlide.find("iframe").get(0);
      startTime = currentSlide.data("video-start");
    
      if (slideType === "vimeo") {
        switch (control) {
          case "play":
            if ((startTime != null && startTime > 0 ) && !currentSlide.hasClass('started')) {
              currentSlide.addClass('started');
              postMessageToPlayer(player, {
                "method": "setCurrentTime",
                "value" : startTime
              });
            }
            postMessageToPlayer(player, {
              "method": "play",
              "value" : 1
            });
            break;
          case "pause":
            postMessageToPlayer(player, {
              "method": "pause",
              "value": 1
            });
            break;
        }
      } else if (slideType === "youtube") {
        switch (control) {
          case "play":
            postMessageToPlayer(player, {
              "event": "command",
              "func": "mute"
            });
            postMessageToPlayer(player, {
              "event": "command",
              "func": "playVideo"
            });
            break;
          case "pause":
            postMessageToPlayer(player, {
              "event": "command",
              "func": "pauseVideo"
            });
            break;
        }
      } else if (slideType === "video") {
        video = currentSlide.children("video").get(0);
        if (video != null) {
          if (control === "play"){
            video.play();
          } else {
            video.pause();
          }
        }
      }
    }
    
    // Resize player
    function resizePlayer(iframes, ratio) {
      if (!iframes[0]) return;
      var win = $(".main-image"),
          width = win.width(),
          playerWidth,
          height = win.height(),
          playerHeight,
          ratio = ratio || 16/9;
    
      iframes.each(function(){
        var current = $(this);
        if (width / ratio < height) {
          playerWidth = Math.ceil(height * ratio);
          current.width(playerWidth).height(height).css({
            left: (width - playerWidth) / 2,
             top: 0
            });
        } else {
          playerHeight = Math.ceil(width / ratio);
          current.width(width).height(playerHeight).css({
            left: 0,
            top: (height - playerHeight) / 2
          });
        }
      });
    }
    
    // DOM Ready
    $(function() {
      // Initialize
      slideWrapper.on("init", function(slick){
        slick = $(slick.currentTarget);
        setTimeout(function(){
          playPauseVideo(slick,"play");
        }, 1000);
        resizePlayer(iframes, 16/9);
      });
      slideWrapper.on("beforeChange", function(event, slick) {
        slick = $(slick.$slider);
        playPauseVideo(slick,"pause");
      });
      slideWrapper.on("afterChange", function(event, slick) {
        slick = $(slick.$slider);
        playPauseVideo(slick,"play");
      });
      slideWrapper.on("lazyLoaded", function(event, slick, image, imageSource) {
        lazyCounter++;
        if (lazyCounter === lazyImages.length){
          lazyImages.addClass('show');
          // slideWrapper.slick("slickPlay");
        }
      });
    
    });
    
    // Resize event
    $(window).on("resize.slickVideoPlayer", function(){  
      resizePlayer(iframes, 16/9);
    });
    
    
    jQuery(document).ready(function ($) {
    
      $('.thumbnail-nav').on('init', function(event, slick) {
          $(this).append('<div class="slick-counter"><span class="current"></span> / <span class="total"></span></div>');
          $('.current').text(slick.currentSlide + 1);
    
          @if( (isset($samepagefinishes)) && ($samepagefinishes === true))
            $('.total').text(finish_imgnumber[finish]);
          @else
            $('.total').text(slick.slideCount);
         @endif
        })
    
        $('.main-image').slick({
            slidesToShow: 1,
            asNavFor: '.thumbnail-nav',
            nextArrow: '<span class="lnr lnr-chevron-right" style="font-size:20px;position: absolute;top: 50%;right: 20px;z-index: 99;cursor:pointer;"></span>',
            prevArrow: '<span class="lnr lnr-chevron-left" style="font-size:20px;position: absolute;top: 50%;left: 20px;z-index: 99;cursor:pointer;"></span>',
            autoplaySpeed:4000,
            speed:600,
        })
        .on('beforeChange', function(event, slick, currentSlide, nextSlide) {
          $('.current').text(nextSlide + 1);
        });
    
        $('.thumbnail-nav').slick({
            slidesToShow: 4,
            asNavFor: '.main-image',
            focusOnSelect: true,
            vertical: true,
            verticalSwiping: true,
            nextArrow: '<span class="lnr lnr-chevron-down" style="font-size:20px;z-index: 99;cursor:pointer;"></span>',
            prevArrow: '<span class="lnr lnr-chevron-up" style="font-size:20px;z-index: 99;cursor:pointer;"></span>',
        });
    
    });
    
    
    
    
    $(".view_more_tab").click(function() {
        $('.tab-pane').removeClass('load_more_tab');
        $('.view_more_tab').hide();
        $('.close_more_tab').show();
    }); 
    
    $(".close_more_tab").click(function() {
        $('.tab-pane').addClass('load_more_tab');
        $('.close_more_tab').hide();
        $('.view_more_tab').show();
    });
    
    
    
    @for ($i=1; $i<=$finishnumber; $i++)
    
    $(".finish{{ $i }}").mouseover(function(){
      $(".name_finish_{{ $i }}").css("display", "inline-block");
    });
    $(".finish{{ $i }}").mouseout(function(){
        $(".name_finish_{{ $i }}").css("display", "none");
    });
    
    @if( (isset($samepagefinishes)) && ($samepagefinishes === true))
      $(".finish{{ $i }}").css('cursor', 'pointer');
      $(".finish{{ $i }}").click(function(e){
        e.preventDefault();
        if (finish != {{ $i }}){
            finish = {{ $i }};
            slideWrapper.slick('removeSlide', null, null, true);
            $('.thumbnail-nav').slick('removeSlide', null, null, true);
            $('.thumbnail-nav').slick('unslick').html('');
            @for ($ii = 1; $ii <= $finish_imgnumber[$i]; $ii++)
                @if ($ii < 10)
                    slideWrapper.slick('slickAdd','<a href="https://www.bocadolobo.com/images/products/{{ $fullname_h }}-0{{ $ii }}-zoom-boca-do-lobo<?php if ($i > 1){ echo '-'.$i+1;}?>.png" data-caption="{{ $produto }} {{ $categoria }}" data-fancybox="{{ $fullname_h }}" alt="{{ $produto }} {{ $categoria }} by Boca do Lobo"><img data-lazy="https://www.bocadolobo.com/images/products/{{ $fullname_h }}-0{{ $ii }}-boca-do-lobo<?php if ($i > 1){ echo '-'.$i+1;}?>.png" class="img-responsive image-entity"/></a>');
                    $('.thumbnail-nav').append('<div><img src="https://www.bocadolobo.com/images/products/{{ $fullname_h }}-0{{ $ii }}-boca-do-lobo<?php if ($i > 1){ echo '-'.$i+1;}?>.png" class="img-responsive" /></div>');
                @else
                    slideWrapper.slick('slickAdd','<a href="https://www.bocadolobo.com/images/products/{{ $fullname_h }}-{{ $ii }}-zoom-boca-do-lobo<?php if ($i > 1){ echo '-'.$i+1;}?>.png" data-caption="{{ $produto }} {{ $categoria }}" data-fancybox="{{ $fullname_h }}" alt="{{ $produto }} {{ $categoria }} by Boca do Lobo"><img data-lazy="https://www.bocadolobo.com/images/products/{{ $fullname_h }}-{{ $ii }}-boca-do-lobo<?php if ($i > 1){ echo '-'.$i+1;}?>.png" class="img-responsive image-entity"/></a>');
                    $('.thumbnail-nav').append('<div><img src="https://www.bocadolobo.com/images/products/{{ $fullname_h }}-{{ $ii }}-boca-do-lobo<?php if ($i > 1){ echo '-'.$i+1;}?>.png" class="img-responsive" /></div>');
                @endif
            @endfor
            setTimeout(function(){
                $('.thumbnail-nav').slick({
                    slidesToShow: 4,
                    asNavFor: '.main-image',
                    focusOnSelect: true,
                    vertical: true,
                    verticalSwiping: true,
                    nextArrow: '<span class="lnr lnr-chevron-down" style="font-size:20px;z-index: 99;cursor:pointer;"></span>',
                    prevArrow: '<span class="lnr lnr-chevron-up" style="font-size:20px;z-index: 99;cursor:pointer;"></span>',
                });
                start_fancybox();
                if ($(window).width() < 576){
                    $("html, body").animate({ scrollTop: 0 }, "slow");
                }
            }, 20);
        }
    });
    @endif
    @endfor
    
    </script>
    
@endsection