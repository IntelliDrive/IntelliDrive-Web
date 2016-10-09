@extends('layouts.app')

@section('content')
<style>
    .container table tr td {
        font-size: 2em;
        padding: 4em 3em 3em 3em
    }
    .container table tr td img {
        height: 6em;
    }

    .container table {
        margin: 0 auto 0 auto;
        text-align: center;
    }
</style>

<div class="container">
    <table>
        <tr>
            <td>
                <img src="{{asset('assets/images/anxiety_care.png')}}" alt="Car Anxiety">
                <p>Some text goes here</p>
            </td>
            <td>
                <img src="{{asset('assets/images/data_tracker.png')}}" alt="Data Metrics">
                <p>Some text goes here</p>
            </td>
        </tr>
        <tr>
            <td>
                <img src="{{asset('assets/images/speedometer.png')}}" alt="Car Anxiety">
                <p>Some text goes here</p>
            </td>
            <td>
                <img src="{{asset('assets/images/verbal_chat_bot.png')}}" alt="Car Anxiety">
                <p>Some text goes here</p>
            </td>
        </tr>
    </table>
</div>
@endsection
