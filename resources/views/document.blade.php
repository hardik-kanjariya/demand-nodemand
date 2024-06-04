
<html>

<head>
  <title>NDC/NOC Management System</title>
  <style>
    body,
    input,
    td {
      font-family: verdana, arial;
      font-size: 10pt;
    }
  </style>
</head>

<body>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>

  <p>&nbsp;</p>
  <div id="Layer11" style="position:absolute; width:8px; height:25px; z-index:12; left: 146px; top: 770px">
    <b>
      <font size="3">
        <font face="Arial, Helvetica, sans-serif" size="2">
          <font size="3">:</font> 
          <!-- DATA CARD SERVICE provider : -->
        </font>
      </font>
    </b>
  </div>
  
  <p>&nbsp;</p>
  <div id="Layer1" style="position:absolute; z-index:1; left: 10px; top: 9px; width: 753px; height: 92px">
    <table width="100%" border="0">
      <tr>
        <td>
          <img src="{{asset('ongc_logo.png')}}" width="65" height="65">
        </td>
        <td>
          <div align="center">
            <b>
              <font size="4">OIL AND NATURAL GAS CORPORATION LIMITED
              </font>
              <br>
              <font size="4" face="Arial, Helvetica, sans-serif">INFOCOM SERVICES, MEHSANA ASSET</font>
              <br>
              <font size="3">MEHSANA (GUJARAT) - 384003</font>
            </b>
          </div>
        </td>
      </tr>
    </table>

  </div>

  <div id="Layer3" style="position:absolute; width:317px; height:27px; z-index:3; top: 137px; left: 203px">
    <div align="center">
      <b>
        <font size="3">
          <u>
            <font face="Arial, Helvetica, sans-serif">TO WHOMSOEVER IT MAY CONCERN</font>
          </u>
        </font>
      </b>
    </div>
  </div>
  <div id="Layer3" style="position:absolute; width:166px; height:19px; z-index:3; top: 104px; left: 598px">
    <b>
      <font size="3">
        <font face="Arial, Helvetica, sans-serif" size="2">
          <tr>
            <td colspan=7>
              <b>
                <u><?php echo "Dated : ".date("d-m-Y");;?></b>
              </u>
            </td>
          </tr>
        </font>
      </font>
    </b>
  </div>


  <div id="Layer3" style="position:absolute; width:289px; height:25px; z-index:3; top: 242px; left: 13px">
    <p>
      <b>
        <font size="3">
          <font face="Arial, Helvetica, sans-serif">Name</font>
        </font>
      </b>
    </p>
  </div>
  <div id="Layer3" style="position:absolute; width:8px; height:25px; z-index:3; top: 242px; left: 305px">
    <p>
      <b>
        <font size="3">
          <font face="Arial, Helvetica, sans-serif">:</font>
          <font face="Arial, Helvetica, sans-serif" size="2">
          </font>
        </font>
      </b>
    </p>
  </div>
  <div id="Layer3" style="position:absolute; width:450px; height:25px; z-index:3; top: 242px; left: 315px">
    <p>
      <b>
        <font size="3">
          <font face="Arial, Helvetica, sans-serif" size="2">
            <tr>
              <td colspan=7>
                <b>
                  <u>
                    <font size=3>
                      {{$data->name}}
                    </font>
                </b>
                </u>
              </td>
            </tr>
          </font>
        </font>
      </b>
    </p>
  </div>


  <div id="Layer3" style="position:absolute; width:289px; height:25px; z-index:3; top: 271px; left: 13px">
    <p>
      <b>
        <font size="3">
          <font face="Arial, Helvetica, sans-serif">Designation</font>
        </font>
      </b>
    </p>
  </div>
  <div id="Layer3" style="position:absolute; width:8px; height:25px; z-index:3; top: 271px; left: 305px">
    <p>
      <b>
        <font size="3">
          <font face="Arial, Helvetica, sans-serif"> :</font>
          <font face="Arial, Helvetica, sans-serif" size="2">
          </font>
        </font>
      </b>
    </p>
  </div>
  <div id="Layer3" style="position:absolute; width:450px; height:25px; z-index:3; top: 271px; left: 315px">
    <p>
      <b>
        <font size="3">
          <font face="Arial, Helvetica, sans-serif" size="2">
            <tr>
              <td colspan=7>
                <b>
                  <u>
                    <font size=3>
                        {{$data->designation}}            
                    </font>
                </b>
                </u>
              </td>
            </tr>
          </font>
        </font>
      </b>
    </p>
  </div>


  <div id="Layer3" style="position:absolute; width:289px; height:25px; z-index:3; top: 302px; left: 13px">
    <p>
      <b>
        <font size="3">
          <font face="Arial, Helvetica, sans-serif">cpf No </font>
        </font>
      </b>
    </p>
  </div>
  <div id="Layer3" style="position:absolute; width:8px; height:25px; z-index:3; top: 302px; left: 305px">
    <p>
      <b>
        <font size="3">
          <font face="Arial, Helvetica, sans-serif"> :</font>
          <font face="Arial, Helvetica, sans-serif" size="2">
          </font>
        </font>
      </b>
    </p>
  </div>
  <div id="Layer3" style="position:absolute; width:450px; height:25px; z-index:3; top: 302px; left: 315px">
    <p>
      <b>
        <font size="3">
          <font face="Arial, Helvetica, sans-serif" size="2">
            <tr>
              <td colspan=7>
                <b>
                  <u>
                    <font size=3>
                      {{$data->cpf}}
                    </font>
                </b>
                </u>
              </td>
            </tr>
          </font>
        </font>
      </b>
    </p>
  </div>


  <div id="Layer3" style="position:absolute; width:289px; height:25px; z-index:3; top: 334px; left: 13px">
    <p>
      <b>
        <font size="3">
          <font face="Arial, Helvetica, sans-serif">Section</font>
        </font>
      </b>
    </p>
  </div>
  <div id="Layer3" style="position:absolute; width:8px; height:25px; z-index:3; top: 334px; left: 305px">
    <p>
      <b>
        <font size="3">
          <font face="Arial, Helvetica, sans-serif">:</font>
          <font face="Arial, Helvetica, sans-serif" size="2">
          </font>
        </font>
      </b>
    </p>
  </div>
  <div id="Layer3" style="position:absolute; width:450px; height:25px; z-index:3; top: 334px; left: 315px">
    <p>
      <b>
        <font size="3">
          <font face="Arial, Helvetica, sans-serif" size="2">
            <tr>
              <td colspan=7>
                <b>
                  <u>
                    <font size=3>
                      {{$data->section}}
                    </font>
                </b>
                </u>
              </td>
            </tr>
          </font>
        </font>
      </b>
    </p>
  </div>


  <div id="Layer3" style="position:absolute; width:289px; height:25px; z-index:3; top: 367px; left: 13px">
    <p>
      <b>
        <font size="3">
          <font face="Arial, Helvetica, sans-serif" size="2">
            <font size="3">Reason for NOC</font>
          </font>
        </font>
      </b>
    </p>
  </div>
  <div id="Layer3" style="position:absolute; width:8px; height:25px; z-index:3; top: 367px; left: 305px">
    <p>
      <b>
        <font size="3">
          <font face="Arial, Helvetica, sans-serif">:</font>
          <font face="Arial, Helvetica, sans-serif" size="2">
          </font>
        </font>
      </b>
    </p>
  </div>
  <div id="Layer3" style="position:absolute; width:450px; height:25px; z-index:3; top: 367px; left: 315px">
    <p>
      <b>
        <font size="3">
          <font face="Arial, Helvetica, sans-serif" size="2">
            <tr>
              <td colspan=7>
                <b>
                  <u>
                    <font size=3>
                      {{$data->reason}}
                    </font>
                </b>
                </u>
              </td>
            </tr>
          </font>
        </font>
      </b>
    </p>
  </div>



  <div id="Layer3" style="position:absolute; width:289px; height:25px; z-index:3; top: 401px; left: 13px">
    <p>
      <b>
        <font size="3">
          <font face="Arial, Helvetica, sans-serif" size="2">
            <font size="3">Transfer to </font>
          </font>
        </font>
      </b>
    </p>
  </div>
  <div id="Layer3" style="position:absolute; width:8px; height:25px; z-index:12; left: 304px; top: 414px">
    <b>
      <font size="3">
        <font face="Arial, Helvetica, sans-serif" size="2">
          <font size="3">:</font>
        </font>
      </font>
    </b>
  </div>
  <div id="Layer3" style="position:absolute; width:450px; height:25px; z-index:3; top: 401px; left: 315px">
    <p>
      <b>
        <font size="3">
          <font face="Arial, Helvetica, sans-serif" size="2">
            <tr>
              <td colspan=7>
                <b>
                  <u>
                    <font size=3>
                      {{$data->transfer_to}}
                    </font>
                </b>
                </u>
              </td>
            </tr>
          </font>
        </font>
      </b>
    </p>
  </div>


  <div id="Layer3" style="position:absolute; width:289px; height:25px; z-index:3; top: 435px; left: 13px">
    <p>
      <b>
        <font size="3">
          <font face="Arial, Helvetica, sans-serif" size="2">
            <font size="3">Date of relieving / superannuation/ demise / dismissal / resignation / VRS</font>
          </font>
        </font>
      </b>
    </p>
  </div>
  <div id="Layer3" style="position:absolute; width:8px; height:25px; z-index:3; top: 435px; left: 305px">
    <p>
      <b>
        <font size="3">
          <font face="Arial, Helvetica, sans-serif">:</font>
          <font face="Arial, Helvetica, sans-serif" size="2">
          </font>
        </font>
      </b>
    </p>
  </div>
  <div id="Layer3" style="position:absolute; width:450px; height:25px; z-index:3; top: 435px; left: 315px">
    <p>
      <b>
        <font size="3">
          <font face="Arial, Helvetica, sans-serif" size="2">
            <font size="3">
            </font>
            <tr>
              <td colspan=7>
                <b>
                  <u>
                    <font size=3>
                      {{$data->relleving_date}}
                    </font>
                </b>
                </u>
              </td>
            </tr>
          </font>
        </font>
      </b>
    </p>
  </div>


  <div id="Layer3" style="position:absolute; width:753px; height:25px; z-index:3; top: 473px; left: 14px">
    <p>
      <font size="3">
        <font face="Arial, Helvetica, sans-serif" size="2">
          <font size="3">It is hereby certified that the following are outstanding against the individual : </font>
        </font>
      </font>
    </p>
  </div>



  <table width="800" border="0" align="left">
    <tr>
      <td colspan=8>
        <font size=4>With reference to IOM reference No. :
          <b>
            <u>
              {{$data->iom_ref_no}}
          </b>
          </u> IOM reference Date :
          <b>
            <u>
              {{$data->iom_ref_date}}
          </b>
          </u> for issue of NOC/NDC from Infocom Services, for</td>
    </tr>
  </table>
  <div id="Layer11" style="position:absolute; width:8px; height:25px; z-index:12; left: 146px; top: 837px">
    <b>
      <font size="3">
        <font face="Arial, Helvetica, sans-serif" size="2">
          <font size="3">:</font>
        </font>
      </font>
    </b>
  </div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>


  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>

  <table cellspacing="0" cellpadding="0" border="0" style="padding-top:80px;border:1px #000000 solid hieght=" 100% width="780"
    align="left">
    <tr>
      <td border='0' style='border:1px #000000 solid'>
        <b>Sr. No.</b>
      </td>
      <td border='0' style='border:1px #000000 solid'>
        <b>Details of facility</b>
      </td>
      <td border='0' style='border:1px #000000 solid'>
        <b>Telephone No.</b>
      </td>
      <td border='0' style='border:1px #000000 solid'>
        <b>Remarks</b>
      </td>
    </tr>
    <tr>
      <td border='0' style='border:1px #000000 solid'>1</td>
      <td border='0' style='border:1px #000000 solid'>EPABX (O)</td>
      <td border='0' style='border:1px #000000 solid'>
        {{$data->epabx_o}}
      </td>
      <td border='0' style='border:1px #000000 solid'>
     {{$status->tele_remark}}</td>
      <td></td>
    </tr>
    <tr>
      <td border='0' style='border:1px #000000 solid'>2</td>
      <td border='0' style='border:1px #000000 solid'>EPABX (R)</td>
      <td border='0' style='border:1px #000000 solid'>
        {{$data->epabx_r}}
      </td>
      <td border='0' style='border:1px #000000 solid'>
        <?php echo '--' ?>
      </td>
      <td></td>
    </tr>
    <tr>
      <td border='0' style='border:1px #000000 solid'>3</td>
      <td border='0' style='border:1px #000000 solid'>Direct/Landline (O)</td>
      <td border='0' style='border:1px #000000 solid'>
      {{$data->landline_o}}
      </td>
      <td border='0' style='border:1px #000000 solid'>
        <?php echo '--'?>
      </td>
      <td></td>
    </tr>
    <tr>
      <td border='0' style='border:1px #000000 solid'>4</td>
      <td border='0' style='border:1px #000000 solid'>Direct/Landline (R)</td>
      <td border='0' style='border:1px #000000 solid'>
        {{$data->landline_r}}
      </td>
      <td border='0' style='border:1px #000000 solid'>
        <?php echo '--' ?>
      </td>
      <td></td>
    </tr>
    <tr>
      <td border='0' style='border:1px #000000 solid'>5</td>
      <td border='0' style='border:1px #000000 solid'>Number</td>
      <td border='0' style='border:1px #000000 solid'>
        {{$data->mob_no}}
      </td>
      <td border='0' style='border:1px #000000 solid'>
        {{$status->mob_remark}}
      </td>
      <td></td>
    </tr>
  </table>
  <div id="Layer3" style="position:absolute; width:753px; height:25px; z-index:3; top: 814px; left: 13px">
    <b>
      <font size="3">
        <font face="Arial, Helvetica, sans-serif" size="2">
          <font size="3">
            <u>Laptop details</u>
          </font>
        </font>
      </font>
    </b>
  </div>
  <p>&nbsp;</p>

  <div id="Layer1" style="position:absolute; z-index:1; left: 10px; top: 980px; width: 753px; height: 24px">
    <table width="755" ">
    <tr> 
      <td width="61% "> 
        <div align="right "><font face="Arial, Helvetica, sans-serif " size="3 ">CGM 
          (E&amp;T) - I/C Infocom Services</font></div>
      </td>
    </tr>
    <tr> 
      <td width="61% "> 
        <div align="right "><font face="Arial, Helvetica, sans-serif " size="4 "> 
          <font size="3 ">Mehsana Asset </font></font></div>
      </td>
    </tr>
  </table>
