
@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Audit Trail</h1>
@stop

@section('content')
<ul>
    @forelse ($audits as $audit)
    {{-- @dd($audit->getModified()); --}}
    {{-- @dd($audits) --}}
    <li>
        
        @lang('article.'.$audit->event.'.metadata', $audit->getMetadata())

        @foreach ($audit->getModified() as $attribute => $modified)
        <?php        
            $a1=$modified;
            $a2=array("attr"=> $attribute);
            $a3= array("audit_tags"=> $audit->tags.PHP_EOL);
            $merger = array_merge($a1,$a2,$a3);
        ?>
        <ul>
            @if ($audit->event != "deleted")
                <li>@lang('article.'.$audit->event.'.modified.detail', $merger )</li>    
            @else
                @if ($attribute == "name")
                    <li>@lang('article.'.$audit->event.'.modified.detail', $merger )</li>    
                @endif
            @endif
        </ul>
        @endforeach
    </li>
    @empty
    <p>@lang('article.unavailable_audits')</p>
    @endforelse
</ul>

@stop