@foreach($artikel as $a)

<p>{{$a->id}}</p>
<form method="POST" action="{{route('artikel.destroy',$a->id)}}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}

        <div class="form-group">
            <input type="submit" class="btn btn-danger delete-user" value="Delete article">
        </div>
</form>
<a href="{{route('artikel.show',$a->id)}}">Detail</a>

@endforeach