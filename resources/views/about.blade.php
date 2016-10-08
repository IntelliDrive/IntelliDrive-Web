@extends('layouts.app')

@section('content')
<style>
    .container table tr td {
        font-size: 3em;
        padding: 5em 4em 4em 4em
    }

    .container table {
        margin: 0 auto 0 auto;
    }
</style>

<div class="container">
    <table>
        <tr>
            <td>Thing1</td>
            <td>Thing2</td>
        </tr>
        <tr>
            <td>Thing3</td>
            <td>Thing4</td>
        </tr>
    </table>
</div>
@endsection
