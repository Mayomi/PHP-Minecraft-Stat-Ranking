<?php
/* 修改当前页面的名称 */
$page_name = "演示页面";
/* 修改获取的表单名称 */
$page_table = "bt_pvp_overall";
/* 修改排序的列的名称 */
$page_rank = "Elo";
?>
<!DOCTYPE html>
<html lang="zh">
<?php require("inc/header.php"); ?>
<div class="container">
    <!-- 为 ECharts 准备一个具备大小（宽高）的 DOM -->
    <div id="main" class="col-md-12" style="height:400px;"></div>
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo $page_name; ?> - <?php echo $player_number; ?> 强玩家</h3>
        </div>
        <table class="table table-striped table-hover ms-controller" :controller="main">
            <thead>
            <tr>
                <!-- [可以随意增加导航栏] -->
                <th>排名</th>
                <th>玩家名称</th>
                <th>当前积分</th>
                <th>最高积分</th>
                <!-- [格式与以下相同即可]
                    <th>自定义栏</th>
                -->
            </tr>
            </thead>
            <tbody>
            <tr :for="($index, el) in @data">
                <td :html="$index+1|index"></td>
                <td :html="el.Name|prefix"></td>
                <td>{{el.Elo}}</td>
                <td>{{el.maxElo}}</td>
            </tr>
            </tbody>
        </table>
    </div>
    <script type="text/javascript">
        var chart = echarts.init(document.getElementById('main'));
        // 显示标题，图例和空的坐标轴
        chart.setOption({
            title: {
                text: '段位分布'
            },
            tooltip: {},
            legend: {
                data: ['人数']
            },
            xAxis: {
                data: []
            },
            yAxis: {},
            series: [{
                name: '人数',
                type: 'bar',
                data: []
            }]
        });
        var main = avalon.define({
            $id: 'main',
            data: [],
            loadTable: function () {
                $.get('/api/ajax.php?m=stat', function (result) {
                    main.data = result.data;
                });
            },
            loadCharts: function () {
                $.get('/api/ajax.php?m=section', function (result) {
                    var categories = [];
                    var series = [];
                    for (var i in result.data) {
                        var item = result.data[i];
                        categories.push(item['level']);
                        series.push(item['num']);
                    }
                    // 填入数据
                    chart.setOption({
                        xAxis: {
                            data: categories
                        },
                        series: [{
                            // 根据名字对应到相应的系列
                            name: '人数',
                            data: series
                        }]
                    });
                });
            }
        });
        main.loadTable();
        main.loadCharts();
    </script>
</div>
<?php require("inc/footer.php"); ?>
</body>
</html>
