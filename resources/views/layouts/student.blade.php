<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ trans('panel.site_title') }}</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"
        rel="stylesheet" />
    <link href="https://unpkg.com/@coreui/coreui@3.2/dist/css/coreui.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/css/perfect-scrollbar.min.css"
          rel="stylesheet" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />


    @yield('styles')
</head>

<body class="c-app">
@include('layouts.student_partials.menu')
<div class="c-wrapper">
    @include('layouts.student_partials.header')


    <div class="c-body">
        <main class="c-main">


            <div class="container-fluid">
                @if (session('message'))
                    <div class="row mb-2">
                        <div class="col-lg-12">
                            <div class="alert alert-success" role="alert">{{ session('message') }}</div>
                        </div>
                    </div>
                @endif
                @if ($errors->count() > 0)
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @yield('content')

            </div>


        </main>
        <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/perfect-scrollbar.min.js"></script>
<script src="https://unpkg.com/@coreui/coreui@3.2/dist/js/coreui.min.js"></script>
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
<script src="{{ asset('js/main.js') }}"></script>


{{-- Setup --}}
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });
</script>




<script>
    $(function() {
        let copyButtonTrans = '{{ trans('global.datatables.copy') }}'
        let csvButtonTrans = '{{ trans('global.datatables.csv') }}'
        let excelButtonTrans = '{{ trans('global.datatables.excel') }}'
        let pdfButtonTrans = '{{ trans('global.datatables.pdf') }}'
        let printButtonTrans = '{{ trans('global.datatables.print') }}'
        let colvisButtonTrans = '{{ trans('global.datatables.colvis') }}'
        let selectAllButtonTrans = '{{ trans('global.select_all') }}'
        let selectNoneButtonTrans = '{{ trans('global.deselect_all') }}'

        let languages = {
            'en': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/English.json',
            'lt': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Lithuanian.json',
            'de': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/German.json',
            'ru': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Russian.json',
            'fr': 'https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json',
            'es': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json',
            'pt-br': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json',
            'id': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Indonesian.json',
            'nl': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Dutch.json',
            'tr': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Turkish.json',
            'bg': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Bulgarian.json',
            'hu': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Hungarian.json',
            'ua': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Ukrainian.json',
            'ca': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Catalan.json',
            'it': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Italian.json',
            'ar': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Arabic.json',
            'pl': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Polish.json',
            'se': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Swedish.json',
            'ro': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Romanian.json',
            'pt': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese.json',
            'vi': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Vietnamese.json',
            'am': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Armenian.json',
            'sr': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Serbian.json',
            'hr': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Croatian.json',
            'cs': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Czech.json',
            'bn': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Bangla.json',
            'ms': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Malay.json',
            'dk': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Danish.json',
            'zh': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Chinese-traditional.json',
            'sk': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Slovak.json',
            'cnr': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/English.json',
            'af': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Afrikaans.json',
            'zh-Hans': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Chinese.json',
            'th': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Thai.json',
            'no': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Norwegian-Bokmal.json',
            'mn': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Mongolian.json',
            'el': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Greek.json',
            'fa': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Persian.json',
            'gu': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Gujarati.json',
            'hi': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Hindi.json',
            'ee': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Estonian.json',
            'al': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Albanian.json',
            'by': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Belarusian.json',
            'sl': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Slovenian.json',
            'lv': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Latvian.json',
            'uz': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Uzbek.json',
            'ps': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Pashto.json',
            'fi': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Finnish.json',
            'he': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Hebrew.json',
            'ta': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Tamil.json',
            'si': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/Sinhala.json'
        };

        $.extend(true, $.fn.dataTable.Buttons.defaults.dom.button, {
            className: 'btn'
        })
        $.extend(true, $.fn.dataTable.defaults, {
            language: {
                url: languages['{{ app()->getLocale() }}']
            },
            columnDefs: [{
                orderable: false,
                className: 'select-checkbox',
                targets: 0
            }, {
                orderable: false,
                searchable: false,
                targets: -1
            }],
            select: {
                style: 'multi+shift',
                selector: 'td:first-child'
            },
            order: [],
            scrollX: true,
            pageLength: 100,
            dom: 'lBfrtip<"actions">',
            buttons: [{
                extend: 'selectAll',
                className: 'btn-primary',
                text: selectAllButtonTrans,
                exportOptions: {
                    columns: ':visible'
                },
                action: function(e, dt) {
                    e.preventDefault()
                    dt.rows().deselect();
                    dt.rows({
                        search: 'applied'
                    }).select();
                }
            },
                {
                    extend: 'selectNone',
                    className: 'btn-primary',
                    text: selectNoneButtonTrans,
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'copy',
                    className: 'btn-default',
                    text: copyButtonTrans,
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'csv',
                    className: 'btn-default',
                    text: csvButtonTrans,
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'excel',
                    className: 'btn-default',
                    text: excelButtonTrans,
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'pdf',
                    className: 'btn-default',
                    text: pdfButtonTrans,
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'print',
                    className: 'btn-default',
                    text: printButtonTrans,
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'colvis',
                    className: 'btn-default',
                    text: colvisButtonTrans,
                    exportOptions: {
                        columns: ':visible'
                    }
                }
            ]
        });

        $.fn.dataTable.ext.classes.sPageButton = '';
    });
</script>
@yield('scripts')
</body>

</html>
