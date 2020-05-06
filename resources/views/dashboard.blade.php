@extends('template2')
@section('title','Halaman Dashboard')

@section('konten')

@if(session('sukses_login'))
<script>
const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 4000,
          timerProgressBar: true,
          onOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        });

        Toast.fire({
          icon: 'success',
          title: 'Anda Berhasil Login !',
          padding: '2.3 rem'
        });
      </script>
@endif

@endsection