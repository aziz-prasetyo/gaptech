<div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route('kegiatan.update', $kegiatan->id)}}"  enctype="multipart/form-data">
       @csrf
       @method('PUT')
         <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" id="title" name="judul_kegiatan" class="form-control" required value="{{$kegiatan->judul_kegiatan}}">
        </div>
        <img src="{{url('public/Image/'.$kegiatan->foto_kegiatan)}}"/>
        <div class="form-group">
          <label for="exampleInputEmail1">Foto kegiatan</label>
          <input type="file" id="title" name="foto_kegiatan" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>