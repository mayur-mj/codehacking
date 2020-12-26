

<!-- Header -->
@include('includes.front_header')



    <!-- Navigation -->

    @include('includes.front_home_nav')

    <!--- Page Content --->

    @include('includes.flash_message')

    @yield('content')
        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; CodeHacking.test  {{ \Carbon\Carbon::now()->year }}</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/libs.js') }}"></script>

</body>

</html>
