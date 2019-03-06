@extends('layouts.main')

@section('content')

	<!-- Bootstrap шаблон... -->

	<div class="panel-body">
		<!-- Отображение ошибок проверки ввода -->
{{--	@include('common.errors')--}}

	<!-- Форма новой задачи -->
		<form action="{{ url('admin/posts') }}" method="POST" class="form-horizontal">
		{{ csrf_field() }}
		<!-- Имя задачи -->
		<div class="form-group">
			<label for="task" class="col-sm-3 control-label">Новость</label>

			<div class="col-sm-6">
				<input type="text" name="name" id="task-name" class="form-control">
			</div>
			<div class="col-sm-6">
			    <textarea></textarea>
			</div>
			</div>

			<!-- Кнопка добавления задачи -->
		<div class="form-group">
			<div class="col-sm-offset-3 col-sm-6">
				<button type="submit" class="btn btn-default">
					<i class="fa fa-plus"></i> Сохранить
				</button>
			</div>
		</div>
	</form>
</div>

	<!-- TODO: Текущие задачи -->
	<!-- Текущие задачи -->
	{{$posts}}
	@if (count($posts) > 0)
		<div class="panel panel-default">
			<div class="panel-heading">
				Current tasks
			</div>
			<div class="panel-body">
				<table class="table table-striped task-table">
					<!-- Заголовок таблицы -->
					<thead>
						<tr>
							<th>Task</th>
							<th>Action</th>
						</tr>
					</thead>
					<!-- Тело таблицы -->
					<tbody>
						@foreach ($posts as $task)
							<tr>
								<!-- Имя задачи -->
								<td class="table-text">
									<div>{{ $task->name }}</div>
								</td>
								<td>
									<form action="{{url("task/".$task->id)}}"
									      method="post">
									{{ csrf_field() }}
									{{ method_field("DELETE") }}
									<!-- Button -->
										<button class="btn btn-outline-danger">
											<i class="fa fa-trash"></i>
										</button>
									</form>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	@endif
@endsection