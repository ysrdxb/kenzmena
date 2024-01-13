<!doctype html>
<html lang="en">

@include('components.head')

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
        @include('components.sidebar')
		<!--end sidebar wrapper -->
		<!--start header -->
        @include('components.header')
		<!--end header -->
		<!--start page wrapper -->
        @yield('content')
		<!--end page wrapper -->
		<!--start overlay-->
		 <div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button-->
		  <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
        @include('components.footer')
	</div>
	<!--end wrapper-->

	<!-- search modal -->
    @include('components.modal')
    <!-- end search modal -->

	<!-- Bootstrap JS -->
	@include('components.script')
</body>

</html>