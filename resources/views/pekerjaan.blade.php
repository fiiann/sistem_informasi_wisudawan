@extends('layouts.app')

@section('title')
    <title>Kelola Data Pekerjaan</title>
@endsection

@section('content')
<div style="background-color:rgb(237, 237, 237);" class="container-fluid">
    <div class="row">
      <h1 class="header-profil">Kelola Data Pekerjaan</h1>

      {{-- Panel Informasi Umum --}}
      <div class="profil-panel">
        <div class="profil-panel-head">
          <h2 class="title-panel-head">Identitas Pribadi</h2>
        </div>
        <div class="profil-panel-body">
          <div class="identitas-pribadi-box">
            {{-- Detail Info Umum --}}
            <img class="image-profils" src="http://placehold.it/120x150" alt="">
            <table class="info-contents">
              <tr>
                <td>Nama Lengkap</td><td class="con">{{ Auth::user()->name }}</td>
              </tr>
              <tr>
                <td>NIM</td><td class="con">24010314120061</td>
              </tr>
              <tr>
                <td>Departemen</td><td class="con">Ilmu Komputer</td>
              </tr>
              <tr>
                <td>Fakultas</td><td class="con">Sains dan Matematika</td>
              </tr>
              <tr>
                <td>Status</td><td class="con">Terverifikasi</td>
              </tr>
            </table>

            {{-- Link Collection --}}
            <div class="btn-groups">
              <a class="button-green" href="{{ url('/home') }}">Identitas Pribadi</a>
              <a class="button-dark-blue" href="{{ url('/pekerjaan') }}">Pendidikan</a>
              <a class="button-baby-blue" href="{{ url('/pekerjaan') }}">Pekerjaan</a>
            </div>
          </div>
        </div>

      </div>

      {{-- Panel Jenjang Pendidikan --}}
      <div class="profil-panel">
        <div class="profil-panel-head">
          <h2 class="title-panel-head">Informasi Pekerjaan</h2>
        </div>
        <div class="profil-panel-body">
          <div class="identitas-pribadi-box">
            {{-- Detail info pekerjaan --}}
            <table class="info-contents">
              <tr>
                <td>Pekerjaan</td><td class="con">Game Developer</td>
              </tr>
              <tr>
                <td>Bidang pekerjaan</td><td class="con">Komputer</td>
              </tr>
              <tr>
                <td>Alamat kantor</td><td class="con">Jl. Impala Space No.450 Semarang, Jawa Tengah </td>
              </tr>
              <tr>
                <td>Gaji</td><td class="con">Rp 10.000.000</td>
              </tr>
              <tr>
                <td>Jabatan</td><td class="con">UI/UX Manager</td>
              </tr>
            </table>
            <div class="footer-panel">
              <p class="ignore">Data yang telah diverifikasi tidak dapat dirubah lagi</p>
              <form class="" action="index.html" method="post">
                <button class="button-green" type="submit" name="button">Perbarui data</button>
              </form>
            </div>
          </div>
        </div>
      </div>

      {{-- Panel informasi pekerjaan --}}
      <div class="profil-panel">
        <div class="profil-panel-head">
          <h2 class="title-panel-head">Jenjang Pendidikan</h2>
        </div>
        <div class="profil-panel-body">
          <div class="identitas-pribadi-box">
            {{-- Detail info pekerjaan --}}
            <h4 style="margin-left:40px; margin-bottom:20px;">Pendidikan S1</h4>
            <table class="info-contents">
              <tr>
                {{-- Pendidikan S1 --}}
                <td>Pembimbing 1</td><td class="con">Nurdin Bachtiar</td>
                  <td class="fuxx">Tahun Masuk</td><td class="fuxtt">2014</td>
              </tr>
              <tr>
                <td>Pembimbing 2</td><td class="con">Indra Waspada</td>
                <td class="fuxx">Tahun Lulus</td><td class="fuxtt">2018</td>
              </tr>
              <tr>
                <td>Judul Skripsi</td>
                <td class="skripsi con">
                    Sistem Informasi Wisudawan Universitas Diponegoro dengan Metode Backpropagation
                </td>
                <td class="fuxx">Tahun Masuk</td><td class="fuxtt">2014</td>
              </tr>
            </table>

            <hr class="migrate">

            {{-- Pendidikan S2 --}}
            <h4 style="margin-left:40px; margin-bottom:20px;">Pendidikan S2</h4>
            <table class="info-contents">
              <tr>
                {{-- <th>Pendidikan S1</th> --}}
                <td>Pembimbing 1</td><td class="con">Nurdin Bachtiar</td>
                  <td class="fuxx">Tahun Masuk</td><td class="fuxtt">2014</td>
              </tr>
              <tr>
                <td>Pembimbing 2</td><td class="con">Indra Waspada</td>
                <td class="fuxx">Tahun Lulus</td><td class="fuxtt">2018</td>
              </tr>
              <tr>
                <td>Judul Skripsi</td>
                <td class="skripsi con">
                    Sistem Informasi Wisudawan Universitas Diponegoro dengan Metode Backpropagation
                </td>
                <td class="fuxx">Tahun Masuk</td><td class="fuxtt">2014</td>
              </tr>
            </table>

            <hr class="migrate">

            {{-- Pendidikan S3 --}}
            <h4 style="margin-left:40px; margin-bottom:20px;">Pendidikan S3</h4>
            <table class="info-contents">
              <tr>
                {{-- <th>Pendidikan S1</th> --}}
                <td>Pembimbing 1</td><td class="con">Nurdin Bachtiar</td>
                  <td class="fuxx">Tahun Masuk</td><td class="fuxtt">2014</td>
              </tr>
              <tr>
                <td>Pembimbing 2</td><td class="con">Indra Waspada</td>
                <td class="fuxx">Tahun Lulus</td><td class="fuxtt">2018</td>
              </tr>
              <tr>
                <td>Judul Skripsi</td>
                <td class="skripsi con">
                    Sistem Informasi Wisudawan Universitas Diponegoro dengan Metode Backpropagation
                </td>
                <td class="fuxx">Tahun Masuk</td><td class="fuxtt">2014</td>
              </tr>
            </table>

            <div class="footer-panel">
              <p class="ignore">Data yang telah diverifikasi tidak dapat dirubah lagi</p>
              <form class="" action="index.html" method="post">
                <button class="button-green" type="submit" name="button">Perbarui data</button>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
</div>
@endsection