</div>
<div id="Layer3 " style="position:absolute; width:753px; height:25px; z-index:3; top: 870px; left: 13px "> 
  <p><b><font size="3 "><font face="Arial, Helvetica, sans-serif ">Any other remarks:</font><font face="Arial, Helvetica,
      sans-serif " size="2 "> 
    <tr><td colspan=7><b><font size=3>{{ $data->remark }}</font></b></td></tr></font></font></b></p>
</div>
<div id="Layer11 " style="position:absolute; width:8px; height:25px; z-index:12; left: 431px; top: 770px
      "><b><font size="3 "><font face="Arial, Helvetica, sans-serif " size="2 "><font size="3 ">:</font></font></font></b></div>
<div id="Layer11 " style="position:absolute; width:8px; height:25px; z-index:12; left: 146px; top: 790px
      "><b><font size="3 "><font face="Arial, Helvetica, sans-serif " size="2 "><font size="3 ">:</font></font></font></b></div>
<p>&nbsp;</p>
<div id="Layer3 " style="position:absolute; width:130px; height:25px; z-index:3; top: 790px; left: 13px
      "><b><font size="3 "><font face="Arial, Helvetica, sans-serif " size="2 "><font size="3 ">Remarks</font></font></font></b></div>
<div id="Layer11 " style="position:absolute; width:8px; height:25px; z-index:12; left: 146px; top: 861px
      "><b><font size="3 "><font face="Arial, Helvetica, sans-serif " size="2 "><font size="3 ">:</font></font></font></b></div>
