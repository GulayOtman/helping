@extends('layouts.master')
@section('title', 'Yeni İlan Oluştur')
@php(setlocale(LC_ALL, 'tr_TR.UTF-8'))

@section('content')

    <form action="{{ route('ad.create.post') }}" method="post" class="row">
        @csrf
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="form-group">
                                <label for="title">İlan Başlığı</label>
                                <input type="text" name="title" id="title" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="form-group">
                                <label for="kt_summernote_1">İlan İçeriği</label>
                                <textarea class="summernote" name="description" id="kt_summernote_1" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="form-group">
                                <label for="category_id">İlan Kategorisi</label>
                                <select class="form-control selectpicker" data-live-search="true" name="category_id" id="category_id" required>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="form-group">
                                <label for="city_id">Şehir</label>
                                <select class="form-control selectpicker" data-live-search="true" name="city_id" id="city_id" required>
                                    @foreach($cities as $city)
                                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="form-group">
                                <label for="price">İlan Ücreti</label>
                                <input type="text" class="form-control" name="price" id="price" required>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="form-group">
                                <label for="start_date">İlan Başlangıç Tarihi</label>
                                <input type="datetime-local" class="form-control" name="start_date" id="start_date" required>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="form-group">
                                <label for="end_date">İlan Bitiş Tarihi</label>
                                <input type="datetime-local" class="form-control" name="end_date" id="end_date" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="row">
                <div class="col-xl-12">
                    <button type="submit" class="btn btn-success btn-block">Oluştur</button>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <div class="col-xl-12">
                                            <div class="dropzone dropzone-default" id="kt_dropzone_1">
                                                <div class="dropzone-msg dz-message needsclick">
                                                    <h3 class="dropzone-msg-title">Tıklayın yada Sürükleyin</h3>
                                                    <span class="dropzone-msg-desc">Yüklemek İstediğiniz Görseli Sürükleyin Veya Seçmek İçin Tıklayın</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection

@section('page-styles')



@stop

@section('page-script')
    <script src="{{ asset('assets/js/pages/crud/forms/editors/summernote.js?v=7.0.3') }}"></script>
    <script src="{{ asset('assets/js/pages/crud/file-upload/dropzonejs.js?v=7.0.3') }}"></script>

@stop
