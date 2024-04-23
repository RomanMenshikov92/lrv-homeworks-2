<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<div class="m-3 p-3">
<h1 class="text-center mb-3">
    Создание новой группы
</h1>
@if ($errors->any())
<div>
    <ul class="d-flex flex-column list-unstyled">
        @foreach ($errors->all() as $error)
            <li class="card">{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form class="d-flex flex-column align-items-start" method="POST" action="{{ route('groups.store') }}">
    @csrf
    <label for="title">Название группы:
        <input class="rounded bg-light border-0" type="text" name="title" id="title" required>
    </label>


    <label for="start_from">Дата начала:
        <input class="rounded bg-light border-0" type="date" name="start_from" id="start_from" required>
    </label>


    <label for="is_active">Активна:
        <input type="hidden" name="is_active" value="0">
        <input type="checkbox" name="is_active" id="is_active" value="1" {{ old('is_active') ? 'checked' : '' }}>
    </label>


    <button class="btn bg-success text-white mt-2" type="submit">Создать группу</button>
</form>

<footer class="footer">
    <!-- Ссылка на список всех групп -->
    <a class="btn bg-primary text-white" href="{{ route('groups.index') }}">Вернуться к списку групп</a>
</footer>
</div>

