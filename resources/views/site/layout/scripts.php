<script type="module">
    $(document).ready(function() {
        <?php if (!empty($errors)) {
            foreach ($errors as $erro) {
                $erro  = $erro[0] ?? $erro ?>
                Toastify({
                    text: "<?= $erro ?>",
                    duration: 3000,
                    newWindow: true,
                    close: true,
                    gravity: "top",
                    position: "right",
                    stopOnFocus: true,
                    style: {
                        background: "red",
                    }
                }).showToast();
        <?php }
        } ?>
    });
</script>