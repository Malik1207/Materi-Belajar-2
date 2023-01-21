@extends('layouts.master')

<div class="alert alert-{{$class}} fade alert-dismissible show">
    <h4 class="alert-heading">
        <u>
            {{$judul}}
        </u>
    </h4>
    {{$slot}}
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
