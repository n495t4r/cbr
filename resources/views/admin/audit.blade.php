
@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Audit Trail</h1>
@stop

@section('content')

@forelse ($audits as $audit)

<div id="article" class="container" data-metadata='{!! $audit->getMetadata(true) !!}' data-modified='{!! $audit->getModified(true) !!}'>
    <div v-model="metadata">
        <div class="row">
            <div class="col-md-3">
                <strong>@lang('common.id')</strong>
            </div>
            <div class="col-md-9">@{{ metadata.audit_id }}</div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <strong>@lang('common.event')</strong>
            </div>
            <div class="col-md-9">@{{ metadata.audit_event }}</div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <strong>@lang('common.user')</strong>
            </div>
            <div class="col-md-9">@{{ metadata.user_name }}</div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <strong>@lang('common.ip_address')</strong>
            </div>
            <div class="col-md-9">@{{ metadata.audit_ip_address }}</div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <strong>@lang('common.user_agent')</strong>
            </div>
            <div class="col-md-9">@{{ metadata.audit_user_agent }}</div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <strong>@lang('common.tags')</strong>
            </div>
            <div class="col-md-9">@{{ metadata.audit_tags.join() }}</div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <strong>@lang('common.url')</strong>
            </div>
            <div class="col-md-9">@{{ metadata.audit_url }}</div>
        </div>
    </div>

    <hr/>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>@lang('common.attribute')</th>
                <th>@lang('common.old')</th>
                <th>@lang('common.new')</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(value, attribute) in modified">
                <td><strong>@{{ attribute }}</strong></td>
                <td class="danger">@{{ value.old }}</td>
                <td class="success">@{{ value.new }}</td>
            </tr>
        </tbody>
    </table>
</div>

@endforelse




@dd('end');
<ul>
    @forelse ($audits as $audit)
    <li>
        @lang('article.updated.metadata', $audit->getMetadata())

        @foreach ($audit->getModified() as $attribute => $modified)
        <?php        
            $a1=$modified;
            $a2=array("attr"=> $attribute);
            $merger = array_merge($a1,$a2);
        ?>
        <ul>
            <li>@lang('article.'.$audit->event.'.modified.name', $merger )</li>
        </ul>
        @endforeach
    </li>
    @empty
    <p>@lang('article.unavailable_audits')</p>
    @endforelse
</ul>

@stop