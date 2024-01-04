@foreach($galeri as $a)

<p>{{$a->id}}</p>
<form method="POST" action="{{route('galeri.destroy',$a->id)}}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}

        <div class="form-group">
            <input type="submit" class="btn btn-danger delete-user" value="Delete photo">
        </div>
</form>
<a href="{{route('galeri.show',$a->id)}}">Detail</a>

@endforeach