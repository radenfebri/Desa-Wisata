  <!-- Vendor JS Files -->
  <script src="{{ asset('template-back') }}/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="{{ asset('template-back') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('template-back') }}/vendor/chart.js/chart.min.js"></script>
  <script src="{{ asset('template-back') }}/vendor/echarts/echarts.min.js"></script>
  <script src="{{ asset('template-back') }}/vendor/quill/quill.min.js"></script>
  <script src="{{ asset('template-back') }}/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="{{ asset('template-back') }}/vendor/tinymce/tinymce.min.js"></script>
  <script src="{{ asset('template-back') }}/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('template-back') }}/js/main.js"></script>

  <script>
    $('#summernote').summernote({
      placeholder: 'Ketik Deskripsi di Sini',
      tabsize: 2,
      height: 120,
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']]
      ]
    });
  </script>
