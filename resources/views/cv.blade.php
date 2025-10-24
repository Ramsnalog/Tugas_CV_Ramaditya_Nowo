@extends('layouts.app')

@section('title', 'Curriculum Vitae - Ramaditya Naufal Fauzi Nugroho')

@section('content')

    @php
        $data = [
            'nama' => 'Ramaditya Naufal Fauzi Nugroho', 
            'posisi' => 'Mahasiswa Sistem Informasi', 
            'profil' => 'Mahasiswa Sistem Informasi Universitas Teknologi Yogyakarta semester 5 dan memiliki keahlian dalam fotografi, pengeditan foto, dan pemrograman. Berpengalaman sebagai Junior Fotografer dengan kemampuan menggunakan Adobe Lightroom. Saya adalah individu yang selalu bersemangat untuk terus belajar dan berkembang.', 
            'email' => 'r4m4naufal@gmail.com',
            'telepon' => '087785115589', 
            'alamat' => 'Watu, Argomulyo, Sedayu, Bantul, DIY', 
            'tgl_lahir' => '28 September 2005', 
            'agama' => 'Islam', 
            'jenis_kelamin' => 'Laki-laki', 
            'pendidikan' => [ 
                ['institusi' => 'Universitas Teknologi Yogyakarta', 'jurusan' => 'Sistem Informasi', 'tahun' => '2023 - Sekarang'], 
                ['institusi' => 'SMA IT Baitussalam', 'jurusan' => 'IPS', 'tahun' => '2020 - 2023'],
                ['institusi' => 'MTsN 3 Jakarta', 'jurusan' => 'Tidak Ada', 'tahun' => '2017 - 2020'],
                ['institusi' => 'SD Islam Al-Falaah', 'jurusan' => 'Tidak Ada', 'tahun' => '2011 - 2017'],
            ],
            'pengalaman' => [
                ['perusahaan' => 'Tim Multimedia Baitussalam', 'jabatan' => 'Junior Fotografer', 'lama_kerja' => '3 Bulan'], 
                ['perusahaan' => 'Pondok Pesantren Modern Baitussalam', 'jabatan' => 'Staff Kerumahtanggaan', 'lama_kerja' => '1 Bulan'], 
            ],
            'keterampilan' => [ 
                'Bahasa Pemrograman: Java, PHP, JavaScript', 
                'Sistem Manajemen Basis Data: MySQL', 
                'Software Editing: Adobe Lightroom'
            ],
            'bahasa' => [
                'Indonesia ',
                'Inggris (Menengah)'
            ],
        ];
    @endphp

    <div class="cv-card"> 
        
        <aside class="cv-sidebar">
            
            <div class="cv-contact-box">
                <h2 class="cv-section-title-sidebar">Kontak & Info Pribadi</h2>
                @include('partials.contact-info', ['data' => $data])
            </div>

            <div>
                <h2 class="cv-section-title-sidebar">Keterampilan</h2> 
                <ul class="cv-list">
                    @foreach ($data['keterampilan'] as $skill)
                        <li>{{ $skill }}</li> 
                    @endforeach
                </ul>
            </div>
            'bahasa' => [
                'Indonesia (Native)',
                'Inggris (Dasar/Pasif)'
            ],
            <div style="margin-top: 24px;">
                    <h2 class="cv-section-title-sidebar">Bahasa yang Dikuasai</h2> 
                    <ul class="cv-list">
                        @foreach ($data['bahasa'] as $bhs)
                            <li>{{ $bhs }}</li>
                        @endforeach
                    </ul>
                </div>

        </aside>

        <div class="cv-main-content">
            
            <header class="cv-header-block">
                <img src="{{ asset('img/Foto_CV.jpg') }}" alt="Foto Ramaditya Naufal"> 
                <div>
                    <h1>{{ $data['nama'] }}</h1> 
                    <p>{{ $data['posisi'] }}</p> 
                </div>
            </header>

            <div>
                <h2 class="cv-section-title-main">Profil Singkat</h2>
                <span style="display: block; color: #555; text-align: justify;">{{ $data['profil'] }}</span>
            </div>
            
            <div style="margin-top: 30px;">
                <h2 class="cv-section-title-main">Pengalaman Kerja</h2> 
                <div style="margin-top: 15px;">
                    @foreach ($data['pengalaman'] as $p)
                        <div class="cv-item">
                            <h3>{{ $p['jabatan'] }}</h3> 
                            <p>{{ $p['perusahaan'] }} ({{ $p['lama_kerja'] }})</p> 
                        </div>
                    @endforeach
                </div>
            </div>

            <div style="margin-top: 30px;">
                <h2 class="cv-section-title-main">Riwayat Pendidikan</h2> 
                <div style="margin-top: 15px;">
                    @foreach ($data['pendidikan'] as $p)
                        <div class="cv-item">
                            <h3>{{ $p['institusi'] }}</h3> 
                            <p>{{ $p['jurusan'] }} | {{ $p['tahun'] }}</p> 
                        </div>
                    @endforeach
                </div>
            </div>
            
        </div>
        
    </div>
        <footer class="cv-footer">
            &copy; 2025 {{ $data['nama'] }} 
        </footer>
@endsection