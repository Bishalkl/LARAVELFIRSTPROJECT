<!-- inclde to get elemnt components -->
@include('layouts.header')
<!-- add the yield of section name -->
 @yield('main-section')
 <!-- using components -->
 @component('components.message', ['title'=> 'Hello!'])
    This is a custom message inside a component.
 @endcomponent
@include('layouts.footer')