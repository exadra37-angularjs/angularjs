    <footer>
        <h4>By Exadra37</h4>
        <p>
            Software Developer
        </p>
        <p>
            Prestashop Moderator
        </p>

        <script type="text/javascript">
            var lessons = <?php echo json_encode($lessons['fundamentals']); ?>;
            var links =   <?php echo json_encode($links['fundamentals']); ?>;
        </script>

        <script src="<?php echo "{$fullUrl}/{$jsDir}"; ?>/angularjs/angular.min.js" type="text/javascript"></script>
        <script src="<?php echo "{$fullUrl}/{$jsDir}"; ?>/controller/CustomerController.js" type="text/javascript"></script>
        <script src="<?php echo "{$fullUrl}/{$jsDir}"; ?>/controller/LessonsController.js" type="text/javascript"></script>
        <script src="<?php echo "{$fullUrl}/{$jsDir}"; ?>/controller/LinksController.js" type="text/javascript"></script>
    </footer>

</body>
</html>
