@extends("layouts.app")

@section("title", "The list of tasks")

@section("content")
	{{-- <div> --}}
	{{-- <div> --}}
	<nav class="mb-4">
		<a class="font-medium text-gray-700 underline decoration-pink-500" href="{{ route("tasks.create") }}">Add Task!</a>
	</nav>

	{{-- </div> --}}
	{{-- @if (count($tasks)) --}}
	@forelse ($tasks as $task)
		{{-- <div>{{ $task->title }}</div> --}}
		<div>
			<a @class(["line-through" => $task->completed]) href="{{ route("tasks.show", ["task" => $task->id]) }}">{{ $task->title }}</a>
		</div>
	@empty
		<div>There are no tasks!</div>
	@endforelse
	{{-- @endif --}}

	@if ($tasks->count())
		<nav class="mt-4">
			{{ $tasks->links() }}
		</nav>
	@endif
	{{-- </div> --}}
@endsection
