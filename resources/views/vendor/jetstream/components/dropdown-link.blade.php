@role('admin')
<a {{ $attributes->merge(['class' => 'block  text-xs  text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 ']) }}>{{ $slot }}</a>
@endrole

@role('user')
<a {{ $attributes->merge(['class' => 'block  text-base  text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 ']) }}>{{ $slot }}</a>
@endrole

