<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<div class="m-3 p-3">
<h1 class="text-center mb-3">Добавить студента в группу: {{ $group->title }}</h1>
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form class="d-flex flex-column align-items-start rounded border border-primary-subtle p-3 mb-2" method="POST" action="{{ route('groups.students.store', $group) }}">
    @csrf
    <label for="surname">Фамилия:
        <input type="text" name="surname" id="surname" required>
    </label>

    <label for="name">Имя:
        <input type="text" name="name" id="name" required>
    </label>

    <button class="btn bg-success text-white mt-2" type="submit">Добавить студента</button>
</form>

<footer class="footer">
    <!-- Ссылка на страницу просмотра группы -->
    <a class="btn bg-primary text-white" href="{{ route('groups.show', $group->id) }}">Вернуться к группе</a>
    <!-- Ссылка на список всех групп -->
    <a class="btn bg-primary text-white" href="{{ route('groups.index') }}">Вернуться к списку групп</a>
</footer>
</div>

