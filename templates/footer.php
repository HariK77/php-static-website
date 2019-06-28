<!--Main Container End -->
</div>
</main>

<footer class="footer mt-auto py-3">
    <div class="container text-center">
        <span>
            <script>
                document.write(new Date().getFullYear());
            </script> - Testing Website. All Rights Reserved.
        </span>
    </div>
</footer>


<script src="assets/js/jquery-3.4.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<?php

if ($active === "contact-us-one.php") {

    echo '<script src="assets/js/parsley.min.js"></script>';

    echo '<script src="assets/js/form-validation.js"></script>';
}

if ($active === "contact-us-two.php") {

    echo '<script src="assets/js/parsley.min.js"></script>';

    echo '<script src="assets/js/form-validation-ajax.js"></script>';
}

?>

</body>

</html>