    <div class="wrapper">

        <div class="container" >

            <div class="tutorial">

                <h2>
                    <a href="http://weblogs.asp.net/dwahlin/video-tutorial-angularjs-fundamentals-in-60-ish-minutes">
                        AngularJS Tutorial by Dan Wahlin
                    </a>
                </h2>


                <div class="overview">

                    <h3>AngularJS Tutorial Overview </h3>

                    <p>
                        The author have a very nice and funny approach to AngularJS in this tutorial.
                    </p>
                    <p>
                        In around 70 minutes, divided in 7 lessons we will learn the fundamentals of AngularJS.
                    </p>

                </div>

                <div class="lessons">

                    <h3>AngularJS Tutorial Lessons</h3>

                    <ul class="lessons-list" ng-controller="LessonsController">
                        <li class="lessons-field" ng-repeat="lesson in lessons">
                            <a class="lessons-link" title="{{ lesson.title }}" href="?l={{ $index + 1 }}">
                                {{ lesson.title }}
                            </a>
                        </li>
                    </ul>

                </div>

                <div class="links">

                    <h3>Author Links</h3>

                    <ul class="links-list" ng-controller="LinksController">
                        <li class="links-field" ng-repeat="author_link in author_links">
                            <a href="{{ author_link.url }}" title="{{ author_link.title }}" class="link-name" target="blank">
                                {{ author_link.title }}
                            </a>
                        </li>
                    </ul>

                    <h3>Resources Links</h3>

                    <ul class="links-list" ng-controller="LinksController">
                        <li class="links-field" ng-repeat="resource_link in resources_links">
                            <a href="{{ resource_link.url }}" title="{{ resource_link.title }}" class="link-name" target="blank">
                                {{ resource_link.title }}
                            </a>
                        </li>
                    </ul>

                </div>

                <div class="disclaimer">

                    <h2>Disclaimer</h2>

                    <div class="developer">

                        <h3>Exadra37 - Software Developer</h3>

                        <p>
                            When i am learning some thing i always like to do some code to get things interiozed more deepply in my brain.
                        </p>
                        <p>
                            So, This website is an exercise inspired in the tutorial of Dan Wahlin to learn AngularJS and was created between each lesson i have seen in the Youtube videos.
                        </p>

                    </div>

                </div>
            </div>
        </div>
    </div>
