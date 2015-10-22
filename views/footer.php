<?php if (isset($this->sticky) && $this->sticky == true): ?>
    <div class="footer" id="footerwrap">
        <div class="container">
            <h4>mySimpleMvc - Copyright 2015</h4>
        </div>
    </div>

<?php else: ?>

    <div id="footerwrap">
        <div class="container">
            <h4>mySimpleMvc</h4>
        </div>
    </div>

<?php endif; ?>

<?php include_once 'core_scripts.php'; ?>

</body>
</html>