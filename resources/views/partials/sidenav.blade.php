@extends('layouts.app')

@section('content')
	<ul id="slide-out" class="side-nav fixed"">
		<li>
			<div class="user-view center" style="height: 120px;">
	      <div class="background">
	      </div>
	      <a href="{{route('root')}}"><span class="grey-text name" style="font-size: 50px;">Azadal</span></a>
	  	</div>
	  </li>
	  <li class="no-padding">
	  	<a href="{{route('root')}}" class="waves-effect waves-orange">
	  		<i class="fa fa-home blue-text fa-2x" aria-hidden="true"></i>Home
	  	</a>
	  	@if(Auth::user()->type == 'admin')
		  	<a href="/admin" class="waves-effect waves-orange">
		  		<i class="fa fa-user-circle green-text" aria-hidden="true"></i>Admin Panel
		  	</a>
	  	@endif
	  </li>
	  <li class="no-padding">
	    <ul class="collapsible collapsible-accordion">
	      <li class="bold">
	      	<a class="collapsible-header waves-effect waves-orange active" style="border-top: .1px solid #e0e0e0">
	      		<i class="fa fa-sort-desc" aria-hidden="true"></i>Account
	      	</a>
	        <div class="collapsible-body">
	          <ul>
	            <li>
	            	<a href="{{route('profile')}}"><i class="fa fa-user" aria-hidden="true"></i>My Account</a>
	            </li>
	            <li>
	            	<a href="{{route('profile')}}"><i class="fa fa-cog" aria-hidden="true"></i>Account settings</a>
	            </li>
	            <li>
	            	<a href="{{route('logout')}}" 
	            		onclick="event.preventDefault();document.getElementById('logout-form').submit();">
	            		<i class="fa fa-sign-out" aria-hidden="true"></i>Logout
	            	</a>
	            </li>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		            @csrf
		        	</form>
	            <li></li>
	          </ul>
	        </div>
	      </li>
	      <li class="bold">
	      	<a class="collapsible-header waves-effect waves-orange">
	      		<i class="fa fa-sort-desc" aria-hidden="true"></i>Shop Now
	      	</a>
	        <div class="collapsible-body" style="display: none;">
	          <ul>
	            <li>
	            	<a href="{{route('shop')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Buy products</a>
	            </li>
	            <li>
	            	<a href="{{route('mycart')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i>My cart</a>
	            </li>
	            <li>
	            	<a href="{{route('favorites')}}"><i class="fa fa-heart" aria-hidden="true"></i>My Favorites</a>
	            </li>
	            <li>
	            	<a href="{{route('myorders')}}"><i class="fa fa-shopping-basket" aria-hidden="true"></i>My Orders</a>
	            </li>
	            <li>
	            	<a href="{{route('storelist')}}"><i class="fa fa-home" aria-hidden="true"></i>Saved Stores</a>
	            </li>
	          </ul>
	        </div>
	      </li>
	      <li class="bold">
	      	<a class="collapsible-header waves-effect waves-orange">
	      		<i class="fa fa-sort-desc" aria-hidden="true"></i>Store
	      	</a>
	        <div class="collapsible-body">
	          <ul>
	          	<li>
	          		<a href="{{route('orders')}}">
	          			<i class="fa fa-shopping-basket"></i>Orders
	          		</a>
	          	</li>
	            <li>
	            	<a href="{{route('mystore')}}"><i class="fa fa-shopping-basket" aria-hidden="true"></i>My Store</a>
	            </li>
	            <li>
	            	<a href="{{route('storeproducts')}}"><i class="fa fa-shopping-basket" aria-hidden="true"></i>Store products</a>
	            </li>
	            <li>
	            	<a href="{{route('addproducts')}}"><i class="fa fa-plus" aria-hidden="true"></i>Add products</a>
	            </li>
	            <li></li>
	          </ul>
	        </div>
	      </li>
	      <li class="bold">
	      	<a class="collapsible-header waves-effect waves-orange">
	      		<i class="fa fa-sort-desc" aria-hidden="true"></i>Sales
	      	</a>
	        <div class="collapsible-body">
	          <ul>
	            <li>
	            	<a href="badges.html"><i class="fa fa-bar-chart" aria-hidden="true"></i>Product Sales</a>
	            </li>
	            <li>
	            	<a href="badges.html"><i class="fa fa-bar-chart" aria-hidden="true"></i>Sold Products</a>
	            </li>
	            <li>
	            	<a href="badges.html"><i class="fa fa-bar-chart" aria-hidden="true"></i>Statistics</a>
	            </li>
	            <li>
	            	<a href="badges.html"><i class="fa fa-shopping-basket" aria-hidden="true"></i>Orders</a>
	            </li>
	          </ul>
	        </div>
	      </li>
	    </ul>
	  </li>
	</ul>

	<div class="body-container">
		<nav class="orange accent-5 profile-nav">
			<a href="#" data-activates="slide-out" class="btn-flat orange accent-5 button-collapse hide-on-large-only right waves-light waves-effect">
				<i class="fa fa-bars" aria-hidden="true"></i>
			</a>
		</nav>
	  <div class="item-container" style="padding: 10px!important">
			@yield('sidenav_content')
	  </div>
	  <div class="fixed-action-btn horizontal">
	    <a class="btn-floating btn-large red waves-light waves-effect" href="{{route('shop')}}">
	      <span class="fa fa-shopping-basket"></span>
	    </a>
	  </div>
	</div>

	<style type="text/css">
		.profile-nav {
			box-shadow: none;
			margin-bottom: 20px;
		}
	</style>
@endsection