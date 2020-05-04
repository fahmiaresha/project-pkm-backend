@extends('template2')
@section('title','Halaman Kontak')

@section('konten')

<div class="container">
        <div class="form-row">
        <h2 class ="mt-3">Data Kontak</h2>
       
        </div>
        <!-- Button trigger modal -->
        <div class="form-row">
        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
        Tambah Data 
        </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Form Insert Kontak</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{ url('/kontak/store') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="organisasi"><font size="4">Organisasi</font></label>
                            <input type="text" class="form-control @error('organisasi') is-invalid @enderror" 
                            id="organisasi" placeholder="Nama Organisasi" name="organisasi" value="{{ old('organisasi') }}">
                            @error('organisasi')
                        <div clas="invalid-feedback"><font color="red" size="2">{{ $message }}</font></div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nomer_tlp_1"><font size="4">Nomer Telp-1</font></label>
                            <input type="text" class="form-control @error('nomer_tlp_1') is-invalid @enderror" 
                            id="nomer_tlp_1" placeholder="Nomer Telp-1
                            " name="nomer_tlp_1" value="{{ old('nomer_tlp_1') }}">
                            @error('nomer_tlp_1')
                        <div clas="invalid-feedback"><font color="red" size="2">{{ $message }}</font></div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nomer_tlp_2"><font size="4">Nomer Telp-2</font></label>
                            <input type="text" class="form-control @error('nomer_tlp_2') is-invalid @enderror" 
                            id="nomer_tlp_2" placeholder="Nomer Telp-2
                            " name="nomer_tlp_2" value="{{ old('nomer_tlp_2') }}">
                            @error('nomer_tlp_2')
                        <div clas="invalid-feedback"><font color="red" size="2">{{ $message }}</font></div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="line"><font size="4">Line</font></label>
                            <input type="text" class="form-control @error('line') is-invalid @enderror" 
                            id="line" placeholder="@example
                            " name="line" value="{{ old('line') }}">
                            @error('line')
                        <div clas="invalid-feedback"><font color="red" size="2">{{ $message }}</font></div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email"><font size="4">Email</font></label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" 
                            id="email" placeholder="example@gmail.com
                            " name="email" value="{{ old('email') }}">
                            @error('email')
                        <div clas="invalid-feedback"><font color="red" size="2">{{ $message }}</font></div>
                            @enderror
                        </div>
                       
                        <div class="form-group">
                            <label for="instagram"><font size="4">Instagram</font></label>
                            <input type="text" class="form-control @error('instagram') is-invalid @enderror" 
                            id="instagram" placeholder="@example
                            " name="instagram" value="{{ old('instagram') }}">
                            @error('instagram')
                        <div clas="invalid-feedback"><font color="red" size="2">{{ $message }}</font></div>
                            @enderror
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                    <button type="reset" class="btn btn-danger">Reset</button>
                      <button type="submit" class="btn btn-success">Insert</button>
                    </form>
                    </div>
                    </div>
                </div>
                </div>
                <!-- tutup modal -->
            </div>

            @if (session('insert'))
            <font size="4"> 
            <script>
            Swal.fire(
                'Data Berhasil Di Tambahkan!',
                '',
                'success'
                )
            </script>
            </font>
            @endif

            @if (session('update'))
            <font size="4"> 
            <script>
            Swal.fire(
                'Data Berhasil Di Update!',
                '',
                'success'
                )
            </script>
            </font>
            @endif

            @if (session('delete'))
            <font size="4"> 
            <script>
            Swal.fire(
                'Data Berhasil Di Hapus!',
                '',
                'success'
                )
            </script>
            </font>
            @endif

                <div class="form-row">
                <div class="table-responsive"  >
                <font size="2">
                    <table class="table table-bordered  mydatatable" ></font>
                <thead class="thead-dark">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Organisasi</th>
                <th scope="col">Nomor Telp-1</th>
                <th scope="col">Nomor Telp-2</th>
                <th scope="col">Line</th>
                <th scope="col">Email</th>
                <th scope="col">Instagram</th>
                <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($kontak as $k )
                    <tr>
                        <td>{{ $k -> ID_CP }}</td>
                        <td>{{ $k -> ORGANISASI }}</td>
                        <td>{{ $k -> NOMER_TLP_1 }}</td>
                        <td>{{ $k -> NOMER_TLP_2 }}</td>
                        <td>{{ $k -> LINE }}</td>
                        <td>{{ $k -> EMAIL_CP }}</td>
                        <td>{{ $k -> INSTAGRAM }}</td>
                     
                        <!-- action -->
                        <td>
                            
                            <!-- Button trigger modal -->
                            <button type="button" class="badge badge-success" data-toggle="modal" data-target="#editModal{{ $k -> ID_CP}}">
                            <svg class="bi bi-pencil" width="25px" height="25px" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M13.293 3.293a1 1 0 011.414 0l2 2a1 1 0 010 1.414l-9 9a1 1 0 01-.39.242l-3 1a1 1 0 01-1.266-1.265l1-3a1 1 0 01.242-.391l9-9zM14 4l2 2-9 9-3 1 1-3 9-9z" clip-rule="evenodd"></path>
                            <path fill-rule="evenodd" d="M14.146 8.354l-2.5-2.5.708-.708 2.5 2.5-.708.708zM5 12v.5a.5.5 0 00.5.5H6v.5a.5.5 0 00.5.5H7v.5a.5.5 0 00.5.5H8v-1.5a.5.5 0 00-.5-.5H7v-.5a.5.5 0 00-.5-.5H5z" clip-rule="evenodd"></path>
                            </svg>Edit
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="editModal{{ $k -> ID_CP}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Form Edit Data Bidang</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    
                                <form method="post" action="{{ url('/kontak/update') }}">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{ $k -> ID_CP }}">

                                <div class="form-group">
                            <label for="organisasi"><font size="4">Organisasi</font></label>
                            <input type="text" class="form-control @error('organisasi') is-invalid @enderror" 
                            id="organisasi" placeholder="Nama Organisasi" name="organisasi" value="{{ $k -> ORGANISASI }}">
                            @error('organisasi')
                        <div clas="invalid-feedback"><font color="red" size="2">{{ $message }}</font></div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nomer_tlp_1"><font size="4">Nomer Telp-1</font></label>
                            <input type="text" class="form-control @error('nomer_tlp_1') is-invalid @enderror" 
                            id="nomer_tlp_1" placeholder="Nomer Telp-1
                            " name="nomer_tlp_1" value="{{ $k -> NOMER_TLP_1 }}">
                            @error('nomer_tlp_1')
                        <div clas="invalid-feedback"><font color="red" size="2">{{ $message }}</font></div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nomer_tlp_2"><font size="4">Nomer Telp-2</font></label>
                            <input type="text" class="form-control @error('nomer_tlp_2') is-invalid @enderror" 
                            id="nomer_tlp_2" placeholder="Nomer Telp-2
                            " name="nomer_tlp_2" value="{{ $k -> NOMER_TLP_2 }}">
                            @error('nomer_tlp_2')
                        <div clas="invalid-feedback"><font color="red" size="2">{{ $message }}</font></div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="line"><font size="4">Line</font></label>
                            <input type="text" class="form-control @error('line') is-invalid @enderror" 
                            id="line" placeholder="@example
                            " name="line" value="{{ $k -> LINE }}">
                            @error('line')
                        <div clas="invalid-feedback"><font color="red" size="2">{{ $message }}</font></div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email"><font size="4">Email</font></label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" 
                            id="email" placeholder="example@gmail.com
                            " name="email" value="{{ $k -> EMAIL_CP }}">
                            @error('email')
                        <div clas="invalid-feedback"><font color="red" size="2">{{ $message }}</font></div>
                            @enderror
                        </div>
                       
                        <div class="form-group">
                            <label for="instagram"><font size="4">Instagram</font></label>
                            <input type="text" class="form-control @error('instagram') is-invalid @enderror" 
                            id="instagram" placeholder="@example
                            " name="instagram" value="{{ $k -> INSTAGRAM }}">
                            @error('instagram')
                        <div clas="invalid-feedback"><font color="red" size="2">{{ $message }}</font></div>
                            @enderror
                        </div>
                            
                           
                                
                                </div>
                                <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Update</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Back</button>
                            </form>
                                </div>
                                </div>
                            </div>
                            </div>

                            <!-- Button trigger modal -->
                                <button type="button" class="badge badge-danger" data-toggle="modal" 
                                data-target="#exampleModal{{$k -> ID_CP}}"><svg class="bi bi-trash-fill" width="20px" height="20px" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.5 3a1 1 0 00-1 1v1a1 1 0 001 1H5v9a2 2 0 002 2h6a2 2 0 002-2V6h.5a1 1 0 001-1V4a1 1 0 00-1-1H12a1 1 0 00-1-1H9a1 1 0 00-1 1H4.5zm3 4a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7a.5.5 0 01.5-.5zM10 7a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7A.5.5 0 0110 7zm3 .5a.5.5 0 00-1 0v7a.5.5 0 001 0v-7z" clip-rule="evenodd"></path>
                                </svg>Delete</button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{$k -> ID_CP}}" tabindex="0" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Yakin Ingin Menghapus Data ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="badge badge-success">
                                    <a href="/kontak/destroy/{{$k -> ID_CP}}">
                                    <font size="2" color="white">Yes</font></a></button>
                                    <button type="button" class="badge badge-danger" data-dismiss="modal"><font size="2">No</font></button>
                                </div>
                                </div>
                            </div>
                            </div> 
                        </td>
                        <!-- tutup action -->
                    </tr>
                @endforeach
                </tbody>
                </table>
            
                </div>
                </div>
</div>
@endsection