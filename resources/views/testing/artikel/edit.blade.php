<div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route('artikel.update', $artikel->id)}}"  enctype="multipart/form-data">
       @csrf
       @method('PUT')
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" id="title" name="judul" class="form-control" required="" value="{{$artikel->judul}}">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Tag</label>
          <input type="text" id="title" name="tag" class="form-control" required="" value="{{$artikel->tag_jenis_artikel}}">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Description</label>
          <textarea name="isi_artikel" class="form-control" required="">{{ $artikel->isi_artikel }}</textarea>
        </div>
        <img src="{{url('public/Image/'.$artikel->foto_artikel)}}"/>
        <div class="form-group">
          <label for="exampleInputEmail1">Foto Artikel</label>
          <input type="file" id="title" name="foto_artikel" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>