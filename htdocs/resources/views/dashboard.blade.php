<!doctype html>
<html ng-app="jDhaka" lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> クラウド 会計 </title>

        <!-- fonts -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway:100,600">
        <!-- /fonts -->

        <!-- styles -->
        <link rel="stylesheet" type="text/css" href="/public/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/public/css/index.css">
        <!-- /styles -->
    </head>
    <body ng-controller="bodyController">
        
        <!-- wrapper -->
        <section class="page-wrap">
            <header class="page-head" ng-controller="headController">
                <nav class="navbar navbar-default">
                  <div class="container-fluid">
                    <button type="submit" class="btn btn-primary btn-flat report-btn pull-right" ng-click="open()">損益計算</button>
                  </div>
                </nav>                
            </header>
            <section class="page-body"></section>
            <footer class="page-foot"></footer>
        </section>
        <!-- /wrapper -->
   
        <!-- popup -->
        <div class="popupWindow" ng-show="popup.state==1">
            <header class="popup-head">
                <span> 損益計算書の期間設定をしますか？ </span>
                <button class="btn btn-primary btn-flat" ng-click="popup.navigate(0)"> 戻る </button>
            </header>
            <div class="popup-body"></div>
            <div class="popup-foot">
                <button type="submit" class="btn btn-primary btn-flat" ng-click="popup.navigate(2)"> はい </button>
                <button type="submit" class="btn btn-primary btn-flat" ng-click="popup.navigate(3)"> いいえ </button>
                <p class="text-right"> 当月・本日現在を </p>
                <p class="text-right"> 表示します。 </p>
            </div>
        </div>
        <!-- /popup -->

        <!-- popup -->
        <div class="popupWindow" ng-show="popup.state==2">
        <div class="double_div_area2">        
            <div class="edit_delete_text_head">
                <p> 期間設定ができます。 <br/> 修正してください。 </p>
            </div>
        
            <div class="top_popup_exit_btn_area_right">
                <button class="btn btn-primary btn-flat" ng-click="popup.navigate(1)"> 戻る </button>
            </div>
        </div>
        
        <div class="date_input_area">
            <span class="from_date_area">
            <input id="from_year" class="date_input_year" value="2017" type="number">年
            
            <select id="from_month" class="date_input">
              <option value="01">01</option>
              <option value="02">02</option>
              <option value="03">03</option>
              <option value="04">04</option>
              <option value="05">05</option>
              <option value="06">06</option>
              <option value="07">07</option>
              <option value="08">08</option>
              <option value="09">09</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
            </select>月
            
            <select id="from_day" class="date_input">
              <option value="01">01</option>
              <option value="02">02</option>
              <option value="03">03</option>
              <option value="04">04</option>
              <option value="05">05</option>
              <option value="06">06</option>
              <option value="07">07</option>
              <option value="08">08</option>
              <option value="09">09</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
              <option value="21">21</option>
              <option value="22">22</option>
              <option value="23">23</option>
              <option value="24">24</option>
              <option value="25">25</option>
              <option value="26">26</option>
              <option value="27">27</option>
              <option value="28">28</option>
              <option value="29">29</option>
              <option value="30">30</option>
              <option value="31">31</option>
            </select>日
            </span>
            ～  
            <span class="to_date_area">
              <input id="to_year" class="date_input_year" value="2017" type="number">年
             
             <select id="to_month" class="date_input">
              <option value="01">01</option>
              <option value="02">02</option>
              <option value="03">03</option>
              <option value="04">04</option>
              <option value="05">05</option>
              <option value="06">06</option>
              <option value="07">07</option>
              <option value="08">08</option>
              <option value="09">09</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
            </select>月
            
            <select id="to_day" class="date_input">
              <option value="01">01</option>
              <option value="02">02</option>
              <option value="03">03</option>
              <option value="04">04</option>
              <option value="05">05</option>
              <option value="06">06</option>
              <option value="07">07</option>
              <option value="08">08</option>
              <option value="09">09</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
              <option value="21">21</option>
              <option value="22">22</option>
              <option value="23">23</option>
              <option value="24">24</option>
              <option value="25">25</option>
              <option value="26">26</option>
              <option value="27">27</option>
              <option value="28">28</option>
              <option value="29">29</option>
              <option value="30">30</option>
              <option value="31">31</option>
            </select>日
            </span>
        </div>
        
        <div class="date_select_btn_are">
            <button class="btn btn-primary btn-flat"> 完了 </button>
        </div>
        </div>
        <!-- /popup -->
        
        <!-- popup -->
        <div class="popupWindow" ng-show="popup.state==3">
            <div class="double_div_area1">
                <div>
                    <p> 2017年05月 （当月）今日現在の </p>
                    <p> 損益計算書を表示します。 </p>
                </div>
                <div>
                    <button class="btn btn-primary btn-flat" ng-click="popup.navigate(1)"> 戻る </button>
                </div>
            </div>            
            <div>
                <button class="btn btn-primary btn-flat"> 確認 </button>
            </div>
        </div>
        <!-- /popup -->

        <!-- scripts -->
        <script type="text/javascript" src="/public/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="/public/js/bootstrap.min.js"></script>
        
        <script type="text/javascript" src="/public/js/angular.min.js"></script>
        <script type="text/javascript" src="/public/js/angular-route.min.js"></script>

        <script type="text/javascript" src="/public/js/app/index.js"></script>
        <script type="text/javascript" src="/public/js/app/services/popupService.js"></script>
        <script type="text/javascript" src="/public/js/app/controllers/bodyController.js"></script>
        <script type="text/javascript" src="/public/js/app/controllers/headController.js"></script>
        <!-- /scripts -->
    </body>
</html>
