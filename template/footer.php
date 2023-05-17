


<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>
<footer class="text-center mt-5">
  <p>All rights reserved. &copy;2023 IGP SYSTEM</p>
</footer>
</html>







<!-- this is your js file that you included on  index.php -->

<?php foreach($js as $jsFile ){ ?>
   <script type="text/javascript" src="<?php echo $jsFile ?>"></script>
<?php }?>
