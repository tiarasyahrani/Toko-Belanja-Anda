<?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
<script>
    window.onload = function() {
        alert("Pesan berhasil dikirim! Terima kasih atas pesan Anda.");
    }
</script>
<?php endif; ?>
