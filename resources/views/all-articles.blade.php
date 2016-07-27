@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Articles - {{ $pageName }}</div>

                <div class="panel-body">

			<ul>
				@foreach($articles as $article)
					<li><a href="{{ URL::to('/') }}/{{ $article->link }}">{{ $article->title }}</a></li>
				@endforeach
			</ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
