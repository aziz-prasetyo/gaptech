<div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('galeri')}}" enctype="multipart/form-data">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" id="title" name="judul_foto" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Foto Galeri</label>
          <input type="file" id="title" name="foto_galeri" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>