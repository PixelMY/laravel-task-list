<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Laravel Task List App</title>
	<script src="https://cdn.tailwindcss.com"></script>
	{{-- blade-formatter-disable --}}
	<style type="text/tailwindcss">
	
	.btn {
		@apply rounded-md px-2 py-1 text-center font-medium text-slate-700 shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50
	}

	.link {
		@apply font-medium text-gray-700 underline decoration-pink-500
	}
	
	</style>
	{{-- blade-formatter-enable --}}
	@yield("styles")
</head>

<body class="container mx-auto mt-10 mb-10 max-w-lg">
	<h1 class="text-2xl mb-4">@yield("title")</h1>
	<div>
		@if (session()->has("success"))
			<div>{{ session("success") }} </div>
		@endif
		@yield("content")
	</div>
</body>

</html>
