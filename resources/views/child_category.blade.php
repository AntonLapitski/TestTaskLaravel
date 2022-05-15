<li>{{ $child_category->name }}</li><input type="hidden" value="{{$child_category->id}}"><input type="checkbox" id="subfolder1" id="{{'subfolder1' . $category->id }}" name="{{$child_category->name}}" value="{{$child_category->id}}">
@if ($child_category->categories)
    <ul>
        @foreach ($child_category->categories as $childCategory)
            @include('child_category', ['child_category' => $childCategory])
        @endforeach
    </ul>
@endif
