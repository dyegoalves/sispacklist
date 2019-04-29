
@extends('layout.master')
@section('title', 'Inicio')
@section('conteudo')
 <!-- =============================================== -->
  <!-- Inicio do Conteudo -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       <span class="fa fa-home"></span> Home
        <small> - Inicio do Sistema</small>
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Nome OP</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          1* Sistema criado para conferencia de CKD para o processo produtido de PLACAS SMT
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Descrição Operação
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <!-- Fim do Conteudo -->
@endsection