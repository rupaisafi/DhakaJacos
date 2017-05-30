<!DOCTYPE html>
<html ng-app="demo">
<head>
	<title>asdf</title>
	<style type="text/css">
		table{
			width: 100%;
			border:1px solid;
			table-layout: fixed;
			border-collapse: collapse;
		}
		td,th{
			text-align: center;
			border:1px solid;
			border-collapse: collapse;
		}
		table table{
			border-width: 0;
		}
	</style>
</head>
<body ng-controller="body">
	<table>
		<thead>
			<tr>
				<th></th>
				<th>科目</th>
				<th>1月</th>
				<th>2月</th>
				<th>3月</th>
				<th>4月</th>
				<th>5月</th>
				<th>6月</th>
				<th>7月</th>
				<th>8月</th>
				<th>9月</th>
				<th>10月</th>
				<th>11月</th>
				<th>12月</th>
				<th>取引先</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>売上科目</td>
				<td colspan="14">
					<table>
						<tr>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</table>
					<table>
						<tr>
							<td>&nbsp;</td>
							<td></td>
							<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>費 用 科 目</td>
				<td colspan="14">
					<table ng-repeat="subcategories in categories.items" ng-init="index2=$index">
						<tr ng-repeat-start="subjects in subcategories.items" ng-init="index3=$last">
							<td ng-bind="subjects.name"></td>
							<td ng-repeat="item in subjects.items track by $index" ></td>
							<td ng-bind="getLinearSum(subjects.items)"></td>
						</tr>
						<tr ng-if="index3">
							<td>&nbsp;</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
						<tr ng-repeat-end="" ng-if="index3">
							<td>&nbsp;</td>
							<td ng-bind="getVerticalSum(subcategories.items,0)"></td>
							<td ng-bind="getVerticalSum(subcategories.items,1)"></td>
							<td ng-bind="getVerticalSum(subcategories.items,2)"></td>
							<td ng-bind="getVerticalSum(subcategories.items,3)"></td>
							<td ng-bind="getVerticalSum(subcategories.items,4)"></td>
							<td ng-bind="getVerticalSum(subcategories.items,5)"></td>
							<td ng-bind="getVerticalSum(subcategories.items,6)"></td>
							<td ng-bind="getVerticalSum(subcategories.items,7)"></td>
							<td ng-bind="getVerticalSum(subcategories.items,8)"></td>
							<td ng-bind="getVerticalSum(subcategories.items,9)"></td>
							<td ng-bind="getVerticalSum(subcategories.items,10)"></td>
							<td ng-bind="getVerticalSum(subcategories.items,11)"></td>
							<td></td>
						</tr>
					</table>
					<table>
						<tr>
							<td>&nbsp;</td>
							<td></td>
							<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>営業外損益</td>
				<td colspan="14">
					<table ng-repeat="subcategories in categories.items" ng-init="index2=$index">
						<tr ng-repeat-start="subjects in subcategories.items" ng-init="index3=$last">
							<td ng-bind="subjects.name"></td>
							<td ng-repeat="item in subjects.items track by $index" ></td>
							<td ng-bind="getLinearSum(subjects.items)"></td>
						</tr>
						<tr ng-if="index3">
							<td>&nbsp;</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
						<tr ng-repeat-end="" ng-if="index3">
							<td>&nbsp;</td>
							<td ng-bind="getVerticalSum(subcategories.items,0)"></td>
							<td ng-bind="getVerticalSum(subcategories.items,1)"></td>
							<td ng-bind="getVerticalSum(subcategories.items,2)"></td>
							<td ng-bind="getVerticalSum(subcategories.items,3)"></td>
							<td ng-bind="getVerticalSum(subcategories.items,4)"></td>
							<td ng-bind="getVerticalSum(subcategories.items,5)"></td>
							<td ng-bind="getVerticalSum(subcategories.items,6)"></td>
							<td ng-bind="getVerticalSum(subcategories.items,7)"></td>
							<td ng-bind="getVerticalSum(subcategories.items,8)"></td>
							<td ng-bind="getVerticalSum(subcategories.items,9)"></td>
							<td ng-bind="getVerticalSum(subcategories.items,10)"></td>
							<td ng-bind="getVerticalSum(subcategories.items,11)"></td>
							<td></td>
						</tr>
					</table>
					<table>
						<tr>
							<td>&nbsp;</td>
							<td></td>
							<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
					</table>
				</td>
			</tr>
		</tbody>
		<tfoot></tfoot>
	</table>
	<span ng-bind="data | json"></span>
	<!-- scripts -->
        <script type="text/javascript" src="/public/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="/public/js/bootstrap.min.js"></script>
        
        <script type="text/javascript" src="/public/js/angular.min.js"></script>
        <script type="text/javascript" src="/public/js/angular-route.min.js"></script>
    <!-- scripts -->
	<script type="text/javascript">
		angular
		.module("demo",[])
			.controller("body",function($scope,$http){
				$scope.getLinearSum=function(items) {
					var sum=0;
					for (var i = items.length - 1; i >= 0; i--) {
						sum+=items[i];
					}
					return sum;
				}
				$scope.getVerticalSum=function(items,index) {
					var sum=0;
					for (var i = items.length - 1; i >= 0; i--) {
						sum+=items[i].items[index];
					}
					return sum;
				}
				$scope.model=[
					{
						name:'sales',
						items:[
							{
								name:'income',
								items:[
									{
										sum:0,
										name:'subject1',
										items:[6,1,0,0,0,0,0,0,0,0,0,0]
									},
									{
										sum:0,
										name:'subject2',
										items:[5,2,0,0,0,0,0,0,0,0,0,0]
									},
									{
										sum:0,
										name:'subject3',
										items:[4,3,0,0,0,0,0,0,0,0,0,0]
									},
									{
										sum:0,
										name:'subject4',
										items:[3,4,0,0,0,0,0,0,0,0,0,0]
									}
								],
								total:[]
							},
							{
								name:'selling',
								items:[
									{sum:0,name:'subject5',items:[2,5,0,0,0,0,0,0,0,0,0,0]},
									{sum:0,name:'subject6',items:[1,6,0,0,0,0,0,0,0,0,0,0]},
								],
								total:[]
							}
						],
						total:[]
					},
					{
						name:'profitLoss',
						items:[
							{
								name:'income',
								items:[
									{
										sum:0,
										name:'subject1',
										items:[6,1,0,0,0,0,0,0,0,0,0,0]
									},
									{
										sum:0,
										name:'subject2',
										items:[5,2,0,0,0,0,0,0,0,0,0,0]
									},
									{
										sum:0,
										name:'subject3',
										items:[4,3,0,0,0,0,0,0,0,0,0,0]
									},
									{
										sum:0,
										name:'subject4',
										items:[3,4,0,0,0,0,0,0,0,0,0,0]
									}
								],
								total:[]
							},
							{
								name:'selling',
								items:[
									{sum:0,name:'subject5',items:[2,5,0,0,0,0,0,0,0,0,0,0]},
									{sum:0,name:'subject6',items:[1,6,0,0,0,0,0,0,0,0,0,0]},
								],
								total:[]
							}
						],
						total:[]
					},
					{
						name:'otherCost',
						items:[
							{
								name:'income',
								items:[
									{
										sum:0,
										name:'subject1',
										items:[6,1,0,0,0,0,0,0,0,0,0,0]
									},
									{
										sum:0,
										name:'subject2',
										items:[5,2,0,0,0,0,0,0,0,0,0,0]
									},
									{
										sum:0,
										name:'subject3',
										items:[4,3,0,0,0,0,0,0,0,0,0,0]
									},
									{
										sum:0,
										name:'subject4',
										items:[3,4,0,0,0,0,0,0,0,0,0,0]
									}
								],
								total:[]
							},
							{
								name:'selling',
								items:[
									{sum:0,name:'subject5',items:[2,5,0,0,0,0,0,0,0,0,0,0]},
									{sum:0,name:'subject6',items:[1,6,0,0,0,0,0,0,0,0,0,0]},
								],
								total:[]
							}
						],
						total:[]
					}
				];

				$http.get("http://localhost/report").then(function(res){
	        	    var result=res.data;
	        	    $scope.data=res.data;
	        	    //sales-income
	        	    	for(var key in result.sales.income){

	        	    		var list=[0,0,0,0,0,0,0,0,0,0,0,0];
	        	    		var len=result.sales.income[key].length;

	        	    		for (var i = 0; i < len; i++) { 
	        	    			if (result.sales.income[key][i].date) {
	        	    				var date=parseInt(result.sales.income[key][i].date);
	        	    				list[date-1]+=result.sales.income[key][i].income;
	        	    			}
	        	    		}

	        	    		result.sales.income[key]=list;        	    		
	        	    	}
					//sales-selling_cost
	        	    	for(var key in result.sales.selling_cost){
	        	    		   	    		
	        	    		var list=[0,0,0,0,0,0,0,0,0,0,0,0];
	        	    		var len=result.sales.selling_cost[key].length;

	        	    		for (var i = 0; i < len; i++) { 
	        	    			if (result.sales.selling_cost[key][i].date) {
	        	    				var date=parseInt(result.sales.selling_cost[key][i].date);
	        	    				list[date-1]+=result.sales.selling_cost[key][i].expense;
	        	    			}
	        	    		}

	        	    		result.sales.selling_cost[key]=list;        	    		
	        	    	}
	        	    //other_cost-expense		
	        	       	for(var key in result.other_cost.expense){

	        	    		var list=[0,0,0,0,0,0,0,0,0,0,0,0];
	        	    		var len=result.other_cost.expense[key].length;

	        	    		for (var i = 0; i < len; i++) { 
	        	    			if (result.other_cost.expense[key][i].date) {
	        	    				var date=parseInt(result.other_cost.expense[key][i].date);
	        	    				list[date-1]+=result.other_cost.expense[key][i].expense;
	        	    			}
	        	    		}
	        	    		        	    		
	        	    		result.other_cost.expense[key]=list;        	    		
	        	    	}
					//profit_loss-expense1		
	        	       	for(var key in result.profit_loss.expense1){        	    		

	        	    		var list=[0,0,0,0,0,0,0,0,0,0,0,0];
	        	    		var len=result.profit_loss.expense1[key].length;

	        	    		for (var i = 0; i < len; i++) { 
	        	    			if (result.profit_loss.expense1[key][i].date) {
	        	    				var date=parseInt(result.profit_loss.expense1[key][i].date);
	        	    				list[date-1]+=result.profit_loss.expense1[key][i].expense;
	        	    			}
	        	    		}
	        	    		        	    		
	        	    		result.profit_loss.expense1[key]=list;        	    		
	        	    	}
	        	    //profit_loss-expense2
	        	       	for(var key in result.profit_loss.expense2){
	        	       		 	    		
	        	    		var list=[0,0,0,0,0,0,0,0,0,0,0,0];
	        	    		var len=result.profit_loss.expense2[key].length;

	        	    		for (var i = 0; i < len; i++) { 
	        	    			if (result.profit_loss.expense2[key][i].date) {
	        	    				var date=parseInt(result.profit_loss.expense2[key][i].date);
	        	    				list[date-1]+=result.profit_loss.expense2[key][i].expense;
	        	    			}
	        	    		}
	        	    		        	    		
	        	    		result.profit_loss.expense2[key]=list;        	    		
	        	    	}
	        	    	console.log(result);
	        	});

			});	
	</script>
</body>
</html>
