@foreach($kegiatan as $a)

<p>{{$a->id}}</p>
<form method="POST" action="{{route('kegiatan.destroy',$a->id)}}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}

        <div class="form-group">
            <input type="submit" class="btn btn-danger delete-user" value="Delete kegiatan">
        </div>
</form>
<a href="{{route('kegiatan.show',$a->id)}}">Detail</a>

@endforeach