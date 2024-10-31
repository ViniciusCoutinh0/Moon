<body {!! $attributes->merge(['class' => 'relative text-slate-900 bg-slate-100 text-base antialiased']) !!}>
    {{ $slot }}

    @vite('resources/js/app.js')
</body>
