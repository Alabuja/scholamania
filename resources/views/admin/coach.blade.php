@extends('admin.layouts.app')

@section('content')

	<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                View Centers
                <small>Dasboard</small>
            </h1>
            <ol class="breadcrumb">
            	<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">View Centers</li> 
            </ol>
        </section>

        <!-- Main content -->
        <section class="content clearfix">
            <!-- Small boxes (Stat box) -->
            <div class="col-lg-10">

                <div class="box">
                    <div class="box-header">
						
                    </div>

                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Name</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i=1 ?>
                            @foreach($slides as $user)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td><a href="/admin/users/{{$user->id}}">{{$user->name}}</a></td> {{-- //Find the Details of Each User --}}
                                </tr>
                                <?php $i++ ?>
                            @endforeach
                            
                            </tbody>
                        </table>
                        {{ $slides->links() }}
                    </div><!-- /.box-body -->

                </div>



            </div><!-- /.row -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <!-- /.content-wrapper -->
    <footer class="main-footer">
    	<strong>Copyright &copy; {{ year_range(2017) }}  <a href="#">Scholamania Readers and Writer's Club</a> |</strong> All Rights Reserved.
    </footer>

    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
     <div class="control-sidebar-bg"></div>


@endsection