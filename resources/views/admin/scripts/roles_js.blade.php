<script>
    $(document).ready(function() {
        $('.checkbox').change(function() {
            var $row = $(this).closest('tr');
            var allChecked = $row.find('.checkbox').length === $row.find('.checkbox:checked').length;
            $row.find('.select-all').prop('checked', allChecked);
        });

        $('.select-all').change(function() {
            var $row = $(this).closest('tr');
            $row.find('.checkbox').prop('checked', this.checked);
        });
    });
</script>
