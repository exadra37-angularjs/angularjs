<p>Customer: <input type="text" ng-model="name" /></p>
<ul class="customers-list" ng-controller="CustomerController">
    <li ng-repeat="cust in customers | filter:name | orderBy:'city'">
        {{ cust.name | uppercase }} - {{ cust.city | lowercase }}
    </li>
</ul>
