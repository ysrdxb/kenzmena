<!doctype html>
<html lang="en">

@include('admin.components.head')

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
        @include('admin.components.sidebar')
		<!--end sidebar wrapper -->
		<!--start header -->
        @include('admin.components.header')
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
        @include('admin.components.footer')
	</div>
	<!--end wrapper-->

	<!-- search modal -->
    @include('admin.components.modal')
    <!-- end search modal -->

	<!-- Bootstrap JS -->
	@include('admin.components.script')
</body>

</html>