@extends('layouts.app')

@section('content')
<style>
    .container table tr td {
        padding: 4em 3em 3em 3em;
        width: 25%;
    }
    .container table tr td img {
        height: 6em;
        margin-top: 0;
        padding-top: 0;
    }

    .about-title {
        font-size: 2em;
    }
    .about-desc {
	text-align: justify;
        font-size: 1.4em;
    }

    .container table {
        margin: 0 auto 0 auto;
        text-align: center;
        vertical-align: text-top;
    }

    h2 {
        font-weight: bold;
        font-size: 4em;
        text-align: center;
        color: #8BC34A;
    }

    .tagline {
        font-size: 2em;
        text-align: center;
    }
</style>

<div class="container">
    <h2>Making your dumb car smarter</h2>
    <p class="tagline">IntelliDrive's mission is to simplify responsible driving on and off the road, using three convenient utilities.</p>
    <table>
        <tr>
            <td>
                <img src="{{asset('assets/images/data_tracker.png')}}" alt="Data Metrics">
                <p class="about-title">Expenditure</p>
                <p class="about-desc">Whether of business travel or for personal use, we help track your gas spending and miles travled for responsible driving feedback.</p>
            <td>
                <img src="{{asset('assets/images/speedometer.png')}}" alt="Car Anxiety">
                <p class="about-title">Efficiency</p>
                <p class="about-desc">IntelliDrive Efficiency is a computerized way to monitor your vehicle's fuel efficiency through data entry whenever you fill 'er up.</p>
            </td>
            <td>
                <img src="{{asset('assets/images/verbal_chat_bot.png')}}" alt="Car Anxiety">
                <p class="about-title">Engage</p>
                <p class="about-desc">Getting tired on the road? Stay awake with our sassy chat bot Mia who will give you a run for your money with a lively conversation.</p>
            </td>
        </tr>
    </table>
</div>
@endsection