<div id="Layer12 " style="position:absolute; width:612px; height:25px; z-index:13; left: 156px; top: 849px "> 
  <p><b><font size="3 "><font face="Arial, Helvetica, sans-serif "><tr><td colspan=7><b><font size=3>{{ $status->it_remark }}</font></b></td></tr></font></font></b></p>
</div>
<div id="Layer5 " style="position:absolute; width:53px; height:25px; z-index:6; top: 837px; left: 290px
      "><b><font size="3 "><font face="Arial, Helvetica, sans-serif " size="2 "><font size="3 ">Model 
  </font></font></font></b></div>
<div id="Layer11 " style="position:absolute; width:8px; height:25px; z-index:12; left: 346px; top: 837px
      "><b><font size="3 "><font face="Arial, Helvetica, sans-serif " size="2 "><font size="3 ">:</font></font></font></b></div>
<p>&nbsp;</p>
<div id="Layer9 " style="position:absolute; width:138px; height:25px; z-index:10; left: 290px; top: 770px
      "><b><font size="3 "><font face="Arial, Helvetica, sans-serif " size="2 "><font size="3 ">Datacard 
  Number</font></font></font></b></div>
<div id="Layer5 " style="position:absolute; width:130px; height:25px; z-index:6; top: 837px; left: 13px
      "><b><font size="3 "><font face="Arial, Helvetica, sans-serif " size="2 "><font size="3 ">Make</font></font></font></b></div>
