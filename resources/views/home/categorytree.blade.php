@foreach($children as $subcategory)
    <ul class="dropdown">
        @if(count($subcategory->children))

            <li style="color: #1D00AF;font-family: 'Arial Black'">
                {{$subcategory->title}}
            </li>
            <ul class="dropdown">
                @include('home.categorytree',['children'=>$subcategory->children])
            </ul>
            <hr>
        @else
            <li class="has-dropdown"><a href="{{route('categorycontents',['id'=>$subcategory->id,'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a></li>
        @endif
    </ul>
@endforeach
