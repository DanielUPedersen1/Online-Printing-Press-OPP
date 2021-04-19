<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />

    <title>GPP</title>
    <style>
        @media print{
            #printpage{
                display: none;
            }
        }

    </style>

    <link rel='stylesheet' type='text/css' href='Ajax/css/style.css' />
    <link rel='stylesheet' type='text/css' href='Ajax/css/print.css' media="print" />
    <script type='text/javascript' src='Ajax/js/jquery-1.3.2.min.js'></script>
    <script type='text/javascript' src='Ajax/js/example.js'></script>

</head>
<style>
@page { size: auto;  margin: 5mm; }
</style>

<script>
function printContent(el){
    var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;

}
</script>

<body style="background-color:#FCF9EC;">
<div id="div1">

    <div id="page-wrap">

        <!--<textarea id="header">Sericulture</textarea>-->

        <div id="identity">

<!-- <textarea id="address"style="font-family:Cambria; font-size:17px;"> -->
<!--<textarea style="background-color:#FCF9EC;" id="address">
Sericulture
Rayapur Dharwad
Contact-no:
</textarea>--> <br>
          <center>


            <img id="image" src="Ajax/images/logo2.png" alt="logo" width="100" height="100"/>
            <h2>Government Printing Press, Dharwad</h2><br>
            <hr>

</center>



        <div style="clear:both"></div>

        <div id="customer">

        <?php

            $d=date("d-m-Y");
            $govt_user_id=$_REQUEST['id'];
                $govt_bill_date=$_REQUEST['d'];
            $bill_details_no=$_REQUEST['o'];


                ?>

<strong>Date :</strong> <strong style="font-family:Agency FB; font-weight:bold"><?php echo $d; ?></strong><br>
<h2 align="right">Order Date :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $govt_bill_date; ?></h2>
<h2 align="right">Order No. :&nbsp;&nbsp;&nbsp;<?php echo $bill_details_no; ?></h2>


           <?php
                require('db_connect.php');

                
            
            //echo $govt_bill_date;

            /*$date = new DateTime($order_date1);

            $order_date =$date->format('d-m-Y');
            */
           //$order_date=date("d-m-Y",$order_date1);

            $sql11="SELECT  * FROM order_details WHERE govt_user_id='$govt_user_id' and order_details_date='$govt_bill_date' and order_details_status='orderplaced' and order_details_no='$bill_details_no' ";
            $result1=mysqli_query($conn,$sql11);
            $row11=mysqli_fetch_array($result1,MYSQLI_ASSOC);
            
            $order_date=$row11['order_details_date'];


                $sql4="SELECT * FROM govt_user where govt_user_id='$govt_user_id' ";

                $result4=mysqli_query($conn,$sql4);

                $row4=mysqli_fetch_array($result4,MYSQLI_ASSOC);

            ?> <br><br>
            <table id="meta" style="float:left;">
               <tr>
                    <td class="meta-head">Ordered Date</td>
                    <td><?php echo $order_date; ?></td>
                </tr>
                <tr>
                    <td class="meta-head">Customer Name</td>
                    <td><?php echo $row4['govt_user_name'];?></td>
                </tr>
                <tr>

                    <td class="meta-head">Contact No.</td>
                    <td style="font-family:Times New Roman;"><?php echo $row4['govt_user_contact'];?></td>
                </tr>
                <tr>
                    <td class="meta-head">Address</td>
                    <td><div class="due"><?php echo $row4['govt_user_address'];?><br>
                    </div></td>
                </tr>

            </table>

            


        </div>

        <table id="items">


            <tr>
                <th>Sl No.</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
                <!--<th>Sub Total</th>-->
            </tr>
            <?php


            $sql = "select * from order_details od,product_details pd  where od.govt_user_id='$govt_user_id' and od.order_details_date='$order_date' and od.product_details_id=pd.product_details_id  and od.order_details_status='orderplaced' AND od.order_details_no='$bill_details_no' ";

       $result = mysqli_query($conn,$sql);

            $to=0;
            $to1=0;
            $sl=1;
            while($row1=mysqli_fetch_array($result,MYSQLI_ASSOC))
            {
                $r=$row1['order_details_price'];
                $q=$row1['order_details_quantity'];
                $to1=$r*$q;
                $to+=$r*$q;
                //$tot=$tot+$to;

                ?>
            <tr class="item-row">
                <td align="center" class="item-name" style="font-family:Cambria; font-size:16px"><div class="delete-wpr"><?php echo $sl++; ?></div></td>

                <td align="center" class="description" style="font-family:Cambria; font-size:16px"><?php echo $row1['product_details_name']; ?></td>



                <td align="center" class="description" style="font-family:Cambria; font-size:16px"><?php echo $row1['order_details_quantity']; ?></td>

                <td align="center" class="description" style="font-family:Cambria; font-size:16px"><?php echo $row1['order_details_price']; ?></td>

                <td align="center" class="description" style="font-family:Cambria; font-size:16px" align="right"><?php echo $to1; ?></td>


            </tr>
            <?php
            }
            $g_total=0;
            $g_total=$to;
            $g_total1=0;
            $g_total2=0;
            $g_total1=$to*.09;
            $g_total2=$to*.09;
            $grand_total=$g_total+$g_total1+$g_total2;
            ?>
            <tr>
                <td colspan="4" style="font-family:Cambria; font-size:16px; font-weight:bold;" align="right">Sub Total </td>
                <td align="center" class="description" style="font-family:Cambria; font-size:16px; font-weight:bold;" align="right"><?php echo $to; ?></td>
            </tr>

          <tr>
          <td  class="total-line balance" style="font-family:Cambria; font-size:16px" colspan="3" rowspan="4"></td>

              <td  class="" style="font-family:Cambria; font-size:16px" align="right">Total Amount</td>
              <td class="total-value balance" align="center"><div class="due" style="font-family:Agency FB; font-weight:bold">&nbsp; &nbsp;&nbsp; &nbsp;<?php echo $to; ?></div></td>
          </tr>
          <tr>




              <td  class="" style="font-family:Cambria; font-size:16px" align="right">CGST(9 %)</td>


              <td class="total-value balance" align="center"><div class="due" style="font-family:Agency FB; font-weight:bold">&nbsp; &nbsp;&nbsp; &nbsp;<?php echo $g_total1; ?></div></td>
          </tr>
          <tr>




              <td  class="" style="font-family:Cambria; font-size:16px" align="right">SGST(9 %)</td>


              <td class="total-value balance" align="center"><div class="due" style="font-family:Agency FB; font-weight:bold">&nbsp; &nbsp;&nbsp; &nbsp;<?php echo $g_total2; ?></div></td>
          </tr>
          <tr>


              <td  class="" style="font-family:Cambria; font-size:16px" align="right">Grand Total</td>
              <td class="total-value balance" align="center"><div class="due" style="font-family:Agency FB; font-weight:bold">&nbsp; &nbsp;&nbsp; &nbsp;<?php echo $grand_total; ?></div></td>
          </tr>
        </table>
        <br />
        <br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <tr>
              <td colspan="2"> </td>
               <td>Signature&nbsp;</td>
               <br>
               <br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td>____________________</td>
          </tr>
        <div id="terms">
          <h5>Thank You For Visting</h5>
        </div>
    </div>
</div>

        <div id="terms">
          <button id="printpage" onclick="printContent('div1')"><strong>PRINT</strong></button>
          <button id="printpage" onclick="window.location.href='order_details_view.php'"><strong>Cancel</strong></button>

        </div><br><br>

</body>

</html>


