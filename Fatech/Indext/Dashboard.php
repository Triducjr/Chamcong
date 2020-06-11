<?php
include 'menu.php';
?>
<html>
    <body>
    <section>
        <h2 ><span>Hôm Nay 6/2/2020</span></h2>
        <hr width="100%" size="2px" align="left" color="#BDBDBD" /> <br>
        
        <div class="container mt-3">
            <div class="row">
                <div class="col-3">
                    <div class="d-flex text-white">
                        <div class="p-2 bg-info" style="
                                width: 20%;
                                text-align: center;
                            " >10
                        </div>
                        <div class="p-2 bg-warning" style="
                    width: 100%;
                ">Vào ca</div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="d-flex text-white">
                        <div class="p-2 bg-info" style="
                            width: 20%;
                            text-align: center;">2</div>
                        <div class="p-2 bg-warning" style="
                            width: 100%;
                        ">Đi Muộn</div>
                            </div>
                </div>

                <div class="col-3">
                    <div class="d-flex text-white">
                        <div class="p-2 bg-info" style="
                    width: 20%;
                    text-align: center;
                ">0</div>
                        <div class="p-2 bg-warning" style="
                    width: 100%;
                ">Nghĩ Phép</div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="d-flex text-white">
                        <div class="p-2 bg-info" style="
                    width: 20%;
                    text-align: center;
                ">0</div>
                     <div class="p-2 bg-warning" style="
                    width: 100%;
                ">Chưa vào ca</div>
                    </div>
                </div>
                <div class = 'chart'>
                    <canvas id = "linechart"></canvas>
                </div>
                <script>
                    var bienx = [1, 2, 3 , 4 ,5 ,6 ,7 ,8, 9];
                    var bieny = ['31/5','1/6','2/6','3/6','4/6'];
                    var chart = document.getElementById('linechart').Getcontext('2d');
                    var linechart = new chart(chart,{
                        type:'line',
                        data:{
                            labels:bienx,
                            datasets:[{
                                label:'name_data',
                                data: bieny
                            }]
                        }

                    });
              
                </script>

    </section>

