<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title"><a href="#"> {{$comment->owner->name}}</a> said
            {{$comment->created_at->diffForHumans()}}</h3>
    </div>
    <div class="panel-body">
        {{$comment->body}}
    </div>
</div>