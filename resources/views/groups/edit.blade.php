<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<div class="m-3 p-3">
<h1 class="text-center mb-3">Редактировать группу: {{ $group->title }}</h1>

@if ($errors->any())
<div>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form class="d-flex flex-column align-items-start" method="POST" action="{{ route('groups.update', $group->id) }}">
    @csrf
    @method('PUT')

    <label for="title">Название группы:
        <input class="rounded bg-light border-0" type="text" name="title" id="title" value="{{ $group->title }}" required>
    </label>


    <label for="start_from">Дата начала:
        <input class="rounded bg-light border-0" type="date" name="start_from" id="start_from" value="{{ $group->start_from instanceof \Illuminate\Support\Carbon ? $group->start_from->toDateString() : $group->start_from }}" required>
    </label>


    <label for="is_active">Активна:
        <input type="hidden" name="is_active" value="0">
        <input type="checkbox" name="is_active" id="is_active" value="1" {{ $group->is_active ? 'checked' : '' }}>
    </label>


    <button class="btn bg-success text-white mt-3" type="submit">Сохранить изменения</button>
</form>

<footer class="footer">
    <!-- Ссылка на страницу просмотра группы -->
    <a class="btn bg-primary text-white" href="{{ route('groups.show', $group->id) }}">Вернуться к группе</a>
    <!-- Ссылка на список всех групп -->
    <a class="btn bg-primary text-white" href="{{ route('groups.index') }}">Вернуться к списку групп</a>
</footer>
</div>

