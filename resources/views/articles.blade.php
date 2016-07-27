@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            	<div class="table-responsive">
		  	<table class="table">
				<thead>
					<tr>
						<td colspan="3">
							<a href="{{ URL::to('add/article') }}" class="btn btn-primary">Add</a>
						</td>
					</tr>					
					<tr>
						<th>#</th>
						<th>Title</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach($articles as $article)
					<tr>
						<td>{{ $article->id }}</td>
						<td>{{ $article->title }}</td>
						<td>
							<span class="label label-primary"><a style="color:#FFFFFF;" href="{{ URL::to('edit/article') }}/{{ $article->id }}">edit</a></span>
							<span class="label label-danger"><a class="deleteArticle" style="color:#FFFFFF;" id="{{ $article->id }}" rel="{{ URL::to('/') }}" href="#">delete</a></span>
						</td>
					</tr>
					@endforeach
				</tbody>
		  	</table>
		</div>
        </div>
    </div>
</div>
@endsection
