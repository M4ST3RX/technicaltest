<li>
    <a href="{{ route('category', $category->id) }}">{{ $category->name }}</a>
    @if($category->children()->count() > 0)
        <ul>
            @foreach($category->children as $category)
                @include('category', $category)
            @endforeach
        </ul>
    @endif
</li>
