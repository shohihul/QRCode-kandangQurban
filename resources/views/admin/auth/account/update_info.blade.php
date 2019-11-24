@extends('admin.layouts.layout')

@section('before_styles')

@endsection

@section('content')

    <div class="row">
        <div class="col-lg-4 col-lg-pull-6 col-md-6 col-sm-6">

            {{-- User Left --}}
            @include('admin.auth.account.left_box')
        </div>

        <div class="col-lg-8 col-lg-push-3 col-md-12">

            {{-- User Right --}}
            @include('admin.auth.account.right_box')

        </div>
    </div>
@endsection

@section('after_scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            // for tabs

            // Tabs refresh stay in menu
            // wire up shown event
            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                sessionStorage.setItem('activeTab', $(e.target).attr('href'));
            });
            // read hash from page load and change tab
            var activeTab = sessionStorage.getItem('activeTab');
            if(activeTab){
                $('.nav-tabs a[href="' + activeTab + '"]').tab('show');
            }
        } );
    </script>
@endsection
