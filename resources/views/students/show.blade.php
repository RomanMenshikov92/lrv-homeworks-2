<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<div class="m-3 p-3">
<h1 class="text-center mb-3">Информация о студенте</h1>
    <div class="rounded border border-primary-subtle p-3 mb-2">
        <p class="m-0">Фамилия: {{ $student->surname }}</p>
        <p class="m-0">Имя: {{ $student->name }}</p>
        <p class="m-0">Группа: {{ $student->group->title }}</p>
    </div>

<footer class="footer">
  <!-- Ссылка на страницу просмотра группы -->
  <a class="btn bg-primary text-white" href="{{ route('groups.show', $group->id) }}">Вернуться к группе</a>
  <!-- Ссылка на список всех групп -->
  <a class="btn bg-primary text-white" href="{{ route('groups.index') }}">Вернуться к списку групп</a>
</footer>
</div>

