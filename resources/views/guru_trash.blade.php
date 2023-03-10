<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #22 : Soft Deletes Laravel</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
 
	<div class="container">
 
		<div class="card mt-5">
			<div class="card-header text-center">
				Data Guru
			</div>
			<div class="card-body">
 
				<a href="{{url('guru')}}">Data Guru</a>
				|
				<a href="{{url('guru')}}/{{('trash')}}" class="btn btn-sm btn-primary">Tong Sampah</a>
 
				<br/>
				<br/>
 
				<a href="{{url('guru')}}/{{('kembalikan_semua')}}">Kembalikan Semua</a>
				|
				<a href="{{url('guru')}}/{{('hapus_permanen_semua')}}">Hapus Permanen Semua</a>
				<br/>
				<br/>
 
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Nama</th>
							<th>Umur</th>
							<th width="30%">OPSI</th>
						</tr>
					</thead>
					<tbody>
						@foreach($guru as $g)
						<tr>
							<td>{{ $g->nama }}</td>
							<td>{{ $g->umur }}</td>
							<td>
								<a href="{{url('guru')}}/{{('kembalikan')}}/{{$g->id}}" class="btn btn-success btn-sm">Restore</a>
								<a href="{{url('guru')}}/{{('hapus_permanen')}}/{{$g->id}}" class="btn btn-danger btn-sm">Hapus Permanen</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
</body>
</html>