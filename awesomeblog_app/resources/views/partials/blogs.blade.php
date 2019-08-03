<div class="media my-3">             
    <div class="media-left media-middle">
        <div class="avatar square">
            <div class="default">
                <i class="glyphicon glyphicon-user"></i>
            </div>
        </div>
    </div>


    <div class="col-12 card px-0">
    @foreach($blogs as $blog)
        <div class="card-header text-right py-1">
            <a class="btn btn-warning" role="button" href="edit/{{$blog->id}}"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></a>
            <form class="d-inline" action="delete/{{$blog->id}}" method="POST">
                @csrf
                <button class="btn btn-danger" type="submit"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></button>
            </form>
        </div>


        <div class="card-body">
            <blockquote class="blockquote mb-0">

            <p>{{ $blog->content }}</p>

            <footer class="blockquote-footer">Posted {{ $blog->created_at }}<cite></cite></footer>
            </blockquote>
        </div>
    @endforeach
    </div>
</div>
