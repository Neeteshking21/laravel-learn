<div>

<!-- Blade templete is a plain text that converts in php after compilation -->
<!-- It makes define templete easy than php -->

    <h1>{{$title}}-> Component</h1>
    @for($i=0; $i<=10; $i++) <!--Start for loop-->
    @if($i%2==0)             <!--Start If condition-->
        <h4>item {{$i}}</h4>    
    @endif                    <!--End if condition-->
    @endfor          <!--End for loop-->
    <!-- An unexamined life is not worth living. - Socrates -->
</div>