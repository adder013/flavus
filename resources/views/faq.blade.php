@extends('layouts.master')

@section('content')
<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ URL::to('/') }}"><span itemprop="name">Главная</span></a>
        <meta itemprop="position" content="1">
        <span>|</span>
    </div>
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ URL::to('customers') }}"><span itemprop="name">Покупателям</span></a>
        <meta itemprop="position" content="2">
        <span>|</span>
    </div>
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ URL::to('customers/faq') }}"><span itemprop="name">Частые вопросы</span></a>
        <meta itemprop="position" content="3">
        <span>|</span>
    </div>
</div>
<div class="faq-page">
	<h1>Частые вопросы</h1>
	<div class="categories">
		@foreach ($faq as $category)
			<div class="category">
				<div class="category-name">
					<h2>{{ $category->name }}</h2>
					<div class="circle open"><img src="/svg/arrow.svg"></div>
				</div>
				<ul class="questions">
					@foreach ($category->questions as $question)
						<li class="question"><span class="plus">&#43;</span>{{ $question->question }}</li>
						<p class="answer">{!! $question->answer !!}</p>
					@endforeach
				</ul>
			</div>
		@endforeach
	</div>
</div>

<script>
	var animationTime = 250;
	$(document).ready(function() {
		$('.category-name').on('click', open_category);
		$('.question').on('click', open_answer);
	});	
	function open_category() {
		// $('.questions').not($(this).next()).slideUp(animationTime);
		// $('.category-name').not($(this)).children().removeClass('open');
		$(this).next().slideToggle(animationTime);
		$(this).children().last().toggleClass('open');
	}	
	function open_answer() {
		// $('.answer').not($(this).next()).slideUp(animationTime);
		$(this).next().slideToggle(animationTime);
		$(this).toggleClass('open');
	}
</script>
@endsection