<div id="Layer10 " style="position:absolute; width:140px; height:25px; z-index:11; left: 444px; top: 757px "> 
  <p><b><font size="3 "><font face="Arial, Helvetica, sans-serif " ><tr><td colspan=7><b><font size=3>{{ $data->dc_no }}</font></b></td></tr></font></font></b></p>
</div>
<div id="Layer3 " style="position:absolute; width:753px; height:25px; z-index:3; top: 740px; left: 13px
      "><b><font size="3 "><font face="Arial, Helvetica, sans-serif " size="2 "><font size="3 "><u>Datacard details</u> </font></font></font></b></div>
<div id="Layer10 " style="position:absolute; width:140px; height:25px; z-index:11; left: 359px; top: 825px "> 
  <p><b><font size="3 "><font face="Arial, Helvetica, sans-serif "><tr><td colspan=7><b><font size=3>{{$data->l_model}}</font></b></td></tr></font></font></b></p>
</div>
<p>&nbsp;</p>
<div id="Layer12 " style="position:absolute; width:612px; height:25px; z-index:13; left: 156px; top: 778px "> 
  <p><b><font size="3 "><font face="Arial, Helvetica, sans-serif "><tr><td colspan=7><b><font size=2>{{ $status->dc_remark }}</font></b></td></tr></font></font></b></p>
