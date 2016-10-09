@extends('layouts.app')

@section('content')
<style>
    .dev-image {
        border-radius: 50%;
        height: 13em;
        margin: 1em 1em 1em 0em;
        float: left;
    }
    h2 {
        font-weight: bold;
        font-size: 4em;
        text-align: center;
        clear:both;
        color: #8BC34A;
    }
    .sub-title {
        text-align: center;
        font-size: 2em;
    }
    .clear {
        clear: right;
    }
</style>

<div class="container">
    <h2>Hey there!</h2>
    <p class="sub-title">We are a team of 3 Computer Science majors from the University of Massachusetts, Lowell who whipped up IntelliDrive in 36 hours at the HackUMass IV Hackathon on October 7-9, 2016.</p>
    <img class="dev-image" src="{{asset('assets/images/josh.jpg')}}" alt="Joshua Hassler">
    <p><b style="color:#689F38;font-size:3em">JOSHUA HASSLER</b><br><span class="clear" style="font-size:1.4em;"><b style="color:#8Bc34A">Back End Web Developer & System Admin</b><br>Joshua has three years of database experience and maintains and improves the the UMass Lowell WUML radio station website.</span></br>
    <img class="dev-image" src="{{asset('assets/images/darrien.jpg')}}" alt="Darrien Glasser">
    <p><b style="color:#689F38;font-size:3em">DARRIEN GLASSER</b><br><span class="clear" style="font-size:1.4em;"><b style="color:#8Bc34A">Android App Developer</b><br>Darrien has been producing Android apps like crazy, both at Endeavor Robotics during an eight-month co-op and on his own in the past year.</span></br>
    <img class="dev-image" src="{{asset('assets/images/becky.jpg')}}" alt="Becky Campelli">
    <p><b style="color:#689F38;font-size:3em">REBECCA CAMPELLI</b><br><span class="clear" style="font-size:1.4em;"><b style="color:#8Bc34A">Graphic Designer & Web Content Advisor</b><br>Becky has two years of commercial photography experience and enjoys making visual presentations aesthetically pleasing to the eye.</span></br>
</div>
@endsection
