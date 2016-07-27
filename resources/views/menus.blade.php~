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
							<a href="{{ URL::to('add/menu') }}" class="btn btn-primary">Add</a>
						</td>
					</tr>					
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach($menus as $menu)
					<tr>
						<td>{{ $menu->id }}</td>
						<td>{{ $menu->name }}</td>
						<td>
							<span class="label label-primary"><a style="color:#FFFFFF;" href="{{ URL::to('edit/menu') }}/{{ $menu->id }}">edit</a></span>
							<span class="label label-danger"><a class="deleteMenu" style="color:#FFFFFF;" id="{{ $menu->id }}" rel="{{ URL::to('/') }}">delete</a></span>
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
