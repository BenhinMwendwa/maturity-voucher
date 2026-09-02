<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Maturity Discharge Voucher Jubilee Life Insurance</title>
<style>
  @page {
    size: A4;
    margin: 16mm 14mm;
  }

  *{ box-sizing:border-box; }

  body{
    margin:0;
    font-family:'Helvetica', 'Arial', sans-serif;
    color:#231f20;
    font-size:13px;
    line-height:1.6;
  }

  table.header-table{
    width:100%;
    border-collapse:collapse;
    margin-bottom:0;
  }
  table.header-table td{
    vertical-align:top;
    padding:0;
    border:none;
  }
  table.header-table td:last-child {
  text-align: right;    
  padding-top: 15px;    
}
  .logo-cell{
    width:200px;
  }
  .logo-cell img{
    height:130px;
    width:auto;
    display:block;
    margin-bottom:10px;
  }
  .title-cell{
    text-align:right;
    vertical-align:middle;
  }
  .title-box{
    border-top:1px solid #D1193C;
    border-bottom:3px solid #D1193C;
    padding:8px 0;
    display:inline-block;
  }
    .title-box h1{
    margin:0;
    font-size:19px;
    font-weight:bold;
    color:#D1193C;
    white-space:nowrap;
  }
  .title-box h2{
    margin:2px 0 0 9.8mm;
    font-size:16px;
    font-weight:normal;
    color:#231f20;
    white-space:nowrap;
  }
  .company-block{
    font-size:9.5px;
    color:#4a4a4a;
    line-height:1.5;
    margin-top:0px;
    margin-bottom:10px;
  }

  .date-line{ font-weight:bold; margin-bottom:14px; }
  .addressee{ margin-bottom:14px; }
  .subject-line{ margin-bottom:14px; }
  p{ margin:0 0 14px 0; }

  .dotted-line{
    margin:0 0 14px 0;
    word-spacing:-2px;
  }

  table.field-row{
    width:100%;
    border-collapse:collapse;
    margin-bottom:14px;
  }
  table.field-row td{
    border:none;
    padding:0;
    vertical-align:bottom;
    font-size:11px;
  }
  table.field-row td.f-label{
    width:1%;
    white-space:nowrap;
    font-weight:bold;
    padding-right:4px;
  }
  table.field-row.plain td.f-label{
    font-weight:normal;
  }
  table.field-row td.f-fill{
    border-bottom:1px dotted #888888;
  }

  table.multi-row{
    width:100%;
    border-collapse:collapse;
    margin-bottom:10px;
  }
  table.multi-row td{
    border:none;
    padding:0 4px 0 0;
    vertical-align:bottom;
    font-size:11px;
    white-space:nowrap;
  }
  table.multi-row td.m-fill{
    border-bottom:1px dotted #888888;
  }

  .section-label{ 
    font-weight:bold; 
    margin:4px 0 6px 0; 
    color:#D1193C;
    margin-bottom:16px;
 }

  table.figures{
    width:40%;
    border-collapse:collapse;
    margin-bottom:10px;
    font-size:12px;
    white-space:nowrap;
  }
  table.figures td{
    border:1px solid black;
    padding:2px 6px;
    height:16px;
    line-height:1;

  }
  table.figures tr.odd td{ background-color:#FEF7EE; }
  table.figures tr.even td{ background-color:#ffffff; }
  table.figures td.label{ width:65%; }
  table.figures td.value{ text-align:right; }
  table.figures tr.total td{
    background-color:#D1193C;
    color:#ffffff;
    font-weight:bold;
  }
  table.figures tr.red-label td.label{
    color:#D1193C;
    font-weight:bold;
  }
  table.figures tr.red-label td.value{
    color:#231f20;
    font-weight:normal;
  }

  table.sig-table{
    width:100%;
    border-collapse:collapse;
    margin-bottom:18px;
  }
table.sig-table td{
    border:none;
    padding:0;
    vertical-align:top;
}
.sig-rect{
    width:200px;
    height:60px;
    border:1px solid black;
    border-radius:6px;
}

  .bank-note{ font-weight:bold; margin-bottom:14px; }

  .important-box{
    background-color:#dfdfdf;
    border-radius:6px;
    padding:14px 16px;
    margin-top:10px;
  }
  .important-box h3{
    margin:0 0 10px 0;
    color:#BA0C2F;
    font-style:italic;
    font-size:12.5px;
  }
  .important-box ol{
    margin:0;
    padding-left:18px;
    font-size:10.5px;
    line-height:1.6;
  }
  .important-box li{ margin-bottom:8px; }

  .footer{
    position:fixed;
    bottom:-8mm;
    left:0;
    right:0;
    text-align:center;
    font-size:13px;
    color:#D1193C;
    padding-bottom:10px;
  }
  .footer b{ font-weight:900;
            }


  .page-break{ page-break-before:always; }
</style>
</head>
<body>

<div class="footer">PART OF <b>JUBILEE GROUP</b></div>

<table class="header-table">
  <tr>
    <td class="logo-cell">
      <img src="https://jubileeinsurance.com/ke/wp-content/uploads/2024/11/logolife.png" alt="Jubilee Life Insurance">
    </td>
    <td class="title-cell">
      <div class="title-box">
        <h1>MATURITY DISCHARGE VOUCHER</h1>
        <h2>FANAKA PLAN TERM LAYER 1</h2>
      </div>
    </td>
  </tr>
</table>

<div class="company-block">
  Jubilee Insurance Headquarters, Kilimanjaro Avenue, Upper Hill<br>
  P.O. Box 30376 - 00100 GPO, Nairobi, Kenya<br>
  Tel: +254 709 949 000<br>
  Email: talk2uslife@jubileekenya.com<br>
  www.jubileeinsurance.com
</div>

<p class="date-line">{{ \Carbon\Carbon::parse($data->pol_data->date_of_risk)->format('jS F Y') }}</p>

<p class="addressee">
    {{ $data->pol_data->life_assured }},<br>
    {!! $data->pol_data->address !!}
</p>

<p class="subject-line">
  Discharge of matured <b>Policy No. {{ $data->pol_data->v_policy_no }}</b> on the life of <b>{{ $data->pol_data->life_assured }}.</b>
</p>

<p class="dotted-line"><b>Occupation</b>...................................................................................................................</p>

<p>
  I/We {{ $data->pol_data->life_assured }} the life/lives assured/assignee(s) under this policy do hereby acknowledge receipt from
  Jubilee Life Insurance Limited the sum of Kshs.{{ number_format($data->net_amount_payable, 2) }} (Kenya Shillings {{ $data->net_amount_words }})
  including the amount of bonus in full and final settlement and discharge of all my/our
  claims and demands.
</p>

<p>
  Further I /we do hereby indemnify and hold harmless the said Company for any claims that may arise under this policy
  through any source whatsoever under the said policy on the life /lives of myself/ourselves which matures/matured on
  {{ \Carbon\Carbon::parse($data->pol_data->policy_end_date)->format('jS F Y') }} and which Original Policy Document is hereby delivered up to the said Company for cancellation.
</p>

<p>
  Any premium not received will be deducted from the dues and any excess premium will be separately paid:
</p>

<div class="section-label">(A)</div>
<table class="figures">
  <tr class="odd"><td class="label">Sum assured (Kshs)</td><td class="value">{{ number_format($data->sum_assured, 2) }}</td></tr>
  <tr class="even"><td class="label">Actual Bonus allotted (Kshs)</td><td class="value">{{ number_format($data->actual_bonus, 2) }}</td></tr>
  <tr class="odd"><td class="label">Interim Bonus allotted (Kshs)</td><td class="value">{{ number_format($data->interim_bonus, 2) }}</td></tr>
  <tr class="total"><td class="label">TOTAL OF Kshs.</td><td class="value">{{ number_format($data->sum_assured + $data->actual_bonus + $data->interim_bonus, 2) }}</td></tr>
</table>

<div class="section-label">(B)</div>
<table class="figures">
  <tr class="odd"><td class="label">Unpaid premiums due (Kshs)</td><td class="value">{{ number_format($data->unpaid_premiums, 2) }}</td></tr>
  <tr class="even"><td class="label">Revenue stamp</td><td class="value">{{ number_format($data->revenue_stamp, 2) }}</td></tr>
  <tr class="odd"><td class="label">Outstanding loan (Kshs)</td><td class="value">{{ number_format($data->outstanding_loan, 2) }}</td></tr>
  <tr class="even"><td class="label">NFP Loan (Kshs)</td><td class="value">{{ number_format($data->nfp_loan, 2) }}</td></tr>
  <tr class="odd red-label"><td class="label">TOTAL OF Kshs.</td><td class="value">{{ number_format($data->total_deductions, 2) }}</td></tr>
  <tr class="total"><td class="label">Net Amount Payable (A-B)&nbsp; (Kshs)</td><td class="value">{{ number_format($data->net_amount_payable, 2) }}</td></tr>
</table>

<p class="dotted-line">Dated at ...................................  this......................................  day  of ........................20.......................</p>

<p class="dotted-line">Claimant's name:      ...............................................................................................................................</p>

<div class="page-break"></div>

<p class="dotted-line">Dated at ...................................  this......................................  day  of ........................20......................</p>

<p class="dotted-line">Claimant's name:      .............................................................................................................................</p>

<table class="sig-table">
  <tr>
    <td style="width:70px;">Signature:</td>
    <td><div class="sig-rect"></div></td>
  </tr>
</table>

<p class="dotted-line">Current address:.................................................................................................................................</p>
<p class="dotted-line">Telephone number: ............................................................................................................................</p>
<p class="dotted-line">Email address: ....................................................................................................................................</p>

<p class="bank-note">
  Please provide the following bank account details and attach a copy of your National I/D Card /or passport/or Birth
  certificate and a copy of Bank statement/ or a cancelled cheque. This is for verification and payment of the maturity
  proceeds:
</p>

<p class="dotted-line">Bank Name: .......................................................................................................</p>
<p class="dotted-line">Branch:..............................................................................................................</p>
<p class="dotted-line">Account number:.................................................................................................</p>
<p class="dotted-line">Address:.............................................................................................................</p>

<div class="important-box">
  <h3>Important:</h3>
  <ol>
    <li>Incase your policy is on loan and /or operating under NFP, the outstanding balances are as at the date of this letter hence the net claim amount will change on maturity.</li>
    <li>We request that you complete and return to us this Discharge Voucher duly executed, witnessed and affixed with a Kenya Revenue Authority stamp of Kshs.2.50</li>
    <li>An interim bonus (where applicable) shall be paid together with the maturity proceeds</li>
  </ol>
</div>

</body>
</html>