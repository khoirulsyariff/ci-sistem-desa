    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <!-- Version disini -->
        </div>
        <img src="<?php echo base_url('assets/images/kharisma.png'); ?>" width="23">
        Copyright © <?php echo date('Y'); ?> STMIK Kharisma
        <!-- Copyright disini -->
    </footer>
    </div>

    <script>
$(document).ready(function() {
    $('#data').DataTable({
        "pageLength": 10,
        "language": {
            "emptyTable": "Belum ada data",
            "lengthMenu": "_MENU_ data",
            "search": "Cari:",
            "infoEmpty": "0 sampai 0 dari 0 data",
            "info": "_START_ sampai _END_ dari _TOTAL_ data",
        }
    });
});
    </script>



    <script type="text/javascript">
$(document).ready(function() {
    $("#datepicker").datepicker({
        format: 'dd-mm-yyyy',
        autoclose: true,
        todayHighlight: true,
        setDate: new Date(),
    });
});
    </script>

    <script>
$(document).ready(function() {
    $("#nama").select2({
        placeholder: "Silahkan Pilih"
    });
    $("#nik").select2({
        placeholder: "Silahkan Pilih"
    });
    $("#nik2").select2({
        placeholder: "Silahkan Pilih"
    });
});
    </script>

    </body>

    </html>