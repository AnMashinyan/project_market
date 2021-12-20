<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link rel="icon" href="{{asset('assets/admin/img/logo.png')}}">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{asset('assets/admin/css/admin.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/plugin/summernote/summernote-bs4.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" data-enable-remember="true" href="#" role="button">
                    <i class="fas fa-bars"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="{{route('logout')}}">Ելք <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
            </li>
        </ul>
    </nav>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="{{url('/')}}" target="_blank" class="brand-link">
            <img src="{{asset('assets/admin/img/logo.png')}}" alt="Admin Logo"
                 class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Դեպի կայք</span>
        </a>
        <div class="sidebar">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{asset('assets/admin/img/avatar5.png')}}" class="img-circle elevation-2"
                         alt="Admin Image">
                </div>
                <div class="info">
                    <a href="{{route('admin.index')}}" class="d-block">{{Auth()->user()->name}}</a>
                </div>
            </div>
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-archive"></i>
                            <p>Կատեգորիա <i class="right fas fa-angle-left"></i></p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('categories.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Ցանկ</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('categories.create')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Ավելացնել</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tags"></i>
                            <p>Tag <i class="right fas fa-angle-left"></i></p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('tags.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Ցանկ</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('tags.create')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Ավելացնել</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>Նյութ<i class="right fas fa-angle-left"></i></p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('posts.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Ցանկ</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('posts.create')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Ավելացնել</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>Գիրք<i class="right fas fa-angle-left"></i></p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('books.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Ցանկ</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('books.create')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Ավելացնել</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tasks"></i>
                            <p>Առաջադրանք<i class="right fas fa-angle-left"></i></p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('tasks.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Ցանկ</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('tasks.create')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Ավելացնել</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </nav>
        </div>
    </aside>
    <div class="content-wrapper">
        <div class="container mt-2">
            <div class="row">
                <div class="col-12">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-unsettled">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            <ul class="list-unsettled">
                                {{session('success')}}
                            </ul>
                        </div>
                    @endif

                    @if (session()->has('error'))
                        <div class="alert alert-danger">
                            <ul class="list-unsettled">
                                {{session('error')}}
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        @yield('content')
    </div>
    <footer class="main-footer">
        <strong>2021 - {{date("Y")}}</strong>
    </footer>
    <aside class="control-sidebar control-sidebar-dark">
    </aside>
</div>
<script src="{{asset('assets/admin/js/admin.js')}}"></script>
<script src="{{asset('assets/admin/plugin/summernote/summernote-bs4.js')}}"></script>
<script>
    $('.nav-sidebar a').each(function () {
        let location = window.location.protocol + '//' + window.location.host + window.location.pathname
        let link = this.href
        if (link === location) {
            $(this).addClass('active')
            $(this).closest('.has-treeview').addClass('menu-open')
        }
    })

</script>
<script>
    $(function () {
        bsCustomFileInput.init();
        $('#contentApi').summernote({
            height: 300,
        });
    });
</script>
</body>
</html>
