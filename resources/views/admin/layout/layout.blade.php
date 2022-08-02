
<!DOCTYPE html>
<html lang="en">

@include('admin.master.head')

<body>

    @include('sweetalert::alert')

    @include('admin.master.header')




    @include('admin.master.sidebar')

    <main id="main" class="main">

        <!-- Start Page Title -->
        <div class="pagetitle">
            <h1>@yield('title')</h1>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">


                @yield('content')


            </div>
        </section>

    </main>
    <!-- End #main -->


    @include('admin.master.footer')



    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    @include('admin.master.js')

</body>

</html>
