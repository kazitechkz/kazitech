<!DOCTYPE html>
<html lang="zxx">

<head>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="KAZ ITECH, IT Компания, Создание сайтов в Казахстане, Создание Мобильных приложений, Техподдержка, Автоматизация, AI в Казахстане, ML в Казахстане ">
    <meta name="description" content="KAZ ITECH - комплексные IT решения для вашего бизнеса, от создания мобильного приложения, сайта до автоматизации в Казахстане">
    <meta name="author" content="ТОО KAZ ITECH">

    <!-- Title  -->
    <title>KAZ ITECH</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/imgs/favicon.ico">
    <base href="/">
    @include("components.style")
    @stack("css")

</head>

<body>



<!-- ==================== Start Loading ==================== -->

@include("components.loader")

<!-- ==================== End Loading ==================== -->


<div class="cursor"></div>


<!-- ==================== Start progress-scroll-button ==================== -->

<div class="progress-wrap cursor-pointer">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>

<!-- ==================== End progress-scroll-button ==================== -->



<!-- ==================== Start Navbar ==================== -->

@include("components.navbar")

<!-- ==================== End Navbar ==================== -->

@yield('content')






@include("components.script")
@stack("js")



</body>

</html>
