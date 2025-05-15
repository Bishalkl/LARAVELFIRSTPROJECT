<!--using best way to write php code in  Blade file -->
@php
    $name = "<h1>Bishal Koirala</h1>";
@endphp

<!-- Display variables -->

 <!-- for html file to display from above -->
{!!$name!!} <br> 

<!-- normal direct variable passed from routes in blade -->
{{ $value }}

<!-- using condition php in blade -->
 @if($value == '')
    <h1>You are an adult</h1
 @else 
    <h1>{{$value}}</h1>
@endif

<p>This is while-loop</p>
<!-- using while  -->
 @php $i = 1 @endphp
 @while($i < 10)
    <p>{{$value}}</p>
     @php $i += 1 @endphp
 @endwhile

<p>This is for-loop</p>
 <!-- for loop -->
  @for($i = 0; $i < 10; $i++) 
    <p>{{$value}}</p>
  @endfor
 
<p>This is foreach-loop</p>
 <!-- foreach -->
  @php 
    $fruits = ["Apple", "Orange", "pineapple", "mango"];
  @endphp

  @foreach($fruits as $fruit)
    <p>{{$fruit}}</p>
  @endforeach

<!-- isset -->
 @isset($value)
    <p>{{"Yes value is exists"}}</p>
@endisset

<!-- unless -->
 @unless($value == "bishal")
    <p>Bishal is not exists</p>
@endunless



