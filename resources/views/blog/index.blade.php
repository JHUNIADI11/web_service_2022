<!-- menampilkan index blog -->
@extends('partial.master-blog')

@section('judul','Data-blog')

@section('content')
<div class="content-wrapper">
   <section class="content">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="card">
                  <div class="card-header bg-success">
                     <h4 class="card-title" >Data Blog Saya</h4>
                  </div>
                  <div class="card-body">
                  <a class="btn btn-warning mb-3" href="{{ url('add-blog')}}" role="button"><i class="fas fa-add"></i> Tambah Data</a>
                     <table id="example1" class="table table-bordered table-striped">
                        <thead>
                           <tr class="bg-info">
                              <th>No</th>
                              <th>Id</th>
                              <th>Author</th>
                              <th>Title</th>
                              <th>Body</th>
                              <th>Keyword</th>
                              <th>Aksi</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach ($data as $row)
                           <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $row->id }}</td>
                              <td>{{ $row->author }}</td>
                              <td>{{ $row->title }}</td>
                              <td>{{ $row->body }}</td>
                              <td>{{ $row->keyword }}</td>
                              <td>
                                 <a class="btn btn-success btn-sm" href="{{ url('edit-blog')}}/{{ $row->id }}/edit" role="button"><i class="fas fa-add"></i> Update </a>
                                    <form action=" {{ route('delete.blog', $row->id) }}" method="post" class="d-inline">
                                 @csrf
                                 @method('delete')
                                 <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</button>
                                    </form>
                                 </td>
                           </tr>
                           @endforeach
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
@endsection