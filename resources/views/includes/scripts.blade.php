<script src="https://infotasks.net/js/jquery37.js"></script>
{{-- <script src="js/bootstrap.bundle.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="js/moment.js"></script>
<script src="js/nav.js"></script>
<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3903072283437672"
    crossorigin="anonymous"></script>
<script src="js/main.js"></script>

{{-- SCROLL JS --}}
<script src="components/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
<script src="components/overlay-scroll/custom-scrollbar.js"></script>

{{-- Datatable JS --}}
<script src="https://infotasks.net/components/datatables/dataTables.min.js"></script>
<script src="https://infotasks.net/components/datatables/dataTables.bootstrap.min.js"></script>

{{-- Custom Datatables --}}
<script src="https://infotasks.net/components/datatables/custom/custom-datatables.js"></script>

<script>
    $('.dataJob').on('click', function() {
        var id = $(this).data('id');
        $.ajax({
            type: 'get',
            url: "{{ route('job.modal.data') }}",
            data: {
                job_id: id
            },
            success: function(data) {
                $('#modal-content').html(data);
                $('#job-modal-data').modal('show');
            }
        });
    });

    $('#inventoryTable').DataTable();
    $('#inTable').DataTable();
    $('#outTable').DataTable();

    $('.inventoryAdd').on('click', function() {
        var id = $(this).data('id');

        $.ajax({
            type: 'get',
            url: "{{ route('inventory.add') }}",
            data: {
                id: id
            },
            success: function(data) {
                $('#modal-content').html(data);
                $('#inventoryAdd').modal('show');
            }
        });
    });

    $('.inventorySell').on('click', function() {
        var id = $(this).data('id');

        $.ajax({
            type: 'get',
            url: "{{ route('inventory.sell') }}",
            data: {
                id: id
            },
            success: function(data) {
                $('#modal-content').html(data);
                $('#inventorySell').modal('show');
            }
        });
    });

    $('.inventoryUpdate').on('click', function() {
        var id = $(this).data('id');

        $.ajax({
            type: 'get',
            url: "{{ route('inventory.update') }}",
            data: {
                id: id
            },
            success: function(data) {
                $('#modal-content').html(data);
                $('#inventoryUpdate').modal('show');
            }
        });
    });
</script>
