<div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route('galeri.update', $galeri->id)}}"  enctype="multipart/form-data">
       @csrf
       @method('PUT')
         <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" id="title" name="judul_foto" class="form-control" required value="{{$galeri->judul_foto}}">
        </div>
        <img src="{{url('public/Image/'.$galeri->foto_galeri)}}"/>
        <div class="form-group">
          <label for="exampleInputEmail1">Foto Galeri</label>
          <input type="file" id="title" name="foto_galeri" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>