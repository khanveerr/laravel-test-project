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
					<tr>
						<td>1</td>
						<td>Home</td>
						<td>
							<span class="label label-primary"><a style="color:#FFFFFF;" href="#">edit</a></span>
							<span class="label label-danger"><a style="color:#FFFFFF;" href="#">delete</a></span>
						</td>
					</tr>
				</tbody>
		  	</table>
		</div>
        </div>
    </div>
</div>
@endsection
