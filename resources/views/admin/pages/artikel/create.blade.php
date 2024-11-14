@extends('admin.layouts.index')

@section('title', 'Create Article')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Article</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Summernote CSS for rich text editor -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Buat Artikel Baru</h4>
                </div>
                <div class="card-body">
                    <form action="# method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <!-- Title Field -->
                        <div class="mb-3">
                            <label for="title" class="form-label">Judul Artikel</label>
                            <input type="text" class="form-control" id="title" name="title" 
                                   placeholder="Enter article title" required>
                        </div>

                        <!-- Slug Field -->
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control" id="slug" name="slug" 
                                   placeholder="article-slug-will-be-here" readonly>
                        </div>

                        <!-- Category Field -->
                        <div class="mb-3">
                            <label for="category" class="form-label">Kategori</label>
                            <select class="form-select" id="category" name="category_id" required>
                                <option value="">Pilih Kategori</option>
                                <option value="1">Technology</option>
                                <option value="2">Health</option>
                                <option value="3">Lifestyle</option>
                                <!-- Add more categories as needed -->
                            </select>
                        </div>

                        <!-- Featured Image -->
                        <div class="mb-3">
                            <label for="featured_image" class="form-label">Gambar Tampilan</label>
                            <input type="file" class="form-control" id="featured_image" 
                                   name="featured_image" accept="image/*">
                            <div id="imagePreview" class="mt-2"></div>
                        </div>

                        <!-- Excerpt Field -->
                        <div class="mb-3">
                            <label for="excerpt" class="form-label">Kutipan</label>
                            <textarea class="form-control" id="excerpt" name="excerpt" 
                                      rows="3" placeholder="Brief description of the article"></textarea>
                        </div>

                        <!-- Content Field -->
                        <div class="mb-3">
                            <label for="content" class="form-label">Konten</label>
                            <textarea class="form-control" id="content" name="content" rows="10"></textarea>
                        </div>

                        <!-- Meta Tags -->
                        <div class="mb-3">
                            <label for="meta_title" class="form-label">Judul Meta</label>
                            <input type="text" class="form-control" id="meta_title" name="meta_title">
                        </div>

                        <div class="mb-3">
                            <label for="meta_description" class="form-label">Deskripsi Meta</label>
                            <textarea class="form-control" id="meta_description" name="meta_description" 
                                      rows="2"></textarea>
                        </div>

                        <!-- Status -->
                        <div class="mb-3">
                            <label class="form-label d-block">Status</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" 
                                       id="statusDraft" value="draft" checked>
                                <label class="form-check-label" for="statusDraft">Draf</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" 
                                       id="statusPublish" value="published">
                                <label class="form-check-label" for="statusPublish">Terbit</label>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-end">
                            <button type="button" class="btn btn-secondary me-2">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan Artikel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Required JavaScript -->
<script>
    CKEDITOR.replace('content', {
        // Konfigurasi toolbar
        toolbar: [
            { name: 'document', items: [ 'Source', '-', 'Save', 'NewPage', 'Preview', 'Print', '-', 'Templates' ] },
            { name: 'clipboard', items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
            { name: 'editing', items: [ 'Find', 'Replace', '-', 'SelectAll', '-', 'Scayt' ] },
            { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'CopyFormatting', 'RemoveFormat' ] },
            '/',
            { name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl' ] },
            { name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
            { name: 'insert', items: [ 'Image', 'Table', 'HorizontalRule', 'SpecialChar' ] },
            '/',
            { name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
            { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
            { name: 'tools', items: [ 'Maximize', 'ShowBlocks' ] }
        ],
        
        // Konfigurasi tambahan
        height: 400,
        width: '100%',
        removeButtons: '',
        
        // Konfigurasi untuk upload gambar (opsional)
        filebrowserUploadUrl: "{{ route('ckEditorUpload', ['_token' => csrf_token()]) }}",
        filebrowserUploadMethod: 'form',
        
        // Konfigurasi untuk styling content
        contentsCss: [
            'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css',
            // Tambahkan CSS kustom Anda di sini jika diperlukan
        ],
        
        // Konfigurasi untuk format HTML yang diizinkan
        allowedContent: true,
        
        // Konfigurasi untuk placeholder
        placeholder: 'Start writing your article content here...'
    });

    // Event handler ketika form di-submit
    document.querySelector('form').addEventListener('submit', function() {
        // Memastikan content CKEditor diupdate ke textarea sebelum submit
        for (let instance in CKEDITOR.instances) {
            CKEDITOR.instances[instance].updateElement();
        }
    });
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
</body>
</html>
@endsection