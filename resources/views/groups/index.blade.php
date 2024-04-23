<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<div class="m-3 p-3">
<h1 class="text-center mb-3">Список всех групп</h1>
<a class="btn bg-success mb-3 text-white" href="{{ route('groups.create') }}">Создать новую группу</a>
<ul class="d-flex list-unstyled">
    @foreach ($groups as $group)
        <li class="card m-1"><a class="p-3 card-text" href="{{ route('groups.show', $group->id) }}">{{ $group->title }}</a></li>
    @endforeach
</ul>
</div>

