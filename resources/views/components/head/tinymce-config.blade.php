<script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
<script>
  tinymce.init({
    selector: 'textarea#posteditor', // Replace this CSS selector to match the placeholder element for TinyMCE
    plugins: 'image | code table lists',
    toolbar: 'image | undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table',
    images_file_types: 'jpg,svg,webp,png'

  });
</script>
