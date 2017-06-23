@extends('layouts.layout')
@section('admin')
                <div class="page-content-wrapper">
                    <div class="page-content">
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="index.html">Panel de Control</a>
                                </li>
                            </ul>
                        </div>
                        <br>
                        <div class="portlet light form-fit bordered">
                            <div class="portlet-body form">
                                <div class="row">
                                    <div class="col-md-12">
                                    @foreach($data as $row)
                                       PATERNO: {!! $row->paterno !!}
                                    @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
@endsection