@include('frontend.partials.start')

	<div class="body-inner">
		@include('frontend.partials.topBar')
		@include('frontend.partials.header')

		@yield('content')

		@include('frontend.partials.footer')
		@include('frontend.partials.end')
	</div>
	
</body>
</html>

