<!DOCTYPE html>
<html>
<head>
	<title></title>
	<div class="p-3 mb-2 bg-primary text-white"></div>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">GAMBAR ILUSTRASI</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/category">KATEGORI</a>
      </li>
    </li>
      <li class="nav-item">
        <a class="nav-link" href="/photos">FOTO</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/post">POST</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/album">ALBUM</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
	<div class="container">

<div class="container">
	<h3 class="p-3 mb-2 bg-secondary text-white">Daftar Album</h3>
	<a href="{{ url('album/create') }}">Tambah Data</a>
	<table class="table">
		<thead class="table-success">
		<tr>
			<td>NAMA ALBUM</td>
			<td>KETERANGAN</td>
			<td>ID FOTO</td>
			<td></td>
			<td></td>
		</tr>

		@foreach($rows as $row)
		<tr>
			<td>{{ $row->album_name }}</td>
			<td>{{ $row->album_text }}</td>
			<td>{{ $row->album_photos_id }}</td>
			<td>
				<a href="{{ url('album/' . $row->album_id . '/edit') }}">Edit</a>
			</td>
			<td>
				<form action="{{ url('album/' . $row->album_id) }}" method="POST">
				<input type="hidden" name="_method" value="DELETE">
				@csrf
				<button>Hapus</button>
				</form>
			</td>
		</tr></thead>
		@endforeach
	</table>
</div>

	</div>

  <div class="footer">

    copyright &copy; 2020. Programmed by Ajeng Windi Pratiwi
  
  </div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
