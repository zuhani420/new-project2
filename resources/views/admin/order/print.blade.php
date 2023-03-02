<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .invoice-box.rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .invoice-box.rtl table {
            text-align: right;
        }

        .invoice-box.rtl table tr td:nth-child(2) {
            text-align: left;
        }
    </style>
</head>
<body>
<div class="invoice-box">
    <table cellpadding="0" cellspacing="0">
        <tr class="top">
            <td colspan="2">
                <table>
                    <tr>
                        <td class="title">
                            <h1>LOGO</h1>
                        </td>

                        <td>
                            Invoice #: 000{{$order->id}}<br />
                            Created: {{$order->order_date}}<br />
                            Invoivce Date: {{date('Y-m-d')}}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="information">
            <td colspan="2">
                <table>
                    <tr>
                        <td>
                            <h4>Billing Info</h4>
                            {{$order->customer->name}}<br />
                            {{$order->customer->email}} <br />
                            {{$order->customer->mobile}}
                        </td>

                        <td>
                            <h4>Delivery info</h4>
                            {{$order->delivery_address}}<br />
                            <br />
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="heading">
            <td>Payment Method</td>
            <td>{{$order->payment_method == 1 ? 'Cash On Delivery' : 'Online'}}</td>
        </tr>

        <tr class="details">
            <td>{{$order->payment_method == 1 ? 'Cash On Delivery' : 'Online'}}</td>

            <td>{{number_format($order->order_total)}} Tk</td>
        </tr>

        <tr class="heading">
            <td>Item Info</td>

            <td>Price</td>
        </tr>

        @foreach($order->orderDetails as $orderDetail)
            <tr class="item">
                <td>Name: {{$orderDetail->product_name}}, Unit Price : {{$orderDetail->product_price}}, Quantity : {{$orderDetail->product_quantity}}</td>

                <td>{{$orderDetail->product_quantity * $orderDetail->product_price}} Tk</td>
            </tr>
        @endforeach


        <tr class="total">
            <td></td>

            <td>Total: {{$orderDetail->product_quantity * $orderDetail->product_price}} Tk</td>
        </tr>
    </table>
</div>
</body>
</html>
