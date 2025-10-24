<div class="space-y-2">
    <div class="cv-contact-item">
        <span class="cv-contact-label">Email</span>
        <span class="cv-contact-value">{{ $data['email'] }}</span>
    </div>
    <div class="cv-contact-item">
        <span class="cv-contact-label">Telepon</span>
        <span class="cv-contact-value">{{ $data['telepon'] }}</span>
    </div>
    <div class="cv-contact-item">
        <span class="cv-contact-label">Alamat</span>
        <span class="cv-contact-value">{{ $data['alamat'] }}</span>
    </div>
    
    <div style="height: 1px; background-color: #ddd; margin: 15px 0;"></div>
    
    <div class="cv-contact-item">
        <span class="cv-contact-label">Tgl Lahir</span>
        <span class="cv-contact-value">{{ $data['tgl_lahir'] }}</span>
    </div>
    <div class="cv-contact-item">
        <span class="cv-contact-label">Agama</span>
        <span class="cv-contact-value">{{ $data['agama'] }}</span>
    </div>
    <div class="cv-contact-item">
        <span class="cv-contact-label">Jenis Kelamin</span>
        <span class="cv-contact-value">{{ $data['jenis_kelamin'] }}</span>
    </div>
</div>