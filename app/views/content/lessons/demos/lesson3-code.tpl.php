<p>Customer: <input type="text" ng-model="name" /><span>{{ name }}</span></p>

<ul class="customers-list" ng-init="customers=[{name:'John Smith',city:'Phoenix'}, {name:'John Doe',city:'New York'}, {name:'Jane Doe',city:'San Francisco'}]">
    <li ng-repeat="cust in customers | filter:name | orderBy:'city'">
        {{ cust.name | uppercase }} - {{ cust.city | lowercase }}
    </li>
</ul>
