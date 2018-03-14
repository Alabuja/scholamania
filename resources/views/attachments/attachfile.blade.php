<table id="example2" class="table table-bordered table-striped">
	{{-- <thead>
	    <tr>
	        <th>Title</th>
	        <th>Action</th>
	    </tr>
	</thead> --}}
	<tbody>
	    @foreach($fileMessage as $file)
	        <tr>
	            {{-- <td>{{$file->name}}</td> --}}
	            <td><a href="{{$file->resource_url}}" target="_blank">
	            		{{$file->name}}
					</a>
				</td>
	        </tr>
	    @endforeach
	</tbody>   
</table>