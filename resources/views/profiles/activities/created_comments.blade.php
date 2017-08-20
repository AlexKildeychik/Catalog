@component('profiles.activities.activity')
@slot('heading')
{{ $profileUser->name }} comments to
<a href="{{ $activity->subject->catalog->path() }}">"{{ $activity->subject->catalog->title }}"</a>
@endslot

@slot('body')
{{ $activity->subject->body }}
@endslot
@endcomponent