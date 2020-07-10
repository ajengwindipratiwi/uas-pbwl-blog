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
	<h3>Edit Daftar Post</h3>
	<form action="{{ url('/post/' . $rows->post_id) }}" method="POST">
		<input type="hidden" name="_method" value="PATCH">
		@csrf
		<table>
			<tr>
				<td>Tanggal Post</td>
				<td><input type="date" name="post_date" value="{{ $rows->post_date }}"></td>
			</tr>
			<tr>
				<td>Ukuran Gambar</td>
				<td><input type="text" name="post_slug" value="{{ $rows->post_slug }}"></td>
			</tr>
			<tr>
				<td>Nama Postingan</td>
				<td><input type="text" name="post_title" value="{{ $rows->post_title }}"></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td><input type="text" name="post_text" value="{{ $rows->post_text }}"></td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td>
					<select name="post_cat_id">
						@foreach($cat as $row)
						<option value="{{ $row->post_cat_id }}">{{ $row->cat_id }}</option>
						@endforeach
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="UPDATE"></td>
			</tr>
		</table>
	</form>

  <div class="footer">

    copyright &copy; 2020. Programmed by Ajeng Windi Pratiwi
  
  </div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>