</div>
<div id="Layer2 " style="position:absolute; width:753px; height:37px; z-index:4; left: 13px; top: 910px "><font face="Arial,
      Helvetica, sans-serif " size="3 "><b>Note 
  : Any recovery in respect of book value of laptop issued to individual, may 
  kindly be taken up by Finance as per applicability</b></font></div>
<div id="Layer4 " style="position:absolute; width:753px; height:37px; z-index:5; left: 13px; top: 1020px "> 
  <p><font face="Arial, Helvetica, sans-serif " size="2 "><b><font size="3 ">Manager 
    (HR), Establishment Section<br>
    </font></b></font><font size="3 "><b><font face="Arial, Helvetica, sans-serif ">Copy 
    to : Manager (F&amp;A)</font></b></font></p>
  </div>
<div id="Layer6 " style="position:absolute; width:120px; height:25px; z-index:7; left: 160px; top: 826px "> 
  <p><b><font size="3 "><font face="Arial, Helvetica, sans-serif " ><tr><td colspan=7><b><font size=3>{{$data->l_make}}</font></b></td></tr></font></font></b></p>

</div>
<div id="Layer5 " style="position:absolute; width:53px; height:25px; z-index:6; top: 832px; left: 519px
      "><b><font size="3 "><font face="Arial, Helvetica, sans-serif " size="2 "><font size="3 ">Sr. 
  No </font></font></font></b></div>
<div id="Layer3 " style="position:absolute; width:130px; height:25px; z-index:3; top: 861px; left: 13px
      "><b><font size="3 "><font face="Arial, Helvetica, sans-serif " size="2 "><font size="3 ">Remarks</font></font></font></b></div>
<div id="Layer7 " style="position:absolute; width:130px; height:25px; z-index:8; left: 13px; top: 770px
      "><b><font size="3 "><font face="Arial, Helvetica, sans-serif " size="2 "><font size="3 ">Service 
  Provider </font></font></font></b></div>
<div id="Layer8 " style="position:absolute; width:120px; height:25px; z-index:9; left: 157px; top: 757px "> 
  <p><b><font size="3 "><font face="Arial, Helvetica, sans-serif "><tr><td colspan=7><b><font size=3>{{$data->dc_provider}}</font></b></td></tr></font></font></b></p>
</div>
<div id="Layer10 " style="position:absolute; width:181px; height:25px; z-index:11; left: 587px; top: 820px "> 
  <p><b><font size="3 "><font face="Arial, Helvetica, sans-serif "><tr><td colspan=7><b><font size=3>{{$data->l_srno}}</font></b></td></tr></font></font></b></p>
</div>
<div id="Layer11 " style="position:absolute; width:8px; height:25px; z-index:12; left: 575px; top: 832px
      "><b><font size="3 "><font face="Arial, Helvetica, sans-serif " size="2 "><font size="3 ">:</font></font></font></b>
</div>

