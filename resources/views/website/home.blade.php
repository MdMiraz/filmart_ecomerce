@extends('layouts.website')

@section('content')

<!--sidebar-->			
@include('includes.frontend.category-menu')
@include('includes.frontend.hot-deal')
@include('includes.frontend.special-offer')	
@include('includes.frontend.product-tag')
@include('includes.frontend.special-deals')
@include('includes.frontend.newsletter')
@include('includes.frontend.advertise')

		
<!--main content-->
@include('includes.frontend.slider')
@include('includes.frontend.info-box')
@include('includes.frontend.new-products')
@include('includes.frontend.wide-product')			
@include('includes.frontend.feature-product')			
@include('includes.frontend.wide-product2')			
@include('includes.frontend.best-seller')			
@include('includes.frontend.new-arrivals')	
@include('includes.frontend.brand-carosel')	

@endsection