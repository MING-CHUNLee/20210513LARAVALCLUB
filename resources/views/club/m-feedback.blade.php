@extends('layouts.app')
@include('inc.m_navbar')
@section('content')


    <div class="m-5">

        <h5><strong>即時反饋</strong></h5>
        <div class="my-3 p-5 bg-d light border border-light border-radius" style="border-radius: 10px;">
            <div class="container-fluid">
                <div class="row mt-3">
                    <div class="col-5 text-center">
                        <strong>標題</strong> 
                        <hr>
                    </div>
                    <div class="col-1 text-center">
                        <strong>分類</strong> 
                        <hr>
                    </div>
                    <div class="col-2 text-center">
                        <strong>反饋日期</strong>                       
                        <hr>
                    </div>
                    <div class="col-4 text-center">
                        <strong>詳情</strong>
                        <hr>
                    </div>
                </div>
                @if(count($feedback)>0)
                    @php
                        $mnum = 1;
                    @endphp
                    @foreach($feedback as $f)
                        @php
                            $modal = "exampleModal".(string)$mnum;
                        @endphp
                <div class="row">
                    <div class="col-5 text-center">
                        <p>{{ $f ->title}}</p>
                    </div>
                    <div class="col-1 text-center">
                        <span class="badge badge-secondary spanF bg-r">{{ $f -> feedback_name}}</span>
                    </div>
                    <div class="col-2 text-center">
                        <span>{{ $f -> date }}</span>
                    </div>
                    <div class="col-4 text-center">
                        <button type="button" class="btn button-c" data-toggle="modal" data-target="<?php echo "#".$modal ?>" 
                            style="border-radius: 25px;">
                            MORE
                        </button>
                        <div class="modal fade c0" id="<?php echo $modal ?>" tabindex="-1" role="dialog"
                        aria-labelledby="<?php echo $modal."Title" ?>" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content bg-d">
                                    <div class="modal-header">
                                        <h5 class="modal-title"  id="<?php echo $modal."Title" ?>">{{ $f ->title}}</h5>
                                        <button type="button" class="close c0" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div>
                                            <p>反饋日期：{{ $f -> date}}</p>
                                            <p>
                                            {{ $f -> content}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary button-c" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endsection