    <div class="wrapper">

        <div class="container">

            <div class="lessonNumber">

                <h2>
                    <a href="https://www.youtube.com/watch?v=LFEHq8YANLI">
                        <?php echo $lessons['fundamentals'][$lessonNumber]['title']; ?>
                    </a>
                </h2>

                <iframe class="youtube" width="420" height="315" src="<?php echo $lessons['fundamentals'][$lessonNumber]['video']; ?>" frameborder="0" allowfullscreen></iframe>

                <div class="exercise-code">
                    <code>


                    </code>
                </div>

                <div class="exercise-demo"  >

                    <h3>AngularJS Exercise</h3>

                    <?php require_once"{$demosDir}/{$lessonNumber}-code.tpl.php"; ?>

                </div>

            </div>
        </div>
    </div>
