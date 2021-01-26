@extends('yonetim.layouts.master')
@section('title' , 'Kullanıcı')
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">Kullanıcı Yönetimi</h3>
                </div>
                <div class="content-header-right col-md-4 col-12">
                <div class="btn-group float-md-right">
                    <div class="bug-list-search">
                        <div class="bug-list-search-content">
                            <form action="#">
                                <div class="position-relative">
                                    <input type="search" id="search-contacts" class="form-control" placeholder="Ara...">
                                    <div class="form-control-position">
                                        <i class="fa fa-search text-size-base text-muted"></i>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <section class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-head">
                            <div class="card-header">
                                <h4 class="card-title">Kullanıcı Listesi</h4>
                                <a class="heading-elements-toggle"><i class="ft-ellipsis-h font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <button class="btn btn-primary btn-sm"><i class="ft-plus white"></i>Kullanıcı Ekle</button>
                                    <span class="dropdown">
                                        <button id="btnSearchDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="btn btn-warning dropdown-toggle dropdown-menu-right btn-sm"><i class="ft-download-cloud white"></i></button>
                                        <span aria-labelledby="btnSearchDrop1" class="dropdown-menu mt-1 dropdown-menu-right">
                                            <a href="#" class="dropdown-item"><i class="ft-upload"></i>Yükle</a>
                                            <a href="#" class="dropdown-item"><i class="ft-download"></i>İndir</a>
                                        </span>
                                    </span>
                                    <button class="btn btn-danger btn-sm">Temizle</button>
                                </div>
                            </div>
                        </div>

                        <div class="card-content">
                            <div class="card-body">
                                <!-- Task List table -->
                                <div class="table-responsive">
                                    <table id="users-contacts" class="table table-white-space table-bordered row-grouping display no-wrap icheck table-middle">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Ad Soyad</th>
                                                <th>Email</th>
                                                <th>Aktif Mi</th>
                                                <th>Yönetici Mi</th>
                                                <th>Kayıt Tarihi</th>
                                                <th>Ayarlar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @if (count($list) == 0)
                                            <tr><td colspan="6" class="text-center">Kayıt bulunamadı!</td></tr>
                                        @endif
                                        @foreach ($list as $entry)
                                            <tr>
                                                <td>{{$entry->id}}</td>
                                                <td>
                                                    <div class="media">
                                                        <div class="media-body media-middle">
                                                            <a href="#" class="media-heading">{{$entry->nameSurname}}</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <a href="mailto:email@example.com">{{$entry->email}}</a>
                                                </td>
                                                <td class="text-center">
                                                    @if($entry->active)
                                                    <span class="badge badge-success">Aktif</span>
                                                    @else
                                                    <span class="badge badge-danger">Pasif</span>
                                                    @endif
                                                </td>
                                                <td class="text-center">
                                                    @if($entry->admin)
                                                    <span class="badge badge-info">Yönetici</span>
                                                    @else
                                                    <span class="badge badge-warning">Müşteri</span>
                                                    @endif
                                                </td>

                                                <td class="text-center">{{$entry->created_at}}</td>
                                                <td>
                                                    <span class="dropdown">
                                                        <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                                        <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
                                                            <a href="#" class="dropdown-item"><i class="ft-edit-2"></i>Düzenle</a>
                                                            <a href="#" class="dropdown-item"><i class="ft-trash-2"></i>Sil</a>
                                                        </span>
                                                    </span>
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                    <div class="ps-pagination blog--pagination">
                                        {{ $list->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    	</div>
	</div>
@endsection
