@include('landingpage.components.header')

<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

    <!-- MENU BAR -->
    @include('landingpage.components.bar')


    <!-- HERO -->
   @include('landingpage.section.home')
{{-- about --}}
    @include('landingpage.section.about')
    {{-- work --}}
    @include('landingpage.section.work')

    <!-- TESTIMONIAL -->
    @include('landingpage.section.testimonial')


     <!-- FAQ -->
    @include('landingpage.section.faq')


    @include('landingpage.section.contact')
     
@include('landingpage.components.footer')
</body>
</html>