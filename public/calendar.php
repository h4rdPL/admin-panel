<?php  include '../src/inc/header.php' ?>

<link rel="stylesheet" href="css/calendar.css" >
<!--Main layout-->
<main style="margin-top: 58px">
    <div class="container pt-4">
        <!-- Calendar -->
        <h2 class="text-center">Kalendarz</h2>
        <div id="calendar"></div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/locale/pl.min.js"></script>
        <script src="js/calendar.js"></script>
    </div>
</main>
<!--Main layout-->

<?php  include '../src/inc/footer.php' ?>