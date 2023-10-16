<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="My portfolio , Thanks  for visit">
    <meta name="author" content="Wasim Ansari">
    <title>Portfolio</title>
    <!-- Bootstrap +  style.css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Bootstrap Icon  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
@if(Session::has('success'))
    <div class="alert alert-success notification-popup">
        {{Session::get('success')}}
    </div>
@endif
    <!-- Header -->
    @component('components.header-component')
    @endcomponent
    <!-- Nav Bar -->
    @component('components.nav-component')
    @endcomponent
    <!-- Basic Details -->
    @component('components.basicdetail-component')
    @endcomponent
    <!--Resume Section-->
    @component('components.resume-component')
    @endcomponent
    <!-- Work Time -->
    @component('components.worktime-component')
    @endcomponent
    <!-- Projects -->
    @component('components.project-component')
    @endcomponent


    <!-- Freelancing -->
    @component('components.freelance-component')
    @endcomponent

    <!-- Contact -->
    @component('components.contact-component')
    @endcomponent
    <!-- Footer -->
    @component('components.footer-component')
    @endcomponent

    <!-- js -->
    <script src="{{asset('js/main.js')}}"></script>

</body>

</html>