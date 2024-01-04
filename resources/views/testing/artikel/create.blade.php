<div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('artikel')}}" enctype="multipart/form-data">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" id="title" name="judul" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Tag</label>
          <input type="text" id="title" name="tag" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Description</label>
          <textarea name="isi_artikel" class="form-control" required></textarea>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Foto Artikel</label>
          <input type="file" id="title" name="foto_artikel" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>