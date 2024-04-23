<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<div class="m-3 p-3">
<h1 class="text-center mb-3">
    Просмотр группы
</h1>
<h3>{{ $group->title }}</h3>
<a class="btn bg-warning text-white"  href="{{ route('groups.edit', $group->id) }}">Редактировать</a>
<p>Дата начала: {{ $group->start_from }}</p>
<p>Статус: {{ $group->is_active ? 'Активна' : 'Неактивна' }}</p>
<form action="{{ route('groups.destroy', $group->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button class="btn bg-danger text-white" class="btn"  type="submit">Удалить группу</button>
</form>
<h3>Студенты в группе:</h3>
<ul class="d-flex flex-column list-unstyled">
    @foreach ($group->students as $student)
        <li class="card m-1"><a class="p-3 card-text" href="{{ route('groups.students.show', [$group->id, $student->id]) }}">{{ $student->name }} {{ $student->surname }}</a></li>
    @endforeach
</ul>
<a class="btn bg-success text-white mb-2" href="{{ route('groups.students.create', $group->id) }}">Добавить студента</a>

<footer class="footer">
    <!-- Ссылка на список всех групп -->
    <a class="btn bg-primary text-white" href="{{ route('groups.index') }}">Вернуться к списку групп</a>
</footer>
</div>

