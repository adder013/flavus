@extends('dashboard.layouts.main')

@section('content')
<div class="currencies">
	<div>{{ $currencies->USD }} USD</div>
	<div>{{ $currencies->EUR }} EUR</div>
</div>
<div class="container">
    <dashboard :user-id="{{ \Auth::user()->id }}"></dashboard>
    <div class="timeline">
        @foreach ($changelog as $version => $content)
    	<div @if ($content['rollback']) class="timeline-month-safe" @else class="timeline-month-unsafe" @endif>
    		{{ $content['date'] }}
    		<span>{{ $content['time'] }}</span>
    	</div>
    	<div class="timeline-section">
    		<div class="timeline-date" onclick="rollback('{{ $version }}')">
    			Версия {{ $version }}
    		</div>
    		<div class="row">
                @if (isset($content['changes']))
    			<div class="col-sm-4">
    				<div class="timeline-box">
    					<div class="box-title">
    						@svg('features') Что нового
    					</div>
    					<div class="box-content">
                            @foreach ($content['changes'] as $change)
        						<div class="box-item"><strong>-</strong> {{ $change }}</div>
                            @endforeach
    					</div>
    					<div class="box-footer">{{ $content['email'] }}</div>
    				</div>
    			</div>
                @endif
                @if (isset($content['bugfixes']))
    			<div class="col-sm-4">
    				<div class="timeline-box">
    					<div class="box-title">
    						@svg('bugfixes') Исправленные баги
    					</div>
    					<div class="box-content">
                            @foreach ($content['bugfixes'] as $bugfix)
        						<div class="box-item"><strong>-</strong> {{ $bugfix }}</div>
                            @endforeach
    					</div>
    					<div class="box-footer">{{ $content['email'] }}</div>
    				</div>
    			</div>
                @endif
                @if (isset($content['dbchanges']))
    			<div class="col-sm-4">
    				<div class="timeline-box">
    					<div class="box-title">
    						@svg('database') Изменения в базе данных
    					</div>
    					<div class="box-content">
                            @foreach ($content['dbchanges'] as $change)
        						<div class="box-item"><strong>-</strong> {{ $change }}</div>
                            @endforeach
    					</div>
    					<div class="box-footer">{{ $content['email'] }}</div>
    				</div>
    			</div>
                @endif
    		</div>
    	</div>
        @endforeach
    </div>
</div>
@endsection
