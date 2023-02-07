@extends('dashboard.layouts.main')

@section('content')
<div id="app"></div>
<div class="kibana-wrap">
    <iframe src="http://94.154.12.177:5601/app/kibana#/dashboard/034d9ca0-bce9-11e8-a14e-9347c7b944a9?embed=true&_g=(refreshInterval%3A(pause%3A!f%2Cvalue%3A10000)%2Ctime%3A(from%3Anow-12h%2Cmode%3Aquick%2Cto%3Anow))"></iframe>
</div>
<script>
    $('main').css('padding', '0');
</script>
@endsection
