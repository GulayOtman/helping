@extends('layouts.master')
@section('title', 'İlanlarım')
@php(setlocale(LC_ALL, 'tr_TR.UTF-8'))

@section('content')

    <div class="d-flex flex-column-fluid">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3">
                    <div class="flex-row-auto offcanvas-mobile w-300px w-xl-350px" id="kt_profile_aside">
                        <div class="card card-custom card-stretch">
                            <form action="{{ route('search') }}" method="get" class="card-body pt-4">
                                @csrf
                                <div class="d-flex justify-content-end">

                                </div>
                                <div class="navi navi-bold navi-hover navi-link-rounded">
                                    <div class="navi-item mb-2">
                                        <a href="{{ route('ad.create') }}" class="navi-link py-4 active">
                                            <span class="navi-icon mr-2">
                                                <span class="svg-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"/>
                                                            <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
                                                            <path d="M11,11 L11,7 C11,6.44771525 11.4477153,6 12,6 C12.5522847,6 13,6.44771525 13,7 L13,11 L17,11 C17.5522847,11 18,11.4477153 18,12 C18,12.5522847 17.5522847,13 17,13 L13,13 L13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 L11,13 L7,13 C6.44771525,13 6,12.5522847 6,12 C6,11.4477153 6.44771525,11 7,11 L11,11 Z" fill="#000000"/>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </span>
                                            <span class="navi-text font-size-lg">Yeni İlan Oluştur</span>
                                        </a>
                                    </div>
                                    <hr>
                                    <div class="navi-item mb-2">
                                        <label style="width: 100%">
                                            <input type="text" class="form-control" name="keyword" value="{{ @$keyword }}">
                                        </label>
                                    </div>
                                    <hr>
                                    <div class="navi-item mb-2">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <label>Tarih Aralığı</label>
                                                <label style="width: 100%">
                                                    <input type="datetime-local" class="form-control" name="start_date" value="{{ @$startDate }}">
                                                </label>
                                            </div>
                                            <div class="col-xl-12">
                                                <label style="width: 100%">
                                                    <input type="datetime-local" class="form-control" name="end_date" value="{{ @$endDate }}">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <button class="btn btn-primary btn-block">Filtrele</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9">
                    @foreach($ads as $ad)
                        <div class="card card-custom mb-5">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 mr-7">
                                        <div class="symbol symbol-50 symbol-lg-120 symbol-light-primary">
                                            <span class="font-size-h3 symbol-label font-weight-boldest"></span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap mt-2">
                                            <div class="mr-3">
                                                <a href="#" class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">
                                                    {{ $ad->title }}
                                                    <i class="flaticon2-correct text-success icon-md ml-2"></i></a>
                                                <div class="d-flex flex-wrap my-2">
                                                    <a href="#" class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                                        <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
                                                                    <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        {{ auth()->user()->email }}
                                                    </a>
                                                    <a href="#" class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                                        <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <mask fill="white">
                                                                        <use xlink:href="#path-1" />
                                                                    </mask>
                                                                    <g />
                                                                    <path d="M7,10 L7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 L17,10 L18,10 C19.1045695,10 20,10.8954305 20,12 L20,18 C20,19.1045695 19.1045695,20 18,20 L6,20 C4.8954305,20 4,19.1045695 4,18 L4,12 C4,10.8954305 4.8954305,10 6,10 L7,10 Z M12,5 C10.3431458,5 9,6.34314575 9,8 L9,10 L15,10 L15,8 C15,6.34314575 13.6568542,5 12,5 Z" fill="#000000" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        @foreach($ad->categories as $category) {{ $category->name }},  @endforeach
                                                    </a>
                                                    <a href="#" class="text-muted text-hover-primary font-weight-bold">
                                                        <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path d="M9.82829464,16.6565893 C7.02541569,15.7427556 5,13.1079084 5,10 C5,6.13400675 8.13400675,3 12,3 C15.8659932,3 19,6.13400675 19,10 C19,13.1079084 16.9745843,15.7427556 14.1717054,16.6565893 L12,21 L9.82829464,16.6565893 Z M12,12 C13.1045695,12 14,11.1045695 14,10 C14,8.8954305 13.1045695,8 12,8 C10.8954305,8 10,8.8954305 10,10 C10,11.1045695 10.8954305,12 12,12 Z" fill="#000000" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        {!! $ad->address !!}
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="my-lg-0 my-1">
                                                <a href="#" class="btn btn-sm btn-light-primary font-weight-bolder text-uppercase mr-2">Soru Sor</a>
                                                <a href="#" data-toggle="modal" data-target="#ApplyModal" class="btn btn-sm btn-primary font-weight-bolder text-uppercase">Başvur</a>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center flex-wrap justify-content-between">
                                            <div class="flex-grow-1 font-weight-bold text-dark-50 py-2 py-lg-2 mr-5">
                                                {!! $ad->description !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="separator separator-solid my-7"></div>
                                <div class="d-flex align-items-center flex-wrap">
                                    <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                                        <span class="mr-4">
                                            <i class="flaticon-piggy-bank icon-2x text-muted font-weight-bold"></i>
                                        </span>
                                        <div class="d-flex flex-column text-dark-75">
                                            <span class="font-weight-bolder font-size-sm">İlan Ücreti</span>
                                            <span class="font-weight-bolder font-size-h5">
                                                <span class="text-dark-50 font-weight-bold"></span>{{ $ad->price }}₺
                                            </span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                                        <span class="mr-4">
                                            <i class="flaticon-confetti icon-2x text-muted font-weight-bold"></i>
                                        </span>
                                        <div class="d-flex flex-column text-dark-75">
                                            <span class="font-weight-bolder font-size-sm">Görüntülenme Sayısı</span>
                                            <span class="font-weight-bolder font-size-h5">
                                                <span class="text-dark-50 font-weight-bold"></span>164,700
                                            </span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                                        <span class="mr-4">
                                            <i class="flaticon-pie-chart icon-2x text-muted font-weight-bold"></i>
                                        </span>
                                        <div class="d-flex flex-column text-dark-75">
                                            <span class="font-weight-bolder font-size-sm">Başvuru Sayısı</span>
                                            <span class="font-weight-bolder font-size-h5">
                                                <span class="text-dark-50 font-weight-bold"></span>3,217
                                            </span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                                        <span class="mr-4">
                                            <i class="flaticon-file-2 icon-2x text-muted font-weight-bold"></i>
                                        </span>
                                        <div class="d-flex flex-column flex-lg-fill">
                                            <span class="text-dark-75 font-weight-bolder font-size-sm">Yardım Başlangıç Tarihi</span>
                                            <a href="#" class="text-primary font-weight-bolder">{{ strftime('%d %B %Y, %H:%M', strtotime($ad->start_date)) }}</a>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                                        <span class="mr-4">
                                            <i class="flaticon-file-2 icon-2x text-muted font-weight-bold"></i>
                                        </span>
                                        <div class="d-flex flex-column">
                                            <span class="text-dark-75 font-weight-bolder font-size-sm">Yardım Bitiş Tarihi</span>
                                            <a href="#" class="text-primary font-weight-bolder">{{ strftime('%d %B %Y, %H:%M', strtotime($ad->start_date)) }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @if($ads->total() > 0)
                        <div class="card card-custom">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="d-flex flex-wrap mr-3">
                                        @if(!$ads->onFirstPage())
                                            <a href="{{ $ads->url(1) }}" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                                                <i class="ki ki-bold-double-arrow-back icon-xs"></i>
                                            </a>
                                            <a href="{{ $ads->previousPageUrl() }}" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                                                <i class="ki ki-bold-arrow-back icon-xs"></i>
                                            </a>
                                        @endif
                                        <a class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">
                                            {{ $ads->currentPage() }}
                                        </a>
                                        @if($ads->hasMorePages())
                                            <a href="{{ $ads->nextPageUrl() }}" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                                                <i class="ki ki-bold-arrow-next icon-xs"></i>
                                            </a>
                                            <a href="{{ $ads->url($ads->lastPage()) }}" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                                                <i class="ki ki-bold-double-arrow-next icon-xs"></i>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        Kayıt Bulunamadı
                    @endif
                </div>
            </div>

        </div>
    </div>

    <div class="modal fade" id="ApplyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static" data-keyboard="false" aria-hidden="true">
        <div class="modal-dialog" role="document" style="max-width:800px;">
            <div class="modal-content" style="margin-top: 25%">
                <div class="modal-header">
                    <h5 class="modal-title">Başvuru Yap</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        Seçili ilana başvuru yapmak istediğinize emin misiniz?
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="apply">Başvuru Yap</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Vazgeç</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('page-styles')



@stop

@section('page-script')
    <script>

    </script>
@stop
