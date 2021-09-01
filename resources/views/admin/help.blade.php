@extends('layouts.admin')

@section('content')
<div class="main-content-inner">
    <div class="row">
        <div class="col-lg-4 mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="invoice-area">
                        <div class="invoice-head">
                            <div class="row">
                                <div class="iv-left col-6">
                                    <span>Поддержка</span>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-table table-responsive mt-5">
                            <table class="table table-bordered table-hover text-right">
                                <thead>
                                    <tr>
                                        <th>Тел</th>
                                        <th>+998907252252</th>
                                    </tr>
                                    <tr>
                                        <th>Telegram</th>
                                        <th><a href="t.me/script_support">script_support</a></th>
                                    </tr>
                                    <tr>
                                        <th>Telegram</th>
                                        <th><a href="www.youtube.com">script_support</a></th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